@extends('layouts.app')

@section('content')

<div class="bg-white" style="min-height: 100vh; padding: 2rem 1rem;">
  <div style="max-width: 80rem; margin: 0 auto;">
    
    <!-- Header -->
    <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 2rem;">
      <h1 style="font-size: 1.875rem; font-weight: bold; color: #1e293b; margin: 0;">
        Demande TGV #{{ $request->id }}
      </h1>
      <a href="{{ route('admin.tgv.requests') }}" style="background: #2563eb; color: white; padding: 0.75rem 1.5rem; border-radius: 0.5rem; text-decoration: none; font-weight: bold;">
        ← Liste des demandes
      </a>
    </div>

    @if (session('success'))
      <div style="background: #f0fdf4; border: 1px solid #86efac; border-radius: 0.5rem; padding: 1.5rem; margin-bottom: 2rem; color: #166534;">
        <p style="margin: 0;"><strong>✓ {{ session('success') }}</strong></p>
      </div>
    @endif

    <div style="display: grid; grid-template-columns: 2fr 1fr; gap: 2rem;">
      
      <!-- Informations du client -->
      <div>
        <div style="background: white; border-radius: 0.75rem; border: 1px solid #e2e8f0; padding: 2rem; margin-bottom: 2rem;">
          <h2 style="font-size: 1.25rem; font-weight: bold; color: #1e293b; margin-top: 0;">📋 Informations Personnelles</h2>
          
          <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1.5rem; margin-top: 1.5rem;">
            <div>
              <label style="display: block; font-weight: 600; color: #475569; font-size: 0.875rem; margin-bottom: 0.5rem;">Prénom</label>
              <p style="color: #1e293b; font-size: 1rem; font-weight: 500; margin: 0;">{{ $request->prenom }}</p>
            </div>
            <div>
              <label style="display: block; font-weight: 600; color: #475569; font-size: 0.875rem; margin-bottom: 0.5rem;">Nom</label>
              <p style="color: #1e293b; font-size: 1rem; font-weight: 500; margin: 0;">{{ $request->name }}</p>
            </div>
          </div>

          <div style="margin-top: 1.5rem;">
            <label style="display: block; font-weight: 600; color: #475569; font-size: 0.875rem; margin-bottom: 0.5rem;">Email</label>
            <p style="color: #1e293b; font-size: 1rem; font-weight: 500; margin: 0;">
              <a href="mailto:{{ $request->email }}" style="color: #2563eb; text-decoration: none;">{{ $request->email }}</a>
            </p>
          </div>

          <div style="margin-top: 1.5rem;">
            <label style="display: block; font-weight: 600; color: #475569; font-size: 0.875rem; margin-bottom: 0.5rem;">Téléphone</label>
            <p style="color: #1e293b; font-size: 1rem; font-weight: 500; margin: 0;">
              <a href="tel:{{ $request->telephone }}" style="color: #2563eb; text-decoration: none;">+{{ substr($request->telephone, 0, 2) }} {{ substr($request->telephone, 2, 2) }} {{ substr($request->telephone, 4, 2) }} {{ substr($request->telephone, 6) }}</a>
            </p>
          </div>

          @if ($request->commentaire)
            <div style="margin-top: 1.5rem;">
              <label style="display: block; font-weight: 600; color: #475569; font-size: 0.875rem; margin-bottom: 0.5rem;">Message</label>
              <div style="background: #f8fafc; border-left: 4px solid #2563eb; padding: 1rem; border-radius: 0.5rem; color: #1e293b; line-height: 1.6;">
                {{ $request->commentaire }}
              </div>
            </div>
          @endif
        </div>

        <!-- Service sélectionné -->
        <div style="background: linear-gradient(135deg, #2563eb, #1e40af); color: white; border-radius: 0.75rem; padding: 2rem; margin-bottom: 2rem;">
          <h2 style="font-size: 1.25rem; font-weight: bold; margin-top: 0;">🎯 Service Sélectionné</h2>
          
          <div style="margin-top: 1.5rem;">
            <p style="color: rgba(255, 255, 255, 0.9); font-size: 0.875rem; margin: 0 0 0.5rem 0;">Type de service</p>
            <h3 style="font-size: 1.75rem; font-weight: bold; margin: 0;">{{ $request->service_type }}</h3>
          </div>

          <div style="margin-top: 1.5rem; padding-top: 1.5rem; border-top: 1px solid rgba(255, 255, 255, 0.2);">
            <p style="color: rgba(255, 255, 255, 0.9); font-size: 0.875rem; margin: 0;">
              Date de soumission: <strong>{{ $request->created_at->format('d/m/Y à H:i') }}</strong>
            </p>
          </div>
        </div>

        <!-- Historique des révisions -->
        @if ($request->reviewed_at)
          <div style="background: #f1f5f9; border-radius: 0.75rem; border: 1px solid #cbd5e1; padding: 1.5rem;">
            <h3 style="font-size: 1rem; font-weight: bold; color: #1e293b; margin-top: 0;">📝 Historique de Révision</h3>
            
            <div style="margin-top: 1rem; padding-top: 1rem; border-top: 1px solid #cbd5e1;">
              <p style="margin: 0; color: #475569;">
                <strong>Révisé par:</strong> {{ $request->reviewed_by }}<br>
                <strong>Date:</strong> {{ $request->reviewed_at->format('d/m/Y à H:i') }}<br>
                <strong>Status:</strong> 
                @switch($request->status)
                  @case('accepted')
                    <span style="color: #16a34a; font-weight: bold;">✓ Acceptée</span>
                    @break
                  @case('rejected')
                    <span style="color: #dc2626; font-weight: bold;">✕ Refusée</span>
                    @break
                  @case('archived')
                    <span style="color: #64748b; font-weight: bold;">📦 Archivée</span>
                    @break
                @endswitch
              </p>

              @if ($request->admin_notes)
                <div style="margin-top: 1rem; padding: 1rem; background: white; border-left: 4px solid #94a3b8; border-radius: 0.5rem;">
                  <p style="color: #64748b; font-size: 0.75rem; margin: 0 0 0.5rem 0; text-transform: uppercase; font-weight: bold;">Notes</p>
                  <p style="color: #1e293b; margin: 0;">{{ $request->admin_notes }}</p>
                </div>
              @endif
            </div>
          </div>
        @endif
      </div>

      <!-- Panneau d'actions -->
      <div>
        @if ($request->status === 'pending')
          <!-- Accepter -->
          <form action="{{ route('admin.tgv.accept', $request->id) }}" method="POST" style="margin-bottom: 1.5rem;">
            @csrf
            
            <div style="background: #dcfce7; border: 1px solid #86efac; border-radius: 0.75rem; padding: 1.5rem;">
              <h3 style="font-size: 1rem; font-weight: bold; color: #166534; margin-top: 0;">✓ Accepter cette demande</h3>

              <div style="margin-top: 1rem;">
                <label style="display: block; font-weight: 600; color: #166534; font-size: 0.875rem; margin-bottom: 0.5rem;">Notes (optionnel)</label>
                <textarea name="admin_notes" rows="4" style="width: 100%; padding: 0.75rem; border: 1px solid #86efac; border-radius: 0.5rem; font-size: 0.875rem; resize: none;" placeholder="Ex: Demande prise en charge, premier contact prévu..."></textarea>
              </div>

              <button type="submit" style="width: 100%; margin-top: 1rem; background: #16a34a; color: white; font-weight: bold; padding: 0.75rem; border: none; border-radius: 0.5rem; cursor: pointer; transition: background 0.3s;" onmouseover="this.style.background='#15803d';" onmouseout="this.style.background='#16a34a';">
                ✓ Accepter la demande
              </button>
            </div>
          </form>

          <!-- Refuser -->
          <form id="rejectForm" action="{{ route('admin.tgv.reject', $request->id) }}" method="POST" style="margin-bottom: 1.5rem;">
            @csrf
            
            <div style="background: #fee2e2; border: 1px solid #fca5a5; border-radius: 0.75rem; padding: 1.5rem;">
              <h3 style="font-size: 1rem; font-weight: bold; color: #991b1b; margin-top: 0;">✕ Refuser cette demande</h3>

              <div style="margin-top: 1rem;">
                <label style="display: block; font-weight: 600; color: #991b1b; font-size: 0.875rem; margin-bottom: 0.5rem;">Raison du refus <span style="color: #dc2626;">*</span></label>
                <textarea name="admin_notes" rows="4" style="width: 100%; padding: 0.75rem; border: 1px solid #fca5a5; border-radius: 0.5rem; font-size: 0.875rem; resize: none;" placeholder="Expliquez pourquoi cette demande est refusée..." required></textarea>
              </div>

              <button type="submit" style="width: 100%; margin-top: 1rem; background: #dc2626; color: white; font-weight: bold; padding: 0.75rem; border: none; border-radius: 0.5rem; cursor: pointer; transition: background 0.3s;" onmouseover="this.style.background='#991b1b';" onmouseout="this.style.background='#dc2626';" onclick="return confirm('Êtes-vous sûr de refuser cette demande ?');">
                ✕ Refuser la demande
              </button>
            </div>
          </form>
        @else
          <!-- État actuel -->
          <div style="background: #f1f5f9; border: 1px solid #cbd5e1; border-radius: 0.75rem; padding: 1.5rem; margin-bottom: 1.5rem;">
            <h3 style="font-size: 1rem; font-weight: bold; color: #1e293b; margin-top: 0;">Status Actuel</h3>
            
            <div style="margin-top: 1rem;">
              @switch($request->status)
                @case('accepted')
                  <span style="display: inline-block; background: #dcfce7; color: #166534; padding: 0.5rem 1rem; border-radius: 0.5rem; font-weight: bold;">✓ Acceptée</span>
                  @break
                @case('rejected')
                  <span style="display: inline-block; background: #fee2e2; color: #991b1b; padding: 0.5rem 1rem; border-radius: 0.5rem; font-weight: bold;">✕ Refusée</span>
                  @break
                @case('archived')
                  <span style="display: inline-block; background: #e5e7eb; color: #374151; padding: 0.5rem 1rem; border-radius: 0.5rem; font-weight: bold;">📦 Archivée</span>
                  @break
              @endswitch
            </div>

            <p style="color: #475569; font-size: 0.875rem; margin-top: 1rem; margin-bottom: 0;">
              Cette demande a déjà été traitée et ne peut pas être modifiée.
            </p>
          </div>

          <!-- Archive -->
          @if ($request->status !== 'archived')
            <form action="{{ route('admin.tgv.archive', $request->id) }}" method="POST">
              @csrf
              
              <button type="submit" style="width: 100%; background: #64748b; color: white; font-weight: bold; padding: 0.75rem; border: none; border-radius: 0.5rem; cursor: pointer; transition: background 0.3s;" onmouseover="this.style.background='#475569';" onmouseout="this.style.background='#64748b';">
                📦 Archiver cette demande
              </button>
            </form>
          @endif
        @endif

        <!-- Contact rapide -->
        <div style="background: #eff6ff; border: 1px solid #bfdbfe; border-radius: 0.75rem; padding: 1.5rem; margin-top: 1.5rem;">
          <h3 style="font-size: 1rem; font-weight: bold; color: #0369a1; margin-top: 0;">📞 Contact Rapide</h3>

          <a href="tel:{{ $request->telephone }}" style="display: block; margin-top: 1rem; background: #0891b2; color: white; text-decoration: none; padding: 0.75rem; border-radius: 0.5rem; text-align: center; font-weight: bold; transition: background 0.3s;" onmouseover="this.style.background='#0e7490';" onmouseout="this.style.background='#0891b2';">
            📞 Appeler +{{ substr($request->telephone, 0, 2) }} {{ substr($request->telephone, 2, 2) }} {{ substr($request->telephone, 4, 2) }} {{ substr($request->telephone, 6) }}
          </a>

          <a href="mailto:{{ $request->email }}" style="display: block; margin-top: 0.75rem; background: #2563eb; color: white; text-decoration: none; padding: 0.75rem; border-radius: 0.5rem; text-align: center; font-weight: bold; transition: background 0.3s;" onmouseover="this.style.background='#1e40af';" onmouseout="this.style.background='#2563eb';">
            ✉️ Envoyer un email
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
