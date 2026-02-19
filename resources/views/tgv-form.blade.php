@extends('layouts.app')
@section('content')

<div class="bg-white min-vh-100" style="background: linear-gradient(to bottom, #f1f5f9, #ffffff);">
  <div style="background: white; border-bottom: 1px solid #e2e8f0; padding: 1rem; position: sticky; top: 0; z-index: 10;">
    <div style="max-width: 64rem; margin: 0 auto; display: flex; align-items: center; justify-content: space-between;">
      <a href="/" style="color: #2563eb; text-decoration: none; font-weight: bold;">← Retour</a>
      <h2 style="font-size: 1.5rem; font-weight: bold; color: #1e293b; margin: 0;">Demande TGV</h2>
      <div style="width: 6rem;"></div>
    </div>
  </div>

  <div style="max-width: 64rem; margin: 0 auto; padding: 2rem 1rem;">
    @if ($errors->any())
      <div style="background: #fef2f2; border: 1px solid #fecaca; border-radius: 0.5rem; padding: 1.5rem; margin-bottom: 2rem; color: #991b1b;">
        <h4 style="font-weight: bold; margin-bottom: 0.5rem;">Erreurs de validation</h4>
        <ul style="margin: 0; padding-left: 1.5rem;">
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 3rem; align-items: start;">
      <div>
        <div style="background: linear-gradient(135deg, {{ $serviceData['couleur'] }}, {{ $serviceData['couleur'] }}dd); color: white; padding: 2.5rem; border-radius: 1rem; box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1); position: sticky; top: 7rem;">
          <div style="font-size: 3rem; margin-bottom: 1rem;">{{ $serviceData['icone'] }}</div>

          <h3 style="font-size: 2rem; font-weight: bold; margin-bottom: 0.5rem;">{{ $serviceData['nom'] }}</h3>
          <p style="color: rgba(255, 255, 255, 0.9); margin-bottom: 2rem; font-size: 0.95rem;">{{ $serviceData['description'] }}</p>

          <div style="background: rgba(255, 255, 255, 0.15); padding: 1.5rem; border-radius: 0.75rem; margin-bottom: 1.5rem;">
            <p style="color: rgba(255, 255, 255, 0.8); font-size: 0.875rem; margin: 0 0 0.5rem 0;">Prix</p>
            <div style="font-size: 2rem; font-weight: bold; color: white; margin: 0;">
              {{ $serviceData['prix'] }} <span style="font-size: 1rem;">FCFA</span>
            </div>
          </div>

          <div style="border-top: 1px solid rgba(255, 255, 255, 0.2); padding-top: 1.5rem;">
            <h4 style="font-size: 0.95rem; font-weight: bold; margin-bottom: 1rem;">Inclus dans cette offre :</h4>
            <ul style="list-style: none; padding: 0; margin: 0;">
              @switch($serviceType)
                @case('Argent')
                  <li style="margin-bottom: 0.75rem;">✓ Equipe certifiée (BAC+3)</li>
                  <li style="margin-bottom: 0.75rem;">✓ Structure du parcours et formalisation</li>
                  <li>✓ Accompagnement respectueux et professionnel</li>
                  @break
                @case('Or')
                  <li style="margin-bottom: 0.75rem;">✓ Equipe expérimentée (auteurs publiés, Master 2)</li>
                  <li style="margin-bottom: 0.75rem;">✓ Approfondissement narratif et leçons de vie</li>
                  <li>✓ Accompagnement renforcé</li>
                  @break
                @case('Diamant')
                  <li style="margin-bottom: 0.75rem;">✓ Equipe experte (docteurs, auteurs de 2 livres)</li>
                  <li style="margin-bottom: 0.75rem;">✓ Transmission patrimoniale premium</li>
                  <li>✓ Accompagnement premium</li>
                  @break
                @case('Platinium')
                  <li style="margin-bottom: 0.75rem;">✓ Excellence académique (professeurs agrégés)</li>
                  <li style="margin-bottom: 0.75rem;">✓ Auteurs de 3 livres et plus</li>
                  <li>✓ Accompagnement intégral & stratégique</li>
                  @break
              @endswitch
            </ul>
          </div>

          <div style="margin-top: 2rem; padding-top: 1.5rem; border-top: 1px solid rgba(255, 255, 255, 0.2);">
            <p style="font-size: 0.875rem; color: rgba(255, 255, 255, 0.9); margin: 0 0 0.75rem 0;">Des questions ? Contactez-nous</p>
            <a href="tel:+22670256363" style="color: white; text-decoration: none; font-weight: bold;">+226 70 25 63 63</a>
          </div>
        </div>
      </div>

      <div>
        <form action="{{ route('tgv.store') }}" method="POST" style="background: white; padding: 2rem; border-radius: 1rem; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);">
          @csrf
          <input type="hidden" name="service_type" value="{{ $serviceType }}">

          <h4 style="font-size: 1.125rem; font-weight: bold; margin-bottom: 1.5rem; color: #1e293b;">Complétez vos informations</h4>

          <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1.5rem; margin-bottom: 1.5rem;">
            <div>
              <label style="display: block; font-weight: 600; color: #1e293b; margin-bottom: 0.5rem;">Prénom <span style="color: #dc2626;">*</span></label>
              <input type="text" name="prenom" value="{{ old('prenom') }}" required style="width: 100%; padding: 0.75rem; border: 1px solid #e2e8f0; border-radius: 0.5rem; font-size: 1rem;" placeholder="Ex: Jean-Pierre">
              @error('prenom')<span style="color: #dc2626; font-size: 0.875rem; margin-top: 0.25rem; display: block;">{{ $message }}</span>@enderror
            </div>
            <div>
              <label style="display: block; font-weight: 600; color: #1e293b; margin-bottom: 0.5rem;">Nom de famille <span style="color: #dc2626;">*</span></label>
              <input type="text" name="name" value="{{ old('name') }}" required style="width: 100%; padding: 0.75rem; border: 1px solid #e2e8f0; border-radius: 0.5rem; font-size: 1rem;" placeholder="Ex: Traore">
              @error('name')<span style="color: #dc2626; font-size: 0.875rem; margin-top: 0.25rem; display: block;">{{ $message }}</span>@enderror
            </div>
          </div>

          <div style="margin-bottom: 1.5rem;">
            <label style="display: block; font-weight: 600; color: #1e293b; margin-bottom: 0.5rem;">Adresse email <span style="color: #dc2626;">*</span></label>
            <input type="email" name="email" value="{{ old('email') }}" required style="width: 100%; padding: 0.75rem; border: 1px solid #e2e8f0; border-radius: 0.5rem; font-size: 1rem;" placeholder="exemple@domaine.com">
            @error('email')<span style="color: #dc2626; font-size: 0.875rem; margin-top: 0.25rem; display: block;">{{ $message }}</span>@enderror
          </div>

          <div style="margin-bottom: 1.5rem;">
            <label style="display: block; font-weight: 600; color: #1e293b; margin-bottom: 0.5rem;">Numéro de téléphone <span style="color: #dc2626;">*</span></label>
            <input type="tel" name="telephone" value="{{ old('telephone') }}" required style="width: 100%; padding: 0.75rem; border: 1px solid #e2e8f0; border-radius: 0.5rem; font-size: 1rem;" placeholder="+226 70 25 63 63">
            @error('telephone')<span style="color: #dc2626; font-size: 0.875rem; margin-top: 0.25rem; display: block;">{{ $message }}</span>@enderror
          </div>

          <div style="margin-bottom: 2rem;">
            <label style="display: block; font-weight: 600; color: #1e293b; margin-bottom: 0.5rem;">Message ou commentaires additionnels <span style="color: #94a3b8;">(optionnel)</span></label>
            <textarea name="commentaire" rows="4" style="width: 100%; padding: 0.75rem; border: 1px solid #e2e8f0; border-radius: 0.5rem; font-size: 1rem; font-family: inherit; resize: none;" placeholder="Parlez-nous de vos attentes, de vos préoccupations...">{{ old('commentaire') }}</textarea>
            @error('commentaire')<span style="color: #dc2626; font-size: 0.875rem; margin-top: 0.25rem; display: block;">{{ $message }}</span>@enderror
          </div>

          <div style="background: #eff6ff; border: 1px solid #bfdbfe; border-radius: 0.5rem; padding: 1rem; margin-bottom: 2rem; color: #0369a1; font-size: 0.875rem;">
            <strong>Vos données sont sécurisées</strong><br>
            Nous respectons la confidentialité et vos informations personnelles ne seront jamais partagées à des tiers.
          </div>

          <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
            <button type="reset" style="background: #f1f5f9; color: #334155; font-weight: bold; padding: 0.75rem 1.5rem; border: 1px solid #e2e8f0; border-radius: 0.5rem; cursor: pointer; font-size: 1rem;">Réinitialiser</button>
            <button type="submit" style="background: {{ $serviceData['couleur'] }}; color: white; font-weight: bold; padding: 0.75rem 1.5rem; border: none; border-radius: 0.5rem; cursor: pointer; font-size: 1rem;">Soumettre ma demande</button>
          </div>

          <p style="color: #475569; font-size: 0.875rem; margin-top: 1.5rem; text-align: center;">
            En soumettant ce formulaire, vous acceptez que nous vous contactions pour discuter de votre projet TGV.
          </p>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
