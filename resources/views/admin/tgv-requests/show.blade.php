@extends('admin.layouts.admin')

@section('content')

@php
  $serviceStyles = [
    'Argent' => ['bg' => 'linear-gradient(135deg,#64748b,#334155)', 'badge' => 'background:#e2e8f0;color:#334155;'],
    'Or' => ['bg' => 'linear-gradient(135deg,#d4a017,#92400e)', 'badge' => 'background:#fef3c7;color:#92400e;'],
    'Diamant' => ['bg' => 'linear-gradient(135deg,#06b6d4,#0e7490)', 'badge' => 'background:#cffafe;color:#0e7490;'],
    'Platinium' => ['bg' => 'linear-gradient(135deg,#0b1f4f,#1e3a8a)', 'badge' => 'background:#dbeafe;color:#1e3a8a;'],
  ];
  $currentStyle = $serviceStyles[$request->service_type] ?? ['bg' => 'linear-gradient(135deg,#2563eb,#1e40af)', 'badge' => 'background:#eff6ff;color:#1d4ed8;'];
@endphp

<div class="bg-white" style="min-height: 100vh; padding: 2rem 1rem;">
  <div style="max-width: 80rem; margin: 0 auto;">
    <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 2rem;">
      <h1 style="font-size: 1.875rem; font-weight: bold; color: #1e293b; margin: 0;">Demande TGV #{{ $request->id }}</h1>
      <a href="{{ route('admin.tgv.requests') }}" style="background: #2563eb; color: white; padding: 0.75rem 1.5rem; border-radius: 0.5rem; text-decoration: none; font-weight: bold;">← Liste des demandes</a>
    </div>

    @if (session('success'))
      <div style="background: #f0fdf4; border: 1px solid #86efac; border-radius: 0.5rem; padding: 1.5rem; margin-bottom: 2rem; color: #166534;">
        <p style="margin: 0;"><strong>{{ session('success') }}</strong></p>
      </div>
    @endif

    <div style="display: grid; grid-template-columns: 2fr 1fr; gap: 2rem;">
      <div>
        <div style="background: white; border-radius: 0.75rem; border: 1px solid #e2e8f0; padding: 2rem; margin-bottom: 2rem;">
          <h2 style="font-size: 1.25rem; font-weight: bold; color: #1e293b; margin-top: 0;">Informations Personnelles</h2>
          <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1.5rem; margin-top: 1.5rem;">
            <div><label style="display:block;font-weight:600;color:#475569;font-size:.875rem;margin-bottom:.5rem;">Prénom</label><p style="margin:0;">{{ $request->prenom }}</p></div>
            <div><label style="display:block;font-weight:600;color:#475569;font-size:.875rem;margin-bottom:.5rem;">Nom</label><p style="margin:0;">{{ $request->name }}</p></div>
          </div>
          <div style="margin-top: 1.5rem;"><label style="display:block;font-weight:600;color:#475569;font-size:.875rem;margin-bottom:.5rem;">Email</label><p style="margin:0;"><a href="mailto:{{ $request->email }}" style="color:#2563eb;text-decoration:none;">{{ $request->email }}</a></p></div>
          <div style="margin-top: 1.5rem;"><label style="display:block;font-weight:600;color:#475569;font-size:.875rem;margin-bottom:.5rem;">Téléphone</label><p style="margin:0;"><a href="tel:{{ $request->telephone }}" style="color:#2563eb;text-decoration:none;">+{{ substr($request->telephone, 0, 2) }} {{ substr($request->telephone, 2, 2) }} {{ substr($request->telephone, 4, 2) }} {{ substr($request->telephone, 6) }}</a></p></div>
          @if ($request->commentaire)
            <div style="margin-top: 1.5rem;"><label style="display:block;font-weight:600;color:#475569;font-size:.875rem;margin-bottom:.5rem;">Message</label><div style="background:#f8fafc;border-left:4px solid #2563eb;padding:1rem;border-radius:.5rem;">{{ $request->commentaire }}</div></div>
          @endif
        </div>

        <div style="background: {{ $currentStyle['bg'] }}; color: white; border-radius: 0.75rem; padding: 2rem; margin-bottom: 2rem;">
          <h2 style="font-size: 1.25rem; font-weight: bold; margin-top: 0;">Service sélectionné</h2>
          <div style="margin-top: 1.5rem;">
            <p style="font-size: 0.875rem; margin: 0 0 0.5rem 0; opacity: .9;">Type de service</p>
            <h3 style="font-size: 1.75rem; font-weight: bold; margin: 0;">{{ $request->service_type }}</h3>
          </div>
          <div style="margin-top: 1.5rem; padding-top: 1.5rem; border-top: 1px solid rgba(255,255,255,.2);">
            <p style="font-size: 0.875rem; margin: 0;">Date de soumission: <strong>{{ $request->created_at->format('d/m/Y à H:i') }}</strong></p>
          </div>
        </div>
      </div>

      <div>
        @if ($request->status === 'pending')
          <form action="{{ route('admin.tgv.accept', $request->id) }}" method="POST" style="margin-bottom: 1.5rem;">
            @csrf
            <div style="background: #dcfce7; border: 1px solid #86efac; border-radius: 0.75rem; padding: 1.5rem;">
              <h3 style="font-size: 1rem; font-weight: bold; color: #166534; margin-top: 0;">Accepter cette demande</h3>
              <textarea name="admin_notes" rows="4" style="width:100%;padding:.75rem;border:1px solid #86efac;border-radius:.5rem;font-size:.875rem;resize:none;" placeholder="Notes optionnelles..."></textarea>
              <button type="submit" style="width:100%;margin-top:1rem;background:#16a34a;color:white;font-weight:bold;padding:.75rem;border:none;border-radius:.5rem;cursor:pointer;">Accepter la demande</button>
            </div>
          </form>

          <form action="{{ route('admin.tgv.reject', $request->id) }}" method="POST" style="margin-bottom: 1.5rem;">
            @csrf
            <div style="background: #fee2e2; border: 1px solid #fca5a5; border-radius: 0.75rem; padding: 1.5rem;">
              <h3 style="font-size: 1rem; font-weight: bold; color: #991b1b; margin-top: 0;">Refuser cette demande</h3>
              <textarea name="admin_notes" rows="4" required style="width:100%;padding:.75rem;border:1px solid #fca5a5;border-radius:.5rem;font-size:.875rem;resize:none;" placeholder="Raison du refus..."></textarea>
              <button type="submit" style="width:100%;margin-top:1rem;background:#dc2626;color:white;font-weight:bold;padding:.75rem;border:none;border-radius:.5rem;cursor:pointer;">Refuser la demande</button>
            </div>
          </form>
        @else
          <div style="background: #f1f5f9; border: 1px solid #cbd5e1; border-radius: 0.75rem; padding: 1.5rem; margin-bottom: 1.5rem;">
            <h3 style="font-size: 1rem; font-weight: bold; color: #1e293b; margin-top: 0;">Status actuel</h3>
            <span style="display:inline-block;padding:.5rem 1rem;border-radius:.5rem;font-weight:bold;{{ $currentStyle['badge'] }}">{{ ucfirst($request->status) }}</span>
            <p style="color:#475569;font-size:.875rem;margin-top:1rem;margin-bottom:0;">Cette demande a déjà été traitée.</p>
          </div>

          @if ($request->status !== 'archived')
            <form action="{{ route('admin.tgv.archive', $request->id) }}" method="POST">@csrf<button type="submit" style="width:100%;background:#64748b;color:white;font-weight:bold;padding:.75rem;border:none;border-radius:.5rem;cursor:pointer;">Archiver cette demande</button></form>
          @endif
        @endif
      </div>
    </div>
  </div>
</div>

@endsection
