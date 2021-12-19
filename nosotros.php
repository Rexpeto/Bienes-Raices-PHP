<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h1>Conoce sobre nosotros</h1>

        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/nosotros.webp" type="image/webp">
                    <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                    <img src="build/img/nosotros.jpg" alt="Nosotros" loading="lazy">
                </picture>
            </div>
            <div class="texto-nosotros">
                <blockquote>25 años de experiencia</blockquote>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse eius ipsa optio quos laudantium ullam tempora modi, nam veritatis laboriosam, nemo asperiores fugit accusamus ipsum veniam eveniet itaque. Animi mollitia alias suscipit similique saepe debitis quo odio! Aspernatur, corrupti suscipit! Nobis commodi, voluptatum obcaecati cum dolores dolor omnis! Voluptas ipsum corporis consectetur eius rerum obcaecati odit magni blanditiis. Labore animi impedit dolor quia esse sed, excepturi quae eius illo necessitatibus aliquid, alias natus expedita! Officia expedita nisi tempore explicabo architecto!</p>
            </div>
        </div>
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

<?php incluirTemplate('footer'); ?>