@extends('admin.layouts.admin')

@section('content')
<div class="container-fluid page-body-wrapper">
    <!-- Sidebar Moderne -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link active" href="{{ url('/admin/dashboard') }}">
                    <i class="typcn typcn-device-desktop menu-icon"></i>
                    <span class="menu-title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#tgv-menu" aria-expanded="false" aria-controls="tgv-menu">
                    <i class="typcn typcn-book menu-icon"></i>
                    <span class="menu-title">TGV Management</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="tgv-menu">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="#">Tous les projets</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#">Platinum</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#">Diamant</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#">Or & Argent</a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#emploi-menu" aria-expanded="false" aria-controls="emploi-menu">
                    <i class="typcn typcn-briefcase menu-icon"></i>
                    <span class="menu-title">1 Jeune 1 Emploi</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="emploi-menu">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="#">Programme AGIR</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#">Masterclass</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#">Licences</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#">Témoignages</a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="typcn typcn-user-outline menu-icon"></i>
                    <span class="menu-title">Utilisateurs</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="typcn typcn-chart-bar-outline menu-icon"></i>
                    <span class="menu-title">Statistiques</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="typcn typcn-messages menu-icon"></i>
                    <span class="menu-title">Messages</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="typcn typcn-cog menu-icon"></i>
                    <span class="menu-title">Paramètres</span>
                </a>
            </li>
        </ul>
    </nav>

    <!-- Main Panel -->
    <div class="main-panel">
        <div class="content-wrapper">
            
            <!-- Super Banner avec Animation -->
            <div class="row" id="proBanner">
                <div class="col-12">
                    <div class="animated-banner">
                        <div class="banner-content">
                            <div class="banner-icon">
                                <i class="typcn typcn-lightbulb"></i>
                            </div>
                            <div class="banner-text">
                                <h5 class="mb-0">🚀 Bienvenue sur votre Dashboard Multi-Sites</h5>
                                <p class="mb-0">Gérez TGV et 1 Jeune 1 Emploi depuis un seul endroit</p>
                            </div>
                        </div>
                        <i class="typcn typcn-times banner-close" id="bannerClose"></i>
                    </div>
                </div>
            </div>

            <!-- Sélecteur de Site Principal -->
            <div class="row mt-4 mb-4">
                <div class="col-12">
                    <div class="site-selector-wrapper">
                        <div class="site-selector">
                            <button class="site-btn active" data-site="tgv">
                                <div class="site-icon tgv-gradient">
                                    <i class="typcn typcn-book"></i>
                                </div>
                                <div class="site-info">
                                    <h6 class="mb-0">TGV</h6>
                                    <small>Trajets Globaux de Vie</small>
                                </div>
                            </button>
                            <button class="site-btn" data-site="emploi">
                                <div class="site-icon emploi-gradient">
                                    <i class="typcn typcn-briefcase"></i>
                                </div>
                                <div class="site-info">
                                    <h6 class="mb-0">1 Jeune 1 Emploi</h6>
                                    <small>Programme AGIR</small>
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- SECTION TGV -->
            <div id="tgv-content" class="site-content active">
                
                <!-- Header TGV -->
                <div class="row mb-4">
                    <div class="col-12">
                        <div class="content-header tgv-header">
                            <div>
                                <h3 class="mb-1">📚 Gestion TGV</h3>
                                <p class="text-white-50 mb-0">Trajets Globaux de Vie - Institut IMPACT Plus</p>
                            </div>
                            <button class="btn btn-light btn-icon-text">
                                <i class="typcn typcn-plus btn-icon-prepend"></i>
                                Nouveau Projet TGV
                            </button>
                        </div>
                    </div>
                </div>

                <!-- KPI TGV -->
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-md-6 grid-margin stretch-card">
                        <div class="kpi-card tgv-card-1">
                            <div class="kpi-icon">
                                <i class="typcn typcn-document-text"></i>
                            </div>
                            <div class="kpi-content">
                                <p class="kpi-label">Total Projets TGV</p>
                                <h2 class="kpi-value">24</h2>
                                <div class="kpi-trend positive">
                                    <i class="typcn typcn-arrow-up"></i> +3 ce mois
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-6 col-md-6 grid-margin stretch-card">
                        <div class="kpi-card tgv-card-2">
                            <div class="kpi-icon">
                                <i class="typcn typcn-star-outline"></i>
                            </div>
                            <div class="kpi-content">
                                <p class="kpi-label">Projets Platinum</p>
                                <h2 class="kpi-value">8</h2>
                                <div class="kpi-trend">
                                    Consécration Exclusive
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-6 col-md-6 grid-margin stretch-card">
                        <div class="kpi-card tgv-card-3">
                            <div class="kpi-icon">
                                <i class="typcn typcn-mortar-board"></i>
                            </div>
                            <div class="kpi-content">
                                <p class="kpi-label">Jeunes Diplômés</p>
                                <h2 class="kpi-value">28</h2>
                                <div class="kpi-progress">
                                    <div class="progress">
                                        <div class="progress-bar" style="width: 70%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-6 col-md-6 grid-margin stretch-card">
                        <div class="kpi-card tgv-card-4">
                            <div class="kpi-icon">
                                <i class="typcn typcn-heart-outline"></i>
                            </div>
                            <div class="kpi-content">
                                <p class="kpi-label">Satisfaction</p>
                                <h2 class="kpi-value">4.8/5</h2>
                                <div class="kpi-trend">
                                    ⭐⭐⭐⭐⭐
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tableau TGV -->
                <div class="row">
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="modern-card">
                            <div class="card-header-modern tgv-gradient">
                                <h5 class="mb-0">
                                    <i class="typcn typcn-clipboard"></i> 
                                    Projets TGV en Cours
                                </h5>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table modern-table">
                                        <thead>
                                            <tr>
                                                <th>Famille</th>
                                                <th>Catégorie</th>
                                                <th>Étape</th>
                                                <th>Progression</th>
                                                <th>Statut</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="user-info">
                                                        <div class="avatar-circle purple-gradient">HD</div>
                                                        <strong>Héritage Dupont</strong>
                                                    </div>
                                                </td>
                                                <td><span class="badge-modern badge-platinum">Platinum</span></td>
                                                <td>3 - Édition</td>
                                                <td>
                                                    <div class="progress-modern">
                                                        <div class="progress-bar purple-gradient" style="width: 60%"></div>
                                                    </div>
                                                    <small class="progress-text">60%</small>
                                                </td>
                                                <td><span class="badge-modern badge-warning">En cours</span></td>
                                                <td>
                                                    <button class="btn-action btn-view"><i class="typcn typcn-eye"></i></button>
                                                    <button class="btn-action btn-edit"><i class="typcn typcn-edit"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="user-info">
                                                        <div class="avatar-circle orange-gradient">PA</div>
                                                        <strong>Patrimoine Africain</strong>
                                                    </div>
                                                </td>
                                                <td><span class="badge-modern badge-gold">Or</span></td>
                                                <td>2 - Rédaction</td>
                                                <td>
                                                    <div class="progress-modern">
                                                        <div class="progress-bar orange-gradient" style="width: 45%"></div>
                                                    </div>
                                                    <small class="progress-text">45%</small>
                                                </td>
                                                <td><span class="badge-modern badge-warning">En cours</span></td>
                                                <td>
                                                    <button class="btn-action btn-view"><i class="typcn typcn-eye"></i></button>
                                                    <button class="btn-action btn-edit"><i class="typcn typcn-edit"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="user-info">
                                                        <div class="avatar-circle blue-gradient">CF</div>
                                                        <strong>Consécration Famille Z</strong>
                                                    </div>
                                                </td>
                                                <td><span class="badge-modern badge-platinum">Platinum</span></td>
                                                <td>5 - Dédicace</td>
                                                <td>
                                                    <div class="progress-modern">
                                                        <div class="progress-bar green-gradient" style="width: 100%"></div>
                                                    </div>
                                                    <small class="progress-text">100%</small>
                                                </td>
                                                <td><span class="badge-modern badge-success">Complété</span></td>
                                                <td>
                                                    <button class="btn-action btn-view"><i class="typcn typcn-eye"></i></button>
                                                    <button class="btn-action btn-download"><i class="typcn typcn-download"></i></button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- SECTION 1 JEUNE 1 EMPLOI -->
            <div id="emploi-content" class="site-content">
                
                <!-- Header 1 Jeune 1 Emploi -->
                <div class="row mb-4">
                    <div class="col-12">
                        <div class="content-header emploi-header">
                            <div>
                                <h3 class="mb-1">💼 Gestion 1 Jeune 1 Emploi</h3>
                                <p class="text-white-50 mb-0">Programme AGIR - Accompagnement Global à l'Insertion Rapide</p>
                            </div>
                            <button class="btn btn-light btn-icon-text">
                                <i class="typcn typcn-plus btn-icon-prepend"></i>
                                Nouvelle Inscription
                            </button>
                        </div>
                    </div>
                </div>

                <!-- KPI 1 Jeune 1 Emploi -->
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-md-6 grid-margin stretch-card">
                        <div class="kpi-card emploi-card-1">
                            <div class="kpi-icon">
                                <i class="typcn typcn-user-outline"></i>
                            </div>
                            <div class="kpi-content">
                                <p class="kpi-label">Jeunes Inscrits</p>
                                <h2 class="kpi-value">1,247</h2>
                                <div class="kpi-trend positive">
                                    <i class="typcn typcn-arrow-up"></i> +156 ce mois
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-6 col-md-6 grid-margin stretch-card">
                        <div class="kpi-card emploi-card-2">
                            <div class="kpi-icon">
                                <i class="typcn typcn-thumbs-up"></i>
                            </div>
                            <div class="kpi-content">
                                <p class="kpi-label">Taux de Réussite</p>
                                <h2 class="kpi-value">92%</h2>
                                <div class="kpi-trend positive">
                                    <i class="typcn typcn-arrow-up"></i> +8% vs mois dernier
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-6 col-md-6 grid-margin stretch-card">
                        <div class="kpi-card emploi-card-3">
                            <div class="kpi-icon">
                                <i class="typcn typcn-video"></i>
                            </div>
                            <div class="kpi-content">
                                <p class="kpi-label">Masterclass Actives</p>
                                <h2 class="kpi-value">6</h2>
                                <div class="kpi-trend">
                                    Programmes disponibles
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-6 col-md-6 grid-margin stretch-card">
                        <div class="kpi-card emploi-card-4">
                            <div class="kpi-icon">
                                <i class="typcn typcn-chart-line-outline"></i>
                            </div>
                            <div class="kpi-content">
                                <p class="kpi-label">Impact Financier</p>
                                <h2 class="kpi-value">500B$</h2>
                                <div class="kpi-trend">
                                    Potentiel par an (30 ans)
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Les 11 Bonnes Nouvelles -->
                <div class="row">
                    <div class="col-12 grid-margin stretch-card">
                        <div class="modern-card">
                            <div class="card-header-modern emploi-gradient">
                                <h5 class="mb-0">
                                    <i class="typcn typcn-star-outline"></i> 
                                    Les 11 Bonnes Nouvelles
                                </h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <!-- Bonne Nouvelle 1 -->
                                    <div class="col-lg-4 col-md-6 mb-4">
                                        <div class="news-card">
                                            <div class="news-number red-gradient">1</div>
                                            <h6 class="news-title">Solution Révolutionnaire</h6>
                                            <p class="news-desc">Système des poulies au secours de l'emploi après 15 ans de recherche</p>
                                            <button class="btn-news">Gérer <i class="typcn typcn-chevron-right"></i></button>
                                        </div>
                                    </div>

                                    <!-- Bonne Nouvelle 2 -->
                                    <div class="col-lg-4 col-md-6 mb-4">
                                        <div class="news-card">
                                            <div class="news-number blue-gradient">2</div>
                                            <h6 class="news-title">Modèle Rationnel</h6>
                                            <p class="news-desc">Approche scientifique pour des résultats différents et assurés</p>
                                            <button class="btn-news">Gérer <i class="typcn typcn-chevron-right"></i></button>
                                        </div>
                                    </div>

                                    <!-- Bonne Nouvelle 3 -->
                                    <div class="col-lg-4 col-md-6 mb-4">
                                        <div class="news-card">
                                            <div class="news-number green-gradient">3</div>
                                            <h6 class="news-title">6 Leviers Renforcés</h6>
                                            <p class="news-desc">Stratégies pour renforcer le système des poulies</p>
                                            <button class="btn-news">Gérer <i class="typcn typcn-chevron-right"></i></button>
                                        </div>
                                    </div>

                                    <!-- Bonne Nouvelle 4 -->
                                    <div class="col-lg-4 col-md-6 mb-4">
                                        <div class="news-card">
                                            <div class="news-number purple-gradient">4</div>
                                            <h6 class="news-title">Programme AGIR</h6>
                                            <p class="news-desc">Accélérateur d'insertion à faible coût avec 6 composantes</p>
                                            <button class="btn-news">Gérer <i class="typcn typcn-chevron-right"></i></button>
                                        </div>
                                    </div>

                                    <!-- Bonne Nouvelle 5 -->
                                    <div class="col-lg-4 col-md-6 mb-4">
                                        <div class="news-card">
                                            <div class="news-number orange-gradient">5</div>
                                            <h6 class="news-title">Opportunités Multi-Acteurs</h6>
                                            <p class="news-desc">4 licences pour investisseurs, affiliés, entreprises, institutions</p>
                                            <button class="btn-news">Gérer <i class="typcn typcn-chevron-right"></i></button>
                                        </div>
                                    </div>

                                    <!-- Bonne Nouvelle 6 -->
                                    <div class="col-lg-4 col-md-6 mb-4">
                                        <div class="news-card">
                                            <div class="news-number pink-gradient">6</div>
                                            <h6 class="news-title">Impact Sécuritaire</h6>
                                            <p class="news-desc">Réduction extrémisme violent et immigration clandestine</p>
                                            <button class="btn-news">Gérer <i class="typcn typcn-chevron-right"></i></button>
                                        </div>
                                    </div>

                                    <!-- Bonne Nouvelle 7 -->
                                    <div class="col-lg-4 col-md-6 mb-4">
                                        <div class="news-card">
                                            <div class="news-number teal-gradient">7</div>
                                            <h6 class="news-title">Impact Économique</h6>
                                            <p class="news-desc">500 milliards $ par an pendant 30 ans pour l'Afrique</p>
                                            <button class="btn-news">Gérer <i class="typcn typcn-chevron-right"></i></button>
                                        </div>
                                    </div>

                                    <!-- Bonne Nouvelle 8 -->
                                    <div class="col-lg-4 col-md-6 mb-4">
                                        <div class="news-card">
                                            <div class="news-number indigo-gradient">8</div>
                                            <h6 class="news-title">Modèle Simplifié</h6>
                                            <p class="news-desc">Industrie de solutions d'employabilité clé en main</p>
                                            <button class="btn-news">Gérer <i class="typcn typcn-chevron-right"></i></button>
                                        </div>
                                    </div>

                                    <!-- Bonne Nouvelle 9 -->
                                    <div class="col-lg-4 col-md-6 mb-4">
                                        <div class="news-card">
                                            <div class="news-number yellow-gradient">9</div>
                                            <h6 class="news-title">Reconnaissance Officielle</h6>
                                            <p class="news-desc">Appréciations du 1er Ministre et de l'Union Européenne</p>
                                            <button class="btn-news">Gérer <i class="typcn typcn-chevron-right"></i></button>
                                        </div>
                                    </div>

                                    <!-- Bonne Nouvelle 10 -->
                                    <div class="col-lg-4 col-md-6 mb-4">
                                        <div class="news-card">
                                            <div class="news-number cyan-gradient">10</div>
                                            <h6 class="news-title">Avis d'Experts</h6>
                                            <p class="news-desc">Appréciations positives de nombreux experts</p>
                                            <button class="btn-news">Gérer <i class="typcn typcn-chevron-right"></i></button>
                                        </div>
                                    </div>

                                    <!-- Bonne Nouvelle 11 -->
                                    <div class="col-lg-4 col-md-6 mb-4">
                                        <div class="news-card">
                                            <div class="news-number lime-gradient">11</div>
                                            <h6 class="news-title">Témoignages Étudiants</h6>
                                            <p class="news-desc">Appréciations des élèves Tableau d'Honneur</p>
                                            <button class="btn-news">Gérer <i class="typcn typcn-chevron-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Licences Multi-Acteurs -->
                <div class="row">
                    <div class="col-lg-6 grid-margin stretch-card">
                        <div class="modern-card">
                            <div class="card-header-modern license-gradient">
                                <h5 class="mb-0">
                                    <i class="typcn typcn-key-outline"></i> 
                                    Licences Actives
                                </h5>
                            </div>
                            <div class="card-body">
                                <div class="license-item">
                                    <div class="license-icon investor-gradient">
                                        <i class="typcn typcn-chart-area"></i>
                                    </div>
                                    <div class="license-info">
                                        <h6>Licence Investisseur</h6>
                                        <p class="mb-0">Business à haut rendement</p>
                                    </div>
                                    <span class="badge-modern badge-success">Actif</span>
                                </div>
                                <div class="license-item">
                                    <div class="license-icon affiliate-gradient">
                                        <i class="typcn typcn-group"></i>
                                    </div>
                                    <div class="license-info">
                                        <h6>Licence Affiliée</h6>
                                        <p class="mb-0">Organes de presse & influenceurs</p>
                                    </div>
                                    <span class="badge-modern badge-success">Actif</span>
                                </div>
                                <div class="license-item">
                                    <div class="license-icon corporate-gradient">
                                        <i class="typcn typcn-building"></i>
                                    </div>
                                    <div class="license-info">
                                        <h6>Licence Entreprise Citoyenne</h6>
                                        <p class="mb-0">Responsabilité sociétale</p>
                                    </div>
                                    <span class="badge-modern badge-success">Actif</span>
                                </div>
                                <div class="license-item">
                                    <div class="license-icon institution-gradient">
                                        <i class="typcn typcn-home"></i>
                                    </div>
                                    <div class="license-info">
                                        <h6>Licence Institution</h6>
                                        <p class="mb-0">ONG & Associations</p>
                                    </div>
                                    <span class="badge-modern badge-warning">En attente</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 grid-margin stretch-card">
                        <div class="modern-card">
                            <div class="card-header-modern stats-gradient">
                                <h5 class="mb-0">
                                    <i class="typcn typcn-chart-pie-outline"></i> 
                                    Statistiques Clés
                                </h5>
                            </div>
                            <div class="card-body">
                                <div class="stat-row">
                                    <div class="stat-label">
                                        <i class="typcn typcn-world text-primary"></i>
                                        Emplois créés potentiels
                                    </div>
                                    <div class="stat-value">20M+</div>
                                </div>
                                <div class="stat-row">
                                    <div class="stat-label">
                                        <i class="typcn typcn-user-add text-success"></i>
                                        Jeunes formés
                                    </div>
                                    <div class="stat-value">1,247</div>
                                </div>
                                <div class="stat-row">
                                    <div class="stat-label">
                                        <i class="typcn typcn-messages text-warning"></i>
                                        Témoignages positifs
                                    </div>
                                    <div class="stat-value">98%</div>
                                </div>
                                <div class="stat-row">
                                    <div class="stat-label">
                                        <i class="typcn typcn-trophy text-danger"></i>
                                        Taux de satisfaction
                                    </div>
                                    <div class="stat-value">4.9/5</div>
                                </div>
                                <div class="stat-row">
                                    <div class="stat-label">
                                        <i class="typcn typcn-folder text-info"></i>
                                        Partenaires actifs
                                    </div>
                                    <div class="stat-value">47</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Footer Commun -->
            <div class="row mt-4">
                <div class="col-12">
                    <div class="footer-info">
                        <div class="footer-icon">
                            <i class="typcn typcn-info-large"></i>
                        </div>
                        <div class="footer-text">
                            <strong>Institut IMPACT Plus</strong> - Experts en accompagnement du patrimoine familial et solutions d'employabilité.
                            <br>
                            Pour plus d'informations : <strong>+226 70 25 63 63</strong>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- content-wrapper ends -->
    </div>
    <!-- main-panel ends -->
