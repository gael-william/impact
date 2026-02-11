@extends('admin.layouts.admin')

@section('content')

<style>
/* ===============================================
   SIDEBAR MODERNE INTÉGRÉ
   =============================================== */
.admin-wrapper {
  display: flex;
  min-height: calc(100vh - 90px);
}

.modern-sidebar {
  width: 260px;
  background: linear-gradient(180deg, #1e293b 0%, #0f172a 100%);
  position: fixed;
  left: 0;
  top: 90px;
  height: calc(100vh - 90px);
  overflow-y: auto;
  transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
  z-index: 999;
  box-shadow: 4px 0 20px rgba(0, 0, 0, 0.1);
  transform: translateX(-100%);
}

.modern-sidebar.open {
  transform: translateX(0);
}

.modern-sidebar::-webkit-scrollbar {
  width: 6px;
}

.modern-sidebar::-webkit-scrollbar-track {
  background: rgba(255, 255, 255, 0.05);
}

.modern-sidebar::-webkit-scrollbar-thumb {
  background: rgba(255, 255, 255, 0.1);
  border-radius: 3px;
}

.sidebar-content {
  padding: 1.5rem 0;
}

.sidebar-section {
  margin-bottom: 2rem;
  padding: 0 1rem;
}

.section-title {
  font-size: 0.75rem;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 1px;
  color: #64748b;
  margin-bottom: 1rem;
  padding-left: 0.5rem;
}

.nav-menu {
  list-style: none;
  padding: 0;
  margin: 0;
}

.nav-item {
  margin-bottom: 0.25rem;
}

.nav-link {
  display: flex;
  align-items: center;
  padding: 0.75rem 1rem;
  color: #94a3b8;
  text-decoration: none;
  border-radius: 10px;
  transition: all 0.3s;
  font-weight: 500;
  font-size: 0.9rem;
}

.nav-link:hover {
  background: rgba(255, 255, 255, 0.05);
  color: white;
  transform: translateX(5px);
}

.nav-link.active {
  background: linear-gradient(135deg, #3b82f6, #8b5cf6);
  color: white;
  box-shadow: 0 4px 15px rgba(59, 130, 246, 0.3);
}

.nav-icon {
  font-size: 1.3rem;
  margin-right: 0.75rem;
  width: 24px;
  text-align: center;
}

.nav-badge {
  margin-left: auto;
  background: linear-gradient(135deg, #ef4444, #dc2626);
  color: white;
  padding: 0.125rem 0.5rem;
  border-radius: 20px;
  font-size: 0.7rem;
  font-weight: 700;
}

/* Main Content */
.main-content {
  flex: 1;
  margin-left: 0;
  padding: 7rem;
  background: #f8fafc;
  min-height: calc(100vh - 90px);
}

/* Sidebar Toggle Button */
.sidebar-toggle-btn {
  position: fixed;
  left: 20px;
  top: 110px;
  width: 50px;
  height: 50px;
  background: linear-gradient(135deg, #3b82f6, #8b5cf6);
  border: none;
  border-radius: 12px;
  color: white;
  font-size: 1.5rem;
  cursor: pointer;
  box-shadow: 0 4px 15px rgba(59, 130, 246, 0.4);
  z-index: 1000;
  transition: all 0.3s;
  display: flex;
  align-items: center;
  justify-content: center;
}

.sidebar-toggle-btn:hover {
  transform: translateY(-2px);
  box-shadow: 0 6px 20px rgba(59, 130, 246, 0.5);
}

.sidebar-toggle-btn.active {
  left: 280px;
}

/* Platform Sections */
.platform-section {
  display: none;
}

.platform-section.active {
  display: block;
  animation: fadeIn 0.5s ease-in;
}

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

/* Dashboard Cards */
.stats-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 1.5rem;
  margin-bottom: 2rem;
}

.stat-card {
  background: white;
  border-radius: 16px;
  padding: 1.5rem;
  box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
  transition: all 0.3s;
  position: relative;
  overflow: hidden;
}

.stat-card::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  height: 4px;
  background: linear-gradient(90deg, #3b82f6, #8b5cf6);
}

.stat-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
}

.stat-header {
  display: flex;
  justify-content: space-between;
  align-items: start;
  margin-bottom: 1rem;
}

.stat-icon {
  width: 50px;
  height: 50px;
  border-radius: 12px;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 1.5rem;
  background: linear-gradient(135deg, #3b82f6, #8b5cf6);
  color: white;
}

.stat-value {
  font-size: 2rem;
  font-weight: 800;
  color: #1e293b;
  margin-bottom: 0.25rem;
}

.stat-label {
  color: #64748b;
  font-size: 0.9rem;
  font-weight: 500;
}

.stat-trend {
  display: flex;
  align-items: center;
  gap: 0.5rem;
  margin-top: 0.75rem;
  font-size: 0.85rem;
}

.trend-up {
  color: #10b981;
}

.trend-down {
  color: #ef4444;
}

/* Content Cards */
.content-card {
  background: white;
  border-radius: 16px;
  padding: 1.5rem;
  box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
  margin-bottom: 1.5rem;
}

.card-header {
  display: flex;
  justify-content: between;
  align-items: center;
  margin-bottom: 1.5rem;
  padding-bottom: 1rem;
  border-bottom: 2px solid #f1f5f9;
}

.card-title {
  font-size: 1.25rem;
  font-weight: 700;
  color: #1e293b;
}

/* Responsive */
@media (max-width: 1024px) {
  .main-content {
    padding: 1rem;
  }
}

@media (max-width: 768px) {
  .main-content {
    padding: 1rem;
  }
  
  .stats-grid {
    grid-template-columns: 1fr;
  }
  
  .sidebar-toggle-btn {
    left: 10px;
    top: 100px;
  }
  
  .sidebar-toggle-btn.active {
    left: 270px;
  }
}

/* Animations */
@keyframes slideIn {
  from {
    opacity: 0;
    transform: translateX(-20px);
  }
  to {
    opacity: 1;
    transform: translateX(0);
  }
}

.sidebar-content > * {
  animation: slideIn 0.3s ease-out backwards;
}

.sidebar-content > *:nth-child(1) { animation-delay: 0.05s; }
.sidebar-content > *:nth-child(2) { animation-delay: 0.1s; }
.sidebar-content > *:nth-child(3) { animation-delay: 0.15s; }
.sidebar-content > *:nth-child(4) { animation-delay: 0.2s; }
</style>

<div class="admin-wrapper">
  
  <!-- BOUTON TOGGLE SIDEBAR -->
  <button class="sidebar-toggle-btn" id="sidebarToggle">
    <i class="typcn typcn-th-menu"></i>
  </button>
  
  <!-- SIDEBAR MODERNE -->
  <aside class="modern-sidebar" id="modernSidebar">
    <div class="sidebar-content">
      
      <!-- Main Navigation -->
      <div class="sidebar-section">
        <h6 class="section-title">Principal</h6>
        <ul class="nav-menu">
          <li class="nav-item">
            <a href="{{ url('/admin/dashboard') }}" class="nav-link active">
              <i class="typcn typcn-chart-area nav-icon"></i>
              <span>Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="typcn typcn-user-outline nav-icon"></i>
              <span>Utilisateurs</span>
              <span class="nav-badge">24</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="typcn typcn-chart-line nav-icon"></i>
              <span>Statistiques</span>
            </a>
          </li>
        </ul>
      </div>
      
      <!-- TGV Section -->
      <div class="sidebar-section tgv-section">
        <h6 class="section-title">🎯 TGV Management</h6>
        <ul class="nav-menu">
          <li class="nav-item">
            <a href="{{ route('admin.tgv.requests') }}" class="nav-link">
              <i class="typcn typcn-document-text nav-icon"></i>
              <span>Demandes TGV</span>
              <span class="nav-badge">{{ \App\Models\TgvRequest::pending()->count() }}</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="typcn typcn-star-outline nav-icon"></i>
              <span>Projets Platinum</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="typcn typcn-group nav-icon"></i>
              <span>Équipe</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="typcn typcn-archive nav-icon"></i>
              <span>Archives</span>
            </a>
          </li>
        </ul>
      </div>
      
      <!-- 1 Jeune 1 Emploi Section -->
      <div class="sidebar-section emploi-section" style="display: none;">
        <h6 class="section-title">💼 1 Jeune 1 Emploi</h6>
        <ul class="nav-menu">
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="typcn typcn-briefcase nav-icon"></i>
              <span>Programme AGIR</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="typcn typcn-video nav-icon"></i>
              <span>Masterclass</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="typcn typcn-key nav-icon"></i>
              <span>Licences</span>
              <span class="nav-badge">4</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="typcn typcn-messages nav-icon"></i>
              <span>Témoignages</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="typcn typcn-mortar-board nav-icon"></i>
              <span>Jeunes Inscrits</span>
            </a>
          </li>
        </ul>
      </div>
      
      <!-- Settings -->
      <div class="sidebar-section">
        <h6 class="section-title">Système</h6>
        <ul class="nav-menu">
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="typcn typcn-cog nav-icon"></i>
              <span>Paramètres</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="typcn typcn-info-large nav-icon"></i>
              <span>Support</span>
            </a>
          </li>
        </ul>
      </div>
      
    </div>
  </aside>
  
  <!-- MAIN CONTENT -->
  <main class="main-content">
    
    <!-- TGV PLATFORM -->
    <div class="platform-section active" id="tgv-platform">
      
      <!-- Page Header -->
      <div style="margin-bottom: 2rem;">
        <h1 style="font-size: 2rem; font-weight: 800; color: #1e293b; margin-bottom: 1rem;">
         Tableau de Bord TGV
        </h1>
        <p style="color: #64748b; font-size: 1.1rem;">
          Trajets Globaux de Vie - Institut IMPACT Plus
        </p>
      </div>
      
      <!-- Stats Grid -->
      <div class="stats-grid">
        
        <div class="stat-card">
          <div class="stat-header">
            <div>
              <div class="stat-value">24</div>
              <div class="stat-label">Total Projets TGV</div>
            </div>
            <div class="stat-icon">
              <i class="typcn typcn-document-text"></i>
            </div>
          </div>
          <div class="stat-trend trend-up">
            <i class="typcn typcn-arrow-up"></i>
            <span>+3 ce mois</span>
          </div>
        </div>
        
        <div class="stat-card">
          <div class="stat-header">
            <div>
              <div class="stat-value">8</div>
              <div class="stat-label">Projets Platinum</div>
            </div>
            <div class="stat-icon" style="background: linear-gradient(135deg, #8b5cf6, #a855f7);">
              <i class="typcn typcn-star-outline"></i>
            </div>
          </div>
          <div class="stat-trend">
            <span>Consécration Exclusive</span>
          </div>
        </div>
        
        <div class="stat-card">
          <div class="stat-header">
            <div>
              <div class="stat-value">28</div>
              <div class="stat-label">Jeunes Diplômés</div>
            </div>
            <div class="stat-icon" style="background: linear-gradient(135deg, #10b981, #059669);">
              <i class="typcn typcn-mortar-board"></i>
            </div>
          </div>
          <div class="stat-trend trend-up">
            <i class="typcn typcn-arrow-up"></i>
            <span>70% de l'objectif</span>
          </div>
        </div>
        
        <div class="stat-card">
          <div class="stat-header">
            <div>
              <div class="stat-value">4.8/5</div>
              <div class="stat-label">Satisfaction</div>
            </div>
            <div class="stat-icon" style="background: linear-gradient(135deg, #f59e0b, #d97706);">
              <i class="typcn typcn-heart-outline"></i>
            </div>
          </div>
          <div class="stat-trend">
            <span>⭐⭐⭐⭐⭐</span>
          </div>
        </div>
        
      </div>
      
      <!-- Alert Section -->
      <div class="content-card" style="background: linear-gradient(135deg, #fef3c7, #fde68a); border-left: 4px solid #f59e0b;">
        <div style="display: flex; align-items: center; justify-content: space-between;">
          <div>
            <h3 style="font-size: 1.25rem; font-weight: 700; color: #92400e; margin-bottom: 0.5rem;">
              🎯 {{ \App\Models\TgvRequest::pending()->count() }} demande(s) TGV en attente
            </h3>
            <p style="color: #78350f; margin: 0;">
              Consultez et traitez les demandes des clients pour démarrer de nouveaux projets
            </p>
          </div>
          <a href="{{ route('admin.tgv.requests') }}" 
             style="background: #f59e0b; color: white; padding: 0.75rem 1.5rem; border-radius: 10px; text-decoration: none; font-weight: 600; white-space: nowrap;">
            📋 Voir les demandes
          </a>
        </div>
      </div>
      
      <!-- Projects Table -->
      <div class="content-card">
        <div class="card-header">
          <h2 class="card-title">📋 Projets TGV en Cours</h2>
        </div>
        
        <div style="overflow-x: auto;">
          <table style="width: 100%; border-collapse: collapse;">
            <thead>
              <tr style="background: #f8fafc;">
                <th style="padding: 1rem; text-align: left; font-weight: 600; color: #475569;">Famille</th>
                <th style="padding: 1rem; text-align: left; font-weight: 600; color: #475569;">Catégorie</th>
                <th style="padding: 1rem; text-align: left; font-weight: 600; color: #475569;">Étape</th>
                <th style="padding: 1rem; text-align: left; font-weight: 600; color: #475569;">Progression</th>
                <th style="padding: 1rem; text-align: left; font-weight: 600; color: #475569;">Statut</th>
              </tr>
            </thead>
            <tbody>
              <tr style="border-bottom: 1px solid #e2e8f0;">
                <td style="padding: 1rem;"><strong>Héritage Dupont</strong></td>
                <td style="padding: 1rem;"><span style="background: linear-gradient(135deg, #3b82f6, #2563eb); color: white; padding: 0.25rem 0.75rem; border-radius: 20px; font-size: 0.85rem; font-weight: 600;">Platinum</span></td>
                <td style="padding: 1rem;">3 - Édition</td>
                <td style="padding: 1rem;">
                  <div style="background: #e2e8f0; height: 8px; border-radius: 10px; overflow: hidden;">
                    <div style="background: linear-gradient(90deg, #3b82f6, #8b5cf6); height: 100%; width: 60%; border-radius: 10px;"></div>
                  </div>
                  <small style="color: #64748b;">60%</small>
                </td>
                <td style="padding: 1rem;"><span style="background: #fef3c7; color: #92400e; padding: 0.25rem 0.75rem; border-radius: 20px; font-size: 0.85rem; font-weight: 600;">En cours</span></td>
              </tr>
              <tr style="border-bottom: 1px solid #e2e8f0;">
                <td style="padding: 1rem;"><strong>Patrimoine Africain</strong></td>
                <td style="padding: 1rem;"><span style="background: linear-gradient(135deg, #f59e0b, #d97706); color: white; padding: 0.25rem 0.75rem; border-radius: 20px; font-size: 0.85rem; font-weight: 600;">Or</span></td>
                <td style="padding: 1rem;">2 - Rédaction</td>
                <td style="padding: 1rem;">
                  <div style="background: #e2e8f0; height: 8px; border-radius: 10px; overflow: hidden;">
                    <div style="background: linear-gradient(90deg, #f59e0b, #d97706); height: 100%; width: 45%; border-radius: 10px;"></div>
                  </div>
                  <small style="color: #64748b;">45%</small>
                </td>
                <td style="padding: 1rem;"><span style="background: #fef3c7; color: #92400e; padding: 0.25rem 0.75rem; border-radius: 20px; font-size: 0.85rem; font-weight: 600;">En cours</span></td>
              </tr>
              <tr>
                <td style="padding: 1rem;"><strong>Consécration Famille Z</strong></td>
                <td style="padding: 1rem;"><span style="background: linear-gradient(135deg, #3b82f6, #2563eb); color: white; padding: 0.25rem 0.75rem; border-radius: 20px; font-size: 0.85rem; font-weight: 600;">Platinum</span></td>
                <td style="padding: 1rem;">5 - Dédicace</td>
                <td style="padding: 1rem;">
                  <div style="background: #e2e8f0; height: 8px; border-radius: 10px; overflow: hidden;">
                    <div style="background: linear-gradient(90deg, #10b981, #059669); height: 100%; width: 100%; border-radius: 10px;"></div>
                  </div>
                  <small style="color: #64748b;">100%</small>
                </td>
                <td style="padding: 1rem;"><span style="background: #d1fae5; color: #065f46; padding: 0.25rem 0.75rem; border-radius: 20px; font-size: 0.85rem; font-weight: 600;">Complété</span></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      
    </div>
    
    <!-- 1 JEUNE 1 EMPLOI PLATFORM -->
    <div class="platform-section" id="emploi-platform">
      
      <!-- Page Header -->
      <div style="margin-bottom: 2rem;">
        <h1 style="font-size: 2rem; font-weight: 800; color: #1e293b; margin-bottom: 0.5rem;">
          💼 Tableau de Bord 1 Jeune 1 Emploi
        </h1>
        <p style="color: #64748b; font-size: 1.1rem;">
          Programme AGIR - Accompagnement Global à l'Insertion Rapide
        </p>
      </div>
      
      <!-- Stats Grid -->
      <div class="stats-grid">
        
        <div class="stat-card">
          <div class="stat-header">
            <div>
              <div class="stat-value">1,247</div>
              <div class="stat-label">Jeunes Inscrits</div>
            </div>
            <div class="stat-icon" style="background: linear-gradient(135deg, #ef4444, #dc2626);">
              <i class="typcn typcn-user-outline"></i>
            </div>
          </div>
          <div class="stat-trend trend-up">
            <i class="typcn typcn-arrow-up"></i>
            <span>+156 ce mois</span>
          </div>
        </div>
        
        <div class="stat-card">
          <div class="stat-header">
            <div>
              <div class="stat-value">92%</div>
              <div class="stat-label">Taux de Réussite</div>
            </div>
            <div class="stat-icon" style="background: linear-gradient(135deg, #10b981, #059669);">
              <i class="typcn typcn-thumbs-up"></i>
            </div>
          </div>
          <div class="stat-trend trend-up">
            <i class="typcn typcn-arrow-up"></i>
            <span>+8% vs mois dernier</span>
          </div>
        </div>
        
        <div class="stat-card">
          <div class="stat-header">
            <div>
              <div class="stat-value">6</div>
              <div class="stat-label">Masterclass Actives</div>
            </div>
            <div class="stat-icon" style="background: linear-gradient(135deg, #3b82f6, #2563eb);">
              <i class="typcn typcn-video"></i>
            </div>
          </div>
          <div class="stat-trend">
            <span>Programmes disponibles</span>
          </div>
        </div>
        
        <div class="stat-card">
          <div class="stat-header">
            <div>
              <div class="stat-value">500B$</div>
              <div class="stat-label">Impact Financier</div>
            </div>
            <div class="stat-icon" style="background: linear-gradient(135deg, #f59e0b, #d97706);">
              <i class="typcn typcn-chart-line-outline"></i>
            </div>
          </div>
          <div class="stat-trend">
            <span>Potentiel par an (30 ans)</span>
          </div>
        </div>
        
      </div>
      
      <!-- Content Coming Soon -->
      <div class="content-card" style="text-align: center; padding: 4rem 2rem;">
        <div style="font-size: 4rem; margin-bottom: 1rem;">🚀</div>
        <h2 style="font-size: 1.5rem; font-weight: 700; color: #1e293b; margin-bottom: 1rem;">
          Plateforme 1 Jeune 1 Emploi
        </h2>
        <p style="color: #64748b; font-size: 1.1rem; max-width: 600px; margin: 0 auto;">
          Cette section est en cours de développement. Bientôt disponible avec toutes les fonctionnalités 
          du programme AGIR, les masterclass, et les licences multi-acteurs.
        </p>
      </div>
      
    </div>
    
  </main>
  
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
  
  const sidebar = document.getElementById('modernSidebar');
  const sidebarToggle = document.getElementById('sidebarToggle');
  
  // Toggle Sidebar
  sidebarToggle.addEventListener('click', function() {
    sidebar.classList.toggle('open');
    this.classList.toggle('active');
  });
  
  // Close sidebar when clicking outside
  document.addEventListener('click', function(e) {
    if (!sidebar.contains(e.target) && !sidebarToggle.contains(e.target)) {
      sidebar.classList.remove('open');
      sidebarToggle.classList.remove('active');
    }
  });
  
  // Platform Switcher
  window.addEventListener('platformChange', function(e) {
    const platform = e.detail.platform;
    
    // Hide all platform sections
    document.querySelectorAll('.platform-section').forEach(section => {
      section.classList.remove('active');
    });
    
    // Show selected platform
    if (platform === 'tgv') {
      document.getElementById('tgv-platform').classList.add('active');
      document.querySelector('.tgv-section').style.display = 'block';
      document.querySelector('.emploi-section').style.display = 'none';
    } else {
      document.getElementById('emploi-platform').classList.add('active');
      document.querySelector('.tgv-section').style.display = 'none';
      document.querySelector('.emploi-section').style.display = 'block';
    }
  });
  
  // Mobile Sidebar Toggle (from navbar)
  const mobileToggle = document.getElementById('mobileMenuToggle');
  
  if (mobileToggle) {
    mobileToggle.addEventListener('click', function() {
      sidebar.classList.toggle('open');
      sidebarToggle.classList.toggle('active');
    });
  }
  
});
</script>

@endsection