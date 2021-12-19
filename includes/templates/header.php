<?php 

    if(!isset($_SESSION)) {
        session_start();
        
    }
    $auth = $_SESSION['login'] ?? null;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/build/css/app.css">
    <title>Bienes Raíces</title>
</head>
<body>
    <header class="header <?php echo $inicio ? 'inicio' : ''; ?>">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="/">
                    <img src="/build/img/logo.svg" alt="Logotipo">
                </a>

                <div class="mobile-menu">
                    <img src="/build/img/barras.svg" alt="Menu amburger">
                </div>

                <div class="derecha">
                    <img class="dark-mode-btn" src="/build/img/dark-mode.svg" alt="Dark mode">
                    <nav class="navegacion">
                        <a href="nosotros.php">Nosotros</a>
                        <a href="anuncios.php">Anuncios</a>
                        <a href="blog.php">Blog</a>
                        <a href="contacto.php">Contacto</a>
                        <?php if($auth): ?>
                            <a href="logout.php">Cerrar Sesión</a>
                        <?php endif; ?>
                    </nav> <!--.navegacion-->
                </div>
            </div> <!--.barra-->
            <?php echo $inicio ? "<h1>Venta de Casas y Departamentos exclusivos de lujo</h1>" : "";?>
        </div>
    </header>