</div>

<style>
/* ============================================
   STYLES GLOBAUX & ANIMATIONS
   ============================================ */
:root {
    --purple-start: #667eea;
    --purple-end: #764ba2;
    --blue-start: #4facfe;
    --blue-end: #00f2fe;
    --green-start: #43e97b;
    --green-end: #38f9d7;
    --orange-start: #fa709a;
    --orange-end: #fee140;
    --red-start: #f857a6;
    --red-end: #ff5858;
    --pink-start: #ff6b9d;
    --pink-end: #ffa5a5;
    --yellow-start: #fdeb71;
    --yellow-end: #f8d800;
    --teal-start: #2af598;
    --teal-end: #009efd;
    --indigo-start: #5f72bd;
    --indigo-end: #9b23ea;
    --cyan-start: #00d4ff;
    --cyan-end: #090979;
    --lime-start: #56ab2f;
    --lime-end: #a8e063;
}

.content-wrapper {
    background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
    min-height: 100vh;
    padding: 20px;
}

/* ============================================
   BANNER ANIMÉ
   ============================================ */
.animated-banner {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    border-radius: 15px;
    padding: 20px 30px;
    box-shadow: 0 10px 30px rgba(102, 126, 234, 0.3);
    display: flex;
    align-items: center;
    justify-content: space-between;
    animation: slideInDown 0.5s ease-out;
}

