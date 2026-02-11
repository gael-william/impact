@extends('layouts.app')
@section('content')

<div class="bg-white min-vh-100" style="background: linear-gradient(to bottom, #f1f5f9, #ffffff);">
  <!-- Navigation Progress -->
  <div style="background: white; border-bottom: 1px solid #e2e8f0; padding: 1rem; position: sticky; top: 0; z-index: 10;">
    <div style="max-width: 64rem; margin: 0 auto;">
      <div style="display: flex; align-items: center; justify-content: space-between;">
        <a href="/" style="color: #2563eb; text-decoration: none; font-weight: bold;">← Retour</a>
        <h2 style="font-size: 1.5rem; font-weight: bold; color: #1e293b; margin: 0;">Demande TGV</h2>
        <div style="width: 6rem;"></div>
      </div>
    </div>
  </div>

  <div style="max-width: 64rem; margin: 0 auto; padding: 2rem 1rem;">
    <!-- Affichage des message de succès/erreur -->
    @if ($errors->any())
      <div style="background: #fef2f2; border: 1px solid #fecaca; border-radius: 0.5rem; padding: 1.5rem; margin-bottom: 2rem; color: #991b1b;">
        <h4 style="font-weight: bold; margin-bottom: 0.5rem;">⚠️ Erreurs de validation</h4>
        <ul style="margin: 0; padding-left: 1.5rem;">
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 3rem; align-items: start;">
      <!-- Colonne gauche: Résumé du service -->
      <div>
        <div style="background: linear-gradient(135deg, {{ $serviceData['couleur'] }}, {{ $serviceData['couleur'] }}dd); 
                    color: white; padding: 2.5rem; border-radius: 1rem; 
                    box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1); position: sticky; top: 7rem;">
          
          <div style="font-size: 3rem; margin-bottom: 1rem;">{{ $serviceData['icone'] }}</div>
          
          @if(isset($serviceData['tag']))
            <span style="display: inline-block; background: rgba(255, 255, 255, 0.2); 
                         color: white; padding: 0.25rem 0.75rem; border-radius: 9999px; 
                         font-size: 0.75rem; font-weight: bold; margin-bottom: 1rem;">
              {{ $serviceData['tag'] }}
            </span>
          @endif

          <h3 style="font-size: 2rem; font-weight: bold; margin-bottom: 0.5rem;">
            {{ $serviceData['nom'] }}
          </h3>

          <p style="color: rgba(255, 255, 255, 0.9); margin-bottom: 2rem; font-size: 0.95rem;">
            {{ $serviceData['description'] }}
          </p>

          <!-- Prix -->
          <div style="background: rgba(255, 255, 255, 0.15); padding: 1.5rem; border-radius: 0.75rem; margin-bottom: 1.5rem;">
            <p style="color: rgba(255, 255, 255, 0.8); font-size: 0.875rem; margin: 0 0 0.5rem 0;">Prix</p>
            <div style="font-size: 2rem; font-weight: bold; color: white; margin: 0;">
              {{ $serviceData['prix'] }} <span style="font-size: 1rem;">FCFA</span>
            </div>
          </div>

          <!-- Caractéristiques -->
          <div style="border-top: 1px solid rgba(255, 255, 255, 0.2); padding-top: 1.5rem;">
            <h4 style="font-size: 0.95rem; font-weight: bold; margin-bottom: 1rem;">Inclus dans cette offre :</h4>
            <ul style="list-style: none; padding: 0; margin: 0;">
              @switch($serviceType)
                @case('Corpus')
                  <li style="margin-bottom: 0.75rem;">✓ Collecte complète de vos récits</li>
                  <li style="margin-bottom: 0.75rem;">✓ Archivage sécurisé</li>
                  <li>✓ Accès numérique 24/24 7/7</li>
                  @break
                @case('Essentiel')
                  <li style="margin-bottom: 0.75rem;">✓ Manuscrit professionnel</li>
                  <li style="margin-bottom: 0.75rem;">✓ Leçons de vie documentées</li>
                  <li>✓ 50 exemplaires</li>
                  @break
                @case('Avancé')
                  <li style="margin-bottom: 0.75rem;">✓ Édition professionnelle</li>
                  <li style="margin-bottom: 0.75rem;">✓ ISBN international</li>
                  <li>✓ 200 exemplaires reliés</li>
                  @break
                @case('Consacré')
                  <li style="margin-bottom: 0.75rem;">✓ Dédicace officielle</li>
                  <li style="margin-bottom: 0.75rem;">✓ Cérémonie exclusive</li>
                  <li>✓ 300 exemplaires premium</li>
                  @break
                @case('VIP')
                  <li style="margin-bottom: 0.75rem;">✓ Prise en charge totale</li>
                  <li style="margin-bottom: 0.75rem;">✓ 500 invités à la cérémonie</li>
                  <li>✓ 500 exemplaires déluxe</li>
                  @break
              @endswitch
            </ul>
          </div>

          <!-- Support -->
          <div style="margin-top: 2rem; padding-top: 1.5rem; border-top: 1px solid rgba(255, 255, 255, 0.2);">
            <p style="font-size: 0.875rem; color: rgba(255, 255, 255, 0.9); margin: 0 0 0.75rem 0;">
              Des questions ? Contactez-nous
            </p>
            <a href="tel:+22670256363" style="color: white; text-decoration: none; font-weight: bold; display: inline-flex; align-items: center; gap: 0.5rem;">
              📞 +226 70 25 63 63
            </a>
          </div>
        </div>
      </div>

      <!-- Colonne droite: Formulaire -->
      <div>
        <form action="{{ route('tgv.store') }}" method="POST" style="background: white; 
                 padding: 2rem; border-radius: 1rem; 
                 box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);">
          @csrf

          <input type="hidden" name="service_type" value="{{ $serviceType }}">

          <h4 style="font-size: 1.125rem; font-weight: bold; margin-bottom: 1.5rem; color: #1e293b;">
            Complétez vos informations
          </h4>

          <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1.5rem; margin-bottom: 1.5rem;">
            <!-- Prénom -->
            <div>
              <label style="display: block; font-weight: 600; color: #1e293b; margin-bottom: 0.5rem;">
                Prénom <span style="color: #dc2626;">*</span>
              </label>
              <input type="text" name="prenom" value="{{ old('prenom') }}" required
                     style="width: 100%; padding: 0.75rem; border: 1px solid #e2e8f0; border-radius: 0.5rem; 
                            font-size: 1rem; transition: all 0.3s;
                            {{ $errors->has('prenom') ? 'border-color: #dc2626; background: #fef2f2;' : '' }}"
                     placeholder="Ex: Jean-Pierre"
                     onfocus="this.style.borderColor='#2563eb'; this.style.boxShadow='0 0 0 3px rgba(37, 99, 235, 0.1)';"
                     onblur="
                       if (this.style.borderColor !== '#dc2626') {
                         this.style.borderColor='#e2e8f0';
                         this.style.boxShadow='none';
                       }
                     ">
              @error('prenom')
                <span style="color: #dc2626; font-size: 0.875rem; margin-top: 0.25rem; display: block;">{{ $message }}</span>
              @enderror
            </div>

            <!-- Nom -->
            <div>
              <label style="display: block; font-weight: 600; color: #1e293b; margin-bottom: 0.5rem;">
                Nom de famille <span style="color: #dc2626;">*</span>
              </label>
              <input type="text" name="name" value="{{ old('name') }}" required
                     style="width: 100%; padding: 0.75rem; border: 1px solid #e2e8f0; border-radius: 0.5rem; 
                            font-size: 1rem; transition: all 0.3s;
                            {{ $errors->has('name') ? 'border-color: #dc2626; background: #fef2f2;' : '' }}"
                     placeholder="Ex: Traore"
                     onfocus="this.style.borderColor='#2563eb'; this.style.boxShadow='0 0 0 3px rgba(37, 99, 235, 0.1)';"
                     onblur="
                       if (this.style.borderColor !== '#dc2626') {
                         this.style.borderColor='#e2e8f0';
                         this.style.boxShadow='none';
                       }
                     ">
              @error('name')
                <span style="color: #dc2626; font-size: 0.875rem; margin-top: 0.25rem; display: block;">{{ $message }}</span>
              @enderror
            </div>
          </div>

          <!-- Email -->
          <div style="margin-bottom: 1.5rem;">
            <label style="display: block; font-weight: 600; color: #1e293b; margin-bottom: 0.5rem;">
              Adresse email <span style="color: #dc2626;">*</span>
            </label>
            <input type="email" name="email" value="{{ old('email') }}" required
                   style="width: 100%; padding: 0.75rem; border: 1px solid #e2e8f0; border-radius: 0.5rem; 
                          font-size: 1rem; transition: all 0.3s;
                          {{ $errors->has('email') ? 'border-color: #dc2626; background: #fef2f2;' : '' }}"
                   placeholder="exemple@domaine.com"
                   onfocus="this.style.borderColor='#2563eb'; this.style.boxShadow='0 0 0 3px rgba(37, 99, 235, 0.1)';"
                   onblur="
                     if (this.style.borderColor !== '#dc2626') {
                       this.style.borderColor='#e2e8f0';
                       this.style.boxShadow='none';
                     }
                   ">
            @error('email')
              <span style="color: #dc2626; font-size: 0.875rem; margin-top: 0.25rem; display: block;">{{ $message }}</span>
            @enderror
          </div>

          <!-- Téléphone -->
          <div style="margin-bottom: 1.5rem;">
            <label style="display: block; font-weight: 600; color: #1e293b; margin-bottom: 0.5rem;">
              Numéro de téléphone <span style="color: #dc2626;">*</span>
            </label>
            <input type="tel" name="telephone" value="{{ old('telephone') }}" required
                   style="width: 100%; padding: 0.75rem; border: 1px solid #e2e8f0; border-radius: 0.5rem; 
                          font-size: 1rem; transition: all 0.3s;
                          {{ $errors->has('telephone') ? 'border-color: #dc2626; background: #fef2f2;' : '' }}"
                   placeholder="+226 70 25 63 63"
                   onfocus="this.style.borderColor='#2563eb'; this.style.boxShadow='0 0 0 3px rgba(37, 99, 235, 0.1)';"
                   onblur="
                     if (this.style.borderColor !== '#dc2626') {
                       this.style.borderColor='#e2e8f0';
                       this.style.boxShadow='none';
                     }
                   ">
            @error('telephone')
              <span style="color: #dc2626; font-size: 0.875rem; margin-top: 0.25rem; display: block;">{{ $message }}</span>
            @enderror
            <p style="color: #475569; font-size: 0.875rem; margin-top: 0.5rem;">Format: 7 à 15 chiffres</p>
          </div>

          <!-- Commentaire -->
          <div style="margin-bottom: 2rem;">
            <label style="display: block; font-weight: 600; color: #1e293b; margin-bottom: 0.5rem;">
              Message ou commentaires additionnels <span style="color: #94a3b8;">(optionnel)</span>
            </label>
            <textarea name="commentaire" rows="4"
                     style="width: 100%; padding: 0.75rem; border: 1px solid #e2e8f0; border-radius: 0.5rem; 
                            font-size: 1rem; font-family: inherit; transition: all 0.3s; resize: none;
                            {{ $errors->has('commentaire') ? 'border-color: #dc2626; background: #fef2f2;' : '' }}"
                     placeholder="Parlez-nous de vos attentes, de vos préoccupations..."
                     onfocus="this.style.borderColor='#2563eb'; this.style.boxShadow='0 0 0 3px rgba(37, 99, 235, 0.1)';"
                     onblur="
                       if (this.style.borderColor !== '#dc2626') {
                         this.style.borderColor='#e2e8f0';
                         this.style.boxShadow='none';
                       }
                     ">{{ old('commentaire') }}</textarea>
            @error('commentaire')
              <span style="color: #dc2626; font-size: 0.875rem; margin-top: 0.25rem; display: block;">{{ $message }}</span>
            @enderror
          </div>

          <!-- Information de confidentialité -->
          <div style="background: #eff6ff; border: 1px solid #bfdbfe; border-radius: 0.5rem; 
                      padding: 1rem; margin-bottom: 2rem; color: #0369a1; font-size: 0.875rem;">
            <strong>🔒 Vos données sont sécurisées</strong><br>
            Nous respectons le RGPD et vos informations personnelles ne seront jamais partagées à des tiers.
          </div>

          <!-- Boutons -->
          <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
            <button type="reset" 
                   style="background: #f1f5f9; color: #334155; font-weight: bold; padding: 0.75rem 1.5rem; 
                          border: 1px solid #e2e8f0; border-radius: 0.5rem; cursor: pointer; 
                          transition: all 0.3s; font-size: 1rem;"
                   onmouseover="this.style.background='#e2e8f0';"
                   onmouseout="this.style.background='#f1f5f9';">
              Réinitialiser
            </button>

            <button type="submit" 
                   style="background: {{ $serviceData['couleur'] }}; color: white; font-weight: bold; padding: 0.75rem 1.5rem; 
                          border: none; border-radius: 0.5rem; cursor: pointer; 
                          transition: all 0.3s; font-size: 1rem;"
                   onmouseover="this.style.opacity='0.9'; this.style.transform='translateY(-2px)';"
                   onmouseout="this.style.opacity='1'; this.style.transform='translateY(0)';">
              ✓ Soumettre ma demande
            </button>
          </div>

          <!-- Note informative -->
          <p style="color: #475569; font-size: 0.875rem; margin-top: 1.5rem; text-align: center;">
            En soumettant ce formulaire, vous acceptez que nous vous contactions pour discuter de votre projet TGV.
          </p>
        </form>
      </div>
    </div>
  </div>

  <!-- Informations supplémentaires -->
  <div style="background: linear-gradient(to right, #f0f9ff, #f5f3ff); border-top: 1px solid #e2e8f0; padding: 3rem 1rem; margin-top: 3rem;">
    <div style="max-width: 64rem; margin: 0 auto;">
      <h3 style="font-size: 1.5rem; font-weight: bold; color: #1e293b; margin-bottom: 2rem; text-align: center;">
        Comment ça se passe après ?
      </h3>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 2rem;">
        <div style="text-align: center;">
          <div style="font-size: 2rem; margin-bottom: 1rem;">📧</div>
          <h4 style="font-weight: bold; color: #1e293b; margin-bottom: 0.5rem;">Confirmation</h4>
          <p style="color: #475569; font-size: 0.875rem;">
            Vous recevrez un email de confirmation immédiatement.
          </p>
        </div>

        <div style="text-align: center;">
          <div style="font-size: 2rem; margin-bottom: 1rem;">👥</div>
          <h4 style="font-weight: bold; color: #1e293b; margin-bottom: 0.5rem;">Révision</h4>
          <p style="color: #475569; font-size: 0.875rem;">
            Notre équipe examinera votre demande sous 24-48h.
          </p>
        </div>

        <div style="text-align: center;">
          <div style="font-size: 2rem; margin-bottom: 1rem;">📞</div>
          <h4 style="font-weight: bold; color: #1e293b; margin-bottom: 0.5rem;">Contact</h4>
          <p style="color: #475569; font-size: 0.875rem;">
            Nous vous appellerons pour finaliser les détails.
          </p>
        </div>

        <div style="text-align: center;">
          <div style="font-size: 2rem; margin-bottom: 1rem;">🎯</div>
          <h4 style="font-weight: bold; color: #1e293b; margin-bottom: 0.5rem;">Démarrage</h4>
          <p style="color: #475569; font-size: 0.875rem;">
            Nous commençons le processus TGV sans délai.
          </p>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  // Animation simple au chargement
  document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('form');
    if (form) {
      form.style.opacity = '0';
      form.style.animation = 'fadeIn 0.5s ease-in forwards';
    }
  });

  // CSS Animation
  const style = document.createElement('style');
  style.textContent = `
    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(10px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
  `;
  document.head.appendChild(style);
</script>

@endsection
