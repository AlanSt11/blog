<div class="post width-height">
        <div class="article-post">
            <?php
                foreach($post as $post_data){
                    echo "<article class=\"article\" onclick=\"location.href= 'post.html'\">";
                    echo "<h1 class=\"article-title\">" . $post_data['post_title'] . "</h1>";
                    echo "<p class=\"date\">" . $post_data['post_date'] . "</p>";
                    echo "<img src=\"" . $post_data['post_img'] . "\" alt=\"baner\" class=\"img-article-post\">";
                    echo "<div class=\"article-text width-height\">
                    <div class=\"line\"></div>
                    <p class=\"text-article\">" . $post_data['post_description'] . "</p>
                </div>

                <div class=\"share-and-comment\">
                    <i class='bx bxs-comment' style=\"color: #f10f0f;\"></i>

                    <i class='bx bx-share-alt' style=\"color: #f10f0f;\"></i>
                </div>";
                echo "</article>";
                }
            ?>
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