<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h1>Casas y Departamentos</h1>
        <?php 
            $limit = 20;
            include 'includes/templates/anuncios.php'; 
        ?>
    </main>

<?php incluirTemplate('footer'); ?>