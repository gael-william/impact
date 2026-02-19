@extends('layouts.app')
@section('content')

<div style="background: linear-gradient(135deg, #f0f9ff, #f5f3ff); min-height: 100vh; display: flex; align-items: center; justify-content: center; padding: 2rem;">
  <div style="max-width: 48rem; width: 100%; background: white; border-radius: 1.5rem; padding: 3rem; box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1); text-align: center;">
    <div style="font-size: 4rem; margin-bottom: 1.5rem;">✅</div>
    <h1 style="font-size: 2.25rem; font-weight: bold; color: #1e293b; margin-bottom: 0.5rem;">Demande soumise avec succes !</h1>
    <p style="color: #6b7280; font-size: 1.125rem; margin-bottom: 2rem;">Merci d'avoir choisi le <strong style="color:#2563eb;">Trajet Global de Vie</strong>.</p>

    <div style="background: #f8fafc; border: 2px solid #e2e8f0; border-radius: 1rem; padding: 2rem; margin-bottom: 2rem; text-align: left;">
      <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1.5rem;">
        <div>
          <p style="color: #64748b; font-size: 0.875rem; font-weight: 600; margin: 0 0 0.5rem 0; text-transform: uppercase;">Numero de suivi</p>
          <p style="color: #1e293b; font-size: 1.25rem; font-weight: bold; margin: 0; font-family: monospace;">#{{ $request->id }}</p>
        </div>
        <div>
          <p style="color: #64748b; font-size: 0.875rem; font-weight: 600; margin: 0 0 0.5rem 0; text-transform: uppercase;">Service choisi</p>
          <p style="color: #2563eb; font-size: 1.25rem; font-weight: bold; margin: 0;">{{ $serviceType }}</p>
        </div>
      </div>
    </div>

    <div style="background: #eff6ff; border-left: 4px solid #2563eb; border-radius: 0.75rem; padding: 1.5rem; margin-bottom: 2rem; text-align: left;">
      <h3 style="color: #0369a1; font-weight: bold; margin-top: 0; margin-bottom: 1rem;">Prochaines etapes</h3>
      <p style="margin:0 0 .5rem 0;color:#0c4a6e;">1. Confirmation par email avec votre numero de suivi.</p>
      <p style="margin:0 0 .5rem 0;color:#0c4a6e;">2. Revision de votre demande sous 24 a 48 heures.</p>
      <p style="margin:0 0 .5rem 0;color:#0c4a6e;">3. Contact personnel par un expert TGV.</p>
      <p style="margin:0;color:#0c4a6e;">4. Demarrage du processus: Collecte & Memoire -> Redaction Structuree -> Edition Professionnelle -> Transmission & Consecration.</p>
    </div>

    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
      <a href="/" style="background: #f3f4f6; color: #334155; padding: 0.75rem 1.5rem; border: 1px solid #d1d5db; border-radius: 0.5rem; text-decoration: none; text-align: center; font-weight: bold;">Retour a l'accueil</a>
      <a href="/admin" style="background: #2563eb; color: white; padding: 0.75rem 1.5rem; border-radius: 0.5rem; text-decoration: none; text-align: center; font-weight: bold;">Dashboard Admin</a>
    </div>
  </div>
</div>

@endsection