@keyframes slideInDown {
    from {
        transform: translateY(-100%);
        opacity: 0;
    }
    to {
        transform: translateY(0);
        opacity: 1;
    }
}

.banner-content {
    display: flex;
    align-items: center;
    gap: 20px;
}

.banner-icon {
    width: 60px;
    height: 60px;
    background: rgba(255, 255, 255, 0.2);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 30px;
    color: white;
}

.banner-text h5,
.banner-text p {
    color: white;
    margin: 0;
}

.banner-close {
    color: white;
    font-size: 24px;
    cursor: pointer;
    transition: transform 0.3s;
}

.banner-close:hover {
    transform: rotate(90deg);
}

/* ============================================
   SÉLECTEUR DE SITE
   ============================================ */
.site-selector-wrapper {
    background: white;
    border-radius: 15px;
    padding: 20px;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
}

.site-selector {
    display: flex;
    gap: 20px;
}

.site-btn {
    flex: 1;
    background: white;
    border: 2px solid #e0e0e0;
    border-radius: 12px;
    padding: 20px;
    display: flex;
    align-items: center;
    gap: 15px;
    cursor: pointer;
    transition: all 0.3s;
}

.site-btn:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
}

.site-btn.active {
    border-color: transparent;
    box-shadow: 0 10px 30px rgba(102, 126, 234, 0.3);
}

