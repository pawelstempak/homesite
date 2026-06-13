/* ============================================ 
   PORTFOLIO DEVELOPER IT - JavaScript 
   Author: Paweł Stempak 
   ============================================ */ 

// ====== PRELOADER ====== 
window.addEventListener('load', function() { 
    const preloader = document.getElementById('preloader'); 
    if (preloader) { 
        setTimeout(function() { 
            preloader.classList.add('hidden'); 
        }, 800); 
    } 
}); 

// ====== NAVBAR SCROLL EFFECT ====== 
const navbar = document.getElementById('navbar'); 
let lastScroll = 0; 

window.addEventListener('scroll', function() { 
    const currentScroll = window.pageYOffset; 
    
    if (currentScroll > 50) { 
        navbar.classList.add('scrolled'); 
    } else { 
        navbar.classList.remove('scrolled'); 
    } 
    
    lastScroll = currentScroll; 
}); 

// ====== MOBILE HAMBURGER MENU ====== 
const hamburger = document.getElementById('hamburger'); 
const navMenu = document.getElementById('navMenu'); 

if (hamburger && navMenu) { 
    hamburger.addEventListener('click', function() { 
        hamburger.classList.toggle('active'); 
        navMenu.classList.toggle('active'); 
        document.body.style.overflow = navMenu.classList.contains('active') ? 'hidden' : ''; 
    }); 

    // Close menu on link click 
    document.querySelectorAll('.nav-link').forEach(function(link) { 
        link.addEventListener('click', function() { 
            hamburger.classList.remove('active'); 
            navMenu.classList.remove('active'); 
            document.body.style.overflow = ''; 
        }); 
    }); 
} 

// ====== ACTIVE NAV LINK ON SCROLL ====== 
const sections = document.querySelectorAll('section[id]'); 

window.addEventListener('scroll', function() { 
    let current = ''; 
    
    sections.forEach(function(section) { 
        const sectionTop = section.offsetTop - 120; 
        const sectionHeight = section.offsetHeight; 
        
        if (pageYOffset >= sectionTop && pageYOffset < sectionTop + sectionHeight) { 
            current = section.getAttribute('id'); 
        } 
    }); 

    document.querySelectorAll('.nav-link').forEach(function(link) { 
        link.classList.remove('active'); 
        if (link.getAttribute('href') === '#' + current) { 
            link.classList.add('active'); 
        } 
    }); 
}); 
 
// ====== THEME TOGGLE (Dark/Light) ====== 
const themeToggle = document.getElementById('themeToggle'); 
const themeIcon = themeToggle ? themeToggle.querySelector('i') : null; 

function getTheme() { 
    // return localStorage.getItem('theme') || 'dark'; 
    return 'dark';
} 

function setTheme(theme) { 
    document.documentElement.setAttribute('data-theme', theme); 
    localStorage.setItem('theme', theme); 
    
    if (themeIcon) { 
        if (theme === 'dark') { 
            themeIcon.className = 'fas fa-sun'; 
        } else { 
            themeIcon.className = 'fas fa-moon'; 
        } 
    } 
} 

function toggleTheme() { 
    const current = getTheme(); 
    setTheme(current === 'dark' ? 'light' : 'dark'); 
} 

// Initialize theme 
setTheme(getTheme()); 

if (themeToggle) { 
    themeToggle.addEventListener('click', toggleTheme); 
} 

// ====== TYPING EFFECT ====== 
function initTypingEffect() { 
    const typingElement = document.getElementById('typingText'); 
    if (!typingElement) return; 
    
    const roles = [ 
        'Full Stack Developerem', 
        'Specjalistą IT',
        'Grafikiem'
    ]; 
    
    let roleIndex = 0; 
    let charIndex = 0; 
    let isDeleting = false; 
    let isEnd = false; 
    
    function type() { 
        const currentRole = roles[roleIndex]; 
        
        if (isDeleting) { 
            typingElement.textContent = currentRole.substring(0, charIndex - 1); 
            charIndex--; 
            isEnd = false; 
        } else { 
            typingElement.textContent = currentRole.substring(0, charIndex + 1); 
            charIndex++; 
            isEnd = true; 
        } 
        
        let typeSpeed = isDeleting ? 40 : 80; 
        
        if (!isDeleting && charIndex === currentRole.length) { 
            typeSpeed = 2000; 
            isDeleting = true; 
        } else if (isDeleting && charIndex === 0) { 
            isDeleting = false; 
            roleIndex = (roleIndex + 1) % roles.length; 
            typeSpeed = 500; 
        } 
        
        setTimeout(type, typeSpeed); 
    } 
    
    setTimeout(type, 1000); 
} 

initTypingEffect(); 
 
// ====== PROJECT FILTER ====== 
function initProjectFilter() { 
    const filterBtns = document.querySelectorAll('.filter-btn'); 
    const projectCards = document.querySelectorAll('.project-card'); 
    
    if (!filterBtns.length || !projectCards.length) return; 
    
    filterBtns.forEach(function(btn) { 
        btn.addEventListener('click', function() { 
            // Update active button 
            filterBtns.forEach(function(b) { b.classList.remove('active'); }); 
            this.classList.add('active'); 
            
            const filter = this.getAttribute('data-filter'); 
            
            projectCards.forEach(function(card) { 
                if (filter === 'all' || card.getAttribute('data-category') === filter) { 
                    card.style.display = 'block'; 
                    setTimeout(function() { 
                        card.style.opacity = '1'; 
                        card.style.transform = 'scale(1)'; 
                    }, 50); 
                } else { 
                    card.style.opacity = '0'; 
                    card.style.transform = 'scale(0.8)'; 
                    setTimeout(function() { 
                        card.style.display = 'none'; 
                    }, 300); 
                } 
            }); 
        }); 
    }); 
} 

