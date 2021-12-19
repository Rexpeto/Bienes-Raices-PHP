<?php 
    // Importar conexión
    require 'includes/config/database.php';
    $db = conectarDB();

    // consultar la db
    $query = "SELECT * FROM propiedades LIMIT ${limit};";
    $consulta = mysqli_query($db, $query);

    // Leer resultados
?>
<div class="contenedor-anuncios">
    <?php while($propiedad = mysqli_fetch_assoc($consulta)): ?>
        <div class="anuncio">
                <img src="imagenes/<?php echo $propiedad['imagen'] ?>" alt="Primer anuncio" loading="lazy">
            <div class="contenido-anuncio">
                <h3><?php echo $propiedad['titulo'] ?></h3>
                <p><?php echo $propiedad['descripcion'] ?></p>
                <p class="precio">$<?php echo $propiedad['precio'] ?></p>

                <ul class="iconos-caracteristicas">
                    <li>
                        <img src="build/img/icono_wc.svg" alt="Icono baños">
                        <p><?php echo $propiedad['wc'] ?></p>
                    </li>
                    <li>
                        <img src="build/img/icono_dormitorio.svg" alt="Icono dormitorios">
                        <p><?php echo $propiedad['habitaciones'] ?></p>
                    </li>
                    <li>
                        <img src="build/img/icono_estacionamiento.svg" alt="Icono estacionamiento">
                        <p><?php echo $propiedad['estacionamiento'] ?></p>
                    </li>
                </ul>

                <a href="anuncio.php?id=<?php echo $propiedad['id'] ?>" class="boton-amarillo-block">Ver Propiedad</a>
            </div> <!--.contenido-anuncio-->
        </div> <!--.anuncio-->
    <?php endwhile; ?>
</div> <!--.contenedor-anuncios-->

<?php 
    mysqli_close($db);
?>