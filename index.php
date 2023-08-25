<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Primary Meta Tags -->
    <title>Blog</title>
    <meta name="title" content="Blog" />
    <meta name="description" content="Aprende sobre diseño web de manera fácil para poder crear tu propio sitio web" />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://mi-blog" />
    <meta property="og:title" content="Blog" />
    <meta property="og:description"
        content="Aprende sobre diseño web de manera fácil para poder crear tu propio sitio web" />
    <meta property="og:image" content="img/logo.png" />

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="https://mi-blog" />
    <meta property="twitter:title" content="Blog" />
    <meta property="twitter:description"
        content="Aprende sobre diseño web de manera fácil para poder crear tu propio sitio web" />
    <meta property="twitter:image" content="img/logo.png" />

    <!-- Meta Tags Generated with https://metatags.io -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="public/css/style.css">
</head>

<body>
    <div class="head">
        <div class="port">
            <img src="public/img/Logo.png" alt="logo" class="img-logo">
        </div>
    </div>

    <div class="nav">
        <ul class="menu" id="menu">
            <li class="list-link"><a href="#" class="links">Inicio</a></li>
            <li class="list-link"><a href="#" class="links">Contacto</a></li>
            <li class="list-link"><a href="#" class="links">Tutoriales</a></li>
        </ul>

        <div class="toggle" onclick="abrirMenu()">&#9776</div>
    </div>

    <?php
        require('controller/C_post.php');
        require('view/V_post.php');
    ?>

    <footer class="footer width-height">
        <div class="social width-height">
            <button class="Btn">
                <div class="sign"><i class='bx bxl-facebook-circle' style="font-size: 2.5rem; color: #fff;"></i></div>
                <div class="text">Facebook</div>
            </button>

            <button class="Btn" style="background-color: #C13584;">
                <div class="sign"><i class='bx bxl-instagram' style="font-size: 2.5rem; color: #fff;"></i></div>
                <div class="text">Instagram</div>
            </button>

            <button class="Btn" style="background-color: #FF0000;">
                <div class="sign"><i class='bx bxl-youtube' style="font-size: 2.5rem; color: #fff;"></i></div>
                <div class="text">YouTube</div>
            </button>

        </div>

        <div class="about-me width-height">
            <p class="text-about-me">Alan St</p>
            <p class="text-about-me">&copy;Todos los derechos reservados</p>
        </div>
    </footer>

    <script src="public/js/main.js"></script>
</body>

</html>