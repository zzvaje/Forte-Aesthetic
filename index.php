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
  <link href="assets/css/index.css" rel="stylesheet">


</head>

<body>
  <!-- Loading Overlay -->
  <div class="loading-overlay" id="loadingOverlay">
    <div class="loader"></div>
  </div>

  <!-- Scroll Progress Bar -->
  <div class="scroll-progress" id="scrollProgress"></div>

  <!-- Particles Background -->
  <div class="particles-bg" id="particlesBg"></div>

  <!-- NAV -->
  <nav class="navbar navbar-expand-lg navbar-dark py-3 fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand nav-brand d-flex align-items-center gap-2" href="#hero">
        <i class="bi bi-lightning-charge-fill fs-3"></i>
        <span>FORTE AESTHETIC</span>
      </a>

      <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navMain">
        <i class="bi bi-list fs-3"></i>
      </button>

      <div class="collapse navbar-collapse" id="navMain">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-lg-center gap-lg-3">
          <li class="nav-item"><a class="nav-link" href="#programs">Programas</a></li>
          <li class="nav-item"><a class="nav-link" href="#why">Por qué</a></li>
          <li class="nav-item"><a class="nav-link" href="#pricing">Precios</a></li>
          <li class="nav-item"><a class="nav-link" href="#testimonials">Testimonios</a></li>
          <li class="nav-item"><a class="nav-link" href="#contact">Contacto</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- HERO -->
  <header class="hero" id="hero">
    <div class="float-circle float-circle-1"></div>
    <div class="float-circle float-circle-2"></div>

    <div class="container">
      <div class="row align-items-center gy-5">
        <div class="col-lg-6 hero-left">
          <div class="badge program-badge mb-3">
            <i class="bi bi-fire me-1"></i> Entrenamiento Personal
          </div>
          <h1 id="hero-title">Transforma tu cuerpo con entrenamiento de élite</h1>
          <p class="hero-sub">Coach personal certificado. Planes diseñados para tus objetivos. Resultados garantizados con seguimiento profesional 24/7.</p>

          <div class="d-flex gap-3 mt-4 flex-wrap">
            <button class="btn cta-btn btn-primary-custom" id="joinBtn">
              <i class="bi bi-rocket-takeoff-fill me-2"></i>Comenzar Ahora
            </button>
            <button class="btn cta-btn btn-outline-light" id="learnBtn">
              <i class="bi bi-info-circle-fill me-2"></i>Conocer Más
            </button>
          </div>

          <div class="stats-container">
            <div class="stat-card">
              <div class="stat" id="stat1">50+</div>
              <div class="muted small">Clientes</div>
            </div>
            <div class="stat-card">
              <div class="stat" id="stat2">5</div>
              <div class="muted small">Años Exp.</div>
            </div>
            <div class="stat-card">
              <div class="stat" id="stat3">100%</div>
              <div class="muted small">Satisfacción</div>
            </div>
          </div>
        </div>

        <div class="col-lg-6 text-center position-relative">
          <div class="hero-image mx-auto">
            <img src="assets/img/forte_1.png" class="img-fluid" alt="Personal Trainer" style="object-fit: cover; height: 100%;">
          </div>
        </div>
      </div>
    </div>
  </header>

  <main class="pb-5">
    <div class="container">

      <!-- Programs -->
      <section id="programs" class="mt-5">
        <div class="section-header text-center">
          <span class="section-label">
            <i class="bi bi-stars me-1"></i> Nuestros Programas
          </span>
          <h2 class="fw-bold">Elige tu camino al éxito</h2>
          <p class="muted">Programas personalizados para cada objetivo y nivel</p>
        </div>

        <div class="row g-4">
          <div class="col-md-6 col-lg-3">
            <div class="program-card p-3 h-100 d-flex flex-column">
              <div class="ratio ratio-4x3 mb-3 overflow-hidden rounded-3">
                <img src="assets/img/forte_pump.png" class="w-100 h-100 object-fit-cover" alt="Body Pump">
              </div>
              <div class="d-flex justify-content-between align-items-start mb-2">
                <h6 class="fw-bold mb-1">BODYPUMP</h6>
                <i class="bi bi-lightning-charge-fill text-warning fs-5"></i>
              </div>
              <p class="small muted mb-3">Fuerza y resistencia muscular</p>
              <div class="mt-auto d-flex justify-content-between align-items-center gap-2">
                <button class="btn btn-sm btn-outline-light flex-grow-1">Detalles</button>
                <button class="btn btn-sm btn-primary-custom flex-grow-1">Unirse</button>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="program-card p-3 h-100 d-flex flex-column">
              <div class="ratio ratio-4x3 mb-3 overflow-hidden rounded-3">
                <img src="assets/img/forte_cardio.png" class="w-100 h-100 object-fit-cover" alt="Cardio">
              </div>
              <div class="d-flex justify-content-between align-items-start mb-2">
                <h6 class="fw-bold mb-1">CARDIO BLAST</h6>
                <i class="bi bi-fire text-warning fs-5"></i>
              </div>
              <p class="small muted mb-3">Quema calorías y mejora resistencia</p>
              <div class="mt-auto d-flex justify-content-between align-items-center gap-2">
                <button class="btn btn-sm btn-outline-light flex-grow-1">Detalles</button>
                <button class="btn btn-sm btn-primary-custom flex-grow-1">Unirse</button>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="program-card p-3 h-100 d-flex flex-column">
              <div class="ratio ratio-4x3 mb-3 overflow-hidden rounded-3">
                <img src="assets/img/forte_power.png" class="w-100 h-100 object-fit-cover" alt="HIIT">
              </div>
              <div class="d-flex justify-content-between align-items-start mb-2">
                <h6 class="fw-bold mb-1">HIIT X POWER</h6>
                <i class="bi bi-lightning-fill text-warning fs-5"></i>
              </div>
              <p class="small muted mb-3">Alta intensidad, máximos resultados</p>
              <div class="mt-auto d-flex justify-content-between align-items-center gap-2">
                <button class="btn btn-sm btn-outline-light flex-grow-1">Detalles</button>
                <button class="btn btn-sm btn-primary-custom flex-grow-1">Unirse</button>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="program-card p-3 h-100 d-flex flex-column">
              <div class="ratio ratio-4x3 mb-3 overflow-hidden rounded-3">
                <img src="assets/img/forte_reto.png" class="w-100 h-100 object-fit-cover" alt="Challenge">
              </div>
              <div class="d-flex justify-content-between align-items-start mb-2">
                <h6 class="fw-bold mb-1">RETO 30 DÍAS</h6>
                <i class="bi bi-trophy-fill text-warning fs-5"></i>
              </div>
              <p class="small muted mb-3">¿Estás listo para el desafío?</p>
              <div class="mt-auto d-flex justify-content-between align-items-center gap-2">
                <button class="btn btn-sm btn-outline-light flex-grow-1">Detalles</button>
                <button class="btn btn-sm btn-primary-custom flex-grow-1">Unirse</button>
              </div>
            </div>
          </div>
        </div>
      </section>

      <div class="divider"></div>

      <!-- Why choose us -->
      <section id="why" class="mb-5">
        <div class="row align-items-center gy-5">
          <div class="col-lg-6">
            <span class="section-label">
              <i class="bi bi-award-fill me-1"></i> Por Qué Elegirnos
            </span>
            <h2 class="fw-bold mt-3">Entrenamiento profesional y resultados reales</h2>
            <p class="muted mt-3">Metodología probada, equipamiento de última generación y seguimiento personalizado para alcanzar tus metas de forma segura y efectiva.</p>

            <ul class="list-unstyled mt-4">
              <li class="mb-3 d-flex align-items-start">
                <i class="bi bi-check-circle-fill text-warning me-3 mt-1 fs-5"></i>
                <div>
                  <strong class="d-block">Equipamiento Premium</strong>
                  <span class="small muted">Tecnología de punta para entrenamientos efectivos</span>
                </div>
              </li>
              <li class="mb-3 d-flex align-items-start">
                <i class="bi bi-check-circle-fill text-warning me-3 mt-1 fs-5"></i>
                <div>
                  <strong class="d-block">Coach Certificado</strong>
                  <span class="small muted">5 años de experiencia transformando vidas</span>
                </div>
              </li>
              <li class="mb-3 d-flex align-items-start">
                <i class="bi bi-check-circle-fill text-warning me-3 mt-1 fs-5"></i>
                <div>
                  <strong class="d-block">Plan Nutricional</strong>
                  <span class="small muted">Alimentación personalizada para potenciar resultados</span>
                </div>
              </li>
              <li class="mb-3 d-flex align-items-start">
                <i class="bi bi-check-circle-fill text-warning me-3 mt-1 fs-5"></i>
                <div>
                  <strong class="d-block">Seguimiento 24/7</strong>
                  <span class="small muted">Apoyo constante en tu proceso de transformación</span>
                </div>
              </li>
            </ul>
          </div>
          <div class="col-lg-4">
            <div class="program-card p-3">
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
        <div class="section-header text-center">
          <span class="section-label">
            <i class="bi bi-tag-fill me-1"></i> Inversión
          </span>
          <h2 class="fw-bold mt-3">Planes diseñados para ti</h2>
          <p class="muted">Elige el plan que mejor se adapte a tus objetivos</p>
        </div>

        <div class="row g-4 mt-2">
          <div class="col-md-4">
            <div class="price-card p-4 text-center h-100">
              <div class="mb-3">
                <i class="bi bi-box text-warning fs-1"></i>
              </div>
              <div class="mb-3 small text-uppercase fw-bold text-warning">Básico</div>
              <div class="price mb-2">$120</div>
              <p class="muted small mb-4">Perfecto para comenzar tu transformación</p>
              <ul class="list-unstyled text-start mb-4">
                <li class="mb-2"><i class="bi bi-check2 text-warning me-2"></i>Coaching básico</li>
                <li class="mb-2"><i class="bi bi-check2 text-warning me-2"></i>30 sesiones/mes</li>
                <li class="mb-2"><i class="bi bi-check2 text-warning me-2"></i>Acceso a equipos</li>
                <li class="mb-2"><i class="bi bi-check2 text-warning me-2"></i>Plan nutricional básico</li>
              </ul>
              <button class="btn btn-outline-light w-100">Elegir Plan</button>
            </div>
          </div>

          <div class="col-md-4">
            <div class="price-card most-popular p-4 text-center h-100 position-relative">
              <div class="badge-popular">MÁS POPULAR</div>
              <div class="mb-3">
                <i class="bi bi-star-fill text-warning fs-1"></i>
              </div>
              <div class="mb-3 small text-uppercase fw-bold text-warning">Premium</div>
              <div class="price mb-2">$220</div>
              <p class="muted small mb-4">El más elegido para resultados rápidos</p>
              <ul class="list-unstyled text-start mb-4">
                <li class="mb-2"><i class="bi bi-check2 text-warning me-2"></i>Coaching personalizado</li>
                <li class="mb-2"><i class="bi bi-check2 text-warning me-2"></i>60 sesiones/mes</li>
                <li class="mb-2"><i class="bi bi-check2 text-warning me-2"></i>Acceso total 24/7</li>
                <li class="mb-2"><i class="bi bi-check2 text-warning me-2"></i>Plan nutricional completo</li>
                <li class="mb-2"><i class="bi bi-check2 text-warning me-2"></i>Seguimiento semanal</li>
              </ul>
              <button class="btn btn-primary-custom w-100">Empezar Ahora</button>
            </div>
          </div>

          <div class="col-md-4">
            <div class="price-card p-4 text-center h-100">
              <div class="mb-3">
                <i class="bi bi-gem text-warning fs-1"></i>
              </div>
              <div class="mb-3 small text-uppercase fw-bold text-warning">Platinum</div>
              <div class="price mb-2">$320</div>
              <p class="muted small mb-4">Experiencia VIP con máximos beneficios</p>
              <ul class="list-unstyled text-start mb-4">
                <li class="mb-2"><i class="bi bi-check2 text-warning me-2"></i>Coaching VIP exclusivo</li>
                <li class="mb-2"><i class="bi bi-check2 text-warning me-2"></i>Sesiones ilimitadas</li>
                <li class="mb-2"><i class="bi bi-check2 text-warning me-2"></i>Acceso prioritario</li>
                <li class="mb-2"><i class="bi bi-check2 text-warning me-2"></i>Nutricionista personal</li>
                <li class="mb-2"><i class="bi bi-check2 text-warning me-2"></i>Análisis corporal mensual</li>
              </ul>
              <button class="btn btn-outline-light w-100">Elegir Plan</button>
            </div>
          </div>
        </div>
      </section>

      <div class="divider"></div>

      <!-- Testimonials -->
      <section id="testimonials" class="mb-5">
        <div class="section-header text-center">
          <span class="section-label">
            <i class="bi bi-chat-heart-fill me-1"></i> Testimonios
          </span>
          <h2 class="fw-bold mt-3">Lo que dicen nuestros clientes</h2>
          <p class="muted">Historias reales de transformación</p>
        </div>

        <div class="row g-4 mt-2">
          <div class="col-md-4">
            <div class="testimonial-card h-100">
              <div class="d-flex gap-3 align-items-start mb-3">
                <img src="assets/img/forte_user.jpg" class="rounded-circle" alt="Ana">
                <div class="flex-grow-1">
                  <div class="fw-bold mb-1">Mike</div>
                  <div class="stars mb-2">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                  </div>
                </div>
              </div>
              <p class="mb-0 small">"Increíble transformación en solo 3 meses. El coach es muy profesional y el plan nutricional marcó una gran diferencia. ¡100% recomendado!"</p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="testimonial-card h-100">
              <div class="d-flex gap-3 align-items-start mb-3">
                <img src="assets/img/forte_user.jpg" class="rounded-circle" alt="Carlos">
                <div class="flex-grow-1">
                  <div class="fw-bold mb-1">Ricardo</div>
                  <div class="stars mb-2">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                  </div>
                </div>
              </div>
              <p class="mb-0 small">"Perdí 15kg y gané músculo al mismo tiempo. El seguimiento personalizado hace toda la diferencia. Mejor inversión en mi salud."</p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="testimonial-card h-100">
              <div class="d-flex gap-3 align-items-start mb-3">
                <img src="assets/img/forte_user.jpg" class="rounded-circle" alt="Lucia">
                <div class="flex-grow-1">
                  <div class="fw-bold mb-1">Andrea</div>
                  <div class="stars mb-2">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                  </div>
                </div>
              </div>
              <p class="mb-0 small">"Ambiente motivador y resultados visibles desde la primera semana. El apoyo constante te mantiene enfocado en tus metas."</p>
            </div>
          </div>
        </div>
      </section>

      <div class="divider"></div>

      <!-- Gallery / Instagram -->
      <!-- <section id="gallery" class="mb-5">
        <div class="section-header text-center">
          <span class="section-label">
            <i class="bi bi-instagram me-1"></i> Galería
          </span>
          <h2 class="fw-bold mt-3">@forte.aesthetic.team</h2>
          <p class="muted">Síguenos y conoce más transformaciones</p>
        </div>

        <div class="row g-4 mt-2">
          <div class="col-md-4">
            <div class="ig-frame">
              <img src="https://images.unsplash.com/photo-1574680096145-d05b474e2155?w=600&h=600&fit=crop" class="img-fluid rounded-3 w-100" alt="Training 1">
            </div>
          </div>
          <div class="col-md-4">
            <div class="ig-frame">
              <img src="https://images.unsplash.com/photo-1623874514711-0f321325f318?w=600&h=600&fit=crop" class="img-fluid rounded-3 w-100" alt="Training 2">
            </div>
          </div>
          <div class="col-md-4">
            <div class="ig-frame">
              <img src="https://images.unsplash.com/photo-1599058917212-d750089bc07e?w=600&h=600&fit=crop" class="img-fluid rounded-3 w-100" alt="Training 3">
            </div>
          </div>
        </div>

        <div class="text-center mt-5">
          <a href="https://www.instagram.com/forte.aesthetic.team/" target="_blank" class="btn btn-primary-custom btn-lg">
            <i class="bi bi-instagram me-2"></i> Seguir en Instagram
          </a>
        </div>
      </section> -->

      <!-- <div class="divider"></div> -->

      <!-- Contact -->
      <section id="contact" class="mb-5">
        <div class="row align-items-center gy-5">
          <div class="col-lg-6">
            <span class="section-label">
              <i class="bi bi-chat-dots-fill me-1"></i> Contacto
            </span>
            <h2 class="fw-bold mt-3">¿Listo para transformarte?</h2>
            <p class="muted mt-3">
              Contáctanos por WhatsApp para una consulta gratuita. Te ayudaremos a crear el plan perfecto para alcanzar tus objetivos.
            </p>

            <div class="program-card p-4 mt-4">
              <div class="d-flex align-items-center gap-3 mb-4">
                <div class="bg-success rounded-circle d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                  <i class="bi bi-whatsapp fs-2 text-white"></i>
                </div>
                <div>
                  <h5 class="fw-bold mb-1">Chat Directo</h5>
                  <small class="muted">Respuesta inmediata de nuestro equipo</small>
                </div>
              </div>

              <a href="https://wa.me/5215555555555" target="_blank" class="btn btn-success btn-lg w-100 fw-bold">
                <i class="bi bi-whatsapp me-2"></i> Enviar Mensaje por WhatsApp
              </a>

              <div class="text-center mt-3">
                <small class="muted">
                  <i class="bi bi-shield-check me-1"></i> Atención personalizada • Sin compromiso
                </small>
              </div>
            </div>
          </div>

          <div class="col-lg-5">
            <div class="program-card p-0 overflow-hidden">
              <img src="assets/img/forte_trainer.png" class="img-fluid w-100" alt="Coach">
            </div>
          </div>
        </div>
      </section>

    </div>
  </main>

  <!-- FOOTER -->
  <footer class="py-5 mt-5" style="background: rgba(0,0,0,0.3); border-top: 1px solid rgba(245, 196, 0, 0.1);">
    <div class="container">
      <div class="row gy-4">
        <div class="col-md-6">
          <div class="d-flex align-items-center gap-2 mb-3">
            <i class="bi bi-lightning-charge-fill fs-2 text-warning"></i>
            <div>
              <div class="fw-bold fs-5">FORTE AESTHETIC</div>
              <small class="muted">Transforma tu vida</small>
            </div>
          </div>
          <p class="muted small">Tu coach personal para alcanzar la mejor versión de ti mismo. Entrenamiento profesional y resultados garantizados.</p>
        </div>

        <div class="col-md-3">
          <h6 class="fw-bold mb-3 text-warning">Enlaces</h6>
          <ul class="list-unstyled">
            <li class="mb-2"><a href="#programs" class="text-decoration-none muted">Programas</a></li>
            <li class="mb-2"><a href="#pricing" class="text-decoration-none muted">Precios</a></li>
            <li class="mb-2"><a href="#testimonials" class="text-decoration-none muted">Testimonios</a></li>
            <li class="mb-2"><a href="#contact" class="text-decoration-none muted">Contacto</a></li>
          </ul>
        </div>

        <div class="col-md-3">
          <h6 class="fw-bold mb-3 text-warning">Síguenos</h6>
          <div class="d-flex gap-3">
            <a href="https://www.instagram.com/forte.aesthetic.team/" target="_blank" class="text-warning fs-4"><i class="bi bi-instagram"></i></a>
            <a href="#" class="text-warning fs-4"><i class="bi bi-facebook"></i></a>
            <a href="#" class="text-warning fs-4"><i class="bi bi-youtube"></i></a>
            <a href="#" class="text-warning fs-4"><i class="bi bi-tiktok"></i></a>
          </div>
        </div>
      </div>

      <div class="text-center mt-4 pt-4" style="border-top: 1px solid rgba(255,255,255,0.1);">
        <small class="muted">© <span id="year"></span> Forte Aesthetic. Todos los derechos reservados.</small>
      </div>
    </div>
  </footer>

  <!-- Social Floating -->
  <div class="social-floating">
    <a class="ig" href="https://www.instagram.com/forte.aesthetic.team/" target="_blank" title="Instagram">
      <i class="bi bi-instagram"></i>
    </a>
    <a class="yt" href="#" target="_blank" title="YouTube">
      <i class="bi bi-youtube"></i>
    </a>
    <a class="tt" href="#" target="_blank" title="Facebook">
      <i class="bi bi-facebook"></i>
    </a>
    <a class="x" href="#" target="_blank" title="TikTok">
      <i class="bi bi-tiktok"></i>
    </a>
    <a class="wa" href="https://wa.me/5215555555555" target="_blank" title="WhatsApp">
      <i class="bi bi-whatsapp"></i>
    </a>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Anime.js -->
  <script src="https://cdn.jsdelivr.net/npm/animejs@3.2.1/lib/anime.min.js"></script>

  <script src="assets/js/index.js"></script>


</body>

</html>