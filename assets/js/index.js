
    // Utilities
    const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    
    // Set year
    document.getElementById('year').textContent = new Date().getFullYear();

    // Loading Overlay
    window.addEventListener('load', () => {
      setTimeout(() => {
        document.getElementById('loadingOverlay').classList.add('hidden');
      }, 800);
    });

    // Scroll Progress Bar
    window.addEventListener('scroll', () => {
      const scrollProgress = document.getElementById('scrollProgress');
      const scrolled = (window.scrollY / (document.documentElement.scrollHeight - window.innerHeight)) * 100;
      scrollProgress.style.width = scrolled + '%';
    });

    // Navbar scroll effect
    const navbar = document.getElementById('mainNav');
    window.addEventListener('scroll', () => {
      if (window.scrollY > 50) {
        navbar.classList.add('scrolled');
      } else {
        navbar.classList.remove('scrolled');
      }
    });

    // Particles Background
    function createParticles() {
      const container = document.getElementById('particlesBg');
      const particleCount = window.innerWidth > 768 ? 20 : 10;
      
      for (let i = 0; i < particleCount; i++) {
        const particle = document.createElement('div');
        particle.className = 'particle';
        particle.style.width = Math.random() * 4 + 2 + 'px';
        particle.style.height = particle.style.width;
        particle.style.left = Math.random() * 100 + '%';
        particle.style.top = Math.random() * 100 + '%';
        particle.style.animationDuration = Math.random() * 10 + 10 + 's';
        particle.style.animationDelay = Math.random() * 5 + 's';
        container.appendChild(particle);
      }
    }
    
    if (!reduceMotion) {
      createParticles();
    }

    // Hero animations
    if (!reduceMotion) {
      anime.timeline({
        easing: 'easeOutExpo',
        duration: 1000
      })
      .add({
        targets: '.program-badge',
        opacity: [0, 1],
        translateY: [-20, 0],
      })
      .add({
        targets: '#hero-title',
        opacity: [0, 1],
        translateY: [40, 0],
        offset: '-=800'
      })
      .add({
        targets: '.hero-sub',
        opacity: [0, 1],
        translateY: [20, 0],
        offset: '-=700'
      })
      .add({
        targets: '.cta-btn',
        opacity: [0, 1],
        translateY: [20, 0],
        delay: anime.stagger(100),
        offset: '-=600'
      })
      .add({
        targets: '.stat-card',
        opacity: [0, 1],
        translateY: [30, 0],
        delay: anime.stagger(150),
        offset: '-=400'
      });

      // Hero image floating
      anime({
        targets: '.hero-image',
        translateY: [-8, 8],
        duration: 4000,
        direction: 'alternate',
        easing: 'easeInOutSine',
        loop: true
      });
    }

    // Stats counter animation
    function animateCounter(id, target) {
      const element = document.getElementById(id);
      if (!element) return;
      
      const isPercentage = target.toString().includes('%');
      const numericTarget = parseInt(target);
      
      if (reduceMotion) {
        element.textContent = target;
        return;
      }

      anime({
        targets: element,
        innerHTML: [0, numericTarget],
        easing: 'easeOutExpo',
        round: 1,
        duration: 2000,
        update: function(anim) {
          if (isPercentage) {
            element.textContent = Math.round(anim.animations[0].currentValue) + '%';
          } else if (numericTarget > 100) {
            element.textContent = Math.round(anim.animations[0].currentValue) + '+';
          } else {
            element.textContent = Math.round(anim.animations[0].currentValue);
          }
        }
      });
    }

    // Intersection Observer for scroll animations
    const observerOptions = {
      threshold: 0.1,
      rootMargin: '0px 0px -100px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          if (entry.target.id === 'stat1') {
            animateCounter('stat1');
            animateCounter('stat2');
            animateCounter('stat3');
          }
          
          if (!reduceMotion) {
            anime({
              targets: entry.target,
              opacity: [0, 1],
              translateY: [40, 0],
              duration: 800,
              easing: 'easeOutCubic'
            });
          } else {
            entry.target.style.opacity = 1;
          }
          
          observer.unobserve(entry.target);
        }
      });
    }, observerOptions);

    // Observe elements
    document.querySelectorAll('.program-card, .price-card, .testimonial-card, .ig-frame, #stat1').forEach(el => {
      if (el.id !== 'stat1') {
        el.style.opacity = 0;
      }
      observer.observe(el);
    });

    // Button ripple effect
    document.querySelectorAll('.btn').forEach(button => {
      button.addEventListener('click', function(e) {
        if (reduceMotion) return;
        
        const rect = this.getBoundingClientRect();
        const ripple = document.createElement('span');
        const size = Math.max(rect.width, rect.height);
        const x = e.clientX - rect.left - size / 2;
        const y = e.clientY - rect.top - size / 2;
        
        ripple.style.width = ripple.style.height = size + 'px';
        ripple.style.left = x + 'px';
        ripple.style.top = y + 'px';
        ripple.classList.add('ripple');
        
        this.appendChild(ripple);
        
        setTimeout(() => ripple.remove(), 600);
      });
    });

    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function(e) {
        const href = this.getAttribute('href');
        if (href === '#' || href.length <= 1) return;
        
        const target = document.querySelector(href);
        if (!target) return;
        
        e.preventDefault();
        
        const offsetTop = target.offsetTop - 80;
        
        if (reduceMotion) {
          window.scrollTo(0, offsetTop);
        } else {
          window.scrollTo({
            top: offsetTop,
            behavior: 'smooth'
          });
        }
        
        // Close mobile menu if open
        const navCollapse = document.getElementById('navMain');
        if (navCollapse.classList.contains('show')) {
          bootstrap.Collapse.getInstance(navCollapse)?.hide();
        }
      });
    });

    // CTA buttons actions
    document.getElementById('joinBtn').addEventListener('click', () => {
      const contactSection = document.getElementById('contact');
      if (contactSection) {
        const offsetTop = contactSection.offsetTop - 80;
        window.scrollTo({
          top: offsetTop,
          behavior: reduceMotion ? 'auto' : 'smooth'
        });
      }
    });

    document.getElementById('learnBtn').addEventListener('click', () => {
      const whySection = document.getElementById('why');
      if (whySection) {
        const offsetTop = whySection.offsetTop - 80;
        window.scrollTo({
          top: offsetTop,
          behavior: reduceMotion ? 'auto' : 'smooth'
        });
      }
    });

    // Add hover effect to cards with anime.js
    if (!reduceMotion) {
      document.querySelectorAll('.program-card, .price-card').forEach(card => {
        card.addEventListener('mouseenter', function() {
          anime({
            targets: this.querySelector('img, i.fs-5, i.fs-1'),
            scale: 1.05,
            duration: 300,
            easing: 'easeOutQuad'
          });
        });
        
        card.addEventListener('mouseleave', function() {
          anime({
            targets: this.querySelector('img, i.fs-5, i.fs-1'),
            scale: 1,
            duration: 300,
            easing: 'easeOutQuad'
          });
        });
      });
    }

    // Toast notification system
    function showToast(message, type = 'success') {
      const toastContainer = document.createElement('div');
      toastContainer.style.cssText = `
        position: fixed;
        top: 100px;
        right: 20px;
        z-index: 9999;
        max-width: 350px;
      `;
      
      const bgColor = type === 'success' ? 'linear-gradient(135deg, #25d366, #128c7e)' : 
                      type === 'error' ? 'linear-gradient(135deg, #ff4444, #cc0000)' : 
                      'linear-gradient(135deg, var(--brand-yellow), var(--brand-yellow-700))';
      
      toastContainer.innerHTML = `
        <div class="toast-custom" style="
          background: ${bgColor};
          color: white;
          padding: 1rem 1.5rem;
          border-radius: 12px;
          box-shadow: 0 8px 32px rgba(0,0,0,0.3);
          display: flex;
          align-items: center;
          gap: 1rem;
          animation: slideIn 0.3s ease;
        ">
          <i class="bi bi-${type === 'success' ? 'check-circle-fill' : type === 'error' ? 'x-circle-fill' : 'info-circle-fill'} fs-4"></i>
          <span>${message}</span>
        </div>
      `;
      
      document.body.appendChild(toastContainer);
      
      setTimeout(() => {
        toastContainer.style.animation = 'slideOut 0.3s ease';
        setTimeout(() => toastContainer.remove(), 300);
      }, 3000);
    }

    // Add animation keyframes
    const style = document.createElement('style');
    style.textContent = `
      @keyframes slideIn {
        from {
          transform: translateX(400px);
          opacity: 0;
        }
        to {
          transform: translateX(0);
          opacity: 1;
        }
      }
      
      @keyframes slideOut {
        from {
          transform: translateX(0);
          opacity: 1;
        }
        to {
          transform: translateX(400px);
          opacity: 0;
        }
      }
      
      .ripple {
        position: absolute;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.6);
        transform: scale(0);
        animation: rippleEffect 0.6s ease-out;
        pointer-events: none;
      }
      
      @keyframes rippleEffect {
        to {
          transform: scale(4);
          opacity: 0;
        }
      }
      
      /* Scrollbar styling */
      ::-webkit-scrollbar {
        width: 10px;
      }
      
      ::-webkit-scrollbar-track {
        background: rgba(0, 0, 0, 0.2);
      }
      
      ::-webkit-scrollbar-thumb {
        background: linear-gradient(180deg, var(--brand-yellow), var(--brand-yellow-700));
        border-radius: 10px;
      }
      
      ::-webkit-scrollbar-thumb:hover {
        background: var(--brand-yellow);
      }
      
      /* Selection color */
      ::selection {
        background: var(--brand-yellow);
        color: #111;
      }
      
      /* Focus states */
      .btn:focus,
      .nav-link:focus {
        outline: 2px solid var(--brand-yellow);
        outline-offset: 2px;
      }
    `;
    document.head.appendChild(style);

    // Add click handlers to all "Unirse" buttons
    document.querySelectorAll('.btn-primary-custom').forEach(btn => {
      if (!btn.id) {
        btn.addEventListener('click', () => {
          showToast('¡Genial! Nos pondremos en contacto contigo pronto.', 'success');
          setTimeout(() => {
            window.open('https://wa.me/5215555555555?text=Hola, me interesa conocer más sobre los programas de entrenamiento', '_blank');
          }, 1000);
        });
      }
    });

    // Performance optimization: Lazy load images
    if ('IntersectionObserver' in window) {
      const imageObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            const img = entry.target;
            if (img.dataset.src) {
              img.src = img.dataset.src;
              img.removeAttribute('data-src');
            }
            imageObserver.unobserve(img);
          }
        });
      });
      
      document.querySelectorAll('img[data-src]').forEach(img => {
        imageObserver.observe(img);
      });
    }

    // Parallax effect for hero section (desktop only)
    if (!reduceMotion && window.innerWidth > 768) {
      let ticking = false;
      
      window.addEventListener('scroll', () => {
        if (!ticking) {
          window.requestAnimationFrame(() => {
            const scrolled = window.pageYOffset;
            const parallaxElements = document.querySelectorAll('.float-circle');
            
            parallaxElements.forEach((el, index) => {
              const speed = 0.5 + (index * 0.2);
              el.style.transform = `translateY(${scrolled * speed}px)`;
            });
            
            ticking = false;
          });
          
          ticking = true;
        }
      });
    }

    // Add entrance animation to sections when they come into view
    const sectionObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting && !reduceMotion) {
          anime({
            targets: entry.target.querySelectorAll('.section-label, h2, p, .row > div'),
            opacity: [0, 1],
            translateY: [30, 0],
            delay: anime.stagger(100),
            duration: 600,
            easing: 'easeOutCubic'
          });
          sectionObserver.unobserve(entry.target);
        }
      });
    }, { threshold: 0.1 });

    document.querySelectorAll('section').forEach(section => {
      if (!section.querySelector('.hero-left')) {
        sectionObserver.observe(section);
      }
    });

    // Easter egg: Konami code
    // let konamiCode = [];
    // const konamiSequence = ['ArrowUp', 'ArrowUp', 'ArrowDown', 'ArrowDown', 'ArrowLeft', 'ArrowRight', 'ArrowLeft', 'ArrowRight', 'b', 'a'];
    
    // document.addEventListener('keydown', (e) => {
    //   konamiCode.push(e.key);
    //   konamiCode = konamiCode.slice(-10);
      
    //   if (konamiCode.join(',') === konamiSequence.join(',')) {
    //     showToast('🏆 ¡Código secreto activado! 20% de descuento en tu primera sesión', 'success');
    //     if (!reduceMotion) {
    //       anime({
    //         targets: 'body',
    //         backgroundColor: ['#0b0b0b', '#1a1a00', '#0b0b0b'],
    //         duration: 2000,
    //         easing: 'easeInOutQuad'
    //       });
    //     }
    //   }
    // });

    // Add typing effect to hero title (only on first load)
    if (!reduceMotion && !sessionStorage.getItem('heroAnimated')) {
      sessionStorage.setItem('heroAnimated', 'true');
      
      const heroTitle = document.getElementById('hero-title');
      const originalText = heroTitle.textContent;
      heroTitle.textContent = '';
      heroTitle.style.opacity = 1;
      
      let charIndex = 0;
      const typingInterval = setInterval(() => {
        if (charIndex < originalText.length) {
          heroTitle.textContent += originalText[charIndex];
          charIndex++;
        } else {
          clearInterval(typingInterval);
        }
      }, 50);
    }
