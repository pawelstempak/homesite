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
                <li class="nav-item"><a href="#hero" class="nav-link active">Start</a></li>
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
                                <span>DTP, Logotype</span>
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
                <button class="filter-btn" data-filter="fullstack">Logo</button>
                <button class="filter-btn" data-filter="api">Aplikacje</button>
            </div>
            <div class="projects-grid">
                <!-- Project 1 -->
                <div class="project-card" data-category="www">
                    <div class="project-img">
                        <div class="project-img-placeholder">
                            <img src="media/tatarska.jpeg">
                        </div>
                        <div class="project-overlay">
                            <div class="project-links">
                                <a href="#" class="project-link" target="_blank"><i class="fas fa-eye"></i></a>
                                <a href="https://apartamenty-tatarska4.pl" class="project-link" target="_blank"><i class="fas fa-external-link-alt"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="project-info">
                        <span class="project-category">Strony WWW</span>
                        <h3>Apartamenty Tatarska 4</h3>
                        <p>Nowoczesny sklep internetowy z panelem administracyjnym, koszykiem i integracją płatności.</p>
                        <div class="project-tech">
                            <span>PHP</span>
                            <span>JQuery</span>
                            <span>Smarty</span>
                        </div>
                    </div>
                </div>
                <!-- Project 2 -->
                <div class="project-card" data-category="frontend">
                    <div class="project-img">
                        <div class="project-img-placeholder">
                            <i class="fas fa-calendar-alt"></i>
                        </div>
                        <div class="project-overlay">
                            <div class="project-links">
                                <a href="#" class="project-link" target="_blank"><i class="fab fa-github"></i></a>
                                <a href="#" class="project-link" target="_blank"><i class="fas fa-external-link-alt"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="project-info">
                        <span class="project-category">Frontend</span>
                        <h3>Aplikacja do zarządzania zadaniami</h3>
                        <p>Interaktywna tablica Kanban z przeciąganiem i upuszczaniem, filtrowaniem i raportami.</p>
                        <div class="project-tech">
                            <span>React</span>
                            <span>TypeScript</span>
                            <span>DnD Kit</span>
                            <span>Tailwind</span>
                        </div>
                    </div>
                </div>
                <!-- Project 3 -->
                <div class="project-card" data-category="api">
                    <div class="project-img">
                        <div class="project-img-placeholder">
                            <i class="fas fa-cloud"></i>
                        </div>
                        <div class="project-overlay">
                            <div class="project-links">
                                <a href="#" class="project-link" target="_blank"><i class="fab fa-github"></i></a>
                                <a href="#" class="project-link" target="_blank"><i class="fas fa-external-link-alt"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="project-info">
                        <span class="project-category">API</span>
                        <h3>System zarządzania treścią (CMS)</h3>
                        <p>REST API dla systemu CMS z autoryzacją JWT, rolami użytkowników i dokumentacją Swagger.</p>
                        <div class="project-tech">
                            <span>Node.js</span>
                            <span>Express</span>
                            <span>PostgreSQL</span>
                            <span>Swagger</span>
                        </div>
                    </div>
                </div>
                <!-- Project 4 -->
                <div class="project-card" data-category="fullstack">
                    <div class="project-img">
                        <div class="project-img-placeholder">
                            <i class="fas fa-comments"></i>
                        </div>
                        <div class="project-overlay">
                            <div class="project-links">
                                <a href="#" class="project-link" target="_blank"><i class="fab fa-github"></i></a>
                                <a href="#" class="project-link" target="_blank"><i class="fas fa-external-link-alt"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="project-info">
                        <span class="project-category">Full Stack</span>
                        <h3>Czat na żywo z WebSocket</h3>
                        <p>Aplikacja do komunikacji w czasie rzeczywistym z obsługą kanałów, emoji i załączników.</p>
                        <div class="project-tech">
                            <span>React</span>
                            <span>Socket.io</span>
                            <span>Node.js</span>
                            <span>Redis</span>
                        </div>
                    </div>
                </div>
                <!-- Project 5 -->
                <div class="project-card" data-category="frontend">
                    <div class="project-img">
                        <div class="project-img-placeholder">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <div class="project-overlay">
                            <div class="project-links">
                                <a href="#" class="project-link" target="_blank"><i class="fab fa-github"></i></a>
                                <a href="#" class="project-link" target="_blank"><i class="fas fa-external-link-alt"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="project-info">
                        <span class="project-category">Frontend</span>
                        <h3>Dashboard analityczny</h3>
                        <p>Panel z wykresami, tabelami i filtrami do wizualizacji danych biznesowych w czasie rzeczywistym.</p>
                        <div class="project-tech">
                            <span>React</span>
                            <span>Chart.js</span>
                            <span>SCSS</span>
                            <span>REST</span>
                        </div>
                    </div>
                </div>
                <!-- Project 6 -->
                <div class="project-card" data-category="api">
                    <div class="project-img">
                        <div class="project-img-placeholder">
                            <i class="fas fa-robot"></i>
                        </div>
                        <div class="project-overlay">
                            <div class="project-links">
                                <a href="#" class="project-link" target="_blank"><i class="fab fa-github"></i></a>
                                <a href="#" class="project-link" target="_blank"><i class="fas fa-external-link-alt"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="project-info">
                        <span class="project-category">API</span>
                        <h3>Web Scraper z API</h3>
                        <p>Narzędzie do ekstrakcji danych ze stron internetowych z REST API i harmonogramem zadań.</p>
                        <div class="project-tech">
                            <span>Python</span>
                            <span>FastAPI</span>
                            <span>BeautifulSoup</span>
                            <span>Docker</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="projects-cta">
                <a href="https://github.com/" target="_blank" class="btn btn-primary">
                    <i class="fab fa-github"></i>
                    Zobacz więcej na GitHub
                </a>
            </div>
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
                    <div class="timeline-date">2023 - obecnie</div>
                    <div class="timeline-content">
                        <h3>Frontend Developer</h3>
                        <h4>TechCorp Sp. z o.o. Warszawa</h4>
                        <p>
                            Tworzenie i utrzymanie aplikacji webowych w React i TypeScript. 
                            Współpraca z zespołem UX/UI, optymalizacja wydajności i wprowadzanie 
                            testów jednostkowych. Udział w code review i mentorowanie młodszych developerów.
                        </p>
                        <div class="timeline-tech">
                            <span>React</span>
                            <span>TypeScript</span>
                            <span>Jest</span>
                            <span>GitLab</span>
                        </div>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-date">2021 - 2023</div>
                    <div class="timeline-content">
                        <h3>Junior Full Stack Developer</h3>
                        <h4>WebSolutions Agency</h4>
                        <p>
                            Tworzenie stron i aplikacji internetowych dla klientów z różnych branż. 
                            Praca w technologiach PHP/Laravel oraz Vue.js. Zarządzanie bazami danych MySQL 
                            i wdrożenia na serwerach produkcyjnych.
                        </p>
                        <div class="timeline-tech">
                            <span>PHP</span>
                            <span>Laravel</span>
                            <span>Vue.js</span>
                            <span>MySQL</span>
                        </div>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-date">2020 - 2021</div>
                    <div class="timeline-content">
                        <h3>Stażysta Frontend Developer</h3>
                        <h4>StartApp.io</h4>
                        <p>
                            Staż w startupie technologicznym, gdzie zajmowałem się implementacją 
                            komponentów UI w React oraz integracją z REST API. Nauka pracy w Scrum i 
                            z systemem kontroli wersji Git.
                        </p>
                        <div class="timeline-tech">
                            <span>React</span>
                            <span>JavaScript</span>
                            <span>SCSS</span>
                            <span>Git</span>
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
                    <div class="edu-year">2018 - 2022</div>
                    <h3>Politechnika Warszawska</h3>
                    <h4>Kierunek: Informatyka</h4>
                    <p>Specjalizacja: Inżynieria oprogramowania. Praca dyplomowa: "Optymalizacja wydajności aplikacji React z użyciem Web Workers" (ocena: 5.0).</p>
                </div>
                <div class="edu-card">
                    <div class="edu-icon">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <div class="edu-year">2023</div>
                    <h3>Certyfikat AWS</h3>
                    <h4>AWS Certified Developer - Associate</h4>
                    <p>Certyfikat potwierdzający umiejętność projektowania i wdrażania aplikacji w chmurze AWS.</p>
                </div>
                <div class="edu-card">
                    <div class="edu-icon">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <div class="edu-year">2024</div>
                    <h3>Certyfikat Meta</h3>
                    <h4>Meta Front-End Developer</h4>
                    <p>Profesjonalny certyfikat z zakresu nowoczesnego front-end developmentu z React.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ====== STATS SECTION ====== -->
    <section class="stats section">
        <div class="container">
            <div class="stats-grid">
                <div class="stat-item">
                    <span class="stat-number" data-target="3">0</span>
                    <span class="stat-plus">+</span>
                    <span class="stat-label">Lata doświadczenia</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number" data-target="20">0</span>
                    <span class="stat-plus">+</span>
                    <span class="stat-label">Zrealizowanych projektów</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number" data-target="15">0</span>
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
                    <p>Jeśli szukasz zaangażowanego developera, który dołączy do Twojego zespołu – zapraszam do kontaktu!</p>
                    <div class="contact-details">
                        <div class="contact-item">
                            <i class="fas fa-envelope"></i>
                            <div>
                                <span class="contact-label">Email</span>
                                <a href="mailto:kontakt@example.com">kontakt@example.com</a>
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-phone"></i>
                            <div>
                                <span class="contact-label">Telefon</span>
                                <a href="tel:+48123456789">+48 123 456 789</a>
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <div>
                                <span class="contact-label">Lokalizacja</span>
                                <span>Warszawa / 100% zdalnie</span>
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-clock"></i>
                            <div>
                                <span class="contact-label">Dostępność</span>
                                <span>Natychmiastowa / 2 tyg. wypowiedzenia</span>
                            </div>
                        </div>
                    </div>
                    <div class="contact-socials">
                        <a href="https://github.com/" target="_blank" class="social-link" aria-label="GitHub"><i class="fab fa-github"></i></a>
                        <a href="https://linkedin.com/" target="_blank" class="social-link" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                        <a href="https://stackoverflow.com/" target="_blank" class="social-link" aria-label="Stack Overflow"><i class="fab fa-stack-overflow"></i></a>
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
                    <span class="logo-bracket">&lt;</span>
                    <span class="logo-name">PS</span>
                    <span class="logo-bracket"> /&gt;</span>
                </div>
                <p class="footer-text">
                    Otwarty na nowe możliwości zawodowe. 
                    Jeśli masz dla mnie interesującą ofertę – napisz!
                </p>
                <div class="footer-bottom">
                    <span>&copy; 2026 Paweł Stempak. Wszelkie prawa zastrzeżone.</span>
                    <span>Designed & Built with <i class="fas fa-heart"></i> by PS</span>
                </div>
            </div>
        </div>
    </footer>

    <!-- ====== BACK TO TOP ====== -->
    <button id="backToTop" class="back-to-top" aria-label="Powrót do góry">
        <i class="fas fa-arrow-up"></i>
    </button>

    <script src="js/main.js"></script>
</body>
</html>
