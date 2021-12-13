<?php include 'includes/templates/header.php'; ?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Contacto</h1>
        <picture>
            <source srcset="build/img/destacada3.webp" type="image/webp">
            <source srcset="build/img/destacada3.jpg" type="image/jpeg">
            <img src="build/img/destacada3.jpg" alt="Imagen destacada" loading="lazy">
        </picture>
        <h2>Llene el formulario de contacto</h2>
        <form action="" class="formulario">
            <fieldset>
                <legend>Informacion personal</legend>

                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" placeholder="Tu nombre">

                <label for="email">E-mail</label>
                <input type="email" name="email" id="email" placeholder="Correo Electronico">

                <label for="telefono">Teléfono</label>
                <input type="tel" name="telefono" id="telefono" placeholder="Teléfono">

                <label for="mensaje">Mensaje</label>
                <textarea name="mensaje" id="mensaje"></textarea>
            </fieldset>
            <fieldset>
                <legend>Información sobre la propiedad</legend>
                <label for="opciones">Vender o Comprar</label>
                <select name="opciones" id="opciones">
                    <option value="" disabled selected>-Seleccione-</option>
                    <option value="compra">Vender</option>
                    <option value="vende">Comprar</option>
                </select>

                <label for="presupuesto">Precio o Presupuesto</label>
                <input type="number" name="presupuesto" id="presupuesto">
            </fieldset>
            <fieldset>
                <legend>Contacto</legend>
                <p>¿Como desea ser contactado?</p>
                <div class="forma-contacto">
                    <label for="contactar-telefono">Teléfono</label>
                    <input type="radio" name="contacto" id="contactar-telefono" value="telefono">

                    <label for="contactar-email">E-mail</label>
                    <input type="radio" name="contacto" id="contactar-email" value="email">
                </div>

                <p>Si eligió teléfono, elija la fecha y la hora para ser contacto</p>

                <label for="fecha-contacto">Fecha</label>
                <input type="date" name="fecha-contacto" id="fecha-contacto">

                <label for="hora-contacto">Hora</label>
                <input type="time" name="hora-contacto" id="hora-contacto" min="09:00" max="18:00">
            </fieldset>
            <div class="alinear-derecha">
                <input class="boton-verde" type="submit" value="Enviar">
            </div>
        </form>
    </main>

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