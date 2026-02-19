<?php

namespace Database\Seeders;

use App\Models\TgvRequest;
use Illuminate\Database\Seeder;

class TgvRequestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sampleRequests = [
            [
                'service_type' => 'Argent',
                'name' => 'Traore',
                'prenom' => 'Kofi',
                'telephone' => '2270253456',
                'email' => 'kofi.traore@example.com',
                'commentaire' => 'Je veux transmettre l\'essentiel de mon parcours de vie.',
                'status' => 'pending',
            ],
            [
                'service_type' => 'Or',
                'name' => 'Kone',
                'prenom' => 'Marie',
                'telephone' => '2270189234',
                'email' => 'marie.kone@example.com',
                'commentaire' => 'Nous voulons une version approfondie avec plus de details familiaux.',
                'status' => 'pending',
            ],
            [
                'service_type' => 'Diamant',
                'name' => 'Diallo',
                'prenom' => 'Ibrahim',
                'telephone' => '22671298765',
                'email' => 'ibrahim.diallo@business.com',
                'commentaire' => 'Projet patrimonial ambitieux pour les prochaines generations.',
                'status' => 'pending',
            ],
            [
                'service_type' => 'Platinium',
                'name' => 'Kouame',
                'prenom' => 'Youssouf',
                'telephone' => '2270456123',
                'email' => 'youssouf.kouame@email.com',
                'commentaire' => 'Je recherche l\'excellence academique pour un heritage de prestige.',
                'status' => 'accepted',
                'reviewed_at' => now()->subDays(3),
                'reviewed_by' => 'Admin System',
                'admin_notes' => 'Demande approuvee. Contact etabli.',
            ],
            [
                'service_type' => 'Or',
                'name' => 'Ndiaye',
                'prenom' => 'Fatou',
                'telephone' => '2270987654',
                'email' => 'fatou.ndiaye@outlook.com',
                'commentaire' => 'Le niveau Or semble adapte a notre projet de famille.',
                'status' => 'rejected',
                'reviewed_at' => now()->subDays(1),
                'reviewed_by' => 'Admin System',
                'admin_notes' => 'Capacite limitee actuellement. Reevaluation proposee en mars.',
            ],
        ];

        foreach ($sampleRequests as $request) {
            TgvRequest::create($request);
        }
    }
}
