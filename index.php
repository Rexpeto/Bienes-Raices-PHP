<?php 
    declare(strict_types = 1);
    require 'includes/funciones.php';
    incluirTemplate('header', $inicio = true); 
?>

    <main class="contenedor seccion">
        <h1>Más sobre nosotros</h1>

        <div class="iconos-nosotros">
            <div class="icono">
                <img src="/Bienes-Raices-PHP/build/img/icono1.svg" alt="Icono seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam quam eos laudantium corrupti culpa laborum?</p>
            </div>
            <div class="icono">
                <img src="/Bienes-Raices-PHP/build/img/icono2.svg" alt="Icono precio" loading="lazy">
                <h3>Precio</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Impedit doloribus error facere magnam! Iure, animi.</p>
            </div>
            <div class="icono">
                <img src="/Bienes-Raices-PHP/build/img/icono3.svg" alt="Icono tiempo" loading="lazy">
                <h3>Tiempo</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Impedit doloribus error facere magnam! Iure, animi.</p>
            </div>
        </div>
    </main>

    <section class="seccion contenedor">
        <h2>Casas y Departamentos en Venta</h2>

        <?php 
            $limit = 3;
            include 'includes/templates/anuncios.php';
        ?>
        <div class="alinear-derecha">
            <a href="anuncios.php" class="boton-verde">Ver todas</a>
        </div>
    </section>

    <section class="imagen-contacto">
        <h2>Encuentra la casa de tus sueños</h2>
        <p>Llena el formulario de contacto y un asesor se pondrá en contacto contigo a la brevedad</p>
        <a href="contacto.php" class="boton-amarillo-inline-block">Contactános</a>
    </section>

    <div class="contenedor seccion seccion-inferior">
        <section class="blog">
            <h3>Nuestro blog</h3>

            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="/Bienes-Raices-PHP/build/img/blog1.webp" type="image/webp">
                        <source srcset="/Bienes-Raices-PHP/build/img/blog1.jpg" type="image/jpeg">
                        <img src="/Bienes-Raices-PHP/build/img/blog1.jpg" alt="Entrada 1">
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
                        <source srcset="/Bienes-Raices-PHP/build/img/blog2.webp" type="image/webp">
                        <source srcset="/Bienes-Raices-PHP/build/img/blog2.jpg" type="image/jpeg">
                        <img src="/Bienes-Raices-PHP/build/img/blog2.jpg" alt="Entrada 1">
                    </picture>
                </div>
                <div class="texto-entrada">
                    <a href="entrada.php">
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

<?php incluirTemplate('footer'); ?>