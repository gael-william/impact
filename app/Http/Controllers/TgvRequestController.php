<?php

namespace App\Http\Controllers;

use App\Models\TgvRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class TgvRequestController extends Controller
{
    /**
     * Affiche le formulaire de demande TGV avec le type pre-rempli
     */
    public function showForm($serviceType)
    {
        $validTypes = ['Argent', 'Or', 'Diamant', 'Platinium'];

        if (!in_array($serviceType, $validTypes)) {
            return redirect('/')->with('error', 'Type de service invalide');
        }

        $serviceMetadata = [
            'Argent' => [
                'nom' => 'TGV Argent',
                'description' => 'Niveau structure essentiel',
                'prix' => '1 000 000',
                'couleur' => '#64748b',
                'icone' => '🥈',
            ],
            'Or' => [
                'nom' => 'TGV Or',
                'description' => 'Niveau approfondi',
                'prix' => '2 000 000',
                'couleur' => '#d4a017',
                'icone' => '🥇',
            ],
            'Diamant' => [
                'nom' => 'TGV Diamant',
                'description' => 'Niveau patrimonial premium',
                'prix' => '4 000 000',
                'couleur' => '#06b6d4',
                'icone' => '💎',
            ],
            'Platinium' => [
                'nom' => 'TGV Platinium',
                'description' => 'Excellence academique & prestige',
                'prix' => '6 000 000',
                'couleur' => '#0b1f4f',
                'icone' => '👑',
            ],
        ];

        return view('tgv-form', [
            'serviceType' => $serviceType,
            'serviceData' => $serviceMetadata[$serviceType],
        ]);
    }

    /**
     * Stocke la demande TGV dans la base de donnees
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'service_type' => ['required', Rule::in(['Argent', 'Or', 'Diamant', 'Platinium'])],
            'name' => 'required|string|max:100',
            'prenom' => 'required|string|max:100',
            'telephone' => 'required|regex:/^\d{7,15}$/|numeric',
            'email' => 'required|email|max:150',
            'commentaire' => 'nullable|string|max:1000',
        ], [
            'service_type.required' => 'Le type de service est requis.',
            'name.required' => 'Le nom est requis.',
            'prenom.required' => 'Le prenom est requis.',
            'telephone.required' => 'Le numero de telephone est requis.',
            'telephone.regex' => 'Le numero de telephone doit contenir 7 a 15 chiffres.',
            'email.required' => 'L\'email est requis.',
            'email.email' => 'L\'email doit etre valide.',
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
     * Affiche les details d'une demande specifique
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

        return redirect()->back()->with('success', 'Demande acceptee avec succes.');
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

        return redirect()->back()->with('success', 'Demande refusee.');
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

        return redirect()->back()->with('success', 'Demande archivee.');
    }

    /**
     * Supprime une demande
     */
    public function destroy(TgvRequest $tgvRequest)
    {
        $tgvRequest->delete();
        return redirect()->back()->with('success', 'Demande supprimee.');
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
