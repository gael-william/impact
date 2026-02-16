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
  <div class="hero" style="position: relative; overflow: hidden;">
    <style>
      .hero{background: linear-gradient(135deg,#0f172a 0%,#111827 60%); color:#fff; padding:6rem 1rem}
      .hero .decor{position:absolute;inset:0;opacity:.12;pointer-events:none}
      .hero .decor .blob{position:absolute;width:24rem;height:24rem;border-radius:9999px;filter:blur(80px);transform:translate3d(0,0,0)}
      .hero .blob.blue{left:-6rem;top:-4rem;background:#3b82f6}
      .hero .blob.purple{right:-6rem;top:-6rem;background:#a855f7}
      .hero .container{position:relative;max-width:64rem;margin:0 auto;text-align:center}
      .brand-badge{color:#93c5fd;font-size:1.0625rem;font-weight:600;text-transform:uppercase;letter-spacing:.1em;margin-bottom:.75rem;display:inline-flex;align-items:center;gap:.5rem}
      .brand-badge .logo-circle{width:2rem;height:2rem;border-radius:9999px;background:linear-gradient(45deg,#fff2 0,#fff2 100%);display:inline-flex;align-items:center;justify-content:center;color:#0f172a;font-weight:700}
      h1.hero-title{font-size:3.75rem;font-weight:800;margin-bottom:1rem;line-height:1.05;display:inline-block;transform-origin:center}
      .hero-sub{font-size:1.125rem;color:#cbd5e1;margin-bottom:1.5rem;max-width:48rem;margin-left:auto;margin-right:auto}
      .cta-group{display:flex;gap:1rem;justify-content:center;flex-wrap:wrap}

      /* Improved title contrast */
      h1.hero-title{color:#ffffff;text-shadow:0 10px 30px rgba(2,6,23,0.7);padding:.25rem .6rem;border-radius:.5rem;background:linear-gradient(90deg,rgba(255,255,255,0.03),rgba(255,255,255,0.01));z-index:3;display:inline-block}

      /* Stats cards */
      .stat-card{background:white;padding:1.5rem;border-radius:.5rem;box-shadow:0 10px 15px -3px rgba(2,6,23,.06);text-align:center;transition:transform .28s ease,box-shadow .28s ease}
      .stat-card:hover{transform:translateY(-6px);box-shadow:0 18px 30px -12px rgba(2,6,23,.15)}

      /* Offre cards */
      .offre-card{background:white;border-radius:.5rem;box-shadow:0 6px 10px -4px rgba(2,6,23,.08);padding:1.5rem;border-left:4px solid transparent;transition:transform .28s ease,box-shadow .28s ease,border-color .2s}
      .offre-card:hover{transform:translateY(-8px) rotate(-.5deg);box-shadow:0 24px 40px -20px rgba(2,6,23,.18)}

      /* Process / steps */
      .process-card{position:relative;background:white;border-radius:.5rem;padding:1.5rem;text-align:center;transition:transform .28s ease,box-shadow .28s ease}
      .process-card:hover{transform:translateY(-6px)}

      /* Progress fill animation */
      .progress-fill{width:0;transition:width .9s cubic-bezier(.2,.9,.2,1);height:100%;border-radius:9999px}

      /* Timeline icon illustrations */
      .timeline{background:white;border-radius:.5rem;padding:2rem;box-shadow:0 4px 6px -1px rgba(0,0,0,0.06)}
      .timeline-row{display:flex;align-items:center;gap:1rem}
      .timeline-icon{width:3.25rem;height:3.25rem;border-radius:9999px;display:flex;align-items:center;justify-content:center;background:linear-gradient(135deg,#eef2ff,#f8fafc);box-shadow:0 8px 18px -8px rgba(2,6,23,.12);flex-shrink:0}
      .timeline-icon.dark{background:linear-gradient(135deg,#1e293b,#111827);color:#fff}
      .timeline-label{flex:1}
      .timeline-title{font-weight:700;color:#0f172a}
      .timeline-sub{color:#475569;font-size:.95rem}

      /* SVG stroke animation */
      .icon-animate svg{width:2rem;height:2rem}
      .icon-animate .path{stroke:#2563eb;stroke-width:1.6;fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-dasharray:120;stroke-dashoffset:120;transition:stroke-dashoffset .9s cubic-bezier(.2,.9,.2,1)}
      .reveal.in-view .icon-animate .path{stroke-dashoffset:0}

      /* subtle bounce */
      .timeline-icon .dot{width:.5rem;height:.5rem;border-radius:50%;background:#2563eb;box-shadow:0 6px 14px -8px #2563eb}


      /* Animated icon badges */
      .icon-row{display:flex;gap:.75rem;justify-content:center;margin-top:1.25rem}
      .icon-badge{background:rgba(255,255,255,.06);padding:.6rem .9rem;border-radius:9999px;display:flex;align-items:center;gap:.5rem;transition:transform .25s ease,background .25s;cursor:pointer}
      .icon-badge:hover{transform:translateY(-6px) rotate(-2deg);background:rgba(255,255,255,.12)}
      .icon-badge svg{width:1.25rem;height:1.25rem;flex-shrink:0}

      /* Reveal on scroll */
      .reveal{opacity:0;transform:translateY(18px);transition:opacity .6s ease,transform .6s ease}
      .reveal.in-view{opacity:1;transform:none}

      /* Floating emphasis */
      @keyframes floaty{0%{transform:translateY(0)}50%{transform:translateY(-8px)}100%{transform:translateY(0)}}
      .floaty{animation:floaty 6s ease-in-out infinite}

      /* Respect prefers-reduced-motion */
      @media (prefers-reduced-motion: reduce){.floaty, .reveal{animation:none;transition:none}}
    </style>

    <div class="decor">
      <div class="blob blue"></div>
      <div class="blob purple"></div>
    </div>

    <div class="container">
      <div class="brand-badge reveal" data-delay="0"> 
        <div class="logo-circle">IP</div>
        Institut IMPACT Plus
      </div>

      <h1 class="hero-title reveal floaty" data-delay="100">Toute vie mérite d'être transmise</h1>

      <p class="hero-sub reveal" data-delay="200">
        <strong>Trajet Global de Vie (TGV)</strong> : Un processus d'accompagnement respectueux et structuré pour préserver votre patrimoine, honorer vos leçons de vie et consacrer votre héritage.
      </p>

      <div class="cta-group reveal" data-delay="300">
        <a href="#offres" class="btn btn-primary" style="padding:.75rem 1.75rem;border-radius:.5rem;font-weight:700;">Découvrir nos offres</a>
        <a href="tel:+22670256363" class="btn btn-outline-light" style="padding:.75rem 1.25rem;border-radius:.5rem;font-weight:700;">📞 +226 70 25 63 63</a>
      </div>

      <div class="icon-row reveal" data-delay="350" aria-hidden="false">
        <div class="icon-badge" title="Collecte" data-target="Collecte">
          <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12 2v8" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M6 12h12" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
          <div style="font-size:.9rem;color:#e6eefc;font-weight:600">Collecte</div>
        </div>
        <div class="icon-badge" title="Rédaction" data-target="Rédaction">
          <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4 20h16" stroke="#fff" stroke-width="1.5" stroke-linecap="round"/><path d="M7 4h10v7H7z" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
          <div style="font-size:.9rem;color:#e6eefc;font-weight:600">Rédaction</div>
        </div>
        <div class="icon-badge" title="Édition" data-target="Édition">
          <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3 7h18" stroke="#fff" stroke-width="1.5" stroke-linecap="round"/><path d="M6 11h12" stroke="#fff" stroke-width="1.5" stroke-linecap="round"/></svg>
          <div style="font-size:.9rem;color:#e6eefc;font-weight:600">Édition</div>
        </div>
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
          <div class="stat-card reveal" data-delay="400" style="text-align:center;">
            <div style="font-size: 2.25rem; font-weight: bold; color: #2563eb; margin-bottom: 0.5rem;">500+</div>
            <p style="color: #475569; font-weight: 600;">Familles accompagnées</p>
          </div>
          <div class="stat-card reveal" data-delay="480" style="text-align:center;">
            <div style="font-size: 2.25rem; font-weight: bold; color: #2563eb; margin-bottom: 0.5rem;">20+</div>
            <p style="color: #475569; font-weight: 600;">Années d'expertise</p>
          </div>
          <div class="stat-card reveal" data-delay="560" style="text-align:center;">
            <div style="font-size: 2.25rem; font-weight: bold; color: #2563eb; margin-bottom: 0.5rem;">100%</div>
            <p style="color: #475569; font-weight: 600;">Confidentiel</p>
          </div>
          <div class="stat-card reveal" data-delay="640" style="text-align:center;">
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
            <div class="offre-card reveal" data-delay="200" style="border-left: 4px solid #2563eb;">
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
              <a href="{{ route('tgv.form', 'Corpus') }}" style="display: block; text-align: center; width: 100%; background: #2563eb; color: white; font-weight: bold; padding: 0.5rem; border: none; border-radius: 0.375rem; cursor: pointer; text-decoration: none; transition: background 0.3s;" onmouseover="this.style.background='#1e40af';" onmouseout="this.style.background='#2563eb';">Choisir</a>
            </div>

            <!-- Option 2 -->
            <div class="offre-card reveal" data-delay="260" style="border-left: 4px solid #16a34a;">
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
              <a href="{{ route('tgv.form', 'Essentiel') }}" style="display: block; text-align: center; width: 100%; background: #16a34a; color: white; font-weight: bold; padding: 0.5rem; border: none; border-radius: 0.375rem; cursor: pointer; text-decoration: none; transition: background 0.3s;" onmouseover="this.style.background='#15803d';" onmouseout="this.style.background='#16a34a';">Choisir</a>
            </div>

            <!-- Option 3 -->
            <div class="offre-card reveal" data-delay="320" style="border-left: 4px solid #d97706; position: relative;">
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
              <a href="{{ route('tgv.form', 'Avancé') }}" style="display: block; text-align: center; width: 100%; background: #d97706; color: white; font-weight: bold; padding: 0.5rem; border: none; border-radius: 0.375rem; cursor: pointer; text-decoration: none; transition: background 0.3s;" onmouseover="this.style.background='#b45309';" onmouseout="this.style.background='#d97706';">Choisir</a>
            </div>

            <!-- Option 4 -->
            <div class="offre-card reveal" data-delay="380" style="border-left: 4px solid #a855f7;">
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
              <a href="{{ route('tgv.form', 'Consacré') }}" style="display: block; text-align: center; width: 100%; background: #a855f7; color: white; font-weight: bold; padding: 0.5rem; border: none; border-radius: 0.375rem; cursor: pointer; text-decoration: none; transition: background 0.3s;" onmouseover="this.style.background='#9333ea';" onmouseout="this.style.background='#a855f7';">Choisir</a>
            </div>

            <!-- Option 5 -->
            <div class="offre-card reveal" data-delay="440" style="background: linear-gradient(to bottom right, #1e293b, #374151); color: white; border-left: 4px solid #facc15;">
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
              <a href="{{ route('tgv.form', 'VIP') }}" style="display: block; text-align: center; width: 100%; background: #facc15; color: #1f2937; font-weight: bold; padding: 0.5rem; border: none; border-radius: 0.375rem; cursor: pointer; text-decoration: none; transition: background 0.3s;" onmouseover="this.style.background='#eab308';" onmouseout="this.style.background='#facc15';">Demander un devis</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Other Categories -->
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 1.5rem;">
        <div class="offre-card reveal" data-delay="520" style="background: linear-gradient(to bottom right, rgba(206, 244, 254, 0.5), rgba(191, 219, 254, 0.5)); padding: 2rem; border-radius: 0.75rem; border: 2px solid #cffafe;">
          <h3 style="font-size: 1.5rem; font-weight: bold; margin-bottom: 0.5rem; color: #0369a1;">DIAMANT</h3>
          <p style="color: #475569; margin-bottom: 1rem;">L'accompagnement Premium pour votre patrimoine</p>
          <a href="{{ route('tgv.form', 'Diamant') }}" style="display: block; text-align: center; width: 100%; background: #0891b2; color: white; font-weight: bold; padding: 0.5rem; border: none; border-radius: 0.375rem; cursor: pointer; text-decoration: none; transition: background 0.3s;" onmouseover="this.style.backgroundColor='#0e7490';" onmouseout="this.style.backgroundColor='#0891b2';">Découvrir</a>
        </div>

        <div class="offre-card reveal" data-delay="580" style="background: linear-gradient(to bottom right, rgba(254, 243, 199, 0.5), rgba(253, 224, 71, 0.5)); padding: 2rem; border-radius: 0.75rem; border: 2px solid #fcd34d;">
          <h3 style="font-size: 1.5rem; font-weight: bold; margin-bottom: 0.5rem; color: #b45309;">OR</h3>
          <p style="color: #475569; margin-bottom: 1rem;">L'accompagnement équilibré et complet</p>
          <a href="{{ route('tgv.form', 'Or') }}" style="display: block; text-align: center; width: 100%; background: #d97706; color: white; font-weight: bold; padding: 0.5rem; border: none; border-radius: 0.375rem; cursor: pointer; text-decoration: none; transition: background 0.3s;" onmouseover="this.style.background='#b45309';" onmouseout="this.style.background='#d97706';">Découvrir</a>
        </div>

        <div class="offre-card reveal" data-delay="640" style="background: linear-gradient(to bottom right, rgba(226, 232, 240, 0.5), rgba(203, 213, 225, 0.5)); padding: 2rem; border-radius: 0.75rem; border: 2px solid #cbd5e1;">
          <h3 style="font-size: 1.5rem; font-weight: bold; margin-bottom: 0.5rem; color: #334155;">ARGENT</h3>
          <p style="color: #475569; margin-bottom: 1rem;">L'accompagnement essentiel et accessible</p>
          <a href="{{ route('tgv.form', 'Argent') }}" style="display: block; text-align: center; width: 100%; background: #475569; color: white; font-weight: bold; padding: 0.5rem; border: none; border-radius: 0.375rem; cursor: pointer; text-decoration: none; transition: background 0.3s;" onmouseover="this.style.background='#334155';" onmouseout="this.style.background='#475569';">Découvrir</a>
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
      <div class="timeline" aria-hidden="false">
        <h3 style="font-size: 1.5rem; font-weight: bold; margin-bottom: 1.5rem; color: #1e293b;">Durée du processus TGV</h3>
        <div style="display:grid;gap:1rem;">
          <div class="timeline-row reveal" data-delay="200">
            <div class="timeline-icon">
              <div class="icon-animate">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><circle class="path" cx="12" cy="12" r="9" stroke-opacity=".18"/></svg>
              </div>
            </div>
            <div class="timeline-label">
              <div class="timeline-title">Collecte & Rédaction</div>
              <div class="timeline-sub">3-6 mois • Entretiens approfondis et rédactions</div>
            </div>
          </div>

          <div class="timeline-row reveal" data-delay="280">
            <div class="timeline-icon">
              <div class="icon-animate">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path class="path" d="M4 20h16M7 4h10v7H7z" /></svg>
              </div>
            </div>
            <div class="timeline-label">
              <div class="timeline-title">Édition & Production</div>
              <div class="timeline-sub">2-3 mois • Mise en forme professionnelle et impression</div>
            </div>
          </div>

          <div class="timeline-row reveal" data-delay="360">
            <div class="timeline-icon dark">
              <div class="icon-animate">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path class="path" d="M12 2v8M6 12h12" stroke="#fff"/></svg>
              </div>
            </div>
            <div class="timeline-label">
              <div class="timeline-title">Sécurisation légale</div>
              <div class="timeline-sub">1-2 mois • Protection juridique de votre patrimoine</div>
            </div>
          </div>

          <div class="timeline-row reveal" data-delay="440">
            <div class="timeline-icon">
              <div class="icon-animate">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path class="path" d="M3 10l1.5-1.5L12 16l9.5-7.5L22 10"/></svg>
              </div>
            </div>
            <div class="timeline-label">
              <div class="timeline-title">Cérémonie de dédicace</div>
              <div class="timeline-sub">Flexible • Célébration et consécration</div>
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
  <script>
    (function(){
      document.addEventListener('DOMContentLoaded', function(){
        // Reveal on scroll with small stagger
        var reveals = document.querySelectorAll('.reveal');
        var io = new IntersectionObserver(function(entries){
          entries.forEach(function(e){
            if(e.isIntersecting){
              var el = e.target; var delay = parseInt(el.getAttribute('data-delay')||0);
              setTimeout(function(){ el.classList.add('in-view'); }, delay);
              io.unobserve(el);
            }
          });
        }, {threshold: 0.18});
        reveals.forEach(function(r){ io.observe(r); });

        // Icon badges click -> smooth scroll to offres and pulse the chosen box
        var badges = document.querySelectorAll('.icon-badge');
        badges.forEach(function(b){
          b.addEventListener('click', function(){
            var target = document.getElementById('offres');
            if(target){ target.scrollIntoView({behavior:'smooth',block:'start'}); }
            b.animate([{transform:'scale(1)'},{transform:'scale(1.06)'},{transform:'scale(1)'}],{duration:350,easing:'ease-out'});
          });
        });

        // Subtle parallax on mouse move for blobs
        var hero = document.querySelector('.hero');
        if(hero){
          hero.addEventListener('mousemove', function(ev){
            var w = window.innerWidth; var h = window.innerHeight;
            var rx = (ev.clientX - w/2)/w; var ry = (ev.clientY - h/2)/h;
            var blue = hero.querySelector('.blob.blue');
            var purple = hero.querySelector('.blob.purple');
            if(blue) blue.style.transform = 'translate3d(' + (rx*40) + 'px,' + (ry*20) + 'px,0)';
            if(purple) purple.style.transform = 'translate3d(' + (rx*-40) + 'px,' + (ry*-10) + 'px,0)';
          });
        }

        // Animate progress fills when they enter viewport
        var progressFills = document.querySelectorAll('.progress-fill');
        if(progressFills.length){
          var pfIo = new IntersectionObserver(function(entries){
            entries.forEach(function(en){
              if(en.isIntersecting){
                var el = en.target; var p = parseInt(el.getAttribute('data-progress')||0,10);
                el.style.width = p + '%';
                pfIo.unobserve(el);
              }
            });
          }, {threshold:0.25});
          progressFills.forEach(function(pf){ pfIo.observe(pf); });
        }

        // Ensure reveal elements added to IO earlier also trigger progress if present
        // Add small stagger for .offre-card hover pulse on click
        var offreCards = document.querySelectorAll('.offre-card');
        offreCards.forEach(function(c){
          c.addEventListener('click', function(){ c.animate([{transform:'translateY(0)'},{transform:'translateY(-6px)'},{transform:'translateY(0)'}],{duration:320}); });
        });
      });
    })();
  </script>

  <!-- Footer End -->
</div>

@endsection