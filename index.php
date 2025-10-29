<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Currículum Vitae - Jonathan Yumi</title>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<style>
    * {margin:0;padding:0;box-sizing:border-box;font-family:'Roboto',sans-serif;}
    body {line-height:1.6;color:#333;background:#f7f7f7;scroll-behavior:smooth;}
    header {background:#4CAF50;color:#fff;padding:80px 20px;text-align:center;position:relative;}
    header h1 {font-size:3rem; animation: fadeInDown 1s;}
    header p {font-size:1.3rem;margin-top:10px; animation: fadeInUp 1s;}
    @keyframes fadeInDown {from {opacity:0; transform:translateY(-30px);} to {opacity:1; transform:translateY(0);}}
    @keyframes fadeInUp {from {opacity:0; transform:translateY(30px);} to {opacity:1; transform:translateY(0);}}

    nav {display:flex;justify-content:center;gap:20px;background:#fff;padding:15px 0;box-shadow:0 2px 5px rgba(0,0,0,0.1);position:sticky;top:0;z-index:100;}
    nav a {text-decoration:none;color:#4CAF50;font-weight:bold;transition:0.3s;}
    nav a:hover {color:#2e7d32;}

    section {max-width:1000px;margin:50px auto;padding:0 20px;opacity:0; transform:translateY(30px);transition:1s ease;}
    section.visible {opacity:1; transform:translateY(0);}
    h2 {color:#4CAF50;margin-bottom:20px;border-bottom:2px solid #4CAF50;display:inline-block;padding-bottom:5px;}

    .about p {font-size:1.1rem;}
    .experience-item, .project-item, .testimonial {margin-bottom:25px;}
    .experience-item h3, .project-item h3 {margin-bottom:5px;color:#333;}
    .experience-item span, .project-item span {font-style:italic;color:#777;font-size:0.9rem;}

    .skills-list {display:flex;flex-wrap:wrap;gap:15px;}
    .skill-item {flex:1 1 200px;background:#e0f2f1;padding:10px 15px;border-radius:5px;position:relative;}
    .skill-item span {position:absolute;right:10px;top:10px;font-weight:bold;}

    .skill-bar {background:#c8e6c9;height:10px;border-radius:5px;overflow:hidden;margin-top:5px;}
    .skill-bar div {height:100%;background:#4CAF50;width:0%;border-radius:5px;transition:1s;}

    .contact form {display:flex;flex-direction:column;gap:15px;}
    .contact input, .contact textarea, .contact button {padding:10px;border-radius:5px;border:1px solid #ccc;font-size:1rem;}
    .contact button {background:#4CAF50;color:#fff;border:none;cursor:pointer;font-weight:bold;transition:0.3s;}
    .contact button:hover {background:#388E3C;}

    footer {text-align:center;padding:20px;background:#333;color:#fff;}

    .social-icons {margin-top:15px;}
    .social-icons a {color:#4CAF50;margin:0 10px;font-size:1.5rem;transition:0.3s;}
    .social-icons a:hover {color:#2e7d32;}

    .btn-cv {display:inline-block;background:#fff;color:#4CAF50;border:2px solid #fff;padding:10px 20px;border-radius:5px;font-weight:bold;margin-top:20px;transition:0.3s;}
    .btn-cv:hover {background:#4CAF50;color:#fff;border:2px solid #4CAF50;}

    /* Portfolio */
    .projects {display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:20px;}
    .project-item {background:#fff;padding:15px;border-radius:8px;box-shadow:0 2px 10px rgba(0,0,0,0.1);transition:0.3s;}
    .project-item:hover {transform:translateY(-5px);box-shadow:0 5px 15px rgba(0,0,0,0.2);}
    .project-item img {width:100%;border-radius:5px;margin-bottom:10px;}

    /* Testimonials */
    .testimonial {background:#fff;padding:15px;border-left:5px solid #4CAF50;border-radius:5px;box-shadow:0 2px 5px rgba(0,0,0,0.1);}
    .testimonial p {font-style:italic;}
    .testimonial h4 {margin-top:10px;font-weight:bold;color:#333;}

    @media(max-width:600px){header h1{font-size:2rem;} nav{flex-direction:column;} .skills-list{flex-direction:column;}}
</style>
</head>
<body>

<header>
    <h1>Jonathan Yumi</h1>
    <p>Desarrollador Web | UX/UI Designer | Innovador Tecnológico</p>
    <a href="Jonathan_Yumi_CV.pdf" class="btn-cv" download><i class="fas fa-download"></i> Descargar CV</a>
    <div class="social-icons">
        <a href="#"><i class="fab fa-linkedin"></i></a>
        <a href="#"><i class="fab fa-github"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
    </div>
</header>

<nav>
    <a href="#about">Sobre mí</a>
    <a href="#experience">Experiencia</a>
    <a href="#skills">Habilidades</a>
    <a href="#projects">Proyectos</a>
    <a href="#testimonials">Testimonios</a>
    <a href="#contact">Contacto</a>
</nav>

<section id="about" class="about">
    <h2>Sobre mí</h2>
    <p>Apasionado por la tecnología, desarrollo web y diseño UX/UI. Me especializo en crear soluciones digitales efectivas, atractivas y funcionales, combinando creatividad y análisis de datos para mejorar la experiencia del usuario.</p>
</section>

<section id="experience" class="experience">
    <h2>Experiencia</h2>
    <div class="experience-item">
        <h3>Desarrollador Web - Empresa XYZ</h3>
        <span>2022 - Presente</span>
        <p>Creación de aplicaciones web modernas con HTML, CSS, JavaScript y frameworks como React. Optimización de rendimiento y experiencia de usuario.</p>
    </div>
    <div class="experience-item">
        <h3>Diseñador UX/UI - Agencia ABC</h3>
        <span>2020 - 2022</span>
        <p>Diseño de interfaces intuitivas, mejora de flujos de navegación y experiencia del usuario en apps web y móviles.</p>
    </div>
</section>

<section id="skills" class="skills">
    <h2>Habilidades</h2>
    <div class="skills-list">
        <div class="skill-item">
            HTML & CSS <span>90%</span>
            <div class="skill-bar"><div style="width:90%"></div></div>
        </div>
        <div class="skill-item">
            JavaScript <span>85%</span>
            <div class="skill-bar"><div style="width:85%"></div></div>
        </div>
        <div class="skill-item">
            React <span>80%</span>
            <div class="skill-bar"><div style="width:80%"></div></div>
        </div>
        <div class="skill-item">
            Node.js <span>75%</span>
            <div class="skill-bar"><div style="width:75%"></div></div>
        </div>
        <div class="skill-item">
            UI/UX Design <span>90%</span>
            <div class="skill-bar"><div style="width:90%"></div></div>
        </div>
    </div>
</section>

<section id="projects" class="projects">
    <h2>Proyectos</h2>
    <div class="project-item">
        <img src="https://via.placeholder.com/400x200" alt="Proyecto 1">
        <h3>Portal Web Corporativo</h3>
        <span>2023</span>
        <p>Desarrollo de portal web responsive para empresa, integración con API y optimización SEO.</p>
    </div>
    <div class="project-item">
        <img src="https://via.placeholder.com/400x200" alt="Proyecto 2">
        <h3>App Móvil de Tareas</h3>
        <span>2022</span>
        <p>Aplicación para gestión de tareas con diseño UX/UI centrado en la experiencia del usuario.</p>
    </div>
</section>

<section id="testimonials" class="testimonials">
    <h2>Testimonios</h2>
    <div class="testimonial">
        <p>"Jonathan es un profesional excepcional. Su creatividad y conocimiento técnico hicieron que nuestro proyecto fuera un éxito total."</p>
        <h4>- Maria López, CEO de Empresa XYZ</h4>
    </div>
    <div class="testimonial">
        <p>"Siempre entrega resultados de alta calidad. Su habilidad en UX/UI transformó nuestra app y mejoró la satisfacción de los usuarios."</p>
        <h4>- Carlos Pérez, Project Manager ABC</h4>
    </div>
</section>

<section id="contact" class="contact">
    <h2>Contacto</h2>
    <form>
        <input type="text" placeholder="Nombre" required>
        <input type="email" placeholder="Correo electrónico" required>
        <textarea rows="5" placeholder="Mensaje" required></textarea>
        <button type="submit">Enviar Mensaje</button>
    </form>
</section>

<footer>
    &copy; 2025 Jonathan Yumi | Todos los derechos reservados
</footer>

<script>
    // Animaciones al hacer scroll
    const sections = document.querySelectorAll('section');
    window.addEventListener('scroll', () => {
        const triggerBottom = window.innerHeight * 0.85;
        sections.forEach(section => {
            const sectionTop = section.getBoundingClientRect().top;
            if(sectionTop < triggerBottom){
                section.classList.add('visible');
            }
        });
    });
</script>

</body>
</html>
