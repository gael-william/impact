@extends('layouts.app')
@section('content')

<div class="bg-white">
  <!-- Spinner Start -->
  <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center" style="z-index: 9999;">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
      <span class="sr-only">Chargement...</span>
    </div>
  </div>
  <!-- Spinner End -->

  <!-- Hero Section Start -->
  <div style="background: linear-gradient(135deg, #1e293b via #0f172a to #1f2937); color: white; padding: 6rem 1rem; position: relative; overflow: hidden;">
    <!-- Decorative background -->
    <div style="position: absolute; inset: 0; opacity: 0.1;">
      <div style="position: absolute; top: 0; left: 0; width: 24rem; height: 24rem; background: #3b82f6; border-radius: 9999px; filter: blur(80px);"></div>
      <div style="position: absolute; top: 0; right: 0; width: 24rem; height: 24rem; background: #a855f7; border-radius: 9999px; filter: blur(80px);"></div>
    </div>

    <div style="position: relative; max-width: 64rem; margin: 0 auto; text-align: center;">
      <h6 style="color: #93c5fd; font-size: 1.125rem; font-weight: 600; text-transform: uppercase; letter-spacing: 0.1em; margin-bottom: 0.75rem;">
        Institut IMPACT Plus
      </h6>
      <h1 style="font-size: 3.75rem; font-weight: bold; margin-bottom: 1.5rem; line-height: 1.2;">
        Toute vie mérite d'être transmise
      </h1>
      <p style="font-size: 1.25rem; margin-bottom: 2rem; color: #cbd5e1; max-width: 48rem; margin-left: auto; margin-right: auto;">
        <strong>Trajet Global de Vie (TGV)</strong> : Un processus d'accompagnement respectueux et structuré pour préserver votre patrimoine, honorer vos leçons de vie et consacrer votre héritage.
      </p>
      <div style="display: flex; flex-direction: column; gap: 1rem; justify-content: center; flex-wrap: wrap;">
        <a href="#offres" style="display: inline-block; background: #2563eb; color: white; font-weight: bold; padding: 0.75rem 2rem; border-radius: 0.5rem; text-decoration: none; transition: background 0.3s;">
          Découvrir nos offres
        </a>
      </div>
    </div>
  </div>
  <!-- Hero Section End -->

  <!-- About Section Start -->
  <div style="padding: 4rem 1rem; background: #f1f5f9;">
    <div style="max-width: 80rem; margin: 0 auto;">
      <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 3rem; align-items: center;">
        <div>
          <h6 style="color: #2563eb; font-size: 0.875rem; font-weight: 600; text-transform: uppercase; letter-spacing: 0.1em; margin-bottom: 0.75rem;">À propos du TGV</h6>
          <h2 style="font-size: 2.25rem; font-weight: bold; margin-bottom: 1.5rem; color: #1e293b;">
            Préserver votre <span style="color: #2563eb;">Patrimoine</span>
          </h2>
          <p style="font-size: 1.125rem; color: #475569; margin-bottom: 1rem;">
            Le Trajet Global de Vie (TGV) est bien plus qu'un livre. C'est un processus complet et structuré conçu pour :
          </p>
          <ul style="margin-bottom: 1.5rem;">
            <li style="display: flex; align-items: flex-start; margin-bottom: 0.75rem;">
              <span style="display: inline-block; width: 1.5rem; height: 1.5rem; background: #2563eb; color: white; border-radius: 9999px; display: flex; align-items: center; justify-content: center; margin-right: 0.75rem; flex-shrink: 0; font-weight: bold;">✓</span>
              <span style="color: #334155;"><strong>Collecter</strong> vos récits et expériences uniques</span>
            </li>
            <li style="display: flex; align-items: flex-start; margin-bottom: 0.75rem;">
              <span style="display: inline-block; width: 1.5rem; height: 1.5rem; background: #2563eb; color: white; border-radius: 9999px; display: flex; align-items: center; justify-content: center; margin-right: 0.75rem; flex-shrink: 0; font-weight: bold;">✓</span>
              <span style="color: #334155;"><strong>Documenter</strong> vos leçons de vie et sagesse</span>
            </li>
            <li style="display: flex; align-items: flex-start; margin-bottom: 0.75rem;">
              <span style="display: inline-block; width: 1.5rem; height: 1.5rem; background: #2563eb; color: white; border-radius: 9999px; display: flex; align-items: center; justify-content: center; margin-right: 0.75rem; flex-shrink: 0; font-weight: bold;">✓</span>
              <span style="color: #334155;"><strong>Créer</strong> un héritage pérenne et transmissible</span>
            </li>
            <li style="display: flex; align-items: flex-start;">
              <span style="display: inline-block; width: 1.5rem; height: 1.5rem; background: #2563eb; color: white; border-radius: 9999px; display: flex; align-items: center; justify-content: center; margin-right: 0.75rem; flex-shrink: 0; font-weight: bold;">✓</span>
              <span style="color: #334155;"><strong>Sécuriser</strong> vos droits et votre consécration</span>
            </li>
          </ul>
          <a href="#" style="display: inline-block; background: #2563eb; color: white; font-weight: bold; padding: 0.75rem 1.5rem; border-radius: 0.5rem; text-decoration: none;">
            En savoir plus
          </a>
        </div>
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
          <div style="background: white; padding: 1.5rem; border-radius: 0.5rem; box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1); text-align: center;">
            <div style="font-size: 2.25rem; font-weight: bold; color: #2563eb; margin-bottom: 0.5rem;">500+</div>
            <p style="color: #475569; font-weight: 600;">Familles accompagnées</p>
          </div>
          <div style="background: white; padding: 1.5rem; border-radius: 0.5rem; box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1); text-align: center;">
            <div style="font-size: 2.25rem; font-weight: bold; color: #2563eb; margin-bottom: 0.5rem;">20+</div>
            <p style="color: #475569; font-weight: 600;">Années d'expertise</p>
          </div>
          <div style="background: white; padding: 1.5rem; border-radius: 0.5rem; box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1); text-align: center;">
            <div style="font-size: 2.25rem; font-weight: bold; color: #2563eb; margin-bottom: 0.5rem;">100%</div>
            <p style="color: #475569; font-weight: 600;">Confidentiel</p>
          </div>
          <div style="background: white; padding: 1.5rem; border-radius: 0.5rem; box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1); text-align: center;">
            <div style="font-size: 2.25rem; font-weight: bold; color: #2563eb; margin-bottom: 0.5rem;">5★</div>
            <p style="color: #475569; font-weight: 600;">Satisfaction client</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- About Section End -->

  <!-- Platinum Options Section Start -->
  <div id="offres" style="padding: 4rem 1rem; background: white;">
    <div style="max-width: 80rem; margin: 0 auto;">
      <div style="text-align: center; margin-bottom: 3rem;">
        <h6 style="color: #2563eb; font-size: 0.875rem; font-weight: 600; text-transform: uppercase; letter-spacing: 0.1em; margin-bottom: 0.75rem;">Nos offres TGV</h6>
        <h2 style="font-size: 2.25rem; font-weight: bold; margin-bottom: 1rem; color: #1e293b;">
          Matrice de <span style="color: #2563eb;">Services</span> Personnalisés
        </h2>
        <p style="font-size: 1.25rem; color: #475569; max-width: 42rem; margin: 0 auto;">
          Quatre catégories d'accompagnement adaptées à vos besoins et votre budget
        </p>
      </div>

      <!-- Main Platinum Category -->
      <div style="margin-bottom: 4rem;">
        <div style="background: linear-gradient(to right, #2563eb, #1e40af); color: white; padding: 2rem; border-radius: 1rem 1rem 0 0;">
          <h3 style="font-size: 1.875rem; font-weight: bold; margin-bottom: 0.5rem;">PLATINUM</h3>
          <p style="color: #e0e7ff;">L'accompagnement complet et exclusif - La Consécration Absolue</p>
        </div>
        <div style="background: #f1f5f9; padding: 2rem; border-radius: 0 0 1rem 1rem; border: 1px solid #bfdbfe;">
          <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1.5rem;">
            <!-- Option 1 -->
            <div style="background: white; border-radius: 0.5rem; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1); padding: 1.5rem; border-left: 4px solid #2563eb;">
              <h4 style="font-size: 1.125rem; font-weight: bold; color: #1e293b; margin-bottom: 0.5rem;">Corpus TGV</h4>
              <p style="font-size: 0.875rem; color: #475569; margin-bottom: 1rem;">Collecte et archives</p>
              <div style="background: #eff6ff; border-radius: 0.5rem; padding: 0.75rem; margin-bottom: 1rem;">
                <p style="font-size: 1.5rem; font-weight: bold; color: #2563eb;">3 000 000</p>
                <p style="font-size: 0.875rem; color: #475569;">FCFA</p>
              </div>
              <ul style="font-size: 0.875rem; color: #334155; margin-bottom: 1rem;">
                <li style="margin-bottom: 0.5rem;"><span style="color: #2563eb;">•</span> Collecte complète</li>
                <li style="margin-bottom: 0.5rem;"><span style="color: #2563eb;">•</span> Archivage sécurisé</li>
                <li><span style="color: #2563eb;">•</span> Accès numérique</li>
              </ul>
              <button style="width: 100%; background: #2563eb; color: white; font-weight: bold; padding: 0.5rem; border: none; border-radius: 0.375rem; cursor: pointer;">Choisir</button>
            </div>

            <!-- Option 2 -->
            <div style="background: white; border-radius: 0.5rem; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1); padding: 1.5rem; border-left: 4px solid #16a34a;">
              <h4 style="font-size: 1.125rem; font-weight: bold; color: #1e293b; margin-bottom: 0.5rem;">TGV Essentiel</h4>
              <p style="font-size: 0.875rem; color: #475569; margin-bottom: 1rem;">Manuscrit & leçons</p>
              <div style="background: #f0fdf4; border-radius: 0.5rem; padding: 0.75rem; margin-bottom: 1rem;">
                <p style="font-size: 1.5rem; font-weight: bold; color: #16a34a;">7 000 000</p>
                <p style="font-size: 0.875rem; color: #475569;">FCFA</p>
              </div>
              <ul style="font-size: 0.875rem; color: #334155; margin-bottom: 1rem;">
                <li style="margin-bottom: 0.5rem;"><span style="color: #16a34a;">•</span> Manuscrit professionnel</li>
                <li style="margin-bottom: 0.5rem;"><span style="color: #16a34a;">•</span> Leçons de vie</li>
                <li><span style="color: #16a34a;">•</span> 50 exemplaires</li>
              </ul>
              <button style="width: 100%; background: #16a34a; color: white; font-weight: bold; padding: 0.5rem; border: none; border-radius: 0.375rem; cursor: pointer;">Choisir</button>
            </div>

            <!-- Option 3 -->
            <div style="background: white; border-radius: 0.5rem; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1); padding: 1.5rem; border-left: 4px solid #d97706; position: relative;">
              <span style="position: absolute; top: -0.75rem; right: -0.75rem; background: #d97706; color: white; padding: 0.25rem 0.75rem; border-radius: 9999px; font-size: 0.75rem; font-weight: bold;">POPULAIRE</span>
              <h4 style="font-size: 1.125rem; font-weight: bold; color: #1e293b; margin-bottom: 0.5rem;">TGV Avancé</h4>
              <p style="font-size: 0.875rem; color: #475569; margin-bottom: 1rem;">Édition professionnelle</p>
              <div style="background: #fffbeb; border-radius: 0.5rem; padding: 0.75rem; margin-bottom: 1rem;">
                <p style="font-size: 1.5rem; font-weight: bold; color: #d97706;">17 000 000</p>
                <p style="font-size: 0.875rem; color: #475569;">FCFA</p>
              </div>
              <ul style="font-size: 0.875rem; color: #334155; margin-bottom: 1rem;">
                <li style="margin-bottom: 0.5rem;"><span style="color: #d97706;">•</span> Édition professionnelle</li>
                <li style="margin-bottom: 0.5rem;"><span style="color: #d97706;">•</span> ISBN international</li>
                <li><span style="color: #d97706;">•</span> 200 exemplaires</li>
              </ul>
              <button style="width: 100%; background: #d97706; color: white; font-weight: bold; padding: 0.5rem; border: none; border-radius: 0.375rem; cursor: pointer;">Choisir</button>
            </div>

            <!-- Option 4 -->
            <div style="background: white; border-radius: 0.5rem; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1); padding: 1.5rem; border-left: 4px solid #a855f7;">
              <h4 style="font-size: 1.125rem; font-weight: bold; color: #1e293b; margin-bottom: 0.5rem;">TGV Consacré</h4>
              <p style="font-size: 0.875rem; color: #475569; margin-bottom: 1rem;">Dédicace officielle</p>
              <div style="background: #faf5ff; border-radius: 0.5rem; padding: 0.75rem; margin-bottom: 1rem;">
                <p style="font-size: 1.5rem; font-weight: bold; color: #a855f7;">25 000 000</p>
                <p style="font-size: 0.875rem; color: #475569;">FCFA</p>
              </div>
              <ul style="font-size: 0.875rem; color: #334155; margin-bottom: 1rem;">
                <li style="margin-bottom: 0.5rem;"><span style="color: #a855f7;">•</span> Dédicace officielle</li>
                <li style="margin-bottom: 0.5rem;"><span style="color: #a855f7;">•</span> Cérémonie exclusive</li>
                <li><span style="color: #a855f7;">•</span> 300 exemplaires</li>
              </ul>
              <button style="width: 100%; background: #a855f7; color: white; font-weight: bold; padding: 0.5rem; border: none; border-radius: 0.375rem; cursor: pointer;">Choisir</button>
            </div>

            <!-- Option 5 -->
            <div style="background: linear-gradient(to bottom right, #1e293b, #374151); color: white; border-radius: 0.5rem; box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1); padding: 1.5rem; border-left: 4px solid #facc15;">
              <h4 style="font-size: 1.125rem; font-weight: bold; margin-bottom: 0.5rem;">TGV VIP</h4>
              <p style="color: #d1d5db; font-size: 0.875rem; margin-bottom: 1rem;">Prise en charge totale</p>
              <div style="background: rgba(250, 204, 21, 0.2); border-radius: 0.5rem; padding: 0.75rem; margin-bottom: 1rem;">
                <p style="font-size: 1.5rem; font-weight: bold; color: #fef08a;">50 000 000</p>
                <p style="font-size: 0.875rem; color: #d1d5db;">FCFA</p>
              </div>
              <ul style="font-size: 0.875rem; color: #e5e7eb; margin-bottom: 1rem;">
                <li style="margin-bottom: 0.5rem;"><span style="color: #fef08a;">★</span> Prise en charge totale</li>
                <li style="margin-bottom: 0.5rem;"><span style="color: #fef08a;">★</span> 500 invités à la cérémonie</li>
                <li><span style="color: #fef08a;">★</span> 500 exemplaires</li>
              </ul>
              <button style="width: 100%; background: #facc15; color: #1f2937; font-weight: bold; padding: 0.5rem; border: none; border-radius: 0.375rem; cursor: pointer;">Nous contacter</button>
            </div>
          </div>
        </div>
      </div>

      <!-- Other Categories -->
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 1.5rem;">
        <div style="background: linear-gradient(to bottom right, rgba(206, 244, 254, 0.5), rgba(191, 219, 254, 0.5)); padding: 2rem; border-radius: 0.75rem; border: 2px solid #cffafe;">
          <h3 style="font-size: 1.5rem; font-weight: bold; margin-bottom: 0.5rem; color: #0369a1;">DIAMANT</h3>
          <p style="color: #475569; margin-bottom: 1rem;">L'accompagnement Premium pour votre patrimoine</p>
          <button style="width: 100%; background: #0891b2; color: white; font-weight: bold; padding: 0.5rem; border: none; border-radius: 0.375rem; cursor: pointer;">Découvrir</button>
        </div>

        <div style="background: linear-gradient(to bottom right, rgba(254, 243, 199, 0.5), rgba(253, 224, 71, 0.5)); padding: 2rem; border-radius: 0.75rem; border: 2px solid #fcd34d;">
          <h3 style="font-size: 1.5rem; font-weight: bold; margin-bottom: 0.5rem; color: #b45309;">OR</h3>
          <p style="color: #475569; margin-bottom: 1rem;">L'accompagnement équilibré et complet</p>
          <button style="width: 100%; background: #d97706; color: white; font-weight: bold; padding: 0.5rem; border: none; border-radius: 0.375rem; cursor: pointer;">Découvrir</button>
        </div>

        <div style="background: linear-gradient(to bottom right, rgba(226, 232, 240, 0.5), rgba(203, 213, 225, 0.5)); padding: 2rem; border-radius: 0.75rem; border: 2px solid #cbd5e1;">
          <h3 style="font-size: 1.5rem; font-weight: bold; margin-bottom: 0.5rem; color: #334155;">ARGENT</h3>
          <p style="color: #475569; margin-bottom: 1rem;">L'accompagnement essentiel et accessible</p>
          <button style="width: 100%; background: #475569; color: white; font-weight: bold; padding: 0.5rem; border: none; border-radius: 0.375rem; cursor: pointer;">Découvrir</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Offres Section End -->

  <!-- Process Section Start -->
  <div id="processus" style="padding: 4rem 1rem; background: #f1f5f9;">
    <div style="max-width: 80rem; margin: 0 auto;">
      <div style="text-align: center; margin-bottom: 3rem;">
        <h6 style="color: #2563eb; font-size: 0.875rem; font-weight: 600; text-transform: uppercase; letter-spacing: 0.1em; margin-bottom: 0.75rem;">Nos étapes</h6>
        <h2 style="font-size: 2.25rem; font-weight: bold; margin-bottom: 1rem; color: #1e293b;">
          Le <span style="color: #2563eb;">Processus TGV</span> en 5 Étapes
        </h2>
        <p style="font-size: 1.25rem; color: #475569; max-width: 42rem; margin: 0 auto;">
          Un parcours structuré, éthique et respectueux de votre dignité
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(150px, 1fr)); gap: 1rem; margin-bottom: 2rem;">
        <!-- Step 1 -->
        <div style="position: relative; background: white; border-radius: 0.5rem; padding: 1.5rem; text-align: center;">
          <div style="position: absolute; top: -1.5rem; left: 50%; transform: translateX(-50%); width: 3rem; height: 3rem; background: #2563eb; color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.25rem; font-weight: bold;">1</div>
          <h3 style="font-size: 1.25rem; font-weight: bold; color: #1e293b; margin-top: 1rem; margin-bottom: 0.75rem;">Collecte</h3>
          <p style="font-size: 0.875rem; color: #475569;">Entretiens approfondis pour capturer vos récits et expériences.</p>
          <div style="margin-top: 1rem; color: #2563eb; font-weight: 600;">📋 Enregistrement</div>
        </div>

        <!-- Step 2 -->
        <div style="position: relative; background: white; border-radius: 0.5rem; padding: 1.5rem; text-align: center;">
          <div style="position: absolute; top: -1.5rem; left: 50%; transform: translateX(-50%); width: 3rem; height: 3rem; background: #2563eb; color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.25rem; font-weight: bold;">2</div>
          <h3 style="font-size: 1.25rem; font-weight: bold; color: #1e293b; margin-top: 1rem; margin-bottom: 0.75rem;">Rédaction</h3>
          <p style="font-size: 0.875rem; color: #475569;">Transformation en leçons de vie par nos experts.</p>
          <div style="margin-top: 1rem; color: #2563eb; font-weight: 600;">✍️ Manuscrit</div>
        </div>

        <!-- Step 3 -->
        <div style="position: relative; background: white; border-radius: 0.5rem; padding: 1.5rem; text-align: center;">
          <div style="position: absolute; top: -1.5rem; left: 50%; transform: translateX(-50%); width: 3rem; height: 3rem; background: #2563eb; color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.25rem; font-weight: bold;">3</div>
          <h3 style="font-size: 1.25rem; font-weight: bold; color: #1e293b; margin-top: 1rem; margin-bottom: 0.75rem;">Édition</h3>
          <p style="font-size: 0.875rem; color: #475569;">Production professionnelle du document.</p>
          <div style="margin-top: 1rem; color: #2563eb; font-weight: 600;">📚 Publication</div>
        </div>

        <!-- Step 4 -->
        <div style="position: relative; background: white; border-radius: 0.5rem; padding: 1.5rem; text-align: center;">
          <div style="position: absolute; top: -1.5rem; left: 50%; transform: translateX(-50%); width: 3rem; height: 3rem; background: #2563eb; color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.25rem; font-weight: bold;">4</div>
          <h3 style="font-size: 1.25rem; font-weight: bold; color: #1e293b; margin-top: 1rem; margin-bottom: 0.75rem;">Sécurisation</h3>
          <p style="font-size: 0.875rem; color: #475569;">Protection juridique de votre patrimoine.</p>
          <div style="margin-top: 1rem; color: #2563eb; font-weight: 600;">🔒 Protégé</div>
        </div>

        <!-- Step 5 -->
        <div style="position: relative; background: white; border-radius: 0.5rem; padding: 1.5rem; text-align: center;">
          <div style="position: absolute; top: -1.5rem; left: 50%; transform: translateX(-50%); width: 3rem; height: 3rem; background: #2563eb; color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.25rem; font-weight: bold;">5</div>
          <h3 style="font-size: 1.25rem; font-weight: bold; color: #1e293b; margin-top: 1rem; margin-bottom: 0.75rem;">Dédicace</h3>
          <p style="font-size: 0.875rem; color: #475569;">Cérémonie de consécration officielle.</p>
          <div style="margin-top: 1rem; color: #2563eb; font-weight: 600;">🎉 Consacré</div>
        </div>
      </div>

      <!-- Timeline -->
      <div style="background: white; border-radius: 0.5rem; padding: 2rem; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);">
        <h3 style="font-size: 1.5rem; font-weight: bold; margin-bottom: 1.5rem; color: #1e293b;">Durée du processus TGV</h3>
        <div style="display: grid; gap: 1rem;">
          <div style="display: flex; align-items: center;">
            <span style="display: inline-block; width: 2rem; height: 2rem; background: #2563eb; color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 0.75rem; font-weight: bold; flex-shrink: 0;">1</span>
            <div style="flex: 1;">
              <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 0.25rem;">
                <span style="font-weight: 600; color: #1e293b;">Collecte & Rédaction</span>
                <span style="color: #475569;">3-6 mois</span>
              </div>
              <div style="width: 100%; background: #e2e8f0; border-radius: 9999px; height: 0.5rem;">
                <div style="background: #2563eb; height: 0.5rem; border-radius: 9999px; width: 40%;"></div>
              </div>
            </div>
          </div>
          <div style="display: flex; align-items: center;">
            <span style="display: inline-block; width: 2rem; height: 2rem; background: #2563eb; color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 0.75rem; font-weight: bold; flex-shrink: 0;">2</span>
            <div style="flex: 1;">
              <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 0.25rem;">
                <span style="font-weight: 600; color: #1e293b;">Édition & Production</span>
                <span style="color: #475569;">2-3 mois</span>
              </div>
              <div style="width: 100%; background: #e2e8f0; border-radius: 9999px; height: 0.5rem;">
                <div style="background: #2563eb; height: 0.5rem; border-radius: 9999px; width: 25%;"></div>
              </div>
            </div>
          </div>
          <div style="display: flex; align-items: center;">
            <span style="display: inline-block; width: 2rem; height: 2rem; background: #2563eb; color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 0.75rem; font-weight: bold; flex-shrink: 0;">3</span>
            <div style="flex: 1;">
              <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 0.25rem;">
                <span style="font-weight: 600; color: #1e293b;">Sécurisation légale</span>
                <span style="color: #475569;">1-2 mois</span>
              </div>
              <div style="width: 100%; background: #e2e8f0; border-radius: 9999px; height: 0.5rem;">
                <div style="background: #2563eb; height: 0.5rem; border-radius: 9999px; width: 15%;"></div>
              </div>
            </div>
          </div>
          <div style="display: flex; align-items: center;">
            <span style="display: inline-block; width: 2rem; height: 2rem; background: #2563eb; color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 0.75rem; font-weight: bold; flex-shrink: 0;">4</span>
            <div style="flex: 1;">
              <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 0.25rem;">
                <span style="font-weight: 600; color: #1e293b;">Cérémonie de dédicace</span>
                <span style="color: #475569;">Flexible</span>
              </div>
              <div style="width: 100%; background: #e2e8f0; border-radius: 9999px; height: 0.5rem;">
                <div style="background: #2563eb; height: 0.5rem; border-radius: 9999px; width: 20%;"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Process Section End -->

  <!-- CTA Section Start -->
  <div style="padding: 4rem 1rem; background: linear-gradient(to right, #2563eb, #a855f7); color: white;">
    <div style="max-width: 48rem; margin: 0 auto; text-align: center;">
      <h2 style="font-size: 2.25rem; font-weight: bold; margin-bottom: 1rem;">Prêt à préserver votre patrimoine ?</h2>
      <p style="font-size: 1.25rem; margin-bottom: 2rem; color: #e0e7ff;">
        Commencez votre Trajet Global de Vie dès aujourd'hui. Contactez-nous pour une consultation gratuite et sans engagement.
      </p>
      <div style="display: flex; flex-direction: column; gap: 1rem; justify-content: center;">
        <a href="tel:+22670256363" style="display: inline-block; background: white; color: #2563eb; font-weight: bold; padding: 0.75rem 2rem; border-radius: 0.5rem; text-decoration: none;">
          📞 Appeler: +226 70 25 63 63
        </a>
        <a href="mailto:contact@impact-plus.ci" style="display: inline-block; border: 2px solid white; color: white; font-weight: bold; padding: 0.75rem 2rem; border-radius: 0.5rem; text-decoration: none;">
          ✉️ Envoyer un email
        </a>
      </div>
    </div>
  </div>
  <!-- CTA Section End -->

  <!-- Footer Start -->
  <footer style="background: #0f172a; color: #cbd5e1; padding: 3rem 1rem;">
    <div style="max-width: 80rem; margin: 0 auto;">
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 2rem; margin-bottom: 2rem;">
        <div>
          <h3 style="color: white; font-bold; font-size: 1.125rem; margin-bottom: 1rem;">Institut IMPACT Plus</h3>
          <p style="font-size: 0.875rem; color: #94a3b8; margin-bottom: 1rem;">
            Experts en accompagnement du patrimoine familial et transmission de valeurs.
          </p>
        </div>

        <div>
          <h4 style="color: white; font-bold; margin-bottom: 1rem;">Nos Offres</h4>
          <ul style="font-size: 0.875rem; display: grid; gap: 0.5rem;">
            <li><a href="#" style="color: #cbd5e1; text-decoration: none;">Platinum</a></li>
            <li><a href="#" style="color: #cbd5e1; text-decoration: none;">Diamant</a></li>
            <li><a href="#" style="color: #cbd5e1; text-decoration: none;">Or</a></li>
            <li><a href="#" style="color: #cbd5e1; text-decoration: none;">Argent</a></li>
          </ul>
        </div>

        <div>
          <h4 style="color: white; font-bold; margin-bottom: 1rem;">Ressources</h4>
          <ul style="font-size: 0.875rem; display: grid; gap: 0.5rem;">
            <li><a href="#" style="color: #cbd5e1; text-decoration: none;">Blog</a></li>
            <li><a href="#" style="color: #cbd5e1; text-decoration: none;">Documentation</a></li>
            <li><a href="#" style="color: #cbd5e1; text-decoration: none;">FAQ</a></li>
            <li><a href="#" style="color: #cbd5e1; text-decoration: none;">Témoignages</a></li>
          </ul>
        </div>
      </div>

      <div style="border-top: 1px solid #334155; padding-top: 2rem;">
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; margin-bottom: 1rem;">
          <div>
            <h4 style="color: white; font-bold; margin-bottom: 0.75rem;">Nos Coordonnées</h4>
            <p style="font-size: 0.875rem; margin-bottom: 0.5rem;">
              <strong>Téléphone :</strong> <a href="tel:+22670256363" style="color: #60a5fa;">+226 70 25 63 63</a>
            </p>
            <p style="font-size: 0.875rem; margin-bottom: 0.5rem;">
              <strong>Email :</strong> <a href="mailto:contact@impact-plus.ci" style="color: #60a5fa;">contact@impact-plus.ci</a>
            </p>
            <p style="font-size: 0.875rem;">
              <strong>Adresse :</strong> Abidjan, Côte d'Ivoire
            </p>
          </div>
          <div>
            <h4 style="color: white; font-bold; margin-bottom: 0.75rem;">Newsletter</h4>
            <form style="display: flex; gap: 0.5rem;">
              <input type="email" placeholder="Votre email" style="flex: 1; padding: 0.5rem; border-radius: 0.375rem; background: #1e293b; color: white; border: none;">
              <button type="submit" style="background: #2563eb; color: white; font-weight: bold; padding: 0.5rem 1rem; border: none; border-radius: 0.375rem; cursor: pointer;">S'abonner</button>
            </form>
          </div>
        </div>

        <div style="border-top: 1px solid #334155; padding-top: 1rem; text-align: center; font-size: 0.875rem;">
          <p>&copy; 2026 Institut IMPACT Plus. Tous droits réservés. Toute vie mérite d'être transmise.</p>
        </div>
      </div>
    </div>
  </footer>
  <!-- Footer End -->
</div>

@endsection
