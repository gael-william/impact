<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tgv_requests', function (Blueprint $table) {
            $table->id();
            $table->string('service_type')->comment('Type de TGV sélectionné: Corpus, Essentiel, Avancé, Consacré, VIP');
            $table->string('name')->comment('Nom complet du requérant');
            $table->string('prenom')->comment('Prénom du requérant');
            $table->string('telephone')->comment('Numéro de téléphone');
            $table->string('email')->unique();
            $table->text('commentaire')->nullable()->comment('Message ou commentaires additionnels');
            $table->enum('status', ['pending', 'accepted', 'rejected', 'archived'])->default('pending')->comment('Statut de la demande');
            $table->text('admin_notes')->nullable()->comment('Notes de l\'administrateur');
            $table->timestamp('reviewed_at')->nullable()->comment('Date de révision');
            $table->string('reviewed_by')->nullable()->comment('Utilisateur qui a révisé');
            $table->timestamps();
            
            // Indexes pour les recherches rapides
            $table->index('status');
            $table->index('service_type');
            $table->index('created_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tgv_requests');
    }
};
