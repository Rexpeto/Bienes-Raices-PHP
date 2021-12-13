<?php 
    $inicio = true;
    include 'includes/templates/header.php' 
?>

    <main class="contenedor seccion">
        <h1>Más sobre nosotros</h1>

        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="Icono seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam quam eos laudantium corrupti culpa laborum?</p>
            </div>
            <div class="icono">
                <img src="build/img/icono2.svg" alt="Icono precio" loading="lazy">
                <h3>Precio</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Impedit doloribus error facere magnam! Iure, animi.</p>
            </div>
            <div class="icono">
                <img src="build/img/icono3.svg" alt="Icono tiempo" loading="lazy">
                <h3>Tiempo</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Impedit doloribus error facere magnam! Iure, animi.</p>
            </div>
        </div>
    </main>

    <section class="seccion contenedor">
        <h2>Casas y Departamentos en Venta</h2>

        <div class="contenedor-anuncios">
            <div class="anuncio">
                <picture>
                    <source srcset="build/img/anuncio1.webp" type="image/webp">
                    <source srcset="build/img/anuncio1.jpg" type="image/jpeg">
                    <img src="build/img/anuncio1.jpg" alt="Primer anuncio" loading="lazy">
                </picture>
                <div class="contenido-anuncio">
                    <h3>Casa de lujo en el lago</h3>
                    <p>Casa en el lago con excelente vista, acabados de lujo a un excelente precio</p>
                    <p class="precio">$3.000.000</p>

                    <ul class="iconos-caracteristicas">
                        <li>
                            <img src="build/img/icono_wc.svg" alt="Icono baños">
                            <p>3</p>
                        </li>
                        <li>
                            <img src="build/img/icono_dormitorio.svg" alt="Icono dormitorios">
                            <p>3</p>
                        </li>
                        <li>
                            <img src="build/img/icono_estacionamiento.svg" alt="Icono estacionamiento">
                            <p>2</p>
                        </li>
                    </ul>

                    <a href="anuncios.html" class="boton-amarillo-block">Ver Propiedad</a>
                </div> <!--.contenido-anuncio-->
            </div> <!--.anuncio-->
            <div class="anuncio">
                <picture>
                    <source srcset="build/img/anuncio2.webp" type="image/webp">
                    <source srcset="build/img/anuncio2.jpg" type="image/jpeg">
                    <img src="build/img/anuncio2.jpg" alt="Primer anuncio" loading="lazy">
                </picture>
                <div class="contenido-anuncio">
                    <h3>Casa terminados de lujo</h3>
                    <p>Casa con diseño moderno, así como tecnología inteligente y amueblada</p>
                    <p class="precio">$3.000.000</p>

                    <ul class="iconos-caracteristicas">
                        <li>
                            <img src="build/img/icono_wc.svg" alt="Icono baños">
                            <p>3</p>
                        </li>
                        <li>
                            <img src="build/img/icono_dormitorio.svg" alt="Icono dormitorios">
                            <p>3</p>
                        </li>
                        <li>
                            <img src="build/img/icono_estacionamiento.svg" alt="Icono estacionamiento">
                            <p>2</p>
                        </li>
                    </ul>

                    <a href="anuncios.html" class="boton-amarillo-block">Ver Propiedad</a>
                </div> <!--.contenido-anuncio-->
            </div> <!--.anuncio-->
            <div class="anuncio">
                <picture>
                    <source srcset="build/img/anuncio3.webp" type="image/webp">
                    <source srcset="build/img/anuncio3.jpg" type="image/jpeg">
                    <img src="build/img/anuncio3.jpg" alt="Primer anuncio" loading="lazy">
                </picture>
                <div class="contenido-anuncio">
                    <h3>Casa con piscina</h3>
                    <p>Casa con piscina y acabados de lujo en la ciudad, excelente oportunidad</p>
                    <p class="precio">$3.000.000</p>

                    <ul class="iconos-caracteristicas">
                        <li>
                            <img src="build/img/icono_wc.svg" alt="Icono baños">
                            <p>3</p>
                        </li>
                        <li>
                            <img src="build/img/icono_dormitorio.svg" alt="Icono dormitorios">
                            <p>3</p>
                        </li>
                        <li>
                            <img src="build/img/icono_estacionamiento.svg" alt="Icono estacionamiento">
                            <p>4</p>
                        </li>
                    </ul>

                    <a href="anuncios.html" class="boton-amarillo-block">Ver Propiedad</a>
                </div> <!--.contenido-anuncio-->
            </div> <!--.anuncio-->
        </div> <!--.contenedor-anuncios-->
        <div class="alinear-derecha">
            <a href="anuncios.html" class="boton-verde">Ver todas</a>
        </div>
    </section>

    <section class="imagen-contacto">
        <h2>Encuentra la casa de tus sueños</h2>
        <p>Llena el formulario de contacto y un asesor se pondrá en contacto contigo a la brevedad</p>
        <a href="contacto.html" class="boton-amarillo-inline-block">Contactános</a>
    </section>

    <div class="contenedor seccion seccion-inferior">
        <section class="blog">
            <h3>Nuestro blog</h3>

            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog1.webp" type="image/webp">
                        <source srcset="build/img/blog1.jpg" type="image/jpeg">
                        <img src="build/img/blog1.jpg" alt="Entrada 1">
                    </picture>
                </div>
                <div class="texto-entrada">
                    <a href="entrada.html">
                        <h4>Terraza en el techo de tu casa</h4>
                        <p>Escrito el: <span>10/12/2021</span> por: <span>Admin</span></p>
                        <p>Consejo para construir una terraz en tu casa con los mejores materiales del mercado y ahorrando dinero</p>
                    </a>
                </div>
            </article>
            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog2.webp" type="image/webp">
                        <source srcset="build/img/blog2.jpg" type="image/jpeg">
                        <img src="build/img/blog2.jpg" alt="Entrada 1">
                    </picture>
                </div>
                <div class="texto-entrada">
                    <a href="entrada.html">
                        <h4>Guía para la decoración para tu hogar</h4>
                        <p>Escrito el: <span>10/12/2021</span> por: <span>Admin</span></p>
                        <p>Maximiza el espacio en tu hogar con esta guía, aprende a combinar muebles y colores para darle vida a tu espacio</p>
                    </a>
                </div>
            </article>
        </section>
        <section class="testimoniales">
            <h3>Testimoniales</h3>
            <div class="testimonial">
                <blockquote>
                    El personal se comportó de una excelente forma, muy buena atención y la casa que me ofrecieron cumple con toddas mis expetativas
                </blockquote>
                <p>- Carlos Gallardo</p>
            </div>
        </section>
    </div>

    <footer class="footer seccion">
        <div class="contenedor contenedor-footer">
            <nav class="navegacion">
                <a href="nosotros.html">Nosotros</a>
                <a href="anuncios.html">Anuncios</a>
                <a href="blog.html">Blog</a>
                <a href="contacto.html">Contacto</a>
            </nav> <!--.navegacion-->
        </div>
        <p class="copyright">Todos los derechos reservados 2021 &copy;</p>
    </footer>

    <script src="build/js/bundle.min.js"></script>
</body>
</html>