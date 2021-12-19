<?php
    // Funciones
    require '../../includes/funciones.php';
    incluirTemplate('header');

    // autenticación
    $auth = authSesions();

    if(!$auth) {
        header('location: /');
    }
    
    // Conexión a la db
    require '../../includes/config/database.php';
    $db = conectarDB();

    // Consulta de vendedores
    $consulta = "SELECT * FROM vendedores;";
    $resultado = mysqli_query($db, $consulta);


    // Array con mensaje de error
    $errores = [];

    $titulo          = '';
    $precio          = '';
    $imagen          = '';
    $descripcion     = '';
    $habitaciones    = '';
    $wc              = '';
    $estacionamiento = '';
    $vendedor        = '';

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $titulo          = mysqli_real_escape_string($db, $_POST['titulo']);
        $precio          = mysqli_real_escape_string($db, $_POST['precio']);
        $imagen          = $_FILES['imagen'];
        $descripcion     = mysqli_real_escape_string($db, $_POST['descripcion']);
        $habitaciones    = mysqli_real_escape_string($db, $_POST['habitaciones']);
        $wc              = mysqli_real_escape_string($db, $_POST['wc']);
        $estacionamiento = mysqli_real_escape_string($db, $_POST['estacionamiento']);
        $vendedor        = mysqli_real_escape_string($db, $_POST['vendedor']);
        $creado          = date('Y/m/d');

        if(!$titulo) {
            $errores[] = "Añade un titulo válido";
        }

        if(!$precio) {
            $errores[] = "El precio es obligatorio";
        }

        if(!$imagen['name'] || $imagen['error']) {
            $errores[] = 'La imagen es obligatoria';
        }

        if(!$descripcion) {
            $errores[] = "La descripción es obligatoria";
        }

        if(!$habitaciones) {
            $errores[] = "El número de habitaciones es obligatoria";
        }

        if(!$estacionamiento) {
            $errores[] = "El número de estacionamiento es obligatoria";
        }

        if(!$wc) {
            $errores[] = "El número de baños es obligatoria";
        }

        if(!$vendedor) {
            $errores[] = "Elige un vendedor";
        }

        // Tamaño de imagenes permitidos
        $medida = 1000 * 1000;

        if($imagen['size'] > $medida) {
            $errores[] = 'La imagen es muy pesada';
        }

        if(empty($errores)) {
            /* Subida de imagen */

            // Crear directorio
            $directorio = '../../imagenes/';
            if(!is_dir($directorio)) {
                mkdir($directorio);
            }

            // Generar nombre
            $nombre_imagen = md5(uniqid(rand(), true)) . ".jpg";

            // Subir imagen
            move_uploaded_file($imagen['tmp_name'], $directorio . $nombre_imagen);

            // Insertar en la db
            $query = "INSERT INTO propiedades (titulo, precio, descripcion, habitaciones, wc, estacionamiento, vendedor_id, creado, imagen) VALUES ('${titulo}', ${precio}, '${descripcion}', ${habitaciones}, ${wc}, ${estacionamiento}, ${vendedor}, '${creado}', '${nombre_imagen}');";
    
            $resultado = mysqli_query($db, $query);

            if($resultado) {
                header('location: /admin?msg=1');
            }
        }
    }
?>

    <main class="contenedor seccion">
        <h1>Crear propiedades</h1>
        <?php foreach($errores as $error): ?>
            <div class="alerta error">
                <?php echo $error; ?>
            </div>
        <?php endforeach; ?>
        <a href="/admin/" class="boton-amarillo-inline-block">Volver</a>

        <form action="crear.php"  method="POST" class="formulario" enctype="multipart/form-data">
            <fieldset>
                <legend>Información general</legend>

                <label for="titulo">Titulo:</label>
                <input type="text" name="titulo" id="titulo" placeholder="Titulo de propiedad" value="<?php echo $titulo ?>">

                <label for="precio">Precio:</label>
                <input type="number" name="precio" id="precio" placeholder="Precio de la propiedad" value="<?php echo $precio; ?>">

                <label for="imagen">Imagen:</label>
                <input type="file" name="imagen" id="imagen" accept="image/jpeg, image/png">

                <label for="descripcion">Descripción:</label>
                <textarea name="descripcion" id="descripcion"><?php echo $descripcion; ?></textarea>
            </fieldset>
            <fieldset>
                <legend>Información de la propiedad</legend>

                <label for="habitaciones">Habitaciones:</label>
                <input type="number" name="habitaciones" id="habitaciones" max="9" min="1" placeholder="Ej 3" value="<?php echo $habitaciones; ?>">

                <label for="wc">Baños:</label>
                <input type="number" name="wc" id="wc" max="8" min="1" placeholder="Ej 2" value="<?php echo $wc; ?>">

                <label for="estacionamiento">Estacionamiento:</label>
                <input type="number" name="estacionamiento" id="estacionamiento" max="8" min="0" placeholder="Ej 1" value="<?php echo $estacionamiento; ?>">
            </fieldset>
            <fieldset>
                <legend>Vendedor</legend>
                <select name="vendedor" id="vendedor">
                    <option selected hidden value="">--Seleccionar--</option>
                    <?php while($row = mysqli_fetch_assoc($resultado)): ?>
                        <option <?php echo $vendedor === $row['id'] ? 'selected' : ''; ?> value="<?php echo $row['id']; ?>"><?php echo $row['nombre'] . " " . $row['apellido'] ?></option>
                    <?php endwhile; ?>
                </select>
            </fieldset>
            <div class="alinear-derecha">
                <input type="submit" value="Crear" class="boton-verde">
            </div>
        </form>
    </main>

<?php incluirTemplate('footer'); ?>