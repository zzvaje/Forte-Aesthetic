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
      --muted-white: rgba(255, 255, 255, 0.85);
    }

    html,
    body {
      height: 100%;
      background: linear-gradient(180deg, #0b0b0b 0%, #091012 40%, #0e0e0e 100%);
      color: var(--muted-white);
      font-family: Inter, system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;
    }

    /* Navbar */
    .navbar {
      background: linear-gradient(90deg, rgba(0, 0, 0, 0.75), rgba(15, 15, 15, 0.65));
      backdrop-filter: blur(4px);
    }

    .nav-brand {
      color: var(--brand-yellow);
      font-weight: 800;
      letter-spacing: 1px;
    }

    .nav-link {
      color: rgba(255, 255, 255, 0.85) !important;
    }

    /* Hero */
    .hero {
      padding: 6rem 0 4rem;
      position: relative;
      overflow: hidden;
    }

    .hero-left h1 {
      font-size: clamp(2.2rem, 4vw, 4rem);
      line-height: 1;
      letter-spacing: -1px;
      font-weight: 800;
      color: #fff;
    }

    .hero-sub {
      color: rgba(255, 255, 255, 0.75);
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
      background: linear-gradient(180deg, rgba(255, 255, 255, 0.02), rgba(255, 255, 255, 0.01));
      border: 1px solid rgba(255, 255, 255, 0.04);
      border-radius: 14px;
      transition: transform .35s ease, box-shadow .35s ease;
      overflow: hidden;
    }

    .program-card:hover,
    .price-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 25px 40px rgba(0, 0, 0, 0.6);
    }

    .program-badge {
      background: rgba(0, 0, 0, 0.5);
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

    /* Footer form */
    .subscribe {
      background: linear-gradient(90deg, rgba(255, 255, 255, 0.02), rgba(0, 0, 0, 0.02));
      border-radius: 12px;
      padding: 1rem;
    }

    /* small touches */
    .muted {
      color: rgba(255, 255, 255, 0.6);
    }

    .divider {
      height: 4px;
      background: linear-gradient(90deg, rgba(255, 255, 255, 0.05), rgba(250, 200, 0, 0.6), rgba(255, 255, 255, 0.05));
      border-radius: 4px;
      margin: 2rem 0;
    }

    /* Responsive image in hero */
    .hero-image {
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 20px 60px rgba(0, 0, 0, 0.6);
      border: 1px solid rgba(255, 255, 255, 0.03);
    }

    /* subtle floating circle */
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

    /* Botón flotante de WhatsApp */
    .btn-whatsapp {
      position: fixed;
      bottom: 25px;
      right: 25px;
      width: 60px;
      height: 60px;
      background: linear-gradient(135deg, #25d366, #128c7e);
      color: white;
      font-size: 1.9rem;
      border: none;
      border-radius: 50%;
      box-shadow: 0 0 15px rgba(37, 211, 102, 0.6);
      z-index: 1050;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .btn-whatsapp:hover {
      transform: scale(1.1);
      box-shadow: 0 0 25px rgba(37, 211, 102, 0.9);
    }

    .btn-whatsapp i {
      animation: pulse 2s infinite;
    }

    /* Brillo animado */
    @keyframes pulse {

      0%,
      100% {
        text-shadow: 0 0 5px rgba(255, 255, 255, 0.5), 0 0 10px #25d366;
      }

      50% {
        text-shadow: 0 0 15px #25d366, 0 0 30px #25d366;
      }
    }
  </style>
</head>

<body>

  <!-- NAV -->
  <nav class="navbar navbar-expand-lg navbar-dark py-3 fixed-top">
    <div class="container">
      <a class="navbar-brand nav-brand d-flex align-items-center gap-2" href="#">
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
          <li class="nav-item"><a class="nav-link" href="#contact">Contacto</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- HERO -->
  <header class="hero">
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
          <div class="hero-image mx-auto">
            <img src="assets/img/forte_1.png" class="img-fluid" alt="Gym image">
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
              <p class="small muted mb-3">¿Estas listo?</p>
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
          <div class="ratio ratio-16x9 program-card p-3">
            <video class="w-100 h-100 object-fit-cover rounded" autoplay muted loop playsinline>
              <source src="assets/video/charlie_fitness_final.mp4" type="video/mp4">
              Tu navegador no soporta la reproducción de video.
            </video>
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

      <!-- Contact / Subscribe -->
      <section id="contact" class="mb-5">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <h5 class="small muted">Contacto</h5>
            <h2 class="fw-bold">¿Tienes alguna pregunta?</h2>
            <p class="muted">Déjanos tu correo y te contactamos con una oferta especial.</p>

            <form class="row g-2 subscribe" id="subscribeForm">
              <div class="col-12">
                <label class="form-label small">Correo</label>
                <input class="form-control form-control-lg bg-transparent text-white border-1" type="email" placeholder="tucorreo@ejemplo.com" required>
              </div>
              <div class="col-12 d-flex gap-2">
                <button type="submit" class="btn btn-primary-custom flex-grow-1">Enviar</button>
                <button type="button" class="btn btn-outline-light">Llámanos</button>
              </div>
            </form>
          </div>

          <div class="col-lg-5 text-center">
            <img src="assets/img/forte_trainer.png" class="img-fluid rounded program-card" alt="trainer">
          </div>
        </div>
      </section>

    </div>
  </main>

  <!-- FOOTER -->
  <footer class="py-4">
    <div class="container d-flex justify-content-between align-items-center">
      <div class="d-flex align-items-center gap-2">
        <i class="bi bi-lightning-fill fs-3 text-warning"></i>
        <div>
          <div class="fw-bold">FORTE AESTHETIC</div>
          <small class="muted">© <span id="year"></span> Todos los derechos</small>
        </div>
      </div>

      <div class="muted small">Síguenos: <i class="bi bi-instagram ms-2"></i> <i class="bi bi-facebook ms-2"></i> <i class="bi bi-twitter ms-2"></i></div>
    </div>
  </footer>




  <!-- Botón flotante de WhatsApp -->
  <button type="button" class="btn-whatsapp" data-bs-toggle="modal" data-bs-target="#whatsappModal">
    <i class="bi bi-whatsapp"></i>
  </button>

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
          <small class="text-muted">Atención personalizada todos los días 🕐</small>
        </div>
      </div>
    </div>
  </div>


  <!-- Bootstrap JS bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Anime.js -->
  <script src="https://cdn.jsdelivr.net/npm/animejs@3.2.1/lib/anime.min.js"></script>

  <script>
    // set year
    document.getElementById('year').textContent = new Date().getFullYear();

    // small entrance animations using Anime.js
    anime.timeline({
        easing: 'easeOutExpo',
        duration: 900
      })
      .add({
        targets: '#hero-title',
        translateY: [40, 0],
        opacity: [0, 1],
        delay: 100
      })
      .add({
        targets: '.hero-sub',
        translateY: [20, 0],
        opacity: [0, 1],
        offset: '-=600'
      })
      .add({
        targets: '.cta-btn',
        translateY: [10, 0],
        opacity: [0, 1],
        delay: anime.stagger(80),
        offset: '-=650'
      });

    // stats counter simple
    function animateCount(id, to) {
      const el = document.getElementById(id);
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

    // scroll reveal for program cards & pricing
    const revealElems = document.querySelectorAll('.program-card, .price-card, #why .ratio');
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          anime({
            targets: entry.target,
            translateY: [30, 0],
            opacity: [0, 1],
            duration: 800,
            easing: 'easeOutQuad',
            delay: anime.random(50, 250)
          });
          observer.unobserve(entry.target);
        }
      });
    }, {
      threshold: 0.12
    });

    revealElems.forEach(el => {
      el.style.opacity = 0;
      observer.observe(el);
    });

    // subtle floating animation for hero image
    anime({
      targets: '.hero-image',
      translateY: [-6, 6],
      duration: 3500,
      direction: 'alternate',
      easing: 'easeInOutSine',
      loop: true
    });

    // button click micro-interaction
    document.querySelectorAll('.btn').forEach(btn => {
      btn.addEventListener('mousedown', () => {
        anime({
          targets: btn,
          scale: 0.96,
          duration: 120,
          easing: 'easeOutQuad'
        });
      });
      btn.addEventListener('mouseup', () => {
        anime({
          targets: btn,
          scale: 1,
          duration: 220,
          easing: 'easeOutElastic(1, .7)'
        });
      });
    });

    // form submit demo
    document.getElementById('subscribeForm').addEventListener('submit', function(e) {
      e.preventDefault();
      const btn = this.querySelector('button[type="submit"]');
      btn.disabled = true;
      const orig = btn.innerHTML;
      btn.innerHTML = '<i class="bi bi-send-fill"></i> Enviando...';
      setTimeout(() => {
        btn.innerHTML = '<i class="bi bi-check-circle-fill"></i> Enviado';
        anime({
          targets: btn,
          scale: [1, 1.03, 1],
          duration: 700,
          easing: 'easeOutElastic(1, .6)'
        });
      }, 900);

      setTimeout(() => {
        btn.disabled = false;
        btn.innerHTML = orig;
        this.reset();
      }, 2400);
    });

    
  </script>


</body>

</html>