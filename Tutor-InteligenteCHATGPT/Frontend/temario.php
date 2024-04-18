<?php
session_start();
include 'db_connection.php';

if(isset($_SESSION['id']) && !empty($_SESSION['id'])) {

    $id_usuario = $_SESSION['id'];

    $sql = "SELECT * FROM temario WHERE id_usuario = $id_usuario";
    $result = mysqli_query($conn, $sql);

    $fundamentos = "";
    $herencia = "";
    $genericos = "";

    while($row = mysqli_fetch_assoc($result)) {
        $fundamentos .= $row['FundamentosPOO'] . ",";
        $herencia .= $row['Herencia'] . ",";
        $genericos .= $row['Generacidad'] . ",";
    }
    $fundamentos = rtrim($fundamentos, ",");
    $herencia = rtrim($herencia, ",");
    $genericos = rtrim($genericos, ",");


} else {
    echo "ID de usuario no válido.";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Temario : FPOO</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>

<script>
    var $fun = "<?= $fundamentos ?>";
    var $her = "<?= $herencia ?>";
    var $gen = "<?= $genericos ?>";
</script>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <div class="container">
        <div class="segment">
            <h1>Estos fueron los resultado de su evaluacion:</h1>
        </div>

        <!-- Resultados -->
        <div class="question">
            <h3>Su calificacion:</h3>
        </div>

        <div class="question">
            <h3>Temas por reforzar:</h3>
            <ul id="temas-list"></ul>
        </div>

        <a href="logout.php" class="btn-submit" onclick="document.getElementById('login-form').submit();">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            Cerrar sesion
        </a>
    </div>
</form>

<script src="javascript/temas.js"></script>

</body>
</html>
