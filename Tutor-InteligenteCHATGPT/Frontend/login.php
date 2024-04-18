<?php
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar si se han proporcionado credenciales de inicio de sesión
    if (isset($_POST["username"]) && isset($_POST["password"])) {

        $username = $_POST["username"];
        $password = $_POST["password"];

        $sql = "SELECT id FROM usuarios WHERE nombre = '$username' AND contra = '$password'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) == 1) {
            // Obtener el ID del usuario de la fila de resultados
            $row = mysqli_fetch_assoc($result);
            $id_usuario = $row['id'];

            // Iniciar sesión y guardar el ID del usuario en la variable de sesión
            session_start();
            $_SESSION['id'] = $id_usuario;

            // Redirigir al usuario a la página de temario
            header("Location: examen.php");
            exit; // Terminar la ejecución del script después de redirigir al usuario
        } else {
            // Credenciales inválidas, mostrar un mensaje de error
            $error_message = "Usuario o contraseña incorrectos. Por favor, inténtalo de nuevo.";
        }
    }
}
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar sesión</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>

    <?php
    // Mostrar mensaje de error si existe
    if (isset($error_message)) {
        echo '<p class="error">' . $error_message . '</p>';
    }
    ?>

    <div class="login-box">
        <h2>Login</h2>

        <form id="login-form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="user-box">
                <input type="text" id="username" name="username" required="">
                <label for="username">Username</label>
            </div>
            <div class="user-box">
                <input type="password" id="password" name="password" required="">
                <label for="password">Password</label>
            </div>
            <a href="#" onclick="document.getElementById('login-form').submit();">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Iniciar sesion
            </a>
        </form>
    </div>





</body>
</html>