<style>
.modern-footer {
  background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%);
  color: #94a3b8;
  padding: 2rem 0;
  margin-top: 4rem;
  position: relative;
  z-index: 1;
}

.footer-container {
  max-width: 1920px;
  margin: 0 auto;
  padding: 0 2rem;
}

.footer-content {
  display: grid;
  grid-template-columns: 2fr 1fr 1fr 1fr;
  gap: 3rem;
  margin-bottom: 2rem;
}

.footer-section h4 {
  color: white;
  font-weight: 700;
  margin-bottom: 1rem;
  font-size: 1.1rem;
}

.footer-section p {
  color: #64748b;
  font-size: 0.9rem;
  line-height: 1.6;
}

.footer-links {
  list-style: none;
  padding: 0;
  margin: 0;
}

.footer-links li {
  margin-bottom: 0.75rem;
}

.footer-links a {
  color: #94a3b8;
  text-decoration: none;
  font-size: 0.9rem;
  transition: color 0.3s;
}

.footer-links a:hover {
  color: #3b82f6;
}

.footer-contact {
  display: flex;
  align-items: center;
  gap: 0.5rem;
  margin-bottom: 0.75rem;
  color: #94a3b8;
  font-size: 0.9rem;
}

.footer-contact i {
  color: #3b82f6;
}

.footer-bottom {
  border-top: 1px solid rgba(255, 255, 255, 0.1);
  padding-top: 1.5rem;
  text-align: center;
  color: #64748b;
  font-size: 0.85rem;
}

@media (max-width: 768px) {
  .footer-content {
    grid-template-columns: 1fr;
    gap: 2rem;
  }
}
</style>

<footer class="modern-footer">
  <div class="footer-container">
    <div class="footer-content">
      
      <!-- About -->
      <div class="footer-section">
        <h4>Institut IMPACT Plus</h4>
        <p>
          Plateforme de gestion intégrée pour TGV (Trajets Globaux de Vie) et le programme 
          1 Jeune 1 Emploi - Solutions innovantes pour l'employabilité et le patrimoine familial.
        </p>
      </div>
      
      <!-- Quick Links -->
      <div class="footer-section">
        <h4>Liens Rapides</h4>
        <ul class="footer-links">
          <li><a href="{{ url('/admin/dashboard') }}">Dashboard</a></li>
          <li><a href="{{ route('admin.tgv.requests') }}">Demandes TGV</a></li>
          <li><a href="#">Statistiques</a></li>
          <li><a href="#">Paramètres</a></li>
        </ul>
      </div>
      
      <!-- Resources -->
      <div class="footer-section">
        <h4>Ressources</h4>
        <ul class="footer-links">
          <li><a href="#">Documentation</a></li>
          <li><a href="#">Support</a></li>
          <li><a href="#">API</a></li>
          <li><a href="#">Formation</a></li>
        </ul>
      </div>
      
      <!-- Contact -->
      <div class="footer-section">
        <h4>Contact</h4>
        <div class="footer-contact">
          <i class="typcn typcn-phone"></i>
          <span>+226 70 25 63 63</span>
        </div>
        <div class="footer-contact">
          <i class="typcn typcn-mail"></i>
          <span><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="2d4e4243594c4e596d44405d4c4e59005d41585e034f4b">[email&#160;protected]</a></span>
        </div>
        <div class="footer-contact">
          <i class="typcn typcn-location"></i>
          <span>Ouagadougou, Burkina Faso</span>
        </div>
      </div>
      
    </div>
    
    <div class="footer-bottom">