.site-icon {
    width: 60px;
    height: 60px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 28px;
    color: white;
}

.tgv-gradient {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
}

.emploi-gradient {
    background: linear-gradient(135deg, #f857a6 0%, #ff5858 100%);
}

.site-info h6 {
    margin: 0;
    font-weight: bold;
    color: #2d3748;
}

.site-info small {
    color: #718096;
}

/* ============================================
   HEADERS DE CONTENU
   ============================================ */
.content-header {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    border-radius: 15px;
    padding: 30px;
    color: white;
    display: flex;
    justify-content: space-between;
    align-items: center;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
}

.emploi-header {
    background: linear-gradient(135deg, #f857a6 0%, #ff5858 100%);
}

.content-header h3 {
    color: white;
    font-weight: bold;
    margin: 0;
}

/* ============================================
   CARTES KPI MODERNES
   ============================================ */
.kpi-card {
    background: white;
    border-radius: 15px;
    padding: 25px;
    display: flex;
    align-items: center;
    gap: 20px;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
    transition: all 0.3s;
    overflow: hidden;
    position: relative;
}

.kpi-card::before {
    content: '';
    position: absolute;
    top: 0;
    right: 0;
    width: 100px;
    height: 100px;
    background: rgba(255, 255, 255, 0.1);
    border-radius: 50%;
    transform: translate(30%, -30%);
}

.kpi-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
}

.kpi-icon {
    width: 70px;
    height: 70px;
    border-radius: 15px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 32px;
    color: white;
    flex-shrink: 0;
}

.tgv-card-1 .kpi-icon { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); }
.tgv-card-2 .kpi-icon { background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); }
.tgv-card-3 .kpi-icon { background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%); }
.tgv-card-4 .kpi-icon { background: linear-gradient(135deg, #fa709a 0%, #fee140 100%); }

.emploi-card-1 .kpi-icon { background: linear-gradient(135deg, #f857a6 0%, #ff5858 100%); }
.emploi-card-2 .kpi-icon { background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%); }
.emploi-card-3 .kpi-icon { background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); }
.emploi-card-4 .kpi-icon { background: linear-gradient(135deg, #fa709a 0%, #fee140 100%); }

.kpi-content {
    flex: 1;
}

.kpi-label {
    color: #718096;
    font-size: 14px;
    margin-bottom: 5px;
}

.kpi-value {
    color: #2d3748;
    font-size: 32px;
    font-weight: bold;
    margin: 0;
}

.kpi-trend {
    font-size: 13px;
    color: #718096;
}

.kpi-trend.positive {
    color: #48bb78;
}

.kpi-trend i {
    margin-right: 3px;
}

.kpi-progress {
    margin-top: 10px;
}

.kpi-progress .progress {
    height: 6px;
    background: #e2e8f0;
    border-radius: 10px;
}

.kpi-progress .progress-bar {
    background: linear-gradient(90deg, #43e97b 0%, #38f9d7 100%);
    border-radius: 10px;
}

/* ============================================
   CARTES MODERNES
   ============================================ */
.modern-card {
    background: white;
    border-radius: 15px;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
    overflow: hidden;
}

.card-header-modern {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    padding: 20px 30px;
    color: white;
}

.card-header-modern h5 {
    color: white;
    margin: 0;
    font-weight: bold;
}

.card-header-modern i {
    margin-right: 10px;
}

.license-gradient {
    background: linear-gradient(135deg, #fa709a 0%, #fee140 100%);
}

.stats-gradient {
    background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
}

/* ============================================
   TABLEAU MODERNE
   ============================================ */
.modern-table {
    margin: 0;
}

.modern-table thead tr {
    background: #f7fafc;
}

.modern-table thead th {
    border: none;
    color: #4a5568;
    font-weight: 600;
    padding: 15px;
    font-size: 13px;
    text-transform: uppercase;
}

.modern-table tbody tr {
    transition: all 0.3s;
}

.modern-table tbody tr:hover {
    background: #f7fafc;
    transform: scale(1.01);
}

.modern-table tbody td {
    padding: 15px;
    vertical-align: middle;
    border-top: 1px solid #e2e8f0;
}

.user-info {
    display: flex;
    align-items: center;
    gap: 12px;
}

.avatar-circle {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-weight: bold;
    font-size: 14px;
}

.purple-gradient { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); }
.orange-gradient { background: linear-gradient(135deg, #fa709a 0%, #fee140 100%); }
.blue-gradient { background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); }
.green-gradient { background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%); }

/* ============================================
   BADGES MODERNES
   ============================================ */
.badge-modern {
    padding: 6px 12px;
    border-radius: 20px;
    font-weight: 600;
    font-size: 11px;
    text-transform: uppercase;
}

.badge-platinum {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
}

.badge-gold {
    background: linear-gradient(135deg, #fa709a 0%, #fee140 100%);
    color: white;
}

.badge-warning {
    background: #fbbf24;
    color: #78350f;
}

.badge-success {
    background: #10b981;
    color: white;
}

/* ============================================
   PROGRESS MODERNE
   ============================================ */
.progress-modern {
    height: 8px;
    background: #e2e8f0;
    border-radius: 10px;
    overflow: hidden;
    margin-bottom: 5px;
}

.progress-modern .progress-bar {
    height: 100%;
    border-radius: 10px;
    transition: width 0.3s;
}

.progress-text {
    color: #718096;
    font-size: 12px;
}

/* ============================================
   BOUTONS D'ACTION
   ============================================ */
.btn-action {
    width: 32px;
    height: 32px;
    border-radius: 8px;
    border: none;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    margin: 0 3px;
    cursor: pointer;
    transition: all 0.3s;
    font-size: 16px;
}

.btn-view {
    background: #ebf8ff;
    color: #3182ce;
}

.btn-view:hover {
    background: #3182ce;
    color: white;
}

.btn-edit {
    background: #fef3c7;
    color: #d97706;
}

.btn-edit:hover {
    background: #d97706;
    color: white;
}

.btn-download {
    background: #d1fae5;
    color: #059669;
}

.btn-download:hover {
    background: #059669;
    color: white;
}

/* ============================================
   CARTES DE BONNES NOUVELLES
   ============================================ */
.news-card {
    background: white;
    border-radius: 12px;
    padding: 20px;
    box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
    transition: all 0.3s;
    height: 100%;
}

.news-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
}

.news-number {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-weight: bold;
    font-size: 20px;
    margin-bottom: 15px;
}

.red-gradient { background: linear-gradient(135deg, #f857a6 0%, #ff5858 100%); }
.yellow-gradient { background: linear-gradient(135deg, #fdeb71 0%, #f8d800 100%); }
.pink-gradient { background: linear-gradient(135deg, #ff6b9d 0%, #ffa5a5 100%); }
.teal-gradient { background: linear-gradient(135deg, #2af598 0%, #009efd 100%); }
.indigo-gradient { background: linear-gradient(135deg, #5f72bd 0%, #9b23ea 100%); }
.cyan-gradient { background: linear-gradient(135deg, #00d4ff 0%, #090979 100%); }
.lime-gradient { background: linear-gradient(135deg, #56ab2f 0%, #a8e063 100%); }

.news-title {
    font-weight: bold;
    color: #2d3748;
    margin-bottom: 10px;
}

.news-desc {
    color: #718096;
    font-size: 13px;
    margin-bottom: 15px;
    line-height: 1.5;
}

.btn-news {
    background: transparent;
    border: 2px solid #e2e8f0;
    border-radius: 8px;
    padding: 8px 15px;
    color: #4a5568;
    font-weight: 600;
    font-size: 13px;
    cursor: pointer;
    transition: all 0.3s;
    width: 100%;
}

.btn-news:hover {
    background: #667eea;
    border-color: #667eea;
    color: white;
}

.btn-news i {
    margin-left: 5px;
}

/* ============================================
   LICENCES
   ============================================ */
.license-item {
    display: flex;
    align-items: center;
    gap: 15px;
    padding: 15px;
    background: #f7fafc;
    border-radius: 10px;
    margin-bottom: 15px;
    transition: all 0.3s;
}

.license-item:hover {
    background: #edf2f7;
    transform: translateX(5px);
}

.license-icon {
    width: 50px;
    height: 50px;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 24px;
    color: white;
}

.investor-gradient { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); }
.affiliate-gradient { background: linear-gradient(135deg, #f857a6 0%, #ff5858 100%); }
.corporate-gradient { background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%); }
.institution-gradient { background: linear-gradient(135deg, #fa709a 0%, #fee140 100%); }

.license-info {
    flex: 1;
}

.license-info h6 {
    margin: 0 0 5px 0;
    color: #2d3748;
    font-weight: bold;
}

.license-info p {
    margin: 0;
    color: #718096;
    font-size: 13px;
}

/* ============================================
   STATISTIQUES
   ============================================ */
.stat-row {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 15px 0;
    border-bottom: 1px solid #e2e8f0;
}

.stat-row:last-child {
    border-bottom: none;
}

.stat-label {
    display: flex;
    align-items: center;
    gap: 10px;
    color: #4a5568;
    font-size: 14px;
}

.stat-label i {
    font-size: 20px;
}

.stat-value {
    font-size: 20px;
    font-weight: bold;
    color: #2d3748;
}

/* ============================================
   FOOTER INFO
   ============================================ */
.footer-info {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    border-radius: 15px;
    padding: 25px;
    display: flex;
    align-items: center;
    gap: 20px;
    color: white;
    box-shadow: 0 5px 20px rgba(102, 126, 234, 0.3);
}

.footer-icon {
    width: 60px;
    height: 60px;
    background: rgba(255, 255, 255, 0.2);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 30px;
    flex-shrink: 0;
}

.footer-text {
    flex: 1;
}

.footer-text strong {
    color: white;
}

/* ============================================
   GESTION DE L'AFFICHAGE DES SITES
   ============================================ */
.site-content {
    display: none;
}

.site-content.active {
    display: block;
    animation: fadeIn 0.5s ease-in;
}

@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* ============================================
   RESPONSIVE
   ============================================ */
@media (max-width: 768px) {
    .site-selector {
        flex-direction: column;
    }
    
    .content-header {
        flex-direction: column;
        gap: 15px;
        text-align: center;
    }
    
    .kpi-card {
        flex-direction: column;
        text-align: center;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Gestion du changement de site
    const siteButtons = document.querySelectorAll('.site-btn');
    const tgvContent = document.getElementById('tgv-content');
    const emploiContent = document.getElementById('emploi-content');
    
    siteButtons.forEach(btn => {
        btn.addEventListener('click', function() {
            // Retirer la classe active de tous les boutons
            siteButtons.forEach(b => b.classList.remove('active'));
            
            // Ajouter la classe active au bouton cliqué
            this.classList.add('active');
            
            // Afficher le contenu correspondant
            const site = this.getAttribute('data-site');
            if (site === 'tgv') {
                tgvContent.classList.add('active');
                emploiContent.classList.remove('active');
            } else {
                emploiContent.classList.add('active');
                tgvContent.classList.remove('active');
            }
        });
    });
    
    // Fermeture du banner
    const bannerClose = document.getElementById('bannerClose');
    if (bannerClose) {
        bannerClose.addEventListener('click', function() {
            document.getElementById('proBanner').style.display = 'none';
        });
    }
});
</script>

@endsection