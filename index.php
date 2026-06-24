<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paweł Stempak - Programista | Grafik | Webdesigner | Specjalista IT</title>
    <meta name="description" content="Full Stack Developer - Szukam pracy jako programista, webdesigner, full stack developer, specjalista IT">
    <meta name="keywords" content="portfolio, programista, developer, IT, frontend, backend, praca, full stack, webdesigner, specjalista IT">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Fira+Code:wght@400;500&display=swap" rel="stylesheet">
</head>
<body>

    <!-- ====== PRELOADER ====== -->
    <div id="preloader">
        <div class="loader">
            <span class="loader-text">&lt;<span class="logo-name">PS</span>/&gt;</span>
            <div class="loader-bar"></div>
        </div>
    </div>

    <!-- ====== NAVIGATION ====== -->
    <nav class="navbar" id="navbar">
        <div class="container nav-container">
            <a href="#" class="nav-logo">
                <span class="logo-bracket">&lt;</span>
                <span class="logo-name">PS</span>
                <span class="logo-bracket"> /&gt;</span>
            </a>
            <ul class="nav-menu" id="navMenu">
                <li class="nav-item start"><a href="#hero" class="nav-link active">Start</a></li>
                <li class="nav-item"><a href="#about" class="nav-link">O mnie</a></li>
                <li class="nav-item"><a href="#skills" class="nav-link">Umiejętności</a></li>
                <li class="nav-item"><a href="#portfolio" class="nav-link">Portfolio</a></li>
                <li class="nav-item"><a href="#experience" class="nav-link">Doświadczenie</a></li>
                <li class="nav-item"><a href="#education" class="nav-link">Edukacja</a></li>
                <li class="nav-item"><a href="#contact" class="nav-link">Kontakt</a></li>
            </ul>
            <div class="nav-actions">
                <!-- <button id="themeToggle" class="theme-btn" aria-label="Przełącz motyw">
                    <i class="fas fa-moon"></i>
                </button> -->
                <button class="hamburger" id="hamburger" aria-label="Menu">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </button>
            </div>
        </div>
    </nav>

    <!-- ====== HERO SECTION ====== -->
    <section id="hero" class="hero">
        <div class="container hero-container">
            <div class="hero-content">
                <div class="hero-badge">Otwarty na propozycje pracy</div>
                <h1 class="hero-title">
                    Nazywam sie <span class="gradient-text">Paweł Stempak</span>
                </h1>
                <div class="hero-typing-wrapper">
                    <span class="hero-subtitle">Jestem </span>
                    <span class="typing-text" id="typingText"></span>
                    <span class="typing-cursor">|</span>
                </div>
                <p class="hero-description">
                    Z pasją do tworzenia nowoczesnych aplikacji webowych, grafiki komputerowej i nowoczesnych technologii 
                    szukam nowych zawodowych wyzwań, gdzie będę mógł wykorzystać swoje umiejętności i kontynuować swój rozwój.
                </p>
                <div class="hero-buttons">
                    <a href="#portfolio" class="btn btn-outline">
                        <i class="fas fa-code"></i>
                        Moje portfolio
                    </a>
                    <a href="media/resume.pdf" class="btn btn-outline" target="_blank">
                        <i class="fas fa-download"></i>
                        Pobierz CV
                    </a>
                </div>
                <div class="hero-socials">
                    <a href="https://github.com/pawelstempak" target="_blank" class="social-link" aria-label="GitHub">
                        <i class="fab fa-github"></i>
                    </a>
                    <a href="https://linkedin.com/in/pawelstempak" target="_blank" class="social-link" aria-label="LinkedIn">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="mailto:pawelstempak@gmail.com" class="social-link" aria-label="Email">
                        <i class="fas fa-envelope"></i>
                    </a>
                    <a href="https://stackoverflow.com/users/18213224/sandowl" target="_blank" class="social-link" aria-label="Stack Overflow">
                        <i class="fab fa-stack-overflow"></i>
                    </a>
                </div>
            </div>
            <div class="hero-image">
                <div class="hero-img-wrapper">
                    <div class="hero-img-placeholder">
                        <!-- <i class="fas fa-user-astronaut"></i> -->
                        <img src="media/me.jpg" alt="Paweł Stempak" class="hero-img">
                    </div>
                    <div class="hero-status-card">
                        <div class="status-dot"></div>
                        <span>Otwarty na oferty</span>
                    </div>
                    <div class="hero-tech-icons">
                        <i class="fab fa-html5" style="color: #e34f26;"></i>
                        <i class="fab fa-css3-alt" style="color: #1572b6;"></i>
                        <i class="fab fa-js" style="color: #f7df1e;"></i>
                        <i class="fab fa-react" style="color: #61dafb;"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-scroll-indicator">
            <span>Przewiń w dół</span>
            <i class="fas fa-chevron-down"></i>
        </div>
    </section>

    <!-- ====== ABOUT SECTION ====== -->
    <section id="about" class="about section">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">O mnie</span>
                <h2 class="section-title">Poznajmy się bliżej</h2>
                <div class="section-divider"></div>
            </div>
            <div class="about-grid">
                <div class="about-card">
                    <i class="fas fa-code about-icon"></i>
                    <h3>Kim jestem?</h3>
                    <p>
                        Jestem programista, webdesignerem i specjalistą IT z pasją do tworzenia innowacyjnych rozwiązań. 
                        Ponad 20-letnie doświdaczenie w branży IT pozwoliło mi zdobyć szeroką wiedzę i umiejętności, 
                        które wykorzystuję w codziennej pracy.
                    </p>
                </div>
                <div class="about-card">
                    <i class="fas fa-magnifying-glass about-icon"></i>
                    <h3>Czego szukam?</h3>
                    <p>
                        Poszukuję stanowiska Specjalisty IT lub IT developera w firmie, która stawia na 
                        nowoczesne technologie, kulture pracy i rozwój pracowników. 
                        Cenię sobie zarówno pracę w zespole jak i możliwość autonomicznej pracy.
                    </p>
                </div>
                <div class="about-card">
                    <i class="fas fa-user-friends about-icon"></i>
                    <h3>Poza pracą</h3>
                    <p>
                        Godziny spędzone przed komputerem odreagowuję wiosłowaniem 
                        lub jazdą na rowerze. W wolnym czasie jestem fanem kinematografi, 
                        gier wideo, muzyki oraz nie pogardzę ciekawą prozą.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- ====== SKILLS SECTION ====== -->
    <section id="skills" class="skills section">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">Umiejętności</span>
                <h2 class="section-title">Wykorzystywane technologie</h2>
                <div class="section-divider"></div>
            </div>
            <div class="skills-categories">
                <!-- Frontend -->
                <div class="skill-category">
                    <div class="category-header">
                        <i class="fas fa-code"></i>
                        <h3>IT developer</h3>
                    </div>
                    <div class="skill-items">
                        <div class="skill-item">
                            <div class="skill-info">
                                <span>HTML5 & CSS3 / JQuery / JavaScript</span>
                                <span class="skill-percent">90%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" style="width: 90%;"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="skill-info">
                                <span>PHP 7, PHP 8+, MySQL, REST API</span>
                                <span class="skill-percent">95%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" style="width: 95%;"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="skill-info">
                                <span>Laravel, SOTE Shop, KQS Store</span>
                                <span class="skill-percent">85%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" style="width: 85%;"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="skill-info">
                                <span>Tailwind CSS / Bootstrap</span>
                                <span class="skill-percent">90%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" style="width: 90%;"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="skill-info">
                                <span>Git, GitHub, Docker</span>
                                <span class="skill-percent">75%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" style="width: 75%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Backend -->
                <div class="skill-category">
                    <div class="category-header">
                        <i class="fas fa-server"></i>
                        <h3>Grafik</h3>
                    </div>
                    <div class="skill-items">
                        <div class="skill-item">
                            <div class="skill-info">
                                <span>Adobe Photoshop, Gimp</span>
                                <span class="skill-percent">80%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" style="width: 80%;"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="skill-info">
                                <span>Core Draw, Adobe Ilustrator</span>
                                <span class="skill-percent">85%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" style="width: 85%;"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="skill-info">
                                <span>DTP, Logo</span>
                                <span class="skill-percent">90%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" style="width: 90%;"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="skill-info">
                                <span>Poligrafia, Outdoor</span>
                                <span class="skill-percent">85%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" style="width: 85%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Tools & Others -->
                <div class="skill-category">
                    <div class="category-header">
                        <i class="fas fa-tools"></i>
                        <h3>Specjalista IT</h3>
                    </div>
                    <div class="skill-items">
                        <div class="skill-item">
                            <div class="skill-info">
                                <span>Sieci LAN, WAN, CCTV, Fortinet</span>
                                <span class="skill-percent">90%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" style="width: 90%;"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="skill-info">
                                <span>Windows Server, Linux Server, NAS</span>
                                <span class="skill-percent">75%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" style="width: 75%;"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="skill-info">
                                <span>Bitdefender Gravity Zone</span>
                                <span class="skill-percent">75%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" style="width: 75%;"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="skill-info">
                                <span>Office 365, Exchange, Azure</span>
                                <span class="skill-percent">85%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" style="width: 85%;"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="skill-info">
                                <span>eAuditor, Biosys Etatomierz</span>
                                <span class="skill-percent">75%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" style="width: 75%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Tech Cloud -->
            <div class="tech-cloud">
                <span class="tech-cloud-label">Pozostałe wykorzystywane technologie:</span>
                <div class="tech-tags">
                    <span class="tech-tag">AlpineJS</span>
                    <span class="tech-tag">Node.js</span>
                    <span class="tech-tag">Composer</span>
                    <span class="tech-tag">NPM</span>
                    <span class="tech-tag">Visual Studio</span>
                    <span class="tech-tag">Pajączek NxG</span>
                    <span class="tech-tag">PHP Storm</span>
                    <span class="tech-tag">Claude Code</span>
                    <span class="tech-tag">DeepSeek Coder</span>
                    <span class="tech-tag">Teams</span>
                    <span class="tech-tag">Synology</span>
                    <span class="tech-tag">HikVision</span>
                    <span class="tech-tag">FortiOS</span>
                    <span class="tech-tag">Smarty</span>
                    <span class="tech-tag">JSON</span>
                    <span class="tech-tag">Materialize CSS</span>
                    <span class="tech-tag">Blades</span>
                    <span class="tech-tag">Tailgrid UI</span>
                    <span class="tech-tag">XML</span>
                    <span class="tech-tag">MVC</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ====== PROJECTS SECTION ====== -->
    <section id="portfolio" class="projects section">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">Portfolio</span>
                <h2 class="section-title">Moje realizacje</h2>
                <div class="section-divider"></div>
            </div>
            <div class="projects-filter">
                <button class="filter-btn active" data-filter="all">Wszystkie</button>
                <button class="filter-btn" data-filter="www">Strony WWW</button>
                <button class="filter-btn" data-filter="logo">Logo</button>
                <button class="filter-btn" data-filter="api">Aplikacje</button>
                <button class="filter-btn" data-filter="ecommerce">E-Commerce</button>
            </div>
            <div class="projects-grid">
                <!-- Project WWW MCLUXMED -->
                <div class="project-card" data-category="www">
                    <div class="project-img">
                        <div class="project-img-placeholder">
                            <img src="media/www/mcluxmed.jpeg" id="modalImage" alt="MCLUXMED - Podgląd">
                        </div>
                        <div class="project-overlay">
                            <div class="project-links">
                                <a href="javascript:void(0)" class="project-link modal-trigger" onclick="document.getElementById('modal-mcluxmed').classList.add('active');document.body.classList.add('modal-open');"><i class="fas fa-eye"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="project-info">
                        <span class="project-category">Strony WWW</span>
                        <h3>Mcluxmed</h3>
                        <p>Nowoczesna strona internetowa z sprzętem medycznym opartam o system CMS</p>
                        <div class="project-tech">
                            <span>Octopus CMS</span>
                            <span>PHP</span>
                            <span>JQuery</span>
                            <span>Smarty</span>
                        </div>
                    </div>
                </div>
                <!-- Project API INVENTAPRO -->
                <div class="project-card" data-category="api">
                    <div class="project-img">
                        <div class="project-img-placeholder">
                            <img src="media/api/invertapro.jpg" id="modalImage" alt="INVENTAPRO - Podgląd">
                        </div>
                        <div class="project-overlay">
                            <div class="project-links">
                                <a href="javascript:void(0)" class="project-link modal-trigger" onclick="document.getElementById('modal-inventa_pro').classList.add('active');document.body.classList.add('modal-open');"><i class="fas fa-eye"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="project-info">
                        <span class="project-category">Aplikacje</span>
                        <h3>Inventa PRO</h3>
                        <p>System wspomagający sprzedaż i zarządzanie magazynem produktów</p>
                        <div class="project-tech">
                            <span>PHP</span>
                            <span>JQuery</span>
                            <span>Laravel</span>
                            <span>TailwindCSS</span>
                            <span>FilamentPHP</span>
                        </div>
                    </div>
                </div>
                <!-- Project LOGO ZGK JELCZ LASKOWICE -->
                <div class="project-card" data-category="logo">
                    <div class="project-img">
                        <div class="project-img-placeholder">
                            <img src="media/logo/zgk_jelcz_laskowice.jpg" id="modalImage" alt="Logo ZGK Jelcz Laskowice">
                        </div>
                        <div class="project-overlay">
                            <div class="project-links">
                                <a href="https://zgk-jelcz.pl/" class="project-link" target="_blank"><i class="fas fa-external-link-alt"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="project-info">
                        <span class="project-category">Logo</span>
                        <h3>ZGK Jelcz Laskowice</h3>
                        <p>Projekt logo Zakładu Gospodarki Komunalnej w Jelczu Laskowicach</p>
                        <div class="project-tech">
                            <span>Corel DRAW</span>
                            <span>Adobe Photoshop</span>
                        </div>
                    </div>
                </div>
                <!-- Project WWW TATARSKA4 -->
                <div class="project-card" data-category="www">
                    <div class="project-img">
                        <div class="project-img-placeholder">
                            <img src="media/www/kormedplus.jpeg" id="modalImage" alt="KormedPlus - Podgląd">
                        </div>
                        <div class="project-overlay">
                            <div class="project-links">
                                <a href="javascript:void(0)" class="project-link modal-trigger" onclick="document.getElementById('modal-kormedplus').classList.add('active');document.body.classList.add('modal-open');"><i class="fas fa-eye"></i></a>
                                <a href="https://kormedplus.pl" class="project-link" target="_blank"><i class="fas fa-external-link-alt"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="project-info">
                        <span class="project-category">Strony WWW</span>
                        <h3>Kormed+</h3>
                        <p>Strona gabinetu stomatologicznego</p>
                        <div class="project-tech">
                            <span>PHP</span>
                            <span>JQuery</span>
                            <span>Smarty</span>
                        </div>
                    </div>
                </div>
                <!-- Project WWW TIMMSPAWTECH -->
                <div class="project-card" data-category="www">
                    <div class="project-img">
                        <div class="project-img-placeholder">
                            <img src="media/www/timmspawtech.jpeg" id="modalImage" alt="Timm SpawTech - Podgląd">
                        </div>
                        <div class="project-overlay">
                            <div class="project-links">
                                <a href="javascript:void(0)" class="project-link modal-trigger" onclick="document.getElementById('modal-timmspawtech').classList.add('active');document.body.classList.add('modal-open');"><i class="fas fa-eye"></i></a>
                                <a href="https://timmspawtech.pl" class="project-link" target="_blank"><i class="fas fa-external-link-alt"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="project-info">
                        <span class="project-category">Strony WWW</span>
                        <h3>Timmspaw Tech</h3>
                        <p>Firma zajmująca się metaloplastyką.</p>
                        <div class="project-tech">
                            <span>Octopus CMS</span>
                            <span>PHP</span>
                            <span>JQuery</span>
                            <span>Smarty</span>
                        </div>
                    </div>
                </div>
                <!-- Project WWW TATARSKA4 -->
                <div class="project-card" data-category="www">
                    <div class="project-img">
                        <div class="project-img-placeholder">
                            <img src="media/www/tatarska4.jpeg" id="modalImage" alt="Apartamenty Tatarska 4 - Podgląd">
                        </div>
                        <div class="project-overlay">
                            <div class="project-links">
                                <a href="javascript:void(0)" class="project-link modal-trigger" onclick="document.getElementById('modal-tatarska').classList.add('active');document.body.classList.add('modal-open');"><i class="fas fa-eye"></i></a>
                                <a href="https://apartamenty-tatarska4.pl" class="project-link" target="_blank"><i class="fas fa-external-link-alt"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="project-info">
                        <span class="project-category">Strony WWW</span>
                        <h3>Apartamenty Tatarska 4</h3>
                        <p>Projekt strony budowy osiedla apartamentów przy ul. Tatarskiej 4</p>
                        <div class="project-tech">
                            <span>PHP</span>
                            <span>JQuery</span>
                            <span>Smarty</span>
                        </div>
                    </div>
                </div>
                <!-- Project LOGO TATARSKA 4 -->
                <div class="project-card" data-category="logo">
                    <div class="project-img">
                        <div class="project-img-placeholder">
                            <img src="media/logo/tatarska4.jpg" id="modalImage" alt="Logo Apartamenty Tatarska 4">
                        </div>
                        <div class="project-overlay">
                            <div class="project-links">
                                <a href="media/logo/kz_tatarska4.pdf" class="project-link" target="_blank"><i class="fas fa-external-link-alt"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="project-info">
                        <span class="project-category">Logo</span>
                        <h3>Apartamenty Tatarska 4</h3>
                        <p>Projekt logo firmy deweloperskiej Apartamenty Tatarska 4</p>
                        <div class="project-tech">
                            <span>Corel DRAW</span>
                        </div>
                    </div>
                </div>    
                <!-- Project API OCTOPUSCMS -->
                <div class="project-card" data-category="api">
                    <div class="project-img">
                        <div class="project-img-placeholder">
                            <img src="media/api/octopus_cms.jpeg" id="modalImage" alt="OCTOPUS CMS - Podgląd">
                        </div>
                        <div class="project-overlay">
                            <div class="project-links">
                                <a href="javascript:void(0)" class="project-link modal-trigger" onclick="document.getElementById('modal-octopus_cms').classList.add('active');document.body.classList.add('modal-open');"><i class="fas fa-eye"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="project-info">
                        <span class="project-category">Aplikacje</span>
                        <h3>Octopus CMS</h3>
                        <p>Nowoczesny system zarządzania treścią z obsługą wielu języków, szablonów wyglądu orad dodatkowych modułów.</p>
                        <div class="project-tech">
                            <span>PHP</span>
                            <span>JQuery</span>
                            <span>SMarty</span>
                        </div>
                    </div>
                </div> 
                <!-- Project WWW OSIEDLE NOWE PRZEDMIESCIE -->
                <div class="project-card" data-category="www">
                    <div class="project-img">
                        <div class="project-img-placeholder">
                            <img src="media/www/osiedlenoweprzedmiescie.jpeg" id="modalImage" alt="Osiedle Nowe Przedmiescie - Podgląd">
                        </div>
                        <div class="project-overlay">
                            <div class="project-links">
                                <a href="javascript:void(0)" class="project-link modal-trigger" onclick="document.getElementById('modal-osiedlenoweprzedmiescie').classList.add('active');document.body.classList.add('modal-open');"><i class="fas fa-eye"></i></a>
                                <a href="https://np.pawelstempak.pl" class="project-link" target="_blank"><i class="fas fa-external-link-alt"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="project-info">
                        <span class="project-category">Strony WWW</span>
                        <h3>Osiedle Nowe Przedmiescie</h3>
                        <p>Nowoczesna strona budowanego osiedla Nowe Przedmiescie</p>
                        <div class="project-tech">
                            <span>PHP</span>
                            <span>JQuery</span>
                            <span>Smarty</span>
                        </div>
                    </div>
                </div>
                <!-- Project LOGO OSIEDLE NOWE PRZEDMIESCIE -->
                <div class="project-card" data-category="logo">
                    <div class="project-img">
                        <div class="project-img-placeholder">
                            <img src="media/logo/osiedlenoweprzedmiescie.jpg" id="modalImage" alt="Logo Osiedle Nowe Przedmiescie">
                        </div>
                        <div class="project-overlay">
                            <div class="project-links">
                                <a href="media/logo/kz_osiedlenoweprzedmiescie.pdf" class="project-link" target="_blank"><i class="fas fa-external-link-alt"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="project-info">
                        <span class="project-category">Logo</span>
                        <h3>Osiedle Nowe Przedmiescie</h3>
                        <p>Projekt logo dla osiedla Nowe Przedmiescie</p>
                        <div class="project-tech">
                            <span>Corel DRAW</span>
                        </div>
                    </div>
                </div>          
                <!-- Project WWW MALUCH -->
                <div class="project-card" data-category="www">
                    <div class="project-img">
                        <div class="project-img-placeholder">
                            <img src="media/www/rehabilitacjadziecimaluch.jpeg" id="modalImage" alt="Rehabilitacja Dziecici Maluch - Podgląd">
                        </div>
                        <div class="project-overlay">
                            <div class="project-links">
                                <a href="javascript:void(0)" class="project-link modal-trigger" onclick="document.getElementById('modal-maluch').classList.add('active');document.body.classList.add('modal-open');"><i class="fas fa-eye"></i></a>
                                <a href="https://rehabilitacjadzieci-maluch.pl" class="project-link" target="_blank"><i class="fas fa-external-link-alt"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="project-info">
                        <span class="project-category">Strony WWW</span>
                        <h3>Rehabilitacja Dzieci Maluch</h3>
                        <p>Nowoczesna strona internetowa z systemem zarządzania treścią.</p>
                        <div class="project-tech">
                            <span>Octopus CMS</span>
                            <span>PHP</span>
                            <span>JQuery</span>
                            <span>Smarty</span>
                        </div>
                    </div>
                </div>      
                <!-- Project WWW NASOFIE.PL -->
                <div class="project-card" data-category="www">
                    <div class="project-img">
                        <div class="project-img-placeholder">
                            <img src="media/www/nasofie.jpeg" id="modalImage" alt="Nasofie.pl - Podgląd">
                        </div>
                        <div class="project-overlay">
                            <div class="project-links">
                                <a href="javascript:void(0)" class="project-link modal-trigger" onclick="document.getElementById('modal-nasofie').classList.add('active');document.body.classList.add('modal-open');"><i class="fas fa-eye"></i></a>
                                <a href="https://nasofie.pl" class="project-link" target="_blank"><i class="fas fa-external-link-alt"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="project-info">
                        <span class="project-category">Strony WWW</span>
                        <h3>Nasofie.pl</h3>
                        <p>Blog z autorskimi recenzjami o tematayce popkulturowej.</p>
                        <div class="project-tech">
                            <span>PHP</span>
                            <span>Laravel</span>
                            <span>Tailwind CSS</span>
                            <span>Alpine JS</span>
                        </div>
                    </div>
                </div>                
                <!-- Project LOGO NASOFIE.PL -->
                <div class="project-card" data-category="logo">
                    <div class="project-img">
                        <div class="project-img-placeholder">
                            <img src="media/logo/nasofie.jpg" id="modalImage" alt="Logo Nasofie.pl">
                        </div>
                    </div>
                    <div class="project-info">
                        <span class="project-category">Logo</span>
                        <h3>Nasofie.pl</h3>
                        <p>Logo serwisu internetowego nasofie.pl</p>
                        <div class="project-tech">
                            <span>Adobe Photoshop</span>
                        </div>
                    </div>
                </div>    
                <!-- Project LOGO OCTOPUS CMS -->
                <div class="project-card" data-category="logo">
                    <div class="project-img">
                        <div class="project-img-placeholder">
                            <img src="media/logo/octopuscms.jpg" id="modalImage" alt="Logo Octopus CMS">
                        </div>
                    </div>
                    <div class="project-info">
                        <span class="project-category">Logo</span>
                        <h3>Octopus CMS</h3>
                        <p>Autorski system zarządzania treścią oparty na wzorcu MVC i systemie szablonów Smarty</p>
                        <div class="project-tech">
                            <span>Corel DRAW</span>
                        </div>
                    </div>
                </div>  
                <!-- Project API E-LEARNING PANEL -->
                <div class="project-card" data-category="api">
                    <div class="project-img">
                        <div class="project-img-placeholder">
                            <img src="media/api/e-learning.jpeg" id="modalImage" alt="E-LEARNING PANEL - Podgląd">
                        </div>
                        <div class="project-overlay">
                            <div class="project-links">
                                <a href="javascript:void(0)" class="project-link modal-trigger" onclick="document.getElementById('modal-e-learning').classList.add('active');document.body.classList.add('modal-open');"><i class="fas fa-eye"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="project-info">
                        <span class="project-category">Aplikacje</span>
                        <h3>E-LEARNING PANEL</h3>
                        <p>E-learningowa platforma do nauki zdalnej on-line oraz egazaminowania kursantów. Możliwość przygotowywania własnych kursów i testów egazminacyjnych.
                        </p>
                        <div class="project-tech">
                            <span>PHP</span>
                            <span>JQuery</span>
                            <span>Smarty</span>
                        </div>
                    </div>
                </div>                  
                <!-- Project WWW TATARSKA DEVELOPER -->
                <div class="project-card" data-category="www">
                    <div class="project-img">
                        <div class="project-img-placeholder">
                            <img src="media/www/tatarska_developer.jpeg" id="modalImage" alt="Tatarska Developer - Podgląd">
                        </div>
                        <div class="project-overlay">
                            <div class="project-links">
                                <a href="javascript:void(0)" class="project-link modal-trigger" onclick="document.getElementById('modal-tatarska-developer').classList.add('active');document.body.classList.add('modal-open');"><i class="fas fa-eye"></i></a>
                                <a href="https://new.apartamenty-tatarska4.pl" class="project-link" target="_blank"><i class="fas fa-external-link-alt"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="project-info">
                        <span class="project-category">Strony WWW</span>
                        <h3>Tatarska Developer</h3>
                        <p>Platforma internetowa dewelopera mieszkaniowego Tatarska Developer</p>
                        <div class="project-tech">
                            <span>PHP</span>
                            <span>Tailwind CSS</span>
                            <span>Laravel</span>
                        </div>
                    </div>
                </div>
                <!-- Project LOGO TATARSKA DEVELOPER -->
                <div class="project-card" data-category="logo">
                    <div class="project-img">
                        <div class="project-img-placeholder">
                            <img src="media/logo/tatarska_developer.jpg" id="modalImage" alt="Logo Tatarska Developer">
                        </div>
                    </div>
                    <div class="project-info">
                        <span class="project-category">Logo</span>
                        <h3>Tatarska Developer</h3>
                        <p>Projekt logo dla firmy Tatarska Developer</p>
                        <div class="project-tech">
                            <span>Corel DRAW</span>
                        </div>
                    </div>
                </div>
                <!-- Project LOGO MARIKO SAKURI -->
                <div class="project-card" data-category="logo">
                    <div class="project-img">
                        <div class="project-img-placeholder">
                            <img src="media/logo/mariko_sakuri.jpg" id="modalImage" alt="Logo Mariko Sakuri">
                        </div>
                        <div class="project-overlay">
                            <div class="project-links">
                                <a href="https://www.google.com/search?q=Mariko+Sakuri" class="project-link" target="_blank"><i class="fas fa-external-link-alt"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="project-info">
                        <span class="project-category">Logo</span>
                        <h3>Marka prouktowa Mariko Sakuri</h3>
                        <p>Logo marki produktowej Mariko Sakuri wraz z identyfikacją wizualną</p>
                        <div class="project-tech">
                            <span>Corel DRAW</span>
                        </div>
                    </div>
                </div>                                              
                <!-- Project WWW SAFIRONUTRITION -->
                <div class="project-card" data-category="www">
                    <div class="project-img">
                        <div class="project-img-placeholder">
                            <img src="media/www/safironutrition.jpeg" id="modalImage" alt="Safironutrition.com - Podgląd">
                        </div>
                        <div class="project-overlay">
                            <div class="project-links">
                                <a href="javascript:void(0)" class="project-link modal-trigger" onclick="document.getElementById('modal-safironutrition').classList.add('active');document.body.classList.add('modal-open');"><i class="fas fa-eye"></i></a>
                                <a href="https://safironutrition.com" class="project-link" target="_blank"><i class="fas fa-external-link-alt"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="project-info">
                        <span class="project-category">Strona WWW</span>
                        <h3>Safironutrition</h3>
                        <p>Strona producenta surowców do produktów suplementów diety i produktów spożyczych. </p>
                        <div class="project-tech">
                            <span>PHP</span>
                            <span>Laravel</span>
                            <span>Tailwind CSS</span>
                            <span>Alpine JS</span>
                        </div>
                    </div>
                </div>
                <!-- Project WWW TARNOPOLSKA PARK -->
                <div class="project-card" data-category="www">
                    <div class="project-img">
                        <div class="project-img-placeholder">
                            <img src="media/www/tarnopolska.jpeg" id="modalImage" alt="Tarnopolska.pl - Podgląd">
                        </div>
                        <div class="project-overlay">
                            <div class="project-links">
                                <a href="javascript:void(0)" class="project-link modal-trigger" onclick="document.getElementById('modal-tarnopolska').classList.add('active');document.body.classList.add('modal-open');"><i class="fas fa-eye"></i></a>
                                <a href="https://dev.tarnopolska.pl" class="project-link" target="_blank"><i class="fas fa-external-link-alt"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="project-info">
                        <span class="project-category">Strona WWW</span>
                        <h3>Tarnopolska Park</h3>
                        <p>Strona projektu budowy osiedla Tarnopolska Park</p>
                        <div class="project-tech">
                            <span>PHP</span>
                            <span>Java Script</span>
                            <span>Bootstrap</span>
                        </div>
                    </div>
                </div>
                <!-- Project LOGO TARNOPOLSKA -->
                <div class="project-card" data-category="logo">
                    <div class="project-img">
                        <div class="project-img-placeholder">
                            <img src="media/logo/tarnopolska.jpg" id="modalImage" alt="Logo Osiedle Tarnopolska">
                        </div>
                        <div class="project-overlay">
                            <div class="project-links">
                                <a href="media/logo/kz_tarnopolska.pdf" class="project-link" target="_blank"><i class="fas fa-external-link-alt"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="project-info">
                        <span class="project-category">Logo</span>
                        <h3>Tarnopolska Park</h3>
                        <p>Projekt logo dla osiedla Tarnopolska Park</p>
                        <div class="project-tech">
                            <span>Corel DRAW</span>
                        </div>
                    </div>
                </div> 
                <!-- Project LOGO ARTCREO -->
                <div class="project-card" data-category="logo">
                    <div class="project-img">
                        <div class="project-img-placeholder">
                            <img src="media/logo/artcreo.jpg" id="modalImage" alt="Logo Osiedle Tarnopolska">
                        </div>
                    </div>
                    <div class="project-info">
                        <span class="project-category">Logo</span>
                        <h3>Artcreo Pracownia reklamy</h3>
                        <p>Projekt logo dla pracowni reklamy Artcreo</p>
                        <div class="project-tech">
                            <span>Corel DRAW</span>
                        </div>
                    </div>
                </div> 
                <!-- Project LOGO KAMELEON -->
                <div class="project-card" data-category="logo">
                    <div class="project-img">
                        <div class="project-img-placeholder">
                            <img src="media/logo/kameleon.jpg" id="modalImage" alt="Logo Osiedle Tarnopolska">
                        </div>
                    </div>
                    <div class="project-info">
                        <span class="project-category">Logo</span>
                        <h3>Studio Kameleon pracownia reklamy</h3>
                        <p>Projekt logo dla pracowni reklamy Studio Kameleon</p>
                        <div class="project-tech">
                            <span>Corel DRAW</span>
                        </div>
                    </div>
                </div>
                <!-- Project SHOP SKLEP.ORTUSPRALNIA.PL -->
                <div class="project-card" data-category="ecommerce">
                    <div class="project-img">
                        <div class="project-img-placeholder">
                            <img src="media/sklep/sklep.ortuspralnia.jpeg" id="modalImage" alt="Sklep Ortuspralnia - Podgląd">
                        </div>
                        <div class="project-overlay">
                            <div class="project-links">
                                <a href="javascript:void(0)" class="project-link modal-trigger" onclick="document.getElementById('modal-skleportuspralniapl').classList.add('active');document.body.classList.add('modal-open');"><i class="fas fa-eye"></i></a>
                                <a href="https://sklep.ortuspralnia.pl" class="project-link" target="_blank"><i class="fas fa-external-link-alt"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="project-info">
                        <span class="project-category">Sklep internetowy</span>
                        <h3>Sklep Ortuspralnia</h3>
                        <p>Projekt sklepu opartego na platformie SOTE Shop oferujący chemię gospodarczą.</p>
                        <div class="project-tech">
                            <span>SOTE Shop</span>
                        </div>
                    </div>
                </div>
                <!-- Project SHOP AURORA-LABS.PL -->
                <div class="project-card" data-category="ecommerce">
                    <div class="project-img">
                        <div class="project-img-placeholder">
                            <img src="media/sklep/aurora-labs.jpeg" id="modalImage" alt="Sklep Aurora-labs.pl - Podgląd">
                        </div>
                        <div class="project-overlay">
                            <div class="project-links">
                                <a href="javascript:void(0)" class="project-link modal-trigger" onclick="document.getElementById('modal-aurora-labs').classList.add('active');document.body.classList.add('modal-open');"><i class="fas fa-eye"></i></a>
                                <a href="https://aurora-labs.pl" class="project-link" target="_blank"><i class="fas fa-external-link-alt"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="project-info">
                        <span class="project-category">Sklep internetowy</span>
                        <h3>Hurtownia Aurora-labs.pl</h3>
                        <p>Oprogramowanie hurtowni kosmetycznej</p>
                        <div class="project-tech">
                            <span>Octopus CMS</span>
                            <span>PHP</span>
                            <span>JQuery</span>
                            <span>Smarty</span>
                        </div>
                    </div>
                </div>
                <!-- Project SHOP PERFUMY-AURORA.PL -->
                <div class="project-card" data-category="ecommerce">
                    <div class="project-img">
                        <div class="project-img-placeholder">
                            <img src="media/sklep/perfumy-aurora.jpeg" id="modalImage" alt="Sklep Perfumy-Aurora.pl - Podgląd">
                        </div>
                        <div class="project-overlay">
                            <div class="project-links">
                                <a href="javascript:void(0)" class="project-link modal-trigger" onclick="document.getElementById('modal-perfumy-aurora').classList.add('active');document.body.classList.add('modal-open');"><i class="fas fa-eye"></i></a>
                                <a href="https://perfumy-aurora.pl" class="project-link" target="_blank"><i class="fas fa-external-link-alt"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="project-info">
                        <span class="project-category">Sklep internetowy</span>
                        <h3>Sklep Perfumy-Aurora.pl</h3>
                        <p>Sklep internetowy z szerokim asortymentem perfum i kosmetyków oparty na platformie SOTE Shop.</p>
                        <div class="project-tech">
                            <span>SOTE Shop</span>
                        </div>
                    </div>
                </div>
                <!-- Project SHOP AURORA-COSMETICS.PL -->
                <div class="project-card" data-category="ecommerce">
                    <div class="project-img">
                        <div class="project-img-placeholder">
                            <img src="media/sklep/aurora-cosmetics.jpeg" id="modalImage" alt="Sklep Aurora-Cosmetics.pl - Podgląd">
                        </div>
                        <div class="project-overlay">
                            <div class="project-links">
                                <a href="javascript:void(0)" class="project-link modal-trigger" onclick="document.getElementById('modal-aurora-cosmetics').classList.add('active');document.body.classList.add('modal-open');"><i class="fas fa-eye"></i></a>
                                <a href="https://aurora-cosmetics.pl" class="project-link" target="_blank"><i class="fas fa-external-link-alt"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="project-info">
                        <span class="project-category">Sklep internetowy</span>
                        <h3>Sklep Aurora-Cosmetics.pl</h3>
                        <p>Sklep internetowy z szerokim asortymentem perfum i kosmetyków oparty na platformie SOTE Shop.</p>
                        <div class="project-tech">
                            <span>SOTE Shop</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="projects-cta">
                <a href="https://github.com/" target="_blank" class="btn btn-primary">
                    <i class="fab fa-github"></i>
                    Zobacz więcej na GitHub
                </a>
            </div> -->
        </div>
    </section>

    <!-- ====== EXPERIENCE SECTION ====== -->
    <section id="experience" class="experience section">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">Doświadczenie</span>
                <h2 class="section-title">Moja ścieżka zawodowa</h2>
                <div class="section-divider"></div>
            </div>
            <div class="timeline">
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-date">2018.04 - obecnie</div>
                    <div class="timeline-content">
                        <h3>Fibris S.A. Przemyśl</h3>
                        <h4>Specjalista IT, Programista, Projektant grafiki, Inspektor Ochrony Danych</h4>
                        <p>
                            - Modernizacja i rozwój firmowych stron WWW, platformy e-learningowej, modernizacja i serwis baz danych MySQL<br />
                            - Projektowanie grafiik, materiałów promocyjnych, skład DTP, współpraca z drukarniami<br />
                            - Zarządzanie firmową siecią komputerową - ponad sto stacji roboczych - UTM Fortinet<br />
                            - Zarządzanie serwerami - Windows Server, Linux Server, Synology NAS <br />
                            - Wsparcie techniczne użytkowników systemów IT <br />
                            - Zarządzanie i serwis monitoringu wizyjnego - system HikVision <br />
                            - Zarządzanie usługami Office365, Microsoft Azure, Bitdefender Gravity Zone, eAuditor<br />
                            - Konfiguracja i serwis sprzętu IT<br />
                            - Monitorowanie zgodności, szkolenia, doradztwo, zarządzanie dokumentacją związaną z wypełnianiem obowiązków administratora danych osobowych zgodnie z obowiązującym prawem na stanowisku IOD<br />
                            - Zarządzanie systemem i wsparcie użytkowników systemu Macrologic ERP<br />
                            - Negocjowanie i zawieranie umów usług telekomunikacyjnych i teleinformatycznych<br />
                        </p>
                        <div class="timeline-tech">
                            <span>Fortinet</span>
                            <span>Office365</span>
                            <span>Windows Server</span>
                            <span>Linux Server</span>
                            <span>Synology</span>
                            <span>Bitdefender</span>
                            <span>Biosys</span>
                            <span>eAuditor</span>
                            <span>MS SQL</span>
                            <span>Azure</span>
                            <span>Adobe Photoshop</span>
                            <span>Corel DRAW</span>
                            <span>Laravel</span>
                            <span>PHP</span>
                            <span>Java Script</span>
                            <span>Smarty</span>
                            <span>MySQL</span>
                            <span>Git</span>
                        </div>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-date">2023.04 - 2026.05</div>
                    <div class="timeline-content">
                        <h3>Ortus Perfect Cleaning Sp. z o.o. Przemyśl</h3>
                        <h4>Specjalista IT, Webdesigner, Projektant grafiki</h4>
                        <p>
                            - Tworzenie, modernizacja i rozwój firmowych stron WWW<br />
                            - Projektowanie grafiik, materiałów promocyjnych, skład DTP, współpraca z drukarniami<br />
                            - Zarządzanie firmową siecią komputerową<br />
                            - Wsparcie techniczne użytkowników systemów IT <br />
                            - Zarządzanie i serwis monitoringu wizyjnego - system HikVision <br />
                            - Wdrażanie i zarządzanie nowymi projektami <br />
                            - Konfiguracja i serwis sprzętu IT
                        </p>
                        <div class="timeline-tech">
                            <span>Laravel</span>
                            <span>PHP</span>
                            <span>Java Script</span>
                            <span>Smarty</span>
                            <span>MySQL</span>
                            <span>Git</span>
                            <span>Adobe Photoshop</span>
                            <span>Corel DRAW</span>
                        </div>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-date">2019.04 - 2026.05</div>
                    <div class="timeline-content">
                        <h3>Apartamenty Tatarska 4</h3>
                        <h4>Programista, Webdesigner, Projektant grafiki</h4>
                        <p>
                            - Tworzenie, modernizacja i rozwój firmowych stron WWW i systemów sprzedażowych<br />
                            - Integracja z zewnętrznymi systemami sprzedaży<br />
                            - Projektowanie grafik, skład DTP, współpraca z drukarniami<br />
                            - Projektowanie spójnych identyfikacji wizualnych <br />
                            - Wdrażanie i zarządzanie projektami<br />
                        </p>
                        <div class="timeline-tech">
                            <span>Laravel</span>
                            <span>PHP</span>
                            <span>Java Script</span>
                            <span>Smarty</span>
                            <span>MySQL</span>
                            <span>Git</span>
                            <span>Adobe Photoshop</span>
                            <span>Corel DRAW</span>
                        </div>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-date">2009.03 - 2018.03</div>
                    <div class="timeline-content">
                        <h3>Aurora</h3>
                        <h4>Programista, Webdesigner, Projektant grafiki</h4>
                        <p>
                            Rozwój:<br />
                            - Systemów CMS<br />
                            - Systemów e-Comerce (KQS.store, Sote Shop)<br />
                            - Serwisów społecznościowych<br />
                            - Rozwiązań wsparcia sprzedaży B2B i B2C<br />
                            - REST API dla systemów e-Comerce<br />
                            Odpowiedzialność za:<br />
                            - Back-end i Front-end seriwsów WWW<br />
                            - Samodzielne prowadzenie projektów dla klientów zewnętrznych<br />
                            - Utworzenie i rozwój ponad 50 różnych projektów WWW<br />
                            Projektowanie grafiki:<br />
                            - Outdoor, Poligrafia, skład DTP<br />
                            - Projektowanie opakowań produktowych<br />
                            - Projektowanie znaków graficznych, logo, logo produktowego.<br />
                        </p>
                        <div class="timeline-tech">
                            <span>PHP</span>
                            <span>Java Script</span>
                            <span>Smarty</span>
                            <span>MySQL</span>
                            <span>Adobe Photoshop</span>
                            <span>Corel DRAW</span>
                        </div>
                    </div>
                </div>          
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-date">2006.10 - 2016.01</div>
                    <div class="timeline-content">
                        <h3>Cybernet Webfabryka</h3>
                        <h4>Programista, Webdesigner, Projektant grafiki</h4>
                        <p>
                            Rozwój:<br />
                            - Systemów CMS<br />
                            - Systemów e-Comerce (QuickCMS, KQS.store, Sote Shop)<br />
                            - Rozwiązań wsparcia sprzedaży B2B i B2C<br />
                            Odpowiedzialność za:<br />
                            - Back-end i Front-end seriwsów WWW<br />
                            - Samodzielne prowadzenie projektów dla klientów zewnętrznych<br />
                            - Utworzenie i rozwój ponad 25 różnych projektów WWW<br />
                        </p>
                        <div class="timeline-tech">
                            <span>PHP</span>
                            <span>Java Script</span>
                            <span>Smarty</span>
                            <span>MySQL</span>
                            <span>Adobe Photoshop</span>
                        </div>
                    </div>
                </div>   
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-date">2013.06 - 2015.08</div>
                    <div class="timeline-content">
                        <h3>Kolorowe Media</h3>
                        <h4>Programista, Projektant stron WWW</h4>
                        <p>
                            - Rozwój i modernizacja portalu www.miastodzieci.pl<br />
                        </p>
                        <div class="timeline-tech">
                            <span>PHP</span>
                            <span>Java Script</span>
                        </div>
                    </div>
                </div>  
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-date">2011.06 - 2014.03</div>
                    <div class="timeline-content">
                        <h3>ETCOM</h3>
                        <h4>Programista, Projektant stron WWW</h4>
                        <p>
                            - Tworzenie stron WWW w oparciu o autorski system CMS<br />
                            - Projektowanie szablonów stron WWW<br />
                        </p>
                        <div class="timeline-tech">
                            <span>PHP</span>
                            <span>Java Script</span>
                            <span>Smarty</span>
                            <span>MySQL</span>
                        </div>
                    </div>
                </div>                                  
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-date">2007.10 - 2010.05</div>
                    <div class="timeline-content">
                        <h3>Sitta - Agencja Interaktywna</h3>
                        <h4>Programista, Projektant stron WWW, Projektant grafiki</h4>
                        <p>
                            - Tworzenie stron WWW w oparciu o autorski system CMS<br />
                            - Tworzenie aplikacji B2B, B2C<br />
                            - Rozwój autorskiego systemu mailingowego<br />
                        </p>
                        <div class="timeline-tech">
                            <span>PHP</span>
                            <span>Java Script</span>
                            <span>Smarty</span>
                            <span>MySQL</span>
                            <span>Adobe Photoshop</span>
                            <span>Corel DRAW</span>
                        </div>
                    </div>
                </div>                    
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-date">2005.10 - 2007.09</div>
                    <div class="timeline-content">
                        <h3>Artcreo</h3>
                        <h4>Projektant grafiki, Webdesigner</h4>
                        <p>
                            - Tworzenie stron WWW w oparciu o autorski system CMS<br />
                            - Projektowanie szablonów stron WWW<br />
                            - Projektowanie grafiki, outdoor, poligrafia, skład DTP <br />
                        </p>
                        <div class="timeline-tech">
                            <span>PHP</span>
                            <span>Java Script</span>
                            <span>Smarty</span>
                            <span>MySQL</span>
                            <span>Adobe Photoshop</span>
                            <span>Corel DRAW</span>
                        </div>
                    </div>
                </div>                                    
            </div>
        </div>
    </section>

    <!-- ====== EDUCATION SECTION ====== -->
    <section id="education" class="education section">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">Edukacja</span>
                <h2 class="section-title">Wykształcenie i certyfikaty</h2>
                <div class="section-divider"></div>
            </div>
            <div class="education-grid">
                <div class="edu-card">
                    <div class="edu-icon">
                        <i class="fas fa-university"></i>
                    </div>
                    <div class="edu-year">2001 - 2006</div>
                    <h3>WSIiZ w Rzeszowie</h3>
                    <h4>Kierunek: Informatyka i zarządzanie</h4>
                    <p>Specjalizacja: Sieci i systemy komputerowe Praca dyplomowa: "Wirtualny sekretariat szkolny - aplikacja web."</p>
                </div>
                <div class="edu-card">
                    <div class="edu-icon">
                        <i class="fas fa-network-wired"></i>
                    </div>
                    <div class="edu-year">2005</div>
                    <h3>Certyfikat CISCO</h3>
                    <h4>CCNA/CCNP</h4>
                    <p>Profesjonalny certyfikat z zakresu nowoczesnego front-end developmentu z React.</p>
                </div>
                <div class="edu-card">
                    <div class="edu-icon">
                        <i class="fas fa-university"></i>
                    </div>
                    <div class="edu-year">2018</div>
                    <h3>RODO</h3>
                    <h4>Ochrona danych osobowych</h4>
                    <p>Kurs certyfikowanego inspektora ochrony danych.</p>
                </div>
                <div class="edu-card">
                    <div class="edu-icon">
                        <i class="fas fa-file-invoice-dollar"></i>
                    </div>
                    <div class="edu-year">2021</div>
                    <h3>Stowarzyszenie Księgowych w Polsce</h3>
                    <h4>Księgowy I stopnia</h4>
                    <p>Certyfikat potwierdzający umiejętność projektowania i wdrażania aplikacji w chmurze AWS.</p>
                </div>   
                <div class="empty-edu-card">

                </div>
                <div class="empty-edu-card">

                </div>              
            </div>
        </div>
    </section>

    <!-- ====== STATS SECTION ====== -->
    <section class="stats section">
        <div class="container">
            <div class="stats-grid">
                <div class="stat-item">
                    <span class="stat-number" data-target="20">0</span>
                    <span class="stat-plus">+</span>
                    <span class="stat-label">Lata doświadczenia</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number" data-target="100">0</span>
                    <span class="stat-plus">+</span>
                    <span class="stat-label">Zrealizowanych projektów</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number" data-target="100">0</span>
                    <span class="stat-plus">+</span>
                    <span class="stat-label">Zadowolonych klientów</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number" data-target="500">0</span>
                    <span class="stat-plus">+</span>
                    <span class="stat-label">Commitów na GitHub</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ====== CONTACT SECTION ====== -->
    <section id="contact" class="contact section">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">Kontakt</span>
                <h2 class="section-title">Porozmawiajmy o współpracy</h2>
                <div class="section-divider"></div>
            </div>
            <div class="contact-grid">
                <div class="contact-info">
                    <h3>Dane kontaktowe</h3>
                    <p>Jeśli zainteresował cię mój profil zawodowy skontaktuj sie ze mną!</p>
                    <div class="contact-details">
                        <div class="contact-item">
                            <i class="fas fa-envelope"></i>
                            <div>
                                <span class="contact-label">Email</span>
                                <a href="mailto:pawelstempak@gmail.com">pawelstempak@gmail.com</a>
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-phone"></i>
                            <div>
                                <span class="contact-label">Telefon</span>
                                <a href="tel:+48123456789">+48 665 979 997</a>
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <div>
                                <span class="contact-label">Lokalizacja</span>
                                <span>Przemyśl / 100% zdalnie / Hybrydowo</span>
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-clock"></i>
                            <div>
                                <span class="contact-label">Dostępność</span>
                                <span>Natychmiastowa</span>
                            </div>
                        </div>
                    </div>
                    <div class="contact-socials">
                        <a href="https://github.com/pawelstempak" target="_blank" class="social-link" aria-label="GitHub"><i class="fab fa-github"></i></a>
                        <a href="https://linkedin.com/in/pawelstempak" target="_blank" class="social-link" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                        <a href="https://stackoverflow.com/users/18213224/sandowl" target="_blank" class="social-link" aria-label="Stack Overflow"><i class="fab fa-stack-overflow"></i></a>
                    </div>
                </div>
                <form class="contact-form" id="contactForm">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="name">Imię i nazwisko *</label>
                            <input type="text" id="name" name="name" placeholder="Jan Kowalski" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email *</label>
                            <input type="email" id="email" name="email" placeholder="jan@firma.pl" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="subject">Temat</label>
                        <input type="text" id="subject" name="subject" placeholder="Oferta współpracy">
                    </div>
                    <div class="form-group">
                        <label for="message">Wiadomość *</label>
                        <textarea id="message" name="message" rows="5" placeholder="Opisz krótko, czego dotyczy oferta..." required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-full">
                        <i class="fas fa-paper-plane"></i>
                        Wyślij wiadomość
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- ====== FOOTER ====== -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-logo">
                   <span class="logo-bracket">&lt;</span><span class="logo-name">PS</span><span class="logo-bracket">/&gt;</span>
                </div>
                <p class="footer-text">
                    Otwarty na nowe możliwości zawodowe. 
                    Jeśli masz dla mnie interesującą ofertę – napisz!
                </p>
                <div class="footer-bottom">
                    <span>&copy; 2026 Paweł Stempak. Wszelkie prawa zastrzeżone.</span>
                    <span>Designed & Built by <span class="logo-bracket">&lt;</span><span class="logo-name">PS</span><span class="logo-bracket">/&gt;</span></span>
                </div>
            </div>
        </div>
    </footer>

    <!-- ====== BACK TO TOP ====== -->
    <button id="backToTop" class="back-to-top" aria-label="Powrót do góry">
        <i class="fas fa-arrow-up"></i>
    </button>

    <!-- ====== IMAGE MODAL ====== -->
    <div id="modal-mcluxmed" class="modal-overlay" onclick="if(event.target===this){this.classList.remove('active');document.body.classList.remove('modal-open');}">
        <div class="modal-container">
            <button class="modal-close" aria-label="Zamknij" onclick="this.closest('.modal-overlay').classList.remove('active');document.body.classList.remove('modal-open');">&times;</button>
            <div class="modal-content">
                <img src="media/www/mcluxmed.jpeg" id="modalImage" alt="MCLUXMED - Podgląd">
            </div>
        </div>
    </div>

    <div id="modal-tatarska" class="modal-overlay" onclick="if(event.target===this){this.classList.remove('active');document.body.classList.remove('modal-open');}">
        <div class="modal-container">
            <button class="modal-close" aria-label="Zamknij" onclick="this.closest('.modal-overlay').classList.remove('active');document.body.classList.remove('modal-open');">&times;</button>
            <div class="modal-content">
                <img src="media/www/tatarska4.jpeg" id="modalImage" alt="Apartamenty Tatarska 4 - Podglad">
            </div>
        </div>
    </div>

    <div id="modal-osiedlenoweprzedmiescie" class="modal-overlay" onclick="if(event.target===this){this.classList.remove('active');document.body.classList.remove('modal-open');}">
        <div class="modal-container">
            <button class="modal-close" aria-label="Zamknij" onclick="this.closest('.modal-overlay').classList.remove('active');document.body.classList.remove('modal-open');">&times;</button>
            <div class="modal-content">
                <img src="media/www/osiedlenoweprzedmiescie.jpeg" id="modalImage" alt="Osiedle Nowe Przedmiescie - Podglad">
            </div>
        </div>
    </div>

    <div id="modal-nasofie" class="modal-overlay" onclick="if(event.target===this){this.classList.remove('active');document.body.classList.remove('modal-open');}">
        <div class="modal-container">
            <button class="modal-close" aria-label="Zamknij" onclick="this.closest('.modal-overlay').classList.remove('active');document.body.classList.remove('modal-open');">&times;</button>
            <div class="modal-content">
                <img src="media/www/nasofie.jpeg" id="modalImage" alt="Nasofie.pl - Podglad">
            </div>
        </div>
    </div>    

    <div id="modal-tatarska-developer" class="modal-overlay" onclick="if(event.target===this){this.classList.remove('active');document.body.classList.remove('modal-open');}">
        <div class="modal-container">
            <button class="modal-close" aria-label="Zamknij" onclick="this.closest('.modal-overlay').classList.remove('active');document.body.classList.remove('modal-open');">&times;</button>
            <div class="modal-content">
                <img src="media/www/tatarska_developer.jpeg" id="modalImage" alt="Tatarska Developer - Podglad">
            </div>
        </div>
    </div>    

    <div id="modal-safironutrition" class="modal-overlay" onclick="if(event.target===this){this.classList.remove('active');document.body.classList.remove('modal-open');}">
        <div class="modal-container">
            <button class="modal-close" aria-label="Zamknij" onclick="this.closest('.modal-overlay').classList.remove('active');document.body.classList.remove('modal-open');">&times;</button>
            <div class="modal-content">
                <img src="media/www/safironutrition.jpeg" id="modalImage" alt="Safironutrition.com - Podgląd">
            </div>
        </div>
    </div>    

    <div id="modal-inventa_pro" class="modal-overlay" onclick="if(event.target===this){this.classList.remove('active');document.body.classList.remove('modal-open');}">
        <div class="modal-container">
            <button class="modal-close" aria-label="Zamknij" onclick="this.closest('.modal-overlay').classList.remove('active');document.body.classList.remove('modal-open');">&times;</button>
            <div class="modal-content">
                <img src="media/api/inventa_pro.jpeg" id="modalImage" alt="INVENTAPRO - Podgląd">
            </div>
        </div>
    </div>    

    <div id="modal-octopus_cms" class="modal-overlay" onclick="if(event.target===this){this.classList.remove('active');document.body.classList.remove('modal-open');}">
        <div class="modal-container">
            <button class="modal-close" aria-label="Zamknij" onclick="this.closest('.modal-overlay').classList.remove('active');document.body.classList.remove('modal-open');">&times;</button>
            <div class="modal-content">
                <img src="media/api/octopuscms.jpg" id="modalImage" alt="OCTOPUS CMS - Podgląd">
            </div>
        </div>
    </div>    

    <div id="modal-e-learning" class="modal-overlay" onclick="if(event.target===this){this.classList.remove('active');document.body.classList.remove('modal-open');}">
        <div class="modal-container">
            <button class="modal-close" aria-label="Zamknij" onclick="this.closest('.modal-overlay').classList.remove('active');document.body.classList.remove('modal-open');">&times;</button>
            <div class="modal-content">
                <img src="media/api/elearning.jpeg" id="modalImage" alt="E-LEARNING PANEL - Podgląd">
            </div>
        </div>
    </div> 

    <div id="modal-tarnopolska" class="modal-overlay" onclick="if(event.target===this){this.classList.remove('active');document.body.classList.remove('modal-open');}">
        <div class="modal-container">
            <button class="modal-close" aria-label="Zamknij" onclick="this.closest('.modal-overlay').classList.remove('active');document.body.classList.remove('modal-open');">&times;</button>
            <div class="modal-content">
                <img src="media/www/tarnopolska.jpeg" id="modalImage" alt="Tarnopolska.pl - Podgląd">
            </div>
        </div>
    </div> 

    <div id="modal-maluch" class="modal-overlay" onclick="if(event.target===this){this.classList.remove('active');document.body.classList.remove('modal-open');}">
        <div class="modal-container">
            <button class="modal-close" aria-label="Zamknij" onclick="this.closest('.modal-overlay').classList.remove('active');document.body.classList.remove('modal-open');">&times;</button>
            <div class="modal-content">
                <img src="media/www/rehabilitacjadziecimaluch.jpeg" id="modalImage" alt="Rehabilitacja Dzieci Maluch - Podgląd">
            </div>
        </div>
    </div> 

    <div id="modal-timmspawtech" class="modal-overlay" onclick="if(event.target===this){this.classList.remove('active');document.body.classList.remove('modal-open');}">
        <div class="modal-container">
            <button class="modal-close" aria-label="Zamknij" onclick="this.closest('.modal-overlay').classList.remove('active');document.body.classList.remove('modal-open');">&times;</button>
            <div class="modal-content">
                <img src="media/www/timmspawtech.jpeg" id="modalImage" alt="Timm SpawTech - Podgląd">
            </div>
        </div>
    </div> 

    <div id="modal-skleportuspralniapl" class="modal-overlay" onclick="if(event.target===this){this.classList.remove('active');document.body.classList.remove('modal-open');}">
        <div class="modal-container">
            <button class="modal-close" aria-label="Zamknij" onclick="this.closest('.modal-overlay').classList.remove('active');document.body.classList.remove('modal-open');">&times;</button>
            <div class="modal-content">
                <img src="media/sklep/sklep.ortuspralnia.jpeg" id="modalImage" alt="Sklep Ortuspralnia - Podgląd">
            </div>
        </div>
    </div> 

    <div id="modal-aurora-labs" class="modal-overlay" onclick="if(event.target===this){this.classList.remove('active');document.body.classList.remove('modal-open');}">
        <div class="modal-container">
            <button class="modal-close" aria-label="Zamknij" onclick="this.closest('.modal-overlay').classList.remove('active');document.body.classList.remove('modal-open');">&times;</button>
            <div class="modal-content">
                <img src="media/sklep/aurora-labs.jpeg" id="modalImage" alt="Sklep Aurora-labs.pl - Podgląd">
            </div>
        </div>
    </div> 

    <div id="modal-perfumy-aurora" class="modal-overlay" onclick="if(event.target===this){this.classList.remove('active');document.body.classList.remove('modal-open');}">
        <div class="modal-container">
            <button class="modal-close" aria-label="Zamknij" onclick="this.closest('.modal-overlay').classList.remove('active');document.body.classList.remove('modal-open');">&times;</button>
            <div class="modal-content">
                <img src="media/sklep/perfumy-aurora.jpeg" id="modalImage" alt="Sklep Perfumy-Aurora.pl - Podgląd">
            </div>
        </div>
    </div> 

    <div id="modal-aurora-cosmetics" class="modal-overlay" onclick="if(event.target===this){this.classList.remove('active');document.body.classList.remove('modal-open');}">
        <div class="modal-container">
            <button class="modal-close" aria-label="Zamknij" onclick="this.closest('.modal-overlay').classList.remove('active');document.body.classList.remove('modal-open');">&times;</button>
            <div class="modal-content">
                <img src="media/sklep/aurora-cosmetics.jpeg" id="modalImage" alt="Sklep Aurora-Cosmetics.pl - Podgląd">
            </div>
        </div>
    </div> 

    <script src="js/main.js"></script>


</body>
</html>





