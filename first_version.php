<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Forte Aesthetic</title>

  <!-- Bootstrap 5.3 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    :root {
      --brand-yellow: #f5c400;
      --brand-yellow-700: #d9ab00;
      --bg-black: #0b0b0b;
      --card-dark: #111111;
      --muted-white: rgba(255, 255, 255, 0.9);
      --muted-light: rgba(255, 255, 255, 0.65);
      --glass: rgba(255, 255, 255, 0.03);
    }

    /* Dark / Light theme variables (switched with .light-theme on <body>) */
    body {
      --bg: linear-gradient(180deg, #0b0b0b 0%, #091012 40%, #0e0e0e 100%);
      --text: var(--muted-white);
      --card-bg: linear-gradient(180deg, rgba(255, 255, 255, 0.02), rgba(255, 255, 255, 0.01));
      background: var(--bg);
      color: var(--text);
      font-family: Inter, system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;
      height: 100%;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
      transition: background .35s ease, color .35s ease;
    }

    body.light-theme {
      --bg: linear-gradient(180deg, #ffffff 0%, #f6f6f6 40%, #f2f2f2 100%);
      --text: #111111;
      --card-bg: linear-gradient(180deg, rgba(17, 17, 17, 0.02), rgba(17, 17, 17, 0.01));
    }

    /* Navbar */
    .navbar {
      background: linear-gradient(90deg, rgba(0, 0, 0, 0.55), rgba(15, 15, 15, 0.35));
      backdrop-filter: blur(6px);
      transition: background .3s ease, backdrop-filter .3s ease;
    }

    body.light-theme .navbar {
      background: rgba(255, 255, 255, 0.85);
      color: #111;
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.04);
    }

    .nav-brand {
      color: var(--brand-yellow);
      font-weight: 800;
      letter-spacing: 1px;
    }

    .nav-link {
      color: rgba(255, 255, 255, 0.95) !important;
    }

    body.light-theme .nav-link {
      color: rgba(0, 0, 0, 0.75) !important;
    }

    /* Hero */
    .hero {
      padding: 6rem 0 4rem;
      position: relative;
      overflow: hidden;
    }

    .hero::before {
      content: "";
      position: absolute;
      inset: 0;
      pointer-events: none;
      background: radial-gradient(800px 400px at 85% 20%, rgba(245, 196, 0, 0.06), transparent 12%),
        radial-gradient(400px 250px at 10% 80%, rgba(0, 0, 0, 0.08), transparent 20%);
      z-index: 0;
    }

    .hero-left {
      position: relative;
      z-index: 2;
    }

    .hero-left h1 {
      font-size: clamp(2.2rem, 4vw, 4rem);
      line-height: 1;
      letter-spacing: -1px;
      font-weight: 800;
      color: var(--text);
    }

    .hero-sub {
      color: var(--muted-light);
      margin-top: .75rem;
    }

    .cta-btn {
      border-radius: 10px;
      padding: .6rem 1.1rem;
      font-weight: 700;
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.45);
    }

    .btn-primary-custom {
      background: linear-gradient(180deg, var(--brand-yellow), var(--brand-yellow-700));
      border: none;
      color: #111;
      box-shadow: 0 12px 30px rgba(213, 172, 40, 0.15);
    }

    .btn-outline-light {
      color: var(--text);
      border-color: rgba(255, 255, 255, 0.12);
      background: transparent;
    }

    /* Stats */
    .stat {
      color: var(--brand-yellow);
      font-weight: 700;
      font-size: 1.6rem;
    }

    /* Card styles */
    .program-card,
    .price-card {
      background: var(--card-bg);
      border: 1px solid rgba(255, 255, 255, 0.04);
      border-radius: 14px;
      transition: transform .35s cubic-bezier(.2, .9, .2, 1), box-shadow .35s ease;
      overflow: hidden;
      position: relative;
    }

    body.light-theme .program-card,
    body.light-theme .price-card {
      border: 1px solid rgba(0, 0, 0, 0.06);
    }

    .program-card:hover,
    .price-card:hover {
      transform: translateY(-12px) scale(1.01);
      box-shadow: 0 28px 60px rgba(0, 0, 0, 0.45);
    }

    /* overlay highlight on hover */
    .program-card::after {
      content: "";
      position: absolute;
      inset: 0;
      pointer-events: none;
      background: linear-gradient(90deg, rgba(245, 196, 0, 0.02), transparent 25%);
      opacity: 0;
      transition: opacity .35s ease;
    }

    .program-card:hover::after {
      opacity: 1;
    }

    .program-badge {
      background: rgba(0, 0, 0, 0.45);
      color: var(--brand-yellow);
      padding: .25rem .6rem;
      border-radius: 999px;
      font-weight: 700;
      font-size: .85rem;
    }

    /* Pricing */
    .price-card .price {
      font-size: 2.25rem;
      font-weight: 900;
      color: var(--brand-yellow);
    }

    .most-popular {
      border: 2px solid var(--brand-yellow);
      box-shadow: 0 16px 40px rgba(213, 172, 40, 0.08);
    }

    /* Footer form & subscribe */
    .subscribe {
      background: linear-gradient(90deg, rgba(255, 255, 255, 0.02), rgba(0, 0, 0, 0.02));
      border-radius: 12px;
      padding: 1rem;
    }

    .muted {
      color: rgba(255, 255, 255, 0.65);
    }

    body.light-theme .muted {
      color: rgba(0, 0, 0, 0.6);
    }

    .divider {
      height: 4px;
      background: linear-gradient(90deg, rgba(255, 255, 255, 0.05), rgba(250, 200, 0, 0.6), rgba(255, 255, 255, 0.05));
      border-radius: 4px;
      margin: 2rem 0;
    }

    /* Hero image */
    .hero-image {
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 20px 60px rgba(0, 0, 0, 0.6);
      border: 1px solid rgba(255, 255, 255, 0.03);
      width: min(520px, 100%);
      margin: 0 auto;
      transform-origin: center;
    }

    /* floating circle */
    .float-circle {
      position: absolute;
      right: -5%;
      top: 5%;
      width: 380px;
      height: 380px;
      border-radius: 50%;
      background: radial-gradient(circle at 30% 30%, rgba(245, 196, 0, 0.14), rgba(0, 0, 0, 0));
      filter: blur(30px);
      pointer-events: none;
      transform: translateZ(0);
    }

    /* testimonials */
    .testimonial-card {
      background: linear-gradient(180deg, rgba(255, 255, 255, 0.02), rgba(255, 255, 255, 0.01));
      border-radius: 12px;
      padding: 1.25rem;
      text-align: left;
    }

    .testimonial-card img {
      width: 56px;
      height: 56px;
      object-fit: cover;
    }

    /* social floating */
    .social-floating {
      position: fixed;
      right: 18px;
      bottom: 100px;
      display: flex;
      gap: .6rem;
      flex-direction: column;
      z-index: 1080;
    }

    .social-floating a {
      width: 48px;
      height: 48px;
      border-radius: 999px;
      display: flex;
      align-items: center;
      justify-content: center;
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
      transition: transform .22s ease;
      color: #fff;
      text-decoration: none;
    }

    .social-floating a:hover {
      transform: translateY(-6px);
    }

    .social-floating .ig {
      background: linear-gradient(45deg, #f09433, #e6683c, #dc2743, #cc2366, #bc1888);
    }

    .social-floating .yt {
      background: linear-gradient(135deg, #ff4a4a, #ff0000);
    }

    .social-floating .wa {
      background: linear-gradient(135deg, #25d366, #128c7e);
    }

    .social-floating .tt {
      background: linear-gradient(135deg, #1877F2, #3b5998);
    }

    .social-floating .x {
      background: #000;
      /* X usa color negro moderno */
    }

    /* WhatsApp floating */
    .btn-whatsapp {
      position: fixed;
      bottom: 25px;
      right: 25px;
      width: 60px;
      height: 60px;
      background: linear-gradient(135deg, #25d366, #128c7e);
      color: white;
      font-size: 1.15rem;
      border: none;
      border-radius: 50%;
      box-shadow: 0 0 15px rgba(37, 211, 102, 0.6);
      z-index: 1050;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .btn-whatsapp:hover {
      transform: scale(1.05);
      box-shadow: 0 0 25px rgba(37, 211, 102, 0.95);
    }

    /* small touches / responsiveness */
    @media (max-width: 768px) {
      .hero {
        padding-top: 4.5rem;
      }

      .float-circle {
        display: none;
      }

      .social-floating {
        right: 12px;
        bottom: 120px;
      }
    }

    /* Marco visual del embed */
    .ig-frame {
      background: var(--card-bg);
      border: 1px solid rgba(255, 255, 255, 0.06);
      border-radius: 1px;
      padding: 10px;
      overflow: hidden;
      transition: transform 0.35s ease, box-shadow 0.35s ease, border-color 0.35s ease;
      position: relative;
      height: auto;
      /* deja que crezca según el contenido */
      min-height: 480px;
      /* asegura uniformidad */
    }

    body.light-theme .ig-frame {
      border: 1px solid rgba(0, 0, 0, 0.06);
    }

    /* Brillo dorado al pasar el cursor */
    .ig-frame::after {
      content: "";
      position: absolute;
      inset: 0;
      background: linear-gradient(135deg, rgba(245, 196, 0, 0.15), transparent 60%);
      opacity: 0;
      transition: opacity 0.4s ease;
    }

    .ig-frame:hover::after {
      opacity: 1;
    }

    /* Animación sutil al hacer hover */
    .ig-frame:hover {
      transform: translateY(-8px) scale(1.02);
      box-shadow: 0 16px 40px rgba(245, 196, 0, 0.08);
      border-color: rgba(245, 196, 0, 0.25);
    }

    /* Ajustes del bloque de Instagram */
    .instagram-media {
      width: 100% !important;
      max-width: 100% !important;
      min-height: 480px !important;
      height: auto !important;
      margin: 0 auto !important;
      background: rgba(0, 0, 0, 0.2) !important;
      border-radius: 10px !important;
    }


    body.light-theme .instagram-media {
      background: rgba(255, 255, 255, 0.6) !important;
    }

    @media (min-width: 992px) {
      .ig-frame {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
      }

      .instagram-media {
        min-height: 550px !important;
      }
    }

    .social-yellow {
      color: #FFD43B;
    }

    .social-yellow a {
      color: #FFD43B;
      transition: color 0.3s ease;
    }

    .social-yellow a:hover {
      color: #FFB800;
      /* tono más brillante al pasar el mouse */
    }


    /* reduced motion — respect user preference */
    @media (prefers-reduced-motion: reduce) {
      * {
        animation: none !important;
        transition: none !important;
        scroll-behavior: auto !important;
      }
    }
  </style>
</head>

<body>

  <!-- NAV -->
  <nav class="navbar navbar-expand-lg navbar-dark py-3 fixed-top">
    <div class="container">
      <a class="navbar-brand nav-brand d-flex align-items-center gap-2" href="#hero">
        <i class="bi bi-lightning-fill fs-4"></i>
        <span>FORTE AESTHETIC</span>
      </a>

      <button class="navbar-toggler btn-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navMain" aria-controls="navMain" aria-expanded="false" aria-label="Toggle navigation">
        <i class="bi bi-list"></i>
      </button>

      <div class="collapse navbar-collapse" id="navMain">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-lg-center">
          <li class="nav-item"><a class="nav-link" href="#programs">Programas</a></li>
          <li class="nav-item"><a class="nav-link" href="#why">Por qué</a></li>
          <li class="nav-item"><a class="nav-link" href="#pricing">Precios</a></li>
          <li class="nav-item"><a class="nav-link" href="#testimonials">Testimonios</a></li>
          <li class="nav-item"><a class="nav-link" href="#contact">Contacto</a></li>
          <li class="nav-item ms-3 d-flex align-items-center">
            <!-- Theme toggle -->
            <!-- <button id="themeToggle" class="btn btn-sm btn-outline-light d-flex align-items-center gap-2" title="Cambiar tema">
              <i id="themeIcon" class="bi bi-moon"></i>
              <span class="d-none d-md-inline small">Tema</span>
            </button> -->
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- HERO -->
  <header class="hero" id="hero">
    <div class="container">
      <div class="row align-items-center gy-4">
        <div class="col-lg-6 hero-left">
          <div class="badge program-badge mb-3">Entrenamiento • Fuerza</div>
          <h1 id="hero-title">Fitness para verte fuerte y con estilo</h1>
          <p class="hero-sub">Entrena con planes pensados para resultados reales. Rutinas, nutrición y seguimiento profesional.</p>

          <div class="d-flex gap-3 mt-4">
            <button class="btn cta-btn btn-primary-custom" id="joinBtn"><i class="bi bi-rocket-takeoff me-2"></i>Únete</button>
            <button class="btn cta-btn btn-outline-light" id="learnBtn"><i class="bi bi-info-circle me-2"></i>Más info</button>
          </div>

          <div class="d-flex gap-4 align-items-center mt-5">
            <div>
              <div class="stat" id="stat1">28</div>
              <div class="muted small">Programas</div>
            </div>
            <div>
              <div class="stat" id="stat2">980+</div>
              <div class="muted small">Miembros</div>
            </div>
            <div>
              <div class="stat" id="stat3">180+</div>
              <div class="muted small">Coaches</div>
            </div>
          </div>
        </div>

        <div class="col-lg-6 text-center position-relative">
          <div class="float-circle" aria-hidden="true"></div>
          <div class="hero-image mx-auto" aria-hidden="true">
            <!-- Option: if you have a short mp4 hero video, swap the <img> for the <video> block below (commented). -->
            <img src="assets/img/forte_1.png" class="img-fluid" alt="Gym image">

            <!-- Example video fallback (uncomment if you have video):
            <video autoplay muted loop playsinline class="w-100 h-100 object-fit-cover rounded">
              <source src="assets/video/hero_short.mp4" type="video/mp4">
            </video>
            -->
          </div>
        </div>
      </div>
    </div>
  </header>

  <main class="pb-5">
    <div class="container">

      <!-- Programs -->
      <section id="programs" class="mt-5">
        <div class="d-flex justify-content-between align-items-end mb-3">
          <div>
            <h5 class="text-uppercase muted small">Nuestro</h5>
            <h2 class="fw-bold">Programas destacados</h2>
          </div>
          <div class="muted">Explora y únete a la sesión que más te guste</div>
        </div>

        <div class="row g-4">
          <div class="col-md-6 col-lg-3">
            <div class="program-card p-3 h-100 d-flex flex-column">
              <div class="ratio ratio-4x3 mb-3 overflow-hidden rounded">
                <img src="assets/img/forte_pump.png" class="w-100 h-100 object-fit-cover" alt="">
              </div>
              <h6 class="fw-bold mb-1">BODYPUMP</h6>
              <p class="small muted mb-3">Fuerza y resistencia</p>
              <div class="mt-auto d-flex justify-content-between align-items-center">
                <button class="btn btn-sm btn-outline-light">Detalles</button>
                <button class="btn btn-sm btn-primary-custom">Unirse</button>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="program-card p-3 h-100 d-flex flex-column">
              <div class="ratio ratio-4x3 mb-3 overflow-hidden rounded">
                <img src="assets/img/forte_cardio.png" class="w-100 h-100 object-fit-cover" alt="">
              </div>
              <h6 class="fw-bold mb-1">CARDIO BLAST</h6>
              <p class="small muted mb-3">Quema y resistencia</p>
              <div class="mt-auto d-flex justify-content-between align-items-center">
                <button class="btn btn-sm btn-outline-light">Detalles</button>
                <button class="btn btn-sm btn-primary-custom">Unirse</button>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="program-card p-3 h-100 d-flex flex-column">
              <div class="ratio ratio-4x3 mb-3 overflow-hidden rounded">
                <img src="assets/img/forte_power.png" class="w-100 h-100 object-fit-cover" alt="">
              </div>
              <h6 class="fw-bold mb-1">HIIT X POWER</h6>
              <p class="small muted mb-3">Alta intensidad</p>
              <div class="mt-auto d-flex justify-content-between align-items-center">
                <button class="btn btn-sm btn-outline-light">Detalles</button>
                <button class="btn btn-sm btn-primary-custom">Unirse</button>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="program-card p-3 h-100 d-flex flex-column">
              <div class="ratio ratio-4x3 mb-3 overflow-hidden rounded">
                <img src="assets/img/forte_reto.png" class="w-100 h-100 object-fit-cover" alt="">
              </div>
              <h6 class="fw-bold mb-1">RETO</h6>
              <p class="small muted mb-3">¿Estás listo?</p>
              <div class="mt-auto d-flex justify-content-between align-items-center">
                <button class="btn btn-sm btn-outline-light">Detalles</button>
                <button class="btn btn-sm btn-primary-custom">Unirse</button>
              </div>
            </div>
          </div>
        </div>
      </section>

      <div class="divider"></div>

      <!-- Why choose us -->
      <section id="why" class="mb-5">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <h5 class="small muted text-uppercase">Por qué elegirnos</h5>
            <h2 class="fw-bold">Instalaciones de primer nivel y coaching profesional</h2>
            <p class="muted">Equipos de última generación, entrenadores certificados y planes personalizados para alcanzar tus metas.</p>

            <ul class="list-unstyled mt-4">
              <li class="mb-3"><i class="bi bi-check-circle-fill text-warning me-2"></i><strong>Equipamiento premium</strong> — Pesas libres, máquinas y zona funcional.</li>
              <li class="mb-3"><i class="bi bi-check-circle-fill text-warning me-2"></i><strong>Entrenadores expertos</strong> — Guía y seguimiento personalizado.</li>
              <li class="mb-3"><i class="bi bi-check-circle-fill text-warning me-2"></i><strong>Plan nutricional</strong> — Complemento ideal para resultados rápidos.</li>
            </ul>
          </div>
          <div class="col-lg-6">
            <div class="ratio ratio-16x9 program-card p-3">
              <video class="w-100 h-100 object-fit-cover rounded" autoplay muted loop playsinline>
                <source src="assets/video/charlie_fitness_final.mp4" type="video/mp4">
                Tu navegador no soporta la reproducción de video.
              </video>
            </div>
          </div>

        </div>
      </section>

      <div class="divider"></div>

      <!-- Pricing -->
      <section id="pricing" class="mb-5">
        <div class="text-center mb-4">
          <h5 class="small muted text-uppercase">Planes</h5>
          <h2 class="fw-bold">Nuestros planes especiales</h2>
        </div>

        <div class="row g-4">
          <div class="col-md-4">
            <div class="price-card p-4 text-center h-100">
              <div class="mb-3 small muted">Básico</div>
              <div class="price">$120</div>
              <p class="muted small">Incluye acceso a máquinas y clases grupales.</p>
              <ul class="list-unstyled text-start small muted mb-4">
                <li>• Coaching básico</li>
                <li>• 30 sesiones</li>
                <li>• Acceso limitado</li>
              </ul>
              <button class="btn btn-outline-light w-100">Elegir</button>
            </div>
          </div>

          <div class="col-md-4">
            <div class="price-card most-popular p-4 text-center h-100">
              <div class="mb-3 small muted">Premium</div>
              <div class="price">$220</div>
              <p class="muted small">El más recomendado para progreso constante.</p>
              <ul class="list-unstyled text-start small muted mb-4">
                <li>• Coaching personalizado</li>
                <li>• 60 sesiones</li>
                <li>• Acceso total</li>
              </ul>
              <button class="btn btn-primary-custom w-100">Unirme</button>
            </div>
          </div>

          <div class="col-md-4">
            <div class="price-card p-4 text-center h-100">
              <div class="mb-3 small muted">Platinum</div>
              <div class="price">$320</div>
              <p class="muted small">Todo incluido + asesoría nutricional intensiva.</p>
              <ul class="list-unstyled text-start small muted mb-4">
                <li>• Coaching VIP</li>
                <li>• 90 sesiones</li>
                <li>• Acceso 24/7</li>
              </ul>
              <button class="btn btn-outline-light w-100">Elegir</button>
            </div>
          </div>
        </div>
      </section>

      <div class="divider"></div>

      <!-- Testimonials -->
      <section id="testimonials" class="mb-5">
        <div class="text-center mb-4">
          <h5 class="small muted text-uppercase">Testimonios</h5>
          <h2 class="fw-bold">Resultados reales, motivación constante</h2>
        </div>

        <div class="row g-4">
          <div class="col-md-4">
            <div class="testimonial-card h-100 d-flex gap-3 align-items-start">
              <img src="assets/img/user1.jpg" class="rounded-circle" alt="Ana">
              <div>
                <p class="mb-1">"Perdí 10 kg en 3 meses con el programa HIIT X POWER. Los coaches son súper atentos."</p>
                <small class="fw-bold text-warning">– Ana G.</small>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="testimonial-card h-100 d-flex gap-3 align-items-start">
              <img src="assets/img/user2.jpg" class="rounded-circle" alt="Carlos">
              <div>
                <p class="mb-1">"El plan nutricional realmente marcó la diferencia. Ambiente excelente."</p>
                <small class="fw-bold text-warning">– Carlos M.</small>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="testimonial-card h-100 d-flex gap-3 align-items-start">
              <img src="assets/img/user3.jpg" class="rounded-circle" alt="Lucia">
              <div>
                <p class="mb-1">"Entrenar aquí cambió mi rutina completa. Muy recomendable para principiantes."</p>
                <small class="fw-bold text-warning">– Lucía R.</small>
              </div>
            </div>
          </div>
        </div>
      </section>

      <div class="divider"></div>

      <!-- Gallery / Instagram simulated -->
      <section id="gallery" class="mb-5 text-center">
        <div class="mb-4">
          <h5 class="small muted text-uppercase">Síguenos</h5>
          <h2 class="fw-bold">@forte.aesthetic.team</h2>
          <p class="muted mb-4">Explora nuestras últimas publicaciones y resultados.</p>
        </div>

        <div class="container">
          <div class="row justify-content-center g-4">
            <div class="col-12 col-sm-6 col-md-4 col-lg-4">
              <div class="ig-frame">
                <blockquote class="instagram-media"
                  data-instgrm-permalink="https://www.instagram.com/p/DN8TxxtjTxQ/"
                  data-instgrm-version="14"></blockquote>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-4">
              <div class="ig-frame">
                <blockquote class="instagram-media"
                  data-instgrm-permalink="https://www.instagram.com/p/DMIsoqlx8yp/"
                  data-instgrm-version="14"></blockquote>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-4">
              <div class="ig-frame">
                <blockquote class="instagram-media"
                  data-instgrm-permalink="https://www.instagram.com/p/DQPMOo5jTbY/"
                  data-instgrm-version="14"></blockquote>
              </div>
            </div>
          </div>
        </div>

        <div class="mt-4">
          <a href="https://www.instagram.com/forte.aesthetic.team/" target="_blank" class="btn btn-primary-custom">
            <i class="bi bi-instagram me-1"></i> Ver más en Instagram
          </a>
        </div>

        <script async src="//www.instagram.com/embed.js"></script>
      </section>



      <div class="divider"></div>

      <!-- Contacto WhatsApp + Contact form -->
      <section id="contact" class="mb-5">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <h5 class="small muted">Contacto directo</h5>
            <h2 class="fw-bold">¿Quieres saber más?</h2>
            <p class="muted">
              💬 <strong>Escríbenos por WhatsApp</strong> para resolver tus dudas, conocer nuestros planes o recibir una atención personalizada.
            </p>

            <div class="whatsapp-box p-4 mt-3 program-card">
              <div class="d-flex align-items-center gap-3 mb-3">
                <i class="bi bi-whatsapp text-success" style="font-size:2.3rem;"></i>
                <div>
                  <h5 class="fw-bold mb-0 text-light">Chat en vivo</h5>
                  <small class="text-white">Respuestas rápidas de nuestro equipo</small>
                </div>
              </div>
              <a data-bs-toggle="modal" data-bs-target="#whatsappModal"
                class="btn btn-success btn-lg w-100 fw-bold rounded-pill shadow mb-3">
                <i class="bi bi-whatsapp me-2"></i> Enviar mensaje por WhatsApp
              </a>


            </div>
          </div>

          <div class="col-lg-5 text-center mt-4 mt-lg-0">
            <img src="assets/img/forte_trainer.png" class="img-fluid rounded program-card" alt="trainer">
          </div>
        </div>
      </section>

    </div>
  </main>

  <!-- FOOTER -->
  <footer class="py-4">
    <div class="container d-flex flex-column flex-md-row justify-content-between align-items-center gap-3">
      <div class="d-flex align-items-center gap-2">
        <i class="bi bi-lightning-fill fs-3 text-warning"></i>
        <div>
          <div class="fw-bold">FORTE AESTHETIC</div>
          <small class="muted">© <span id="year"></span> Todos los derechos</small>
        </div>
      </div>

      <div class="d-flex align-items-center gap-2 social-yellow">
        <div class="small me-3">Síguenos:</div>
        <a href="#" class="text-decoration-none me-2" aria-label="Instagram"><i class="bi bi-instagram fs-5"></i></a>
        <a href="#" class="text-decoration-none me-2" aria-label="Facebook"><i class="bi bi-facebook fs-5"></i></a>
        <a href="#" class="text-decoration-none me-2" aria-label="Twitter"><i class="bi bi-twitter-x fs-5"></i></a>
      </div>

    </div>
  </footer>

  <!-- Social floating bar -->
  <div class="social-floating">
    <a class="ig" href="https://www.instagram.com/forte.aesthetic.team/" target="_blank" title="Instagram"><i class="bi bi-instagram"></i></a>
    <a class="yt" href="https://www.youtube.com/" target="_blank" title="YouTube"><i class="bi bi-youtube"></i></a>
    <a class="tt" href="https://www.tiktok.com/" target="_blank" title="Facebook"><i class="bi bi-facebook"></i></a>
    <a class="x" href="https://twitter.com/" target="_blank" title="Twitter / X"><i class="bi bi-twitter-x"></i></a>
    <a class="wa" data-bs-toggle="modal" data-bs-target="#whatsappModal" target="_blank" title="WhatsApp"><i class="bi bi-whatsapp"></i></a>
  </div>

  <!-- Botón flotante de WhatsApp -->
  <!-- <button type="button" class="btn-whatsapp" data-bs-toggle="modal" data-bs-target="#whatsappModal">
    <i class="bi bi-whatsapp" style="font-size:1.35rem;"></i>
  </button> -->

  <!-- Modal WhatsApp -->
  <div class="modal fade" id="whatsappModal" tabindex="-1" aria-labelledby="whatsappModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content bg-dark text-light border-warning" style="border-radius: 14px;">
        <div class="modal-header border-0">
          <h5 class="modal-title fw-bold text-warning" id="whatsappModalLabel">
            <i class="bi bi-chat-dots me-2"></i>Habla con un socio
          </h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body text-center">
          <p class="mb-3">
            🚀 <strong>¿Quieres más información?</strong><br>
            Habla directamente con un <span class="text-warning fw-bold">socio de Forte Aesthetic</span> y resuelve tus dudas al instante.
          </p>
          <a href="https://wa.me/5215555555555" target="_blank" class="btn btn-success btn-lg px-4 rounded-pill">
            <i class="bi bi-whatsapp me-2"></i> Ir a WhatsApp
          </a>
        </div>
        <div class="modal-footer border-0 justify-content-center">
          <small class="text-white">Atención personalizada todos los días 🕐</small>
        </div>
      </div>
    </div>
  </div>

  <script>
    window.addEventListener('load', () => {
      if (window.instgrm) window.instgrm.Embeds.process();
    });
    window.addEventListener('resize', () => {
      if (window.instgrm) window.instgrm.Embeds.process();
    });
  </script>


  <!-- Bootstrap JS bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Anime.js -->
  <script src="https://cdn.jsdelivr.net/npm/animejs@3.2.1/lib/anime.min.js"></script>

  <script>
    // ---------- UTIL / RESPECT USER PREFERENCE ----------
    const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    function prefersReducedMotion() {
      return reduceMotion || window.innerWidth <= 480; /* reduce on small screens */
    }

    // set year
    document.getElementById('year').textContent = new Date().getFullYear();

    // THEME TOGGLE (dark / light) - persisted in localStorage
    const themeToggle = document.getElementById('themeToggle');
    const themeIcon = document.getElementById('themeIcon');
    const currentTheme = localStorage.getItem('fa_theme') || (window.matchMedia && window.matchMedia('(prefers-color-scheme: light)').matches ? 'light' : 'dark');

    function applyTheme(theme) {
      if (theme === 'light') {
        document.body.classList.add('light-theme');
        themeIcon.className = 'bi bi-sun';
      } else {
        document.body.classList.remove('light-theme');
        themeIcon.className = 'bi bi-moon';
      }
      localStorage.setItem('fa_theme', theme);
    }
    applyTheme(currentTheme);

    themeToggle.addEventListener('click', () => {
      const newTheme = document.body.classList.contains('light-theme') ? 'dark' : 'light';
      applyTheme(newTheme);
    });

    // --------- ANIMATIONS: HERO ENTRANCE (anime.js, but skip if reduced motion) ----------
    if (!prefersReducedMotion()) {
      anime.timeline({
          easing: 'easeOutExpo',
          duration: 900
        })
        .add({
          targets: '#hero-title',
          translateY: [40, 0],
          opacity: [0, 1],
          delay: 120
        })
        .add({
          targets: '.hero-sub',
          translateY: [20, 0],
          opacity: [0, 1],
          offset: '-=650'
        })
        .add({
          targets: '.cta-btn',
          translateY: [10, 0],
          opacity: [0, 1],
          delay: anime.stagger(80),
          offset: '-=650'
        });
    } else {
      // Ensure visible if animations disabled
      document.getElementById('hero-title').style.opacity = 1;
      document.querySelectorAll('.hero-sub, .cta-btn').forEach(el => el.style.opacity = 1);
    }

    // --------- STATS COUNTER (Count up using anime) ----------
    function animateCount(id, to) {
      const el = document.getElementById(id);
      if (!el) return;
      if (prefersReducedMotion()) {
        el.textContent = to;
        return;
      }
      anime({
        targets: el,
        innerHTML: [0, parseInt(to)],
        easing: 'linear',
        round: 1,
        duration: 1400,
      });
    }
    animateCount('stat1', 28);
    animateCount('stat2', 980);
    animateCount('stat3', 180);

    // --------- SCROLL REVEAL (IntersectionObserver) ----------
    const revealElems = document.querySelectorAll('.program-card, .price-card, #why .program-card, .testimonial-card, #gallery img, .hero-image');
    const revealObserver = new IntersectionObserver((entries, obs) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          if (!prefersReducedMotion()) {
            anime({
              targets: entry.target,
              translateY: [20, 0],
              opacity: [0, 1],
              duration: 800,
              easing: 'easeOutQuad',
              delay: anime.random(40, 240)
            });
          } else {
            entry.target.style.opacity = 1;
            entry.target.style.transform = 'none';
          }
          obs.unobserve(entry.target);
        }
      });
    }, {
      threshold: 0.12
    });

    revealElems.forEach(el => {
      el.style.opacity = 0;
      revealObserver.observe(el);
    });

    // subtle floating animation for hero image (only desktop / not reduced motion)
    if (!prefersReducedMotion()) {
      anime({
        targets: '.hero-image',
        translateY: [-6, 6],
        duration: 3500,
        direction: 'alternate',
        easing: 'easeInOutSine',
        loop: true
      });
    }

    // button click micro-interaction (scale)
    document.querySelectorAll('.btn').forEach(btn => {
      btn.addEventListener('mousedown', () => {
        if (prefersReducedMotion()) return;
        anime({
          targets: btn,
          scale: 0.96,
          duration: 120,
          easing: 'easeOutQuad'
        });
      });
      btn.addEventListener('mouseup', () => {
        if (prefersReducedMotion()) return;
        anime({
          targets: btn,
          scale: 1,
          duration: 220,
          easing: 'easeOutElastic(1, .7)'
        });
      });
    });

    // --------- FORM SUBMIT DEMO (subscribeForm) ----------
    const subscribeForm = document.getElementById('subscribeForm');
    if (subscribeForm) {
      subscribeForm.addEventListener('submit', function(e) {
        e.preventDefault();
        const btn = this.querySelector('button[type="submit"]');
        if (!btn) return;
        btn.disabled = true;
        const orig = btn.innerHTML;
        btn.innerHTML = '<i class="bi bi-send-fill"></i> Enviando...';

        // simulate sending
        setTimeout(() => {
          btn.innerHTML = '<i class="bi bi-check-circle-fill"></i> Enviado';
          if (!prefersReducedMotion()) {
            anime({
              targets: btn,
              scale: [1, 1.03, 1],
              duration: 700,
              easing: 'easeOutElastic(1, .6)'
            });
          }
        }, 900);

        setTimeout(() => {
          btn.disabled = false;
          btn.innerHTML = orig;
          this.reset();
          // small success toast (Bootstrap)
          const toastInner = document.createElement('div');
          toastInner.className = 'toast align-items-center text-bg-dark border-0';
          toastInner.setAttribute('role', 'status');
          toastInner.innerHTML = '<div class="d-flex"><div class="toast-body">¡Mensaje enviado! Te contactamos pronto.</div><button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button></div>';
          document.body.appendChild(toastInner);
          const bsToast = new bootstrap.Toast(toastInner, {
            delay: 2400
          });
          bsToast.show();
          setTimeout(() => document.body.removeChild(toastInner), 3200);
        }, 2400);
      });
    }

    // Optional: small smooth scroll for anchor links (but respects reduced motion)
    if (!prefersReducedMotion()) {
      document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
          const href = this.getAttribute('href');
          if (href.length > 1 && document.querySelector(href)) {
            e.preventDefault();
            document.querySelector(href).scrollIntoView({
              behavior: 'smooth',
              block: 'start'
            });
          }
        });
      });
    }

    // Micro-UX: when clicking "Únete" open contact modal (or scroll to contact)
    document.getElementById('joinBtn').addEventListener('click', () => {
      // scroll to contact
      const el = document.getElementById('contact');
      if (el) el.scrollIntoView({
        behavior: prefersReducedMotion() ? 'auto' : 'smooth',
        block: 'start'
      });
    });

    // Improve performance: pause videos on small devices to avoid heavy CPU
    function adjustVideosForDevice() {
      document.querySelectorAll('video').forEach(v => {
        if (window.innerWidth < 600) {
          try {
            v.pause();
          } catch (e) {}
        } else {
          try {
            v.play();
          } catch (e) {}
        }
      });
    }
    adjustVideosForDevice();
    window.addEventListener('resize', () => {
      if (!reduceMotion) adjustVideosForDevice();
    });
  </script>

</body>

</html>