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
    <link rel="stylesheet" href="../public/css/style.css">
</head>

<body>
    <div class="head">
        <div class="port">
            <img src="../public/img/Logo.png" alt="logo" class="img-logo">
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

    <div class="post width-height">
        <div class="article-post">
            <article class="article" onclick="location.href= 'post.html'">
                <h1 class="article-title">Titulo</h1>
                <p class="date">Publicado el 28 Mar 2023</p>
                <img src="../public/img/baner-blog.png" alt="baner" class="img-article-post">

                <div class="article-text width-height">
                    <div class="line"></div>
                    <p class="text-article">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cupiditate fuga
                        libero illo officiis totam! Consequuntur repellat molestiae fugiat ab eligendi nostrum, odit
                        similique amet totam!</p>
                </div>

                <div class="share-and-comment">
                    <i class='bx bxs-comment' style="color: #f10f0f;"></i>

                    <i class='bx bx-share-alt' style="color: #f10f0f;"></i>
                </div>
            </article>

            <article class="article">
                <h1 class="article-title">Titulo</h1>
                <p class="date">Publicado el 28 Mar 2023</p>
                <img src="../public/img/baner-blog.png" alt="baner" class="img-article-post">

                <div class="article-text width-height">
                    <div class="line"></div>
                    <p class="text-article">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cupiditate fuga
                        libero illo officiis totam! Consequuntur repellat molestiae fugiat ab eligendi nostrum, odit
                        similique amet totam!</p>
                </div>

                <div class="share-and-comment">
                    <i class='bx bxs-comment' style="color: #f10f0f;"></i>

                    <i class='bx bx-share-alt' style="color: #f10f0f;"></i>
                </div>
            </article>

            <article class="article">
                <h1 class="article-title">Titulo</h1>
                <p class="date">Publicado el 28 Mar 2023</p>
                <img src="../public/img/baner-blog.png" alt="baner" class="img-article-post">

                <div class="article-text width-height">
                    <div class="line"></div>
                    <p class="text-article">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cupiditate fuga
                        libero illo officiis totam! Consequuntur repellat molestiae fugiat ab eligendi nostrum, odit
                        similique amet totam!</p>
                </div>

                <div class="share-and-comment">
                    <i class='bx bxs-comment' style="color: #f10f0f;"></i>

                    <i class='bx bx-share-alt' style="color: #f10f0f;"></i>
                </div>
            </article>
        </div>

        <div class="post-form">
            <div class="form width-height" id="div-form">
                <h2 class="title">Formulario de contacto</h2>
                <form action="" class="contact-form">
                    <div class="content-form">
                        <input type="text" class="form-input" id="name" placeholder=" ">
                        <label for="name" class="form-label">Nombre:</label>
                    </div>

                    <div class="space"></div>

                    <div class="content-form">
                        <input type="email" class="form-input" id="email" placeholder=" ">
                        <label for="email" class="form-label">Correo:</label>
                    </div>

                    <div class="space"></div>

                    <div class="content-form">
                        <textarea name="message" id="message" cols="30" rows="10" placeholder=" "class="form-input"></textarea>
                        <label for="message" class="form-label">Mensaje:</label>
                    </div>

                    <button>
                        <div class="svg-wrapper-1">
                            <div class="svg-wrapper">
                                <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 0h24v24H0z" fill="none"></path>
                                    <path
                                        d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z"
                                        fill="currentColor"></path>
                                </svg>
                            </div>
                        </div>
                        <span>Enviar</span>
                    </button>
                </form>
            </div>
        </div>
    </div>

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

    <script src="../public/js/main.js"></script>
</body>

</html>