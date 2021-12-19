<?php
    // Include de templates
    require '../includes/funciones.php';
    incluirTemplate('header');

    // autenticación
    $auth = authSesions();

    if(!$auth) {
        header('location: /');
    }

    // Importación de conexión
    require '../includes/config/database.php';
    $db = conectarDB();

    // Query
    $query = "SELECT * FROM propiedades;";

    // Consulta
    $propiedades = mysqli_query($db, $query);

    // Mensaje de exito
    $msg = $_GET['msg'] ?? null;

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_POST['id'];
        $id = filter_var($id, FILTER_VALIDATE_INT);

        if($id) {
            // Eliminar reciduos
            $query = "SELECT imagen FROM propiedades WHERE id = $id";
            $consulta = mysqli_query($db, $query);
            $propiedad = mysqli_fetch_assoc($consulta);

            unlink('../imagenes/' . $propiedad['imagen']);

            // Eliminar la propiedad
            $query = "DELETE FROM propiedades WHERE id = $id";
            $consulta = mysqli_query($db, $query);

            if($consulta) {
                header('location: /admin?msg=3');
            }
        }
    }
?>

    <main class="contenedor seccion">
        <h1>Administrador de propiedades</h1>
        <?php if(intval($msg) === 1): ?>
            <div class="alerta success">
                <p>Propiedad creada correctamente</p>
            </div>
        <?php elseif(intval($msg) === 2): ?>
            <div class="alerta success">
                <p>Propiedad modificada correctamente</p>
            </div>
            <?php elseif(intval($msg) === 3): ?>
                <div class="alerta success">
                    <p>Propiedad eliminada correctamente</p>
                </div>
        <?php endif; ?>
        <a href="propiedades/crear.php" class="boton-verde-inline-block">Nueva propiedad</a>

        <table class="propiedades">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Imagen</th>
                    <th>Titulo</th>
                    <th>Precio</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($propiedades as $propiedad): ?>
                <tr>
                    <td><?php echo $propiedad['id'] ?></td>
                    <td><img src="../imagenes/<?php echo $propiedad['imagen']; ?>" alt="<?php echo $propiedad['titulo']; ?>" class="imagen_tabla"></td>
                    <td><?php echo $propiedad['titulo']; ?></td>
                    <td>$<?php echo $propiedad['precio']; ?></td>
                    <td>
                        <a href="propiedades/actualizar.php?id=<?php echo $propiedad['id']?>" class="boton-verde">Actualizar</a>
                        <form method="POST">
                            <input type="hidden" name="id" value="<?php echo $propiedad['id']; ?>">
                            <input type="submit" class="boton-rojo-block w-100" value="Eliminar">
                        </form>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </main>

<?php 
    incluirTemplate('footer');

    // Cirre de conexión
    mysqli_close($db);
?>