initProjectFilter(); 

// ====== STATS COUNTER ANIMATION ====== 
function initStatsCounter() { 
    const statNumbers = document.querySelectorAll('.stat-number'); 
    if (!statNumbers.length) return; 
    
    let countersStarted = false; 
    
    function startCounters() { 
        if (countersStarted) return; 
        countersStarted = true; 
        
        statNumbers.forEach(function(stat) { 
            const target = parseInt(stat.getAttribute('data-target')); 
            let current = 0; 
            const increment = Math.ceil(target / 60); 
            
            function updateCounter() { 
                current += increment; 
                if (current < target) { 
                    stat.textContent = current; 
                    requestAnimationFrame(updateCounter); 
                } else { 
                    stat.textContent = target; 
                } 
            } 
            
            updateCounter(); 
        }); 
    } 
    
    // Intersection Observer for scroll trigger 
    const statsSection = document.querySelector('.stats'); 
    if (statsSection) { 
        const observer = new IntersectionObserver(function(entries) { 
            entries.forEach(function(entry) { 
                if (entry.isIntersecting) { 
                    startCounters(); 
                    observer.unobserve(entry.target); 
                } 
            }); 
        }, { threshold: 0.3 }); 
        
        observer.observe(statsSection); 
    } 
} 

initStatsCounter(); 
 
// ====== BACK TO TOP BUTTON ====== 
function initBackToTop() { 
    const backToTop = document.getElementById('backToTop'); 
    if (!backToTop) return; 
    
    window.addEventListener('scroll', function() { 
        if (window.pageYOffset > 300) { 
            backToTop.classList.add('visible'); 
        } else { 
            backToTop.classList.remove('visible'); 
        } 
    }); 
    
    backToTop.addEventListener('click', function() { 
        window.scrollTo({ 
            top: 0, 
            behavior: 'smooth' 
        }); 
    }); 
} 

initBackToTop(); 

// ====== CONTACT FORM ====== 
function initContactForm() { 
    const form = document.getElementById('contactForm'); 
    if (!form) return; 
    
    form.addEventListener('submit', function(e) { 
        e.preventDefault(); 
        
        const name = document.getElementById('name').value.trim(); 
        const email = document.getElementById('email').value.trim(); 
        const message = document.getElementById('message').value.trim(); 
        
        if (!name || !email || !message) { 
            alert('Proszę wypełnić wszystkie wymagane pola.'); 
            return; 
        } 
        
        const submitBtn = form.querySelector('button[type=submit]'); 
        const originalText = submitBtn.innerHTML; 
        
        submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Wysyłanie...'; 
        submitBtn.disabled = true; 
        
        // Simulate sending 
        setTimeout(function() { 
            submitBtn.innerHTML = '<i class="fas fa-check"></i> Wysłano!'; 
            submitBtn.style.background = '#22c55e'; 
            
            setTimeout(function() { 
                submitBtn.innerHTML = originalText; 
                submitBtn.style.background = ''; 
                submitBtn.disabled = false; 
                form.reset(); 
            }, 3000); 
        }, 1500); 
    }); 
} 

initContactForm(); 

// ====== SMOOTH SCROLL FOR ANCHOR LINKS ====== 
document.querySelectorAll('a[href^=#]').forEach(function(anchor) { 
    anchor.addEventListener('click', function(e) { 
        const targetId = this.getAttribute('href'); 
        if (targetId === '#') return; 
        
        const targetElement = document.querySelector(targetId); 
        if (targetElement) { 
            e.preventDefault(); 
            targetElement.scrollIntoView({ 
                behavior: 'smooth', 
                block: 'start' 
            }); 
        } 
    }); 
}); 

// ====== SCROLL REVEAL ANIMATIONS ====== 
function initScrollReveal() { 
    const elements = document.querySelectorAll( 
        '.about-card, .skill-category, .project-card, .timeline-item, .edu-card, .stat-item' 
    ); 
    
    if (!elements.length) return; 
    
    // Set initial state 
    elements.forEach(function(el) { 
        el.style.opacity = '0'; 
        el.style.transform = 'translateY(30px)'; 
        el.style.transition = 'opacity 0.6s ease, transform 0.6s ease'; 
    }); 
    
    function revealElements() { 
        elements.forEach(function(el) { 
            const rect = el.getBoundingClientRect(); 
            const windowHeight = window.innerHeight; 
            
            if (rect.top < windowHeight * 0.85) { 
                el.style.opacity = '1'; 
                el.style.transform = 'translateY(0)'; 
            } 
        }); 
    } 
    
    // Run on load and scroll 
    window.addEventListener('load', revealElements); 
    window.addEventListener('scroll', revealElements); 
    revealElements(); 
} 

initScrollReveal(); 

// ====== KEYBOARD NAVIGATION ====== 
document.addEventListener('keydown', function(e) { 
    // Escape to close mobile menu 
    if (e.key === 'Escape' && navMenu && navMenu.classList.contains('active')) { 
        hamburger.click(); 
    } 
}); 
