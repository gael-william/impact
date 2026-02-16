<style>
/* ===============================================
   NAVBAR MODERNE
   =============================================== */
.modern-navbar {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  height: 100px;
  background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%);
  box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
  z-index: 10000;
  display: flex;
  align-items: center;
  padding: 0 2rem;
}

.navbar-container {
  width: 100%;
  max-width: 1920px;
  margin: 0 auto;
  display: flex;
  align-items: center;
  justify-content: space-between;
}

/* Logo Section */
.navbar-logo {
  display: flex;
  align-items: center;
  gap: 1rem;
}

.logo-img {
  height: 90px;
  width: auto;
  float: left;
  margin-right: 20px; /* optionnel pour espacer du texte ou autres éléments */
}


.logo-text {
  display: flex;
  flex-direction: column;
}

.logo-title {
  font-size: 1.5rem;
  font-weight: 800;
  background: linear-gradient(135deg, #3b82f6, #8b5cf6);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
  letter-spacing: -0.5px;
}

.logo-subtitle {
  font-size: 0.8rem;
  color: #94a3b8;
  font-weight: 500;
  text-transform: uppercase;
  letter-spacing: 1px;
}

/* Platform Switcher */
.platform-switcher {
  display: flex;
  gap: 0.5rem;
  background: rgba(255, 255, 255, 0.05);
  padding: 0.25rem;
  border-radius: 12px;
  backdrop-filter: blur(10px);
}

.platform-btn {
  padding: 0.5rem 1.5rem;
  border-radius: 10px;
  border: none;
  background: transparent;
  color: #94a3b8;
  font-weight: 600;
  font-size: 0.9rem;
  cursor: pointer;
  transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
  white-space: nowrap;
}

.platform-btn:hover {
  color: white;
  background: rgba(255, 255, 255, 0.1);
}

.platform-btn.active {
  background: linear-gradient(135deg, #3b82f6, #8b5cf6);
  color: white;
  box-shadow: 0 4px 15px rgba(59, 130, 246, 0.4);
}

/* Search Bar */
.navbar-search {
  flex: 1;
  max-width: 500px;
  margin: 0 2rem;
}

.search-wrapper {
  position: relative;
}

.search-input {
  width: 100%;
  padding: 0.75rem 1rem 0.75rem 3rem;
  background: rgba(255, 255, 255, 0.08);
  border: 1px solid rgba(255, 255, 255, 0.1);
  border-radius: 12px;
  color: white;
  font-size: 0.9rem;
  transition: all 0.3s;
}

.search-input::placeholder {
  color: #64748b;
}

.search-input:focus {
  outline: none;
  background: rgba(255, 255, 255, 0.12);
  border-color: #3b82f6;
  box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
}

.search-icon {
  position: absolute;
  left: 1rem;
  top: 50%;
  transform: translateY(-50%);
  color: #64748b;
  font-size: 1.2rem;
}

/* Right Section */
.navbar-right {
  display: flex;
  align-items: center;
  gap: 1.5rem;
}

/* Icon Buttons */
.icon-btn {
  position: relative;
  width: 40px;
  height: 40px;
  border-radius: 10px;
  background: rgba(255, 255, 255, 0.05);
  border: none;
  color: #94a3b8;
  cursor: pointer;
  transition: all 0.3s;
  display: flex;
  align-items: center;
  justify-content: center;
}

.icon-btn:hover {
  background: rgba(255, 255, 255, 0.1);
  color: white;
  transform: translateY(-2px);
}

.icon-btn i {
  font-size: 1.3rem;
}

.badge-notification {
  position: absolute;
  top: -5px;
  right: -5px;
  width: 18px;
  height: 18px;
  background: linear-gradient(135deg, #ef4444, #dc2626);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 0.65rem;
  font-weight: 700;
  color: white;
  border: 2px solid #0f172a;
}

/* User Menu */
.user-menu {
  display: flex;
  align-items: center;
  gap: 0.75rem;
  padding: 0.5rem 1rem;
  background: rgba(255, 255, 255, 0.05);
  border-radius: 12px;
  cursor: pointer;
  transition: all 0.3s;
}

.user-menu:hover {
  background: rgba(255, 255, 255, 0.1);
}

.user-avatar {
  width: 36px;
  height: 36px;
  border-radius: 10px;
  object-fit: cover;
  border: 2px solid rgba(255, 255, 255, 0.2);
}

.user-info {
  display: flex;
  flex-direction: column;
}

.user-name {
  font-size: 0.9rem;
  font-weight: 600;
  color: white;
}

.user-role {
  font-size: 0.75rem;
  color: #64748b;
}

.dropdown-icon {
  color: #64748b;
  transition: transform 0.3s;
}

.user-menu:hover .dropdown-icon {
  transform: rotate(180deg);
}

/* Mobile Menu Toggle */
.mobile-menu-btn {
  display: none;
  width: 40px;
  height: 40px;
  border-radius: 10px;
  background: rgba(255, 255, 255, 0.05);
  border: none;
  color: white;
  cursor: pointer;
}

/* Responsive */
@media (max-width: 1024px) {
  .navbar-search {
    max-width: 300px;
    margin: 0 1rem;
  }
  
  .platform-switcher {
    display: none;
  }
}

@media (max-width: 768px) {
  .modern-navbar {
    padding: 0 1rem;
  }
  
  .navbar-search,
  .icon-btn:not(:last-child) {
    display: none;
  }
  
  .mobile-menu-btn {
    display: flex;
    align-items: center;
    justify-content: center;
  }
  
  .logo-subtitle {
    display: none;
  }
}

/* Sidebar Toggle Animation */
.sidebar-toggle {
  transition: margin-left 0.3s cubic-bezier(0.4, 0, 0.2, 1);
}

.sidebar-open {
  margin-left: 260px;
}
</style>

<!-- NAVBAR MODERNE -->
<nav class="modern-navbar">
  <div class="navbar-container">
    
    <!-- Logo & Branding -->
    <div class="navbar-logo">
      <img src="{{ asset('assets/admin/images/logo-ip-plus.jpeg') }}" alt="IMPACT Plus" class="logo-img">
      <div class="logo-text">
        <div class="logo-title">IMPACT Plus</div>
        <div class="logo-subtitle">Admin Dashboard</div>
      </div>
    </div>
    
    <!-- Platform Switcher -->
    <div class="platform-switcher">
      <button class="platform-btn active" data-platform="tgv">
        <i class="typcn typcn-book" style="margin-right: 5px;"></i>
        TGV
      </button>
      <button class="platform-btn" data-platform="emploi">
        <i class="typcn typcn-briefcase" style="margin-right: 5px;"></i>
        1 Jeune 1 Emploi
      </button>
    </div>
    
    <!-- Search Bar -->
    <div class="navbar-search">
      <div class="search-wrapper">
        <i class="typcn typcn-zoom search-icon"></i>
        <input type="text" class="search-input" placeholder="Rechercher...">
      </div>
    </div>
    
    <!-- Right Section -->
    <div class="navbar-right">
      
      <!-- Notifications -->
      <button class="icon-btn">
        <i class="typcn typcn-bell"></i>
        <span class="badge-notification"></span>
      </button>
      
      <!-- Messages -->
      <button class="icon-btn">
        <i class="typcn typcn-messages"></i>
        <span class="badge-notification"></span>
      </button>
      
      <!-- Settings -->
      <button class="icon-btn">
        <i class="typcn typcn-cog"></i>
      </button>
      
      <!-- User Menu -->
      <div class="user-menu">
        <img src="{{ asset('assets/admin/images/faces/face5.jpg') }}" alt="Admin" class="user-avatar">
        <div class="user-info">
          <div class="user-name">Admin</div>
          <div class="user-role"> Utilisateurs</div>
        </div>
        <i class="typcn typcn-chevron-down dropdown-icon"></i>
      </div>
      
      <!-- Mobile Menu -->
      <button class="mobile-menu-btn" id="mobileMenuToggle">
        <i class="typcn typcn-th-menu"></i>
      </button>
      
    </div>
    
  </div>
</nav>

<!-- Spacer for fixed navbar -->
<div style="height: 90px;"></div>

<script>
document.addEventListener('DOMContentLoaded', function() {
  // Platform Switcher
  const platformBtns = document.querySelectorAll('.platform-btn');
  
  platformBtns.forEach(btn => {
    btn.addEventListener('click', function() {
      platformBtns.forEach(b => b.classList.remove('active'));
      this.classList.add('active');
      
      const platform = this.getAttribute('data-platform');
      
      // Dispatch custom event for platform change
      window.dispatchEvent(new CustomEvent('platformChange', { 
        detail: { platform: platform } 
      }));
    });
  });
});
</script>