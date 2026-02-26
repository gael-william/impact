@extends('layouts.app')
@section('content')

<style>
  .tgv-landing {
    --slate-950: #020617;
    --slate-900: #0f172a;
    --slate-800: #1e293b;
    --slate-700: #334155;
    --slate-600: #475569;
    --slate-100: #f1f5f9;
    --silver: #94a3b8;
    --gold: #d4a017;
    --gold-soft: #f8e7b0;
    --diamond: #06b6d4;
    --diamond-soft: #cffafe;
    --plat-main: #0b1f4f;
    --plat-accent: #d4a017;
  }
  .tgv-landing .section-title {
    font-size: .85rem;
    letter-spacing: .08em;
    text-transform: uppercase;
    font-weight: 700;
    color: var(--slate-600);
    margin-bottom: .5rem;
  }
  .tgv-hero {
    background: radial-gradient(circle at 10% 0%, #1d4ed8 0%, transparent 35%),
                radial-gradient(circle at 90% 10%, #0891b2 0%, transparent 35%),
                linear-gradient(135deg, var(--slate-950), var(--slate-900));
    color: #fff;
  }
  .tgv-hero h1 {
    font-size: clamp(2rem, 5vw, 3.5rem);
    font-weight: 800;
    line-height: 1.15;
  }
  .tgv-problem {
    background: linear-gradient(180deg, #fff, #f8fafc);
  }
  .problem-card {
    background: #fff;
    border: 1px solid #e2e8f0;
    border-radius: 1rem;
    padding: 1.25rem;
    box-shadow: 0 10px 30px rgba(15, 23, 42, .06);
  }
  .check-list {
    list-style: none;
    padding: 0;
    margin: 0;
  }
  .check-list li {
    display: flex;
    gap: .75rem;
    align-items: flex-start;
    margin-bottom: .8rem;
  }
  .check-dot {
    width: 1.5rem;
    height: 1.5rem;
    border-radius: 999px;
    background: #0f766e;
    color: #fff;
    font-size: .9rem;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    margin-top: .05rem;
  }
  .step-card {
    background: #fff;
    border: 1px solid #e2e8f0;
    border-radius: 1rem;
    padding: 1.25rem;
    height: 100%;
    box-shadow: 0 8px 24px rgba(15, 23, 42, .06);
  }
  .step-index {
    width: 2rem;
    height: 2rem;
    border-radius: 999px;
    background: #1d4ed8;
    color: #fff;
    font-weight: 700;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    margin-bottom: .8rem;
  }
  .level-card {
    border-radius: 1rem;
    border: 1px solid #e2e8f0;
    padding: 1.25rem;
    height: 100%;
  }
  .silver-card { background: linear-gradient(140deg, #f8fafc, #e2e8f0); }
  .gold-card { background: linear-gradient(140deg, #fff7d9, var(--gold-soft)); }
  .diamond-card { background: linear-gradient(140deg, #ecfeff, var(--diamond-soft)); }
  .plat-card { background: linear-gradient(140deg, #e5ecff, #dbeafe); }
  .tag {
    display: inline-flex;
    align-items: center;
    font-size: .75rem;
    border-radius: 999px;
    padding: .15rem .65rem;
    font-weight: 700;
  }
  .tag-silver { background: #e2e8f0; color: #334155; }
  .tag-gold { background: #f9dd8a; color: #7c4a03; }
  .tag-diamond { background: #a5f3fc; color: #155e75; }
  .tag-plat { background: #1e3a8a; color: #fff; }
  .comparative-shell {
    border: 1px solid #e2e8f0;
    border-radius: 1rem;
    overflow: hidden;
    background: #fff;
    box-shadow: 0 14px 34px rgba(15, 23, 42, .08);
  }
  .comparative-shell table th,
  .comparative-shell table td {
    vertical-align: middle;
    padding: .9rem;
  }
  .price-card {
    border-radius: 1rem;
    border: 1px solid #dbe2ea;
    background: #fff;
    padding: 1.25rem;
    height: 100%;
    box-shadow: 0 10px 24px rgba(2, 6, 23, .06);
  }
  .impact-box {
    background: linear-gradient(135deg, #0b1f4f, #082f49);
    color: #e2e8f0;
    border-radius: 1rem;
    padding: 2rem;
    position: relative;
    overflow: hidden;
  }
  .impact-box::after {
    content: "";
    position: absolute;
    width: 16rem;
    height: 16rem;
    border-radius: 999px;
    right: -5rem;
    top: -5rem;
    background: radial-gradient(circle, rgba(212,160,23,.4), rgba(212,160,23,0));
  }
</style>

<div class="tgv-landing">
  <section class="tgv-hero py-5 py-md-6">
    <div class="container py-4 py-md-5">
      <div class="row justify-content-center text-center">
        <div class="col-lg-10">
          <p class="text-uppercase fw-semibold mb-3" style="letter-spacing:.1em;color:#93c5fd;">Trajet Global de Vie</p>
          <h1 class="mb-4" style="color: #0ed4ea;">Ne partez pas avec des regrets. Transformez votre histoire en héritage durable.</h1>
          <p class="lead text-light mb-4">
            Nous aidons les personnes qui refusent de partir avec des regrets a transformer leur histoire et leurs
            leçons de vie en héritage durable, afin de vivre avec la sérénité d'avoir accompli l'essentiel,
            grâce au Trajet Global de Vie (TGV).
          </p>
          <div class="d-flex flex-column flex-sm-row gap-2 justify-content-center">
            <a href="#fonctionnement" class="btn btn-outline-light btn-lg fw-bold px-4">Découvrir comment ça fonctionne</a>
            <a href="#tarification" class="btn btn-light btn-lg fw-bold px-4">Commencer mon TGV</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="probleme" class="tgv-problem py-5">
    <div class="container">
      <div class="text-center mb-4">
        <p class="section-title">Section 2 - Le Problème</p>
        <h2 class="fw-bold text-dark">Avez-vous déjà pensé à cela ?</h2>
      </div>
      <div class="row g-3 g-md-4">
        <div class="col-md-6">
          <div class="problem-card h-100">
            <h3 class="h4 fw-bold mb-3 text-danger">Et si votre histoire disparaissait ?</h3>
            <p class="text-secondary mb-0">Des décennies d'expérience peuvent s'effacer si elles ne sont pas structurées ni transmises.</p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="problem-card h-100">
            <h3 class="h4 fw-bold mb-3 text-danger">Et si vos enfants ne connaissaient jamais vos leçons de vie ?</h3>
            <p class="text-secondary mb-0">Sans cadre clair, des éléments essentiels restent non transmis et laissent un sentiment d'inachevé.</p>
          </div>
        </div>
      </div>
      <p class="text-center mt-4 mb-0 text-secondary fw-semibold">
        Le regret naît souvent de ce qui n'a pas été transmis. Le TGV vous permet de mettre votre vie en ordre, avant qu'il ne soit trop tard.
      </p>
    </div>
  </section>

  <section id="transformation" class="py-5 bg-white">
    <div class="container">
      <div class="row align-items-center g-4">
        <div class="col-lg-5">
          <p class="section-title">Section 3 - La Transformation</p>
          <h2 class="fw-bold">Avec le Trajet Global de Vie (TGV), vous :</h2>
          <p class="text-secondary mb-0">Vous ne laissez plus le hasard décider de votre mémoire.</p>
        </div>
        <div class="col-lg-7">
          <ul class="check-list">
            <li><span class="check-dot">✓</span><span>Structurez votre parcours</span></li>
            <li><span class="check-dot">✓</span><span>Formalisez vos leçons de vie</span></li>
            <li><span class="check-dot">✓</span><span>Transmettez un héritage clair à votre famille</span></li>
            <li><span class="check-dot">✓</span><span>Apportez de la sérénité à votre avenir</span></li>
            <li><span class="check-dot">✓</span><span>Laissez une trace durable</span></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section id="fonctionnement" class="py-5" style="background:#f8fafc;">
    <div class="container">
      <div class="text-center mb-4">
        <p class="section-title">Section 4 - Comment fonctionne le TGV ?</p>
        <h2 class="fw-bold text-dark">Un processus structuré, humain et respectueux</h2>
      </div>
      <div class="row g-3 g-md-4">
        <div class="col-sm-6 col-lg-3">
          <div class="step-card">
            <span class="step-index">1</span>
            <h3 class="h5 fw-bold">Collecte & Mémoire</h3>
            <p class="text-secondary mb-0">Entretiens approfondis, témoignages, archives.</p>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3">
          <div class="step-card">
            <span class="step-index">2</span>
            <h3 class="h5 fw-bold">Rédaction Structurée</h3>
            <p class="text-secondary mb-0">Organisation fidèle de votre parcours et de vos leçons.</p>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3">
          <div class="step-card">
            <span class="step-index">3</span>
            <h3 class="h5 fw-bold">Édition Professionnelle</h3>
            <p class="text-secondary mb-0">Mise en forme, corrections, finalisation.</p>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3">
          <div class="step-card">
            <span class="step-index">4</span>
            <h3 class="h5 fw-bold">Transmission & Consécration</h3>
            <p class="text-secondary mb-0">Remise du manuscrit, impression, dédicace si souhaitée.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="excellence" class="py-5 bg-white">
    <div class="container">
      <div class="text-center mb-4">
        <p class="section-title">Section 5 - Niveaux d'Excellence</p>
        <h2 class="fw-bold text-dark">Choisissez votre niveau d'excellence TGV</h2>
      </div>
      <div class="row g-3 g-md-4">
        <div class="col-md-6 col-xl-3">
          <div class="level-card silver-card">
            <span class="tag tag-silver mb-3">Argent</span>
            <h3 class="h5 fw-bold">Équipe certifiée</h3>
            <p class="mb-0 text-secondary">BAC+3</p>
          </div>
        </div>
        <div class="col-md-6 col-xl-3">
          <div class="level-card gold-card">
            <span class="tag tag-gold mb-3">Or</span>
            <h3 class="h5 fw-bold">Équipe expérimentée</h3>
            <p class="mb-0 text-secondary">Auteurs publiés, Master 2</p>
          </div>
        </div>
        <div class="col-md-6 col-xl-3">
          <div class="level-card diamond-card">
            <span class="tag tag-diamond mb-3">Diamant</span>
            <h3 class="h5 fw-bold">Équipe experte</h3>
            <p class="mb-0 text-secondary">Docteurs, auteurs de 2 livres</p>
          </div>
        </div>
        <div class="col-md-6 col-xl-3">
          <div class="level-card plat-card">
            <span class="tag tag-plat mb-3">Platinium</span>
            <h3 class="h5 fw-bold">Excellence académique</h3>
            <p class="mb-0 text-secondary">Professeurs agrégés, auteurs de 3 livres</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="comparatif" class="py-5" style="background:#f8fafc;">
    <div class="container">
      <div class="text-center mb-4">
        <p class="section-title">Section 6 - Tableau Comparatif</p>
        <h2 class="fw-bold text-dark">Lisible, premium et sans surcharge</h2>
      </div>

      <div class="d-md-none">
        <div class="row g-3">
          <div class="col-12">
            <div class="price-card border-start border-4" style="border-color:var(--silver)!important;">
              <h3 class="h5 mb-2">🥈 Argent</h3>
              <p class="mb-1"><strong>Niveau d'équipe:</strong> Équipe certifiée</p>
              <p class="mb-1"><strong>Approfondissement:</strong> Standard</p>
              <p class="mb-0 text-secondary"><strong>Positionnement:</strong> Structuré</p>
            </div>
          </div>
          <div class="col-12">
            <div class="price-card border-start border-4" style="border-color:var(--gold)!important;">
              <h3 class="h5 mb-2">🥇 Or</h3>
              <p class="mb-1"><strong>Niveau d'équipe:</strong> Équipe expérimentée</p>
              <p class="mb-1"><strong>Approfondissement:</strong> Approfondi</p>
              <p class="mb-0 text-secondary"><strong>Positionnement:</strong> Approfondi</p>
            </div>
          </div>
          <div class="col-12">
            <div class="price-card border-start border-4" style="border-color:var(--diamond)!important;">
              <h3 class="h5 mb-2">💎 Diamant</h3>
              <p class="mb-1"><strong>Niveau d'équipe:</strong> Équipe experte</p>
              <p class="mb-1"><strong>Approfondissement:</strong> Très approfondi</p>
              <p class="mb-0 text-secondary"><strong>Positionnement:</strong> Patrimonial</p>
            </div>
          </div>
          <div class="col-12">
            <div class="price-card border-start border-4" style="border-color:var(--plat-main)!important;">
              <h3 class="h5 mb-2">👑 Platinium</h3>
              <p class="mb-1"><strong>Niveau d'équipe:</strong> Excellence académique</p>
              <p class="mb-1"><strong>Approfondissement:</strong> Excellence complète</p>
              <p class="mb-0 text-secondary"><strong>Positionnement:</strong> Prestige</p>
            </div>
          </div>
        </div>
      </div>

      <div class="comparative-shell d-none d-md-block">
        <table class="table table-bordered table-hover mb-0">
          <thead class="table-light">
            <tr>
              <th>Critères</th>
              <th>🥈 Argent</th>
              <th>🥇 Or</th>
              <th>💎 Diamant</th>
              <th>👑 Platinium</th>
            </tr>
          </thead>
          <tbody>
            <tr><td class="fw-bold">Structure du parcours</td><td>✔</td><td>✔</td><td>✔</td><td>✔</td></tr>
            <tr><td class="fw-bold">Formalisation des leçons de vie</td><td>✔</td><td>✔</td><td>✔</td><td>✔</td></tr>
            <tr><td class="fw-bold">Niveau d'approfondissement</td><td>Standard</td><td>Approfondi</td><td>Très approfondi</td><td>Excellence complète</td></tr>
            <tr><td class="fw-bold">Niveau de l'équipe rédaction</td><td>Équipe certifiée</td><td>Équipe expérimentée</td><td>Équipe experte</td><td>Équipe d'excellence académique</td></tr>
            <tr><td class="fw-bold">Accompagnement personnalisé</td><td>Standard</td><td>Renforcé</td><td>Premium</td><td>Intégral & stratégique</td></tr>
            <tr><td class="fw-bold">Mise en valeur patrimoniale</td><td>—</td><td>✔</td><td>✔</td><td>✔</td></tr>
            <tr><td class="fw-bold">Organisation dédicace</td><td>Option</td><td>Option</td><td>✔</td><td>✔ Prioritaire</td></tr>
            <tr><td class="fw-bold">Positionnement</td><td>Structuré</td><td>Approfondi</td><td>Patrimonial</td><td>Prestige</td></tr>
          </tbody>
        </table>
      </div>

      <p class="text-center mt-4 mb-0 text-secondary fw-semibold">
        Quel que soit votre choix, vous bénéficiez d'une méthode structurée, d'une équipe certifiée,
        d'un accompagnement respectueux et d'un héritage durable.
      </p>
    </div>
  </section>

  <section id="tarification" class="py-5 bg-white">
    <div class="container">
      <div class="text-center mb-4">
        <p class="section-title">Section 7 - Tarification TGV Essentiel</p>
        <h2 class="fw-bold text-dark">Nos offres</h2>
      </div>
      <div class="row g-3 g-lg-4">
        <div class="col-sm-6 col-xl-3">
          <div class="price-card h-100">
            <p class="tag tag-silver">Argent</p>
            <h3 class="h4 fw-bold mt-3">1 000 000 FCFA</h3>
            <p class="text-secondary mb-4">Accessible, structuré et professionnel.</p>
            <a href="{{ route('tgv.form', 'Argent') }}" class="btn btn-dark w-100">Commencer</a>
          </div>
        </div>
        <div class="col-sm-6 col-xl-3">
          <div class="price-card h-100">
            <p class="tag tag-gold">Or</p>
            <h3 class="h4 fw-bold mt-3">2 000 000 FCFA</h3>
            <p class="text-secondary mb-4">Approfondissement et richesse narrative.</p>
            <a href="{{ route('tgv.form', 'Or') }}" class="btn w-100" style="background:var(--gold);color:#1f2937;">Commencer</a>
          </div>
        </div>
        <div class="col-sm-6 col-xl-3">
          <div class="price-card h-100">
            <p class="tag tag-diamond">Diamant</p>
            <h3 class="h4 fw-bold mt-3">4 000 000 FCFA</h3>
            <p class="text-secondary mb-4">Transmission ambitieuse et profondeur analytique.</p>
            <a href="{{ route('tgv.form', 'Diamant') }}" class="btn w-100" style="background:var(--diamond);color:#083344;">Commencer</a>
          </div>
        </div>
        <div class="col-sm-6 col-xl-3">
          <div class="price-card h-100">
            <p class="tag tag-plat">Platinium</p>
            <h3 class="h4 fw-bold mt-3">6 000 000 FCFA</h3>
            <p class="text-secondary mb-4">Excellence académique et prestige total.</p>
            <a href="{{ route('tgv.form', 'Platinium') }}" class="btn w-100" style="background:var(--plat-main);color:#fff;">Commencer</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="impact" class="py-5" style="background:#f8fafc;">
    <div class="container">
      <div class="impact-box">
        <p class="section-title text-light">Section 8 - Impact & Emploi</p>
        <h2 class="fw-bold mb-3 text-white">Votre héritage devient aussi une contribution à l'avenir</h2>
        <p class="mb-3">
          Chaque Trajet Global de Vie contribue à la formation de jeunes, à la création d'emplois culturels,
          au renforcement de notre souveraineté culturelle et à la structuration d'une filière éditoriale locale.
        </p>
      </div>
    </div>
  </section>

  <section class="py-5" style="background:linear-gradient(90deg,#1d4ed8,#0f172a);">
    <div class="container text-center text-white">
      <h2 class="fw-bold mb-3">Votre histoire mérite d'être transmise.</h2>
      <p class="mb-4 text-light">Ne laissez pas vos leçons de vie se perdre.</p>
      <div class="d-flex flex-column flex-sm-row gap-2 justify-content-center">
        <a href="#tarification" class="btn btn-light fw-bold px-4">Démarrer mon TGV</a>
        <a href="https://calendly.com/app/scheduling/meeting_types/user/me" class="btn btn-outline-light fw-bold px-4">Prendre rendez-vous</a>
      </div>
    </div>
  </section>
</div>

@endsection
