<?php
    require 'includes/funciones.php';
    incluirTemplate('header');

    // Conexión a la db
    require 'includes/config/database.php';
    $db = conectarDB();

    $id = $_GET['id']; 
    $id = filter_var($id, FILTER_VALIDATE_INT);

    if(!$id) {
        header('location: anuncios.php');
    }

    // Consulta
    $query = "SELECT * FROM propiedades WHERE id = ${id}";
    $consulta = mysqli_query($db, $query);

    if(!$consulta->num_rows) {
        header('location: anuncios.php');
    }
    $propiedad = mysqli_fetch_assoc($consulta);
?>
    <main class="contenedor seccion contenido-centrado">
        <h1><?php echo $propiedad['titulo'] ?></h1>
        <img src="imagenes/<?php echo $propiedad['imagen'] ?>" alt="<?php echo $propiedad['titulo'] ?>">
        <div class="resumen-propiedad">
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
            <p><?php echo $propiedad['descripcion'] ?></p>
        </div>
    </main>

<?php 
    incluirTemplate('footer');
    mysqli_close($db);
?>