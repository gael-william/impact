@extends('admin.layouts.admin')

@section('content')

<div class="bg-white" style="min-height: 100vh; padding: 2rem 1rem;">
  <div style="max-width: 120rem; margin: 0 auto;">
    
    <!-- Header -->
    <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 2rem;">
      <div>
        <h1 style="font-size: 2rem; font-weight: bold; color: #1e293b; margin: 0;">
          📋 Gestion des Demandes TGV
        </h1>
        <p style="color: #475569; margin-top: 0.5rem;">Toutes les demandes soumises par les clients</p>
      </div>
      <a href="{{ route('admin.dashboard') }}" 
         style="background: #2563eb; color: white; padding: 0.75rem 1.5rem; border-radius: 0.5rem; text-decoration: none; font-weight: bold;">
        ← Retour au Dashboard
      </a>
    </div>

    @if (session('success'))
      <div style="background: #f0fdf4; border: 1px solid #86efac; border-radius: 0.5rem; padding: 1.5rem; margin-bottom: 2rem; color: #166534;">
        <p style="margin: 0;"><strong>✓ {{ session('success') }}</strong></p>
      </div>
    @endif

    <!-- Statistiques -->
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(180px, 1fr)); gap: 1.5rem; margin-bottom: 2rem;">
      <div style="background: linear-gradient(135deg, #3b82f6, #2563eb); color: white; padding: 1.5rem; border-radius: 0.75rem; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);">
        <div style="font-size: 0.875rem; color: rgba(255, 255, 255, 0.9);">Total Demandes</div>
        <div style="font-size: 2rem; font-weight: bold; margin-top: 0.5rem;">{{ $statistics['total'] }}</div>
      </div>

      <div style="background: linear-gradient(135deg, #fbbf24, #f59e0b); color: white; padding: 1.5rem; border-radius: 0.75rem; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);">
        <div style="font-size: 0.875rem; color: rgba(255, 255, 255, 0.9);">En Attente</div>
        <div style="font-size: 2rem; font-weight: bold; margin-top: 0.5rem;">{{ $statistics['pending'] }}</div>
      </div>

      <div style="background: linear-gradient(135deg, #34d399, #10b981); color: white; padding: 1.5rem; border-radius: 0.75rem; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);">
        <div style="font-size: 0.875rem; color: rgba(255, 255, 255, 0.9);">Acceptées</div>
        <div style="font-size: 2rem; font-weight: bold; margin-top: 0.5rem;">{{ $statistics['accepted'] }}</div>
      </div>

      <div style="background: linear-gradient(135deg, #f87171, #ef4444); color: white; padding: 1.5rem; border-radius: 0.75rem; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);">
        <div style="font-size: 0.875rem; color: rgba(255, 255, 255, 0.9);">Refusées</div>
        <div style="font-size: 2rem; font-weight: bold; margin-top: 0.5rem;">{{ $statistics['rejected'] }}</div>
      </div>
    </div>

    <!-- Tableau des demandes -->
    <div style="background: white; border-radius: 0.75rem; border: 1px solid #e2e8f0; overflow: hidden; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);">
      
      @if ($requests->count() > 0)
        <div style="overflow-x: auto;">
          <table style="width: 100%; border-collapse: collapse;">
            <thead>
              <tr style="background: #f8fafc; border-bottom: 2px solid #e2e8f0;">
                <th style="padding: 1rem; text-align: left; font-weight: 600; color: #334155;">ID</th>
                <th style="padding: 1rem; text-align: left; font-weight: 600; color: #334155;">Service</th>
                <th style="padding: 1rem; text-align: left; font-weight: 600; color: #334155;">Nom</th>
                <th style="padding: 1rem; text-align: left; font-weight: 600; color: #334155;">Email</th>
                <th style="padding: 1rem; text-align: left; font-weight: 600; color: #334155;">Téléphone</th>
                <th style="padding: 1rem; text-align: left; font-weight: 600; color: #334155;">Status</th>
                <th style="padding: 1rem; text-align: left; font-weight: 600; color: #334155;">Date</th>
                <th style="padding: 1rem; text-align: center; font-weight: 600; color: #334155;">Actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($requests as $request)
                <tr style="border-bottom: 1px solid #e2e8f0; transition: background 0.3s;" 
                    onmouseover="this.style.background='#f8fafc';"
                    onmouseout="this.style.background='white';">
                  <td style="padding: 1rem; color: #475569; font-weight: bold;">#{{ $request->id }}</td>
                  <td style="padding: 1rem; color: #475569;">
                    <span style="display: inline-block; background: #eff6ff; color: #0369a1; padding: 0.25rem 0.75rem; border-radius: 9999px; font-size: 0.875rem; font-weight: 600;">
                      {{ $request->service_type }}
                    </span>
                  </td>
                  <td style="padding: 1rem; color: #475569; font-weight: 500;">{{ $request->prenom }} {{ $request->name }}</td>
                  <td style="padding: 1rem; color: #475569;"><a href="mailto:{{ $request->email }}" style="color: #2563eb; text-decoration: none;">{{ $request->email }}</a></td>
                  <td style="padding: 1rem; color: #475569;"><a href="tel:{{ $request->telephone }}" style="color: #2563eb; text-decoration: none;">+{{ substr($request->telephone, 0, 2) }} {{ substr($request->telephone, 2, 2) }} {{ substr($request->telephone, 4, 2) }} {{ substr($request->telephone, 6) }}</a></td>
                  <td style="padding: 1rem;">
                    @switch($request->status)
                      @case('pending')
                        <span style="display: inline-block; background: #fef3c7; color: #92400e; padding: 0.25rem 0.75rem; border-radius: 9999px; font-size: 0.875rem; font-weight: 600;">⏳ En attente</span>
                        @break
                      @case('accepted')
                        <span style="display: inline-block; background: #dcfce7; color: #166534; padding: 0.25rem 0.75rem; border-radius: 9999px; font-size: 0.875rem; font-weight: 600;">✓ Acceptée</span>
                        @break
                      @case('rejected')
                        <span style="display: inline-block; background: #fee2e2; color: #991b1b; padding: 0.25rem 0.75rem; border-radius: 9999px; font-size: 0.875rem; font-weight: 600;">✕ Refusée</span>
                        @break
                      @case('archived')
                        <span style="display: inline-block; background: #e5e7eb; color: #374151; padding: 0.25rem 0.75rem; border-radius: 9999px; font-size: 0.875rem; font-weight: 600;">📦 Archivée</span>
                        @break
                    @endswitch
                  </td>
                  <td style="padding: 1rem; color: #475569; font-size: 0.875rem;">
                    {{ $request->created_at->format('d/m/Y H:i') }}
                  </td>
                  <td style="padding: 1rem; text-align: center;">
                    <a href="{{ route('admin.tgv.show', $request->id) }}" 
                       style="color: #2563eb; text-decoration: none; font-weight: bold; margin-right: 0.75rem;">
                       👁️ Voir
                    </a>
                    @if ($request->status === 'pending')
                      <form action="{{ route('admin.tgv.accept', $request->id) }}" method="POST" style="display: inline;">
                        @csrf
                        <button type="submit" style="background: none; border: none; color: #16a34a; cursor: pointer; font-weight: bold; text-decoration: underline;">✓ Accepter</button>
                      </form>
                    @endif
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>

        <!-- Pagination -->
        <div style="padding: 2rem; text-align: center;">
          {{ $requests->links() }}
        </div>
      @else
        <div style="padding: 3rem; text-align: center; color: #94a3b8;">
          <p style="font-size: 1.125rem; margin: 0;">😶 Aucune demande pour le moment</p>
          <p style="margin-top: 0.5rem; color: #cbd5e1;">Les demandes soumises apparaîtront ici</p>
        </div>
      @endif
    </div>
  </div>
</div>

@endsection
