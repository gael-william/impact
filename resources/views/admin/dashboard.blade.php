@extends('admin.layouts.admin')
@section('content')

<!-- Pro Banner -->
<div class="row" id="proBanner">
  <div class="col-12">
    <span class="d-flex align-items-center purchase-popup" style="background: linear-gradient(135deg, #2563eb, #3b82f6); border-radius: 0.5rem; padding: 1rem;">
      <p style="color: white; margin: 0;">📊 Tableau de bord de gestion TGV - Institut IMPACT Plus</p>
      <i class="typcn typcn-delete-outline" id="bannerClose" style="color: white; cursor: pointer; margin-left: auto;"></i>
    </span>
  </div>
</div>

<div class="container-scroller">
  <div class="container-fluid page-body-wrapper">
    <!-- Settings Panel (Keep Original) -->
    <div class="theme-setting-wrapper">
      <div id="settings-trigger"><i class="typcn typcn-cog-outline"></i></div>
      <div id="theme-settings" class="settings-panel">
        <i class="settings-close typcn typcn-times"></i>
        <p class="settings-heading">PARAMÈTRES</p>
        <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Clair</div>
        <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Sombre</div>
      </div>
    </div>

    <!-- Right Sidebar (Keep Original) -->
    <div id="right-sidebar" class="settings-panel">
      <i class="settings-close typcn typcn-times"></i>
      <ul class="nav nav-tabs" id="setting-panel" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="tasks-tab" data-toggle="tab" href="#tasks-section" role="tab">TÂCHES</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="projects-tab" data-toggle="tab" href="#projects-section" role="tab">PROJETS</a>
        </li>
      </ul>
      <div class="tab-content" id="setting-content">
        <!-- Tasks Tab -->
        <div class="tab-pane fade show active scroll-wrapper" id="tasks-section" role="tabpanel">
          <div class="add-items d-flex px-3 mb-0">
            <form class="form w-100">
              <div class="form-group d-flex">
                <input type="text" class="form-control" placeholder="Ajouter une tâche">
                <button type="submit" class="add btn btn-primary ml-2">Ajouter</button>
              </div>
            </form>
          </div>
          <div class="list-wrapper px-3">
            <ul class="d-flex flex-column-reverse" style="list-style: none; padding: 0;">
              <li style="padding: 0.75rem 0; border-bottom: 1px solid #e0e0e0;">
                <div class="form-check">
                  <label class="form-check-label">
                    <input class="checkbox" type="checkbox">
                    Validation d'un TGV Platinum
                  </label>
                </div>
              </li>
              <li style="padding: 0.75rem 0; border-bottom: 1px solid #e0e0e0;">
                <div class="form-check">
                  <label class="form-check-label">
                    <input class="checkbox" type="checkbox">
                    Révision des droits d'auteur
                  </label>
                </div>
              </li>
              <li style="padding: 0.75rem 0 ; border-bottom: 1px solid #e0e0e0;" class="completed">
                <div class="form-check">
                  <label class="form-check-label">
                    <input class="checkbox" type="checkbox" checked>
                    Préparation de 2 cérémonies
                  </label>
                </div>
              </li>
            </ul>
          </div>
        </div>

        <!-- Projects Tab -->
        <div class="tab-pane fade" id="projects-section" role="tabpanel">
          <div style="padding: 1rem; font-size: 0.9rem;">
            <p><strong>Projets TGV en cours :</strong></p>
            <ul style="list-style: none; padding: 0;">
              <li style="padding: 0.5rem 0; border-bottom: 1px solid #e0e0e0;">📘 TGV Platinum - Famille Dupont</li>
              <li style="padding: 0.5rem 0; border-bottom: 1px solid #e0e0e0;">📗 TGV Or - Patrimoine Africain</li>
              <li style="padding: 0.5rem 0;">📙 TGV Argent - Héritage Local</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- Main Dashboard Content -->
    <div class="main-panel">
      <div class="content-wrapper">
        
        <!-- Header Section -->
        <div class="row mb-4">
          <div class="col-12">
            <h2 class="mb-0" style="color: #2563eb; font-weight: bold;">Tableau de Bord TGV</h2>
            <p style="color: #6b7280; margin-top: 0.5rem;">Gestion intégrée des Trajets Globaux de Vie - Institut IMPACT Plus</p>
          </div>
        </div>

        <!-- KPI Cards Section -->
        <div class="row g-4 mb-4">
          <!-- Total Projects -->
          <div class="col-md-6 col-lg-3">
            <div class="card" style="border-left: 4px solid #2563eb; cursor: pointer;">
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-start mb-3">
                  <div>
                    <p class="mb-2" style="color: #6b7280; font-size: 0.9rem;">Total Projets TGV</p>
                    <h3 class="mb-0" style="color: #2563eb; font-weight: bold;">24</h3>
                  </div>
                  <div style="font-size: 2rem;">📊</div>
                </div>
                <div class="progress" style="height: 0.5rem;">
                  <div class="progress-bar" role="progressbar" style="width: 75%; background: #2563eb;"></div>
                </div>
                <small style="color: #6b7280; margin-top: 0.5rem;">+3 ce mois</small>
              </div>
            </div>
          </div>

          <!-- Platinum Projects -->
          <div class="col-md-6 col-lg-3">
            <div class="card" style="border-left: 4px solid #3b82f6; cursor: pointer;">
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-start mb-3">
                  <div>
                    <p class="mb-2" style="color: #6b7280; font-size: 0.9rem;">Projets Platinum</p>
                    <h3 class="mb-0" style="color: #3b82f6; font-weight: bold;">8</h3>
                  </div>
                  <div style="font-size: 2rem;">💎</div>
                </div>
                <small style="color: #3b82f6;">Consécration Exclusive</small>
              </div>
            </div>
          </div>

          <!-- Young Graduates Integration -->
          <div class="col-md-6 col-lg-3">
            <div class="card" style="border-left: 4px solid #16a34a; cursor: pointer;">
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-start mb-3">
                  <div>
                    <p class="mb-2" style="color: #6b7280; font-size: 0.9rem;">Jeunes Diplômés</p>
                    <h3 class="mb-0" style="color: #16a34a; font-weight: bold;">28</h3>
                  </div>
                  <div style="font-size: 2rem;">🎓</div>
                </div>
                <div class="progress" style="height: 0.5rem;">
                  <div class="progress-bar" role="progressbar" style="width: 70%; background: #16a34a;"></div>
                </div>
                <small style="color: #6b7280; margin-top: 0.5rem;">Objectif: 4/projet</small>
              </div>
            </div>
          </div>

          <!-- Team Satisfaction -->
          <div class="col-md-6 col-lg-3">
            <div class="card" style="border-left: 4px solid #d97706; cursor: pointer;">
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-start mb-3">
                  <div>
                    <p class="mb-2" style="color: #6b7280; font-size: 0.9rem;">Satisfaction</p>
                    <h3 class="mb-0" style="color: #d97706; font-weight: bold;">4.8/5</h3>
                  </div>
                  <div style="font-size: 2rem;">⭐</div>
                </div>
                <small style="color: #d97706;">Basée sur 24 projets</small>
              </div>
            </div>
          </div>
        </div>

        <!-- TGV Project Management Section -->
        <div class="row mb-4">
          <div class="col-lg-8">
            <div class="card">
              <div class="card-header" style="background: linear-gradient(135deg, #2563eb, #3b82f6); color: white; border: none;">
                <h5 class="mb-0" style="font-weight: bold;">📋 Suivi des Étapes TGV en Cours</h5>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-hover" style="font-size: 0.9rem;">
                    <thead>
                      <tr style="background: #f3f4f6;">
                        <th>Famille / Patrimoine</th>
                        <th>Catégorie</th>
                        <th>Étape Actuelle</th>
                        <th>Avancement</th>
                        <th>Statut</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><strong>Héritage Dupont</strong></td>
                        <td><span class="badge" style="background: #3b82f6; color: white;">Platinum</span></td>
                        <td>3 - Édition</td>
                        <td>
                          <div class="progress" style="height: 0.5rem;">
                            <div class="progress-bar" style="width: 60%; background: #2563eb;"></div>
                          </div>
                        </td>
                        <td><span class="badge" style="background: #fbbf24; color: #1f2937;">En cours</span></td>
                      </tr>
                      <tr>
                        <td><strong>Patrimoine Africain</strong></td>
                        <td><span class="badge" style="background: #d97706; color: white;">Or</span></td>
                        <td>2 - Rédaction</td>
                        <td>
                          <div class="progress" style="height: 0.5rem;">
                            <div class="progress-bar" style="width: 45%; background: #d97706;"></div>
                          </div>
                        </td>
                        <td><span class="badge" style="background: #fbbf24; color: #1f2937;">En cours</span></td>
                      </tr>
                      <tr>
                        <td><strong>Leçons de Vie</strong></td>
                        <td><span class="badge" style="background: #475569; color: white;">Argent</span></td>
                        <td>1 - Collecte</td>
                        <td>
                          <div class="progress" style="height: 0.5rem;">
                            <div class="progress-bar" style="width: 30%; background: #475569;"></div>
                          </div>
                        </td>
                        <td><span class="badge" style="background: #fbbf24; color: #1f2937;">En cours</span></td>
                      </tr>
                      <tr>
                        <td><strong>Consécration Famille Z</strong></td>
                        <td><span class="badge" style="background: #2563eb; color: white;">Platinum</span></td>
                        <td>5 - Dédicace</td>
                        <td>
                          <div class="progress" style="height: 0.5rem;">
                            <div class="progress-bar" style="width: 100%; background: #16a34a;"></div>
                          </div>
                        </td>
                        <td><span class="badge" style="background: #10b981; color: white;">Complété</span></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

          <!-- Process Steps Visual -->
          <div class="col-lg-4">
            <div class="card">
              <div class="card-header" style="background: linear-gradient(135deg, #16a34a, #22c55e); color: white; border: none;">
                <h5 class="mb-0" style="font-weight: bold;">🔄 Processus TGV</h5>
              </div>
              <div class="card-body">
                <div style="font-size: 0.9rem;">
                  <div style="margin-bottom: 1rem;">
                    <div style="display: flex; align-items: center; margin-bottom: 0.5rem;">
                      <span style="font-size: 1.5rem; margin-right: 0.5rem;">1️⃣</span>
                      <span><strong>Collecte</strong></span>
                    </div>
                    <p style="color: #6b7280; margin: 0; margin-left: 2.5rem;">Enregistrement des récits</p>
                  </div>
                  <div style="margin-bottom: 1rem;">
                    <div style="display: flex; align-items: center; margin-bottom: 0.5rem;">
                      <span style="font-size: 1.5rem; margin-right: 0.5rem;">2️⃣</span>
                      <span><strong>Rédaction</strong></span>
                    </div>
                    <p style="color: #6b7280; margin: 0; margin-left: 2.5rem;">Leçons de vie documentées</p>
                  </div>
                  <div style="margin-bottom: 1rem;">
                    <div style="display: flex; align-items: center; margin-bottom: 0.5rem;">
                      <span style="font-size: 1.5rem; margin-right: 0.5rem;">3️⃣</span>
                      <span><strong>Édition</strong></span>
                    </div>
                    <p style="color: #6b7280; margin: 0; margin-left: 2.5rem;">Production professionnelle</p>
                  </div>
                  <div style="margin-bottom: 1rem;">
                    <div style="display: flex; align-items: center; margin-bottom: 0.5rem;">
                      <span style="font-size: 1.5rem; margin-right: 0.5rem;">4️⃣</span>
                      <span><strong>Sécurisation</strong></span>
                    </div>
                    <p style="color: #6b7280; margin: 0; margin-left: 2.5rem;">Protection juridique</p>
                  </div>
                  <div>
                    <div style="display: flex; align-items: center; margin-bottom: 0.5rem;">
                      <span style="font-size: 1.5rem; margin-right: 0.5rem;">5️⃣</span>
                      <span><strong>Dédicace</strong></span>
                    </div>
                    <p style="color: #6b7280; margin: 0; margin-left: 2.5rem;">Consécration officielle</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- RC By Category & Young Graduates Integration -->
        <div class="row">
          <!-- Team Management by Category -->
          <div class="col-lg-6 mb-4">
            <div class="card">
              <div class="card-header" style="background: linear-gradient(135deg, #a855f7, #d946ef); color: white; border: none;">
                <h5 class="mb-0" style="font-weight: bold;">👥 Équipe par Catégorie</h5>
              </div>
              <div class="card-body">
                <div style="font-size: 0.9rem;">
                  <!-- Platinum Team -->
                  <div style="margin-bottom: 1.5rem; padding-bottom: 1rem; border-bottom: 1px solid #e0e0e0;">
                    <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 0.75rem;">
                      <div>
                        <h6 style="margin: 0; font-weight: bold; color: #3b82f6;">💎 PLATINUM</h6>
                        <p style="margin: 0; color: #6b7280; font-size: 0.85rem;">Experts Certifiés</p>
                      </div>
                      <span style="background: #3b82f6; color: white; padding: 0.25rem 0.75rem; border-radius: 0.25rem; font-weight: bold;">4 experts</span>
                    </div>
                    <div style="background: #eff6ff; padding: 0.75rem; border-radius: 0.375rem; font-size: 0.85rem;">
                      <p style="margin: 0.25rem 0;"><strong>Qualifications :</strong></p>
                      <ul style="margin: 0; padding-left: 1.25rem;">
                        <li>Pr. Agrégés (2)</li>
                        <li>Docteurs (2)</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Diamant Team -->
                  <div style="margin-bottom: 1.5rem; padding-bottom: 1rem; border-bottom: 1px solid #e0e0e0;">
                    <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 0.75rem;">
                      <div>
                        <h6 style="margin: 0; font-weight: bold; color: #0891b2;">🔷 DIAMANT</h6>
                        <p style="margin: 0; color: #6b7280; font-size: 0.85rem;">Spécialistes</p>
                      </div>
                      <span style="background: #0891b2; color: white; padding: 0.25rem 0.75rem; border-radius: 0.25rem; font-weight: bold;">6 experts</span>
                    </div>
                    <div style="background: #ecf9ff; padding: 0.75rem; border-radius: 0.375rem; font-size: 0.85rem;">
                      <p style="margin: 0.25rem 0;"><strong>Qualifications :</strong></p>
                      <ul style="margin: 0; padding-left: 1.25rem;">
                        <li>Master + Certificat TGV</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Gold & Silver Teams -->
                  <div style="margin-bottom: 1.5rem; padding-bottom: 1rem;">
                    <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 0.75rem;">
                      <div>
                        <h6 style="margin: 0; font-weight: bold; color: #d97706;">🏅 OR & ARGENT</h6>
                        <p style="margin: 0; color: #6b7280; font-size: 0.85rem;">Professionnels expérimentés</p>
                      </div>
                      <span style="background: #d97706; color: white; padding: 0.25rem 0.75rem; border-radius: 0.25rem; font-weight: bold;">10 experts</span>
                    </div>
                    <div style="background: #fffbeb; padding: 0.75rem; border-radius: 0.375rem; font-size: 0.85rem;">
                      <p style="margin: 0.25rem 0;"><strong>Qualifications :</strong></p>
                      <ul style="margin: 0; padding-left: 1.25rem;">
                        <li>Licence / Master + Certificat TGV</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Young Graduates Integration -->
          <div class="col-lg-6 mb-4">
            <div class="card">
              <div class="card-header" style="background: linear-gradient(135deg, #16a34a, #22c55e); color: white; border: none;">
                <h5 class="mb-0" style="font-weight: bold;">🎓 Intégration Jeunes Diplômés</h5>
              </div>
              <div class="card-body">
                <div style="font-size: 0.9rem;">
                  <div style="margin-bottom: 1.5rem;">
                    <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 0.5rem;">
                      <span><strong>Objectif par projet</strong></span>
                      <span style="color: #16a34a; font-weight: bold;">2-4 jeunes</span>
                    </div>
                    <div class="progress" style="height: 0.75rem;">
                      <div class="progress-bar" style="width: 75%; background: #16a34a;"></div>
                    </div>
                    <small style="color: #6b7280;">28 jeunes actuellement intégrés</small>
                  </div>

                  <div style="background: #f0fdf4; padding: 1rem; border-radius: 0.375rem; margin-bottom: 1.5rem;">
                    <h6 style="margin-top: 0; font-weight: bold; color: #16a34a;">Critères de Sélection</h6>
                    <ul style="margin: 0.5rem 0 0; padding-left: 1.25rem;">
                      <li>Diplômé dans les 2 dernières années</li>
                      <li>Domaines: Lettres, Édition, Droit, RH</li>
                      <li>Disponibilité 4-6 mois/projet</li>
                      <li>Intérêt pour le patrimoine familial</li>
                    </ul>
                  </div>

                  <div style="background: #e0f2fe; padding: 1rem; border-radius: 0.375rem;">
                    <h6 style="margin-top: 0; font-weight: bold; color: #0369a1;">Avantages</h6>
                    <ul style="margin: 0.5rem 0 0; padding-left: 1.25rem;">
                      <li>Expérience pratique en gestion de patrimoine</li>
                      <li>Certification TGV</li>
                      <li>Réseau professionnel</li>
                      <li>Rémunération progressive</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Archives & Statistics -->
        <div class="row">
          <div class="col-lg-6 mb-4">
            <div class="card">
              <div class="card-header" style="background: linear-gradient(135deg, #7c3aed, #a855f7); color: white; border: none;">
                <h5 class="mb-0" style="font-weight: bold;">📚 Patrimoine Archivé</h5>
              </div>
              <div class="card-body">
                <div class="row text-center">
                  <div class="col-6 mb-3">
                    <div style="font-size: 2.5rem; color: #7c3aed; font-weight: bold;">312</div>
                    <p style="color: #6b7280; margin: 0;">Familles</p>
                  </div>
                  <div class="col-6 mb-3">
                    <div style="font-size: 2.5rem; color: #7c3aed; font-weight: bold;">1.2k</div>
                    <p style="color: #6b7280; margin: 0;">Documents</p>
                  </div>
                  <div class="col-6">
                    <div style="font-size: 2.5rem; color: #7c3aed; font-weight: bold;">98%</div>
                    <p style="color: #6b7280; margin: 0;">Sécurisé</p>
                  </div>
                  <div class="col-6">
                    <div style="font-size: 2.5rem; color: #7c3aed; font-weight: bold;">24/7</div>
                    <p style="color: #6b7280; margin: 0;">Accessible</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mb-4">
            <div class="card">
              <div class="card-header" style="background: linear-gradient(135deg, #dc2626, #ef4444); color: white; border: none;">
                <h5 class="mb-0" style="font-weight: bold;">⚠️ En Attente d'Action</h5>
              </div>
              <div class="card-body">
                <ul style="list-style: none; padding: 0;">
                  <li style="padding: 0.75rem; border-bottom: 1px solid #e0e0e0;">
                    <strong style="color: #dc2626;">4</strong> projets en retard de 1+ semaine
                  </li>
                  <li style="padding: 0.75rem; border-bottom: 1px solid #e0e0e0;">
                    <strong style="color: #dc2626;">2</strong> sécurisations juridiques pendantes
                  </li>
                  <li style="padding: 0.75rem;">
                    <strong style="color: #dc2626;">1</strong> cérémonie de dédicace en attente de conseil
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- Footer Note -->
        <div class="row">
          <div class="col-12">
            <div style="background: #f3f4f6; padding: 1.5rem; border-radius: 0.5rem; border-left: 4px solid #2563eb;">
              <p style="margin: 0; color: #1f2937;">
                <strong>Institut IMPACT Plus</strong> - Experts en accompagnement du patrimoine familial et transmission de valeurs. 
                Pour plus d'informations, appelez <strong style="color: #2563eb;">+226 70 25 63 63</strong>
              </p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>

@endsection
