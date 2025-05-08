<link rel="stylesheet" href="{{ asset('css/inicio-estilos.css') }}">
<footer class="footer">
  <div class="container">
    <div class="footer-top">
      <div class="footer-grid">
        <div class="footer-section">
          <h6 class="footer-heading">Nosotros</h6>
          <ul class="footer-links">
            <li><a href="/info" class="footer-link">Quienes somos</a></li>
            <li><a href="/contacto" class="footer-link">Contacto</a></li>
            <li><a href="/questions" class="footer-link">Preguntas frecuentes</a></li>
          </ul>
        </div>
        <!-- Repite para las otras secciones -->
      </div>
      <div class="footer-newsletter">
        <div class="newsletter-box">
          <a href="#" class="newsletter-link">Inicia sesion o crea una cuenta</a>
          <hr class="divider" />
          <form action="#">
            <div class="form-group">
              <label for="email" class="form-label">Recibe las ultimas novedades.</label>
              <input type="email" id="email" class="form-input" placeholder="Introduce tu correo electronico" required />
            </div>
            <button type="submit" class="form-button">Suscribirse</button>
          </form>
          <hr class="divider" />
          <p class="app-text">Trade on the go with <a href="#" class="app-link">PComponentes App</a></p>
          <div class="app-buttons">
            <a href="#" class="app-button">
              <svg class="app-icon"><!-- Icono de Google Play --></svg>
              <div class="app-button-text">
                <div class="app-button-label">Download on the</div>
                <div class="app-button-name">Google Play</div>
              </div>
            </a>
            <a href="#" class="app-button">
              <svg class="app-icon"><!-- Icono de Apple --></svg>
              <div class="app-button-text">
                <div class="app-button-label">Download on the</div>
                <div class="app-button-name">Mac App Store</div>
              </div>
            </a>
          </div>
          <hr class="divider" />
          <div class="social-links">
            <a href="#" class="social-link"><!-- Icono de Facebook --></a>
            <a href="#" class="social-link"><!-- Icono de Instagram --></a>
            <a href="#" class="social-link"><!-- Icono de Twitter --></a>
            <a href="#" class="social-link"><!-- Icono de GitHub --></a>
            <a href="#" class="social-link"><!-- Icono de Dribbble --></a>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <a href="#" class="footer-logo">
        <img src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/logo-full.svg" alt="Flowbite Logo" class="logo-light" />
        <img src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/logo-full-dark.svg" alt="Flowbite Logo Dark" class="logo-dark" />
      </a>
      <ul class="footer-legal-links">
        <li><a href="/legal" class="legal-link">Aviso legal</a></li>
        <li><a href="/terms" class="legal-link">Condiciones de Uso</a></li>
      </ul>
      <p class="footer-copyright">© 2025 <a href="/inicio" class="copyright-link">PComponentes</a>, Inc. Todos los derechos reservados.</p>
    </div>
  </div>
</footer>