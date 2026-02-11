<?php

namespace App\Http\Controllers;

use App\Models\TgvRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class TgvRequestController extends Controller
{
    /**
     * Affiche le formulaire de demande TGV avec le type pré-rempli
     */
    public function showForm($serviceType)
    {
        // Valider le type de service
        $validTypes = ['Corpus', 'Essentiel', 'Avancé', 'Consacré', 'VIP', 'Diamant', 'Or', 'Argent'];
        
        if (!in_array($serviceType, $validTypes)) {
            return redirect('/')->with('error', 'Type de service invalide');
        }

        $serviceMetadata = [
            'Corpus' => [
                'nom' => 'Corpus TGV',
                'description' => 'Collecte et archives',
                'prix' => '3 000 000',
                'couleur' => '#2563eb',
                'icone' => '📋',
            ],
            'Essentiel' => [
                'nom' => 'TGV Essentiel',
                'description' => 'Manuscrit & leçons',
                'prix' => '7 000 000',
                'couleur' => '#16a34a',
                'icone' => '✍️',
            ],
            'Avancé' => [
                'nom' => 'TGV Avancé',
                'description' => 'Édition professionnelle',
                'prix' => '17 000 000',
                'couleur' => '#d97706',
                'icone' => '📚',
                'tag' => 'POPULAIRE',
            ],
            'Consacré' => [
                'nom' => 'TGV Consacré',
                'description' => 'Dédicace officielle',
                'prix' => '25 000 000',
                'couleur' => '#a855f7',
                'icone' => '🎉',
            ],
            'VIP' => [
                'nom' => 'TGV VIP',
                'description' => 'Prise en charge totale',
                'prix' => '50 000 000',
                'couleur' => '#facc15',
                'icone' => '👑',
            ],
            'Diamant' => [
                'nom' => 'Catégorie DIAMANT',
                'description' => 'L\'accompagnement Premium pour votre patrimoine',
                'prix' => 'Sur devis',
                'couleur' => '#0891b2',
                'icone' => '💎',
            ],
            'Or' => [
                'nom' => 'Catégorie OR',
                'description' => 'L\'accompagnement équilibré et complet',
                'prix' => 'Sur devis',
                'couleur' => '#d97706',
                'icone' => '✨',
            ],
            'Argent' => [
                'nom' => 'Catégorie ARGENT',
                'description' => 'L\'accompagnement essentiel et accessible',
                'prix' => 'Sur devis',
                'couleur' => '#475569',
                'icone' => '🌟',
            ],
        ];

        return view('tgv-form', [
            'serviceType' => $serviceType,
            'serviceData' => $serviceMetadata[$serviceType],
        ]);
    }

    /**
     * Stocke la demande TGV dans la base de données
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'service_type' => ['required', Rule::in(['Corpus', 'Essentiel', 'Avancé', 'Consacré', 'VIP', 'Diamant', 'Or', 'Argent'])],
            'name' => 'required|string|max:100',
            'prenom' => 'required|string|max:100',
            'telephone' => 'required|regex:/^\d{7,15}$/|numeric',
            'email' => 'required|email|max:150',
            'commentaire' => 'nullable|string|max:1000',
        ], [
            'service_type.required' => 'Le type de service est requis.',
            'name.required' => 'Le nom est requis.',
            'prenom.required' => 'Le prénom est requis.',
            'telephone.required' => 'Le numéro de téléphone est requis.',
            'telephone.regex' => 'Le numéro de téléphone doit contenir 7 à 15 chiffres.',
            'email.required' => 'L\'email est requis.',
            'email.email' => 'L\'email doit être valide.',
        ]);

        try {
            $tgvRequest = TgvRequest::create($validated);

            return view('tgv-success', [
                'request' => $tgvRequest,
                'serviceType' => $validated['service_type'],
            ]);
        } catch (\Exception $e) {
            return back()->withInput()->with('error', 'Une erreur s\'est produite lors de la soumission.');
        }
    }

    /**
     * Affiche toutes les demandes TGV pour le dashboard admin
     */
    public function index()
    {
        $requests = TgvRequest::recent()->paginate(15);
        $statistics = [
            'total' => TgvRequest::count(),
            'pending' => TgvRequest::pending()->count(),
            'accepted' => TgvRequest::accepted()->count(),
            'rejected' => TgvRequest::rejected()->count(),
        ];

        return view('admin.tgv-requests.index', compact('requests', 'statistics'));
    }

    /**
     * Affiche les détails d'une demande spécifique
     */
    public function show(TgvRequest $request)
    {
        return view('admin.tgv-requests.show', compact('request'));
    }

    /**
     * Accepte une demande TGV
     */
    public function accept(Request $request, TgvRequest $tgvRequest)
    {
        $validated = $request->validate([
            'admin_notes' => 'nullable|string|max:500',
        ]);

        $tgvRequest->update([
            'status' => 'accepted',
            'admin_notes' => $validated['admin_notes'] ?? null,
            'reviewed_at' => now(),
            'reviewed_by' => auth()->user()->name ?? 'Admin',
        ]);

        return redirect()->back()->with('success', 'Demande acceptée avec succès.');
    }

    /**
     * Refuse une demande TGV
     */
    public function reject(Request $request, TgvRequest $tgvRequest)
    {
        $validated = $request->validate([
            'admin_notes' => 'required|string|max:500',
        ]);

        $tgvRequest->update([
            'status' => 'rejected',
            'admin_notes' => $validated['admin_notes'],
            'reviewed_at' => now(),
            'reviewed_by' => auth()->user()->name ?? 'Admin',
        ]);

        return redirect()->back()->with('success', 'Demande refusée.');
    }

    /**
     * Archive une demande
     */
    public function archive(TgvRequest $tgvRequest)
    {
        $tgvRequest->update([
            'status' => 'archived',
            'reviewed_at' => now(),
            'reviewed_by' => auth()->user()->name ?? 'Admin',
        ]);

        return redirect()->back()->with('success', 'Demande archivée.');
    }

    /**
     * Supprime une demande
     */
    public function destroy(TgvRequest $tgvRequest)
    {
        $tgvRequest->delete();
        return redirect()->back()->with('success', 'Demande supprimée.');
    }

    /**
     * Retourne les statistiques en JSON pour les dashboards
     */
    public function getStatistics()
    {
        return response()->json([
            'total' => TgvRequest::count(),
            'pending' => TgvRequest::pending()->count(),
            'accepted' => TgvRequest::accepted()->count(),
            'rejected' => TgvRequest::rejected()->count(),
            'by_service_type' => TgvRequest::select('service_type')
                ->selectRaw('count(*) as count')
                ->groupBy('service_type')
                ->get()
                ->pluck('count', 'service_type'),
        ]);
    }
}

