<?php
    require 'includes/config/database.php';
    $db = conectarDB();
    $errores = [];

    if($_SERVER['REQUEST_METHOD'] === "POST") {
        $email = mysqli_real_escape_string($db, filter_var($_POST['email'], FILTER_VALIDATE_EMAIL));
        $pass = mysqli_real_escape_string($db, $_POST['password']);
        
        if(!$email) {
            $errores[] = "El correo electronico es obligatorio";
        }
        
        if(!$pass) {
            $errores[] = "La contraseña es obligatoria";
        }

        if(empty($errores)) {
            // Check el usuario existe
            $query = "SELECT * FROM usuarios WHERE email = '${email}';";
            $consulta = mysqli_query($db, $query);

            if($consulta->num_rows === 1) {
                $usuario = mysqli_fetch_assoc($consulta);
                $auth = password_verify($pass, $usuario['password']);

                if($auth) {
                    // Usuario autenticado
                    session_start();

                    // Llenar el array de la sesión
                    $_SESSION['usuario'] = $usuario['email'];
                    $_SESSION['login'] = true;

                    header('location: admin/');
                } else {
                    $errores[] = "El usuario no existe o contraseña inválida";
                }
            } else {
                $errores[] = "El usuario no existe o contraseña inválida";
            }
        }


    }

    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Iniciar sesión</h1>

        <?php foreach($errores as $error): ?>
            <div class="alerta error">
                <p><?php echo $error; ?></p>
            </div>
        <?php endforeach; ?>
        <form class="formulario" method="POST" action="login.php">
            <fieldset>
                <legend>Email y Password</legend>

                <label for="email">E-mail</label>
                <input type="email" name="email" id="email" placeholder="Tu correo electronico" required>

                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Tu contraseña" required>

                <div class="alinear-derecha">
                    <input type="submit" value="Iniciar Sesión" class="boton-verde">
                </div>
            </fieldset>
        </form>
    </main>

<?php incluirTemplate('footer'); ?>