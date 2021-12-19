<?php
    require '../../includes/funciones.php';
    incluirTemplate('header');

    // autenticación
    $auth = authSesions();

    if(!$auth) {
        header('location: /');
    }
?>

    <main class="contenedor seccion">
        <h1>Borrar propiedades</h1>
    </main>

<?php incluirTemplate('footer'); ?>