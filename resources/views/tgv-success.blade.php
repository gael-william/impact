@extends('layouts.app')
@section('content')

<div style="background: linear-gradient(135deg, #f0f9ff, #f5f3ff); min-height: 100vh; display: flex; align-items: center; justify-content: center; padding: 2rem;">
  <div style="max-width: 48rem; width: 100%; background: white; border-radius: 1.5rem; padding: 3rem; box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1); text-align: center;">
    
    <!-- Success Icon -->
    <div style="font-size: 4rem; margin-bottom: 1.5rem; animation: bounce 1s ease-in-out;">
      ✅
    </div>

    <!-- Title -->
    <h1 style="font-size: 2.25rem; font-weight: bold; color: #1e293b; margin-bottom: 0.5rem;">
      Demande Soumise avec Succès !
    </h1>

    <!-- Subtitle -->
    <p style="color: #6b7280; font-size: 1.125rem; margin-bottom: 2rem;">
      Merci d'avoir choisi le <span style="font-weight: bold; color: #2563eb;">Trajet Global de Vie</span> pour préserver votre patrimoine précieux.
    </p>

    <!-- Details Card -->
    <div style="background: #f8fafc; border: 2px solid #e2e8f0; border-radius: 1rem; padding: 2rem; margin-bottom: 2rem; text-align: left;">
      <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1.5rem;">
        <div>
          <p style="color: #64748b; font-size: 0.875rem; font-weight: 600; margin: 0 0 0.5rem 0; text-transform: uppercase;">Numéro de Suivi</p>
          <p style="color: #1e293b; font-size: 1.25rem; font-weight: bold; margin: 0; font-family: monospace;">#{{ $request->id }}</p>
        </div>
        <div>
          <p style="color: #64748b; font-size: 0.875rem; font-weight: 600; margin: 0 0 0.5rem 0; text-transform: uppercase;">Service Choisi</p>
          <p style="color: #2563eb; font-size: 1.25rem; font-weight: bold; margin: 0;">{{ $serviceType }}</p>
        </div>
      </div>

      <div style="border-top: 1px solid #cbd5e1; margin-top: 1.5rem; padding-top: 1.5rem;">
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1.5rem;">
          <div>
            <p style="color: #64748b; font-size: 0.875rem; font-weight: 600; margin: 0 0 0.5rem 0; text-transform: uppercase;">Votre Nom</p>
            <p style="color: #1e293b; font-size: 1rem; font-weight: 500; margin: 0;">{{ $request->prenom }} {{ $request->name }}</p>
          </div>
          <div>
            <p style="color: #64748b; font-size: 0.875rem; font-weight: 600; margin: 0 0 0.5rem 0; text-transform: uppercase;">Email</p>
            <p style="color: #1e293b; font-size: 1rem; font-weight: 500; margin: 0; word-break: break-all;">{{ $request->email }}</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Next Steps -->
    <div style="background: #eff6ff; border-left: 4px solid #2563eb; border-radius: 0.75rem; padding: 1.5rem; margin-bottom: 2rem; text-align: left;">
      <h3 style="color: #0369a1; font-weight: bold; margin-top: 0; margin-bottom: 1rem;">📋 Prochaines Étapes</h3>
      
      <div style="display: grid; gap: 1rem;">
        <div style="display: flex; align-items: flex-start; gap: 1rem;">
          <span style="font-size: 1.25rem; flex-shrink: 0;">1️⃣</span>
          <div>
            <p style="color: #0369a1; font-weight: bold; margin: 0 0 0.25rem 0;">Confirmation par Email</p>
            <p style="color: #0c4a6e; font-size: 0.875rem; margin: 0;">Vous recevrez un email de confirmation dans les prochaines minutes avec votre numéro de suivi.</p>
          </div>
        </div>

        <div style="display: flex; align-items: flex-start; gap: 1rem;">
          <span style="font-size: 1.25rem; flex-shrink: 0;">2️⃣</span>
          <div>
            <p style="color: #0369a1; font-weight: bold; margin: 0 0 0.25rem 0;">Révision de Notre Équipe</p>
            <p style="color: #0c4a6e; font-size: 0.875rem; margin: 0;">Notre équipe examinera votre demande sous 24 à 48 heures.</p>
          </div>
        </div>

        <div style="display: flex; align-items: flex-start; gap: 1rem;">
          <span style="font-size: 1.25rem; flex-shrink: 0;">3️⃣</span>
          <div>
            <p style="color: #0369a1; font-weight: bold; margin: 0 0 0.25rem 0;">Contact Personnel</p>
            <p style="color: #0c4a6e; font-size: 0.875rem; margin: 0;">Un expert TGV vous appellera pour discuter des détails et démarrer votre processus.</p>
          </div>
        </div>

        <div style="display: flex; align-items: flex-start; gap: 1rem;">
          <span style="font-size: 1.25rem; flex-shrink: 0;">4️⃣</span>
          <div>
            <p style="color: #0369a1; font-weight: bold; margin: 0 0 0.25rem 0;">Démarrage du Processus TGV</p>
            <p style="color: #0c4a6e; font-size: 0.875rem; margin: 0;">Nous commençons immédiatement les 5 étapes: Collecte → Rédaction → Édition → Sécurisation → Dédicace</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Contact Info -->
    <div style="background: #faf5ff; border: 1px solid #e9d5ff; border-radius: 0.75rem; padding: 1.5rem; margin-bottom: 2rem;">
      <p style="color: #6b21a8; font-size: 0.875rem; font-weight: 600; margin: 0 0 1rem 0;">BESOIN D'AIDE ?</p>
      
      <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
        <a href="tel:+22670256363" style="background: #a855f7; color: white; padding: 0.75rem; border-radius: 0.5rem; text-decoration: none; text-align: center; font-weight: bold; transition: background 0.3s;" onmouseover="this.style.background='#9333ea';" onmouseout="this.style.background='#a855f7';">
          📞 Appeler
        </a>
        <a href="mailto:contact@impact-plus.ci" style="background: #2563eb; color: white; padding: 0.75rem; border-radius: 0.5rem; text-decoration: none; text-align: center; font-weight: bold; transition: background 0.3s;" onmouseover="this.style.background='#1e40af';" onmouseout="this.style.background='#2563eb';">
          ✉️ Envoyer un email
        </a>
      </div>
    </div>

    <!-- Action Buttons -->
    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
      <a href="/" style="background: #f3f4f6; color: #334155; padding: 0.75rem 1.5rem; border: 1px solid #d1d5db; border-radius: 0.5rem; text-decoration: none; text-align: center; font-weight: bold; transition: all 0.3s;" onmouseover="this.style.background='#e5e7eb';" onmouseout="this.style.background='#f3f4f6';">
        ← Retour à l'accueil
      </a>
      <a href="/admin" style="background: #2563eb; color: white; padding: 0.75rem 1.5rem; border-radius: 0.5rem; text-decoration: none; text-align: center; font-weight: bold; transition: background 0.3s;" onmouseover="this.style.background='#1e40af';" onmouseout="this.style.background='#2563eb';">
        📊 Dashboard Admin
      </a>
    </div>

    <!-- Footer Message -->
    <div style="margin-top: 2rem; padding-top: 2rem; border-top: 1px solid #e5e7eb;">
      <p style="color: #6b7280; font-size: 0.875rem; margin: 0;">
        "Toute vie mérite d'être transmise" - Institut IMPACT Plus<br>
        <span style="color: #9ca3af; font-size: 0.75rem;">Nous honorerons votre patrimoine avec le plus grand respect.</span>
      </p>
    </div>
  </div>
</div>

<style>
  @keyframes bounce {
    0%, 100% {
      transform: translateY(0);
    }
    50% {
      transform: translateY(-10px);
    }
  }
</style>

@endsection
