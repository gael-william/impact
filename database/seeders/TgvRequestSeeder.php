<?php

namespace Database\Seeders;

use App\Models\TgvRequest;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TgvRequestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Créer quelques demandes TGV de test
        $sampleRequests = [
            [
                'service_type' => 'Corpus',
                'name' => 'Traore',
                'prenom' => 'Kofi',
                'telephone' => '2270253456',
                'email' => 'kofi.traore@example.com',
                'commentaire' => 'Très intéressé par la collecte et l\'archivage de nos archives familiales.',
                'status' => 'pending',
            ],
            [
                'service_type' => 'Avancé',
                'name' => 'Kone',
                'prenom' => 'Marie',
                'telephone' => '2270189234',
                'email' => 'marie.kone@example.com',
                'commentaire' => 'Nous voulons publier l\'histoire de notre Grand-mère avec ISBN international.',
                'status' => 'pending',
            ],
            [
                'service_type' => 'VIP',
                'name' => 'Diallo',
                'prenom' => 'Ibrahim',
                'telephone' => '22671298765',
                'email' => 'ibrahim.diallo@business.com',
                'commentaire' => 'Projet de grande envergure. Nous avons besoin de la prise en charge complète.',
                'status' => 'pending',
            ],
            [
                'service_type' => 'Essentiel',
                'name' => 'Kouame',
                'prenom' => 'Youssouf',
                'telephone' => '2270456123',
                'email' => 'youssouf.kouame@email.com',
                'commentaire' => 'Intéressé par le manuscrit professionnel et les leçons de vie.',
                'status' => 'accepted',
                'reviewed_at' => now()->subDays(3),
                'reviewed_by' => 'Admin System',
                'admin_notes' => 'Demande approuvée. Contact établi.',
            ],
            [
                'service_type' => 'Or',
                'name' => 'Ndiaye',
                'prenom' => 'Fatou',
                'telephone' => '2270987654',
                'email' => 'fatou.ndiaye@outlook.com',
                'commentaire' => 'Catégorie Or semble idéale pour notre projet de famille.',
                'status' => 'rejected',
                'reviewed_at' => now()->subDays(1),
                'reviewed_by' => 'Admin System',
                'admin_notes' => 'Capacité limitée actuellement. Rapport proposé pour réévaluation en mars.',
            ],
        ];

        foreach ($sampleRequests as $request) {
            TgvRequest::create($request);
        }
    }
}
