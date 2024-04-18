<?php

include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Aquí puedes procesar y almacenar las respuestas en la base de datos

    // Recorrer $_POST para obtener las respuestas enviadas
    foreach ($_POST as $pregunta => $respuesta) {
        // Verificar si el campo es una respuesta de pregunta (por ejemplo, si comienza con "respuesta_")
        if (strpos($pregunta, 'respuesta_') === 0) {
            // Extraer el ID de la pregunta de la clave del campo
            $pregunta_id = substr($pregunta, strlen('respuesta_'));

            $sql = "INSERT INTO respuestas_usuario (usuario_id, pregunta_id, respuesta_dada)
                    VALUES ('$usuario_id', '$pregunta_id', '$respuesta')";

            if (mysqli_query($conn, $sql)) {
                header("Location: temario.php");
                echo "Respuestas del examen almacenadas correctamente en la base de datos.";
            } else {
                echo "Error al almacenar las respuestas del examen: " . mysqli_error($conn);
            }
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Examen diagnostico</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <div class="examen">
        <div class="segment">
            <h1>Examen diagnostico</h1>
        </div>

        <!-- Pregunta 1 -->
        <div class="question">
            <h3>1. opc multiple</h3>
            <input type="radio" id="radio1_1" name="respuesta_1" value="a">
            <label for="radio1_1">a</label><br>
            <input type="radio" id="radio1_2" name="respuesta_1" value="b">
            <label for="radio1_2">b</label><br>
            <input type="radio" id="radio1_3" name="respuesta_1" value="c">
            <label for="radio1_3">c</label><br>
            <input type="radio" id="radio1_4" name="respuesta_1" value="d">
            <label for="radio1_4">d</label><br>
        </div>

        <!-- Pregunta 2 -->
        <div class="question">
            <h3>2. opc multiple</h3>
            <input type="radio" id="radio2_1" name="respuesta_2" value="a">
            <label for="radio2_1">a</label><br>
            <input type="radio" id="radio2_2" name="respuesta_2" value="b">
            <label for="radio2_2">b</label><br>
            <input type="radio" id="radio2_3" name="respuesta_2" value="c">
            <label for="radio2_3">c</label><br>
            <input type="radio" id="radio2_4" name="respuesta_2" value="d">
            <label for="radio2_4">d</label><br>
        </div>
        <!-- Pregunta 3 -->
        <div class="question">
            <h3>3. opc multiple</h3>
            <input type="radio" id="radio3_1" name="respuesta_3" value="a">
            <label for="radio3_1">a</label><br>
            <input type="radio" id="radio3_2" name="respuesta_3" value="b">
            <label for="radio3_2">b</label><br>
            <input type="radio" id="radio3_3" name="respuesta_3" value="c">
            <label for="radio3_3">c</label><br>
            <input type="radio" id="radio3_4" name="respuesta_3" value="d">
            <label for="radio3_4">d</label><br>
        </div>

        <!-- Pregunta 4 -->
        <div class="question">
            <h3>4. opc multiple</h3>
            <input type="radio" id="radio4_1" name="respuesta_4" value="a">
            <label for="radio4_1">a</label><br>
            <input type="radio" id="radio4_2" name="respuesta_4" value="b">
            <label for="radio4_2">b</label><br>
            <input type="radio" id="radio4_3" name="respuesta_4" value="c">
            <label for="radio4_3">c</label><br>
            <input type="radio" id="radio4_4" name="respuesta_4" value="d">
            <label for="radio4_4">d</label><br>
        </div>
        <!-- Pregunta 5 -->
        <div class="question">
            <h3>5. opc multiple</h3>
            <input type="radio" id="radio5_1" name="respuesta_5" value="a">
            <label for="radio5_1">a</label><br>
            <input type="radio" id="radio5_2" name="respuesta_5" value="b">
            <label for="radio5_2">b</label><br>
            <input type="radio" id="radio5_3" name="respuesta_5" value="c">
            <label for="radio5_3">c</label><br>
            <input type="radio" id="radio5_4" name="respuesta_5" value="d">
            <label for="radio5_4">d</label><br>
        </div>

        <!-- Pregunta 6 -->
        <div class="question">
            <h3>6. opc multiple</h3>
            <input type="radio" id="radio6_1" name="resuesta_6" value="a">
            <label for="radio6_1">a</label><br>
            <input type="radio" id="radio6_2" name="respuesta_6" value="b">
            <label for="radio6_2">b</label><br>
            <input type="radio" id="radio6_3" name="respuesta_6" value="c">
            <label for="radio6_3">c</label><br>
            <input type="radio" id="radio6_4" name="respuesta_6" value="d">
            <label for="radio6_4">d</label><br>
        </div>
        <!-- Pregunta 7 -->
        <div class="question">
            <h3>7. opc multiple</h3>
            <input type="radio" id="radio7_1" name="resuesta_7" value="a">
            <label for="radio7_1">a</label><br>
            <input type="radio" id="radio7_2" name="respuesta_7" value="b">
            <label for="radio7_2">b</label><br>
            <input type="radio" id="radio7_3" name="respuesta_7" value="c">
            <label for="radio7_3">c</label><br>
            <input type="radio" id="radio7_4" name="respuesta_7" value="d">
            <label for="radio7_4">d</label><br>
        </div>

        <!-- Pregunta 8 -->
        <div class="question">
            <h3>8. opc multiple</h3>
            <input type="radio" id="radio8_1" name="resuesta_8" value="a">
            <label for="radio8_1">a</label><br>
            <input type="radio" id="radio8_2" name="respuesta_8" value="b">
            <label for="radio8_2">b</label><br>
            <input type="radio" id="radio8_3" name="respuesta_8" value="c">
            <label for="radio8_3">c</label><br>
            <input type="radio" id="radio8_4" name="respuesta_8" value="d">
            <label for="radio8_4">d</label><br>
        </div>
        <!-- Pregunta 9 -->
        <div class="question">
            <h3>9. opc multiple</h3>
            <input type="radio" id="radio9_1" name="resuesta_9" value="a">
            <label for="radio9_1">a</label><br>
            <input type="radio" id="radio9_2" name="respuesta_9" value="b">
            <label for="radio9_2">b</label><br>
            <input type="radio" id="radio9_3" name="respuesta_9" value="c">
            <label for="radio9_3">c</label><br>
            <input type="radio" id="radio9_4" name="respuesta_9" value="d">
            <label for="radio9_4">d</label><br>
        </div>

        <!-- Pregunta 10 -->
        <div class="question">
            <h3>10. opc multiple</h3>
            <input type="radio" id="radio10_1" name="respuesta_10" value="a">
            <label for="radio10_1">a</label><br>
            <input type="radio" id="radio10_2" name="respuesta_10" value="b">
            <label for="radio10_2">b</label><br>
            <input type="radio" id="radio10_3" name="respuesta_10" value="c">
            <label for="radio10_3">c</label><br>
            <input type="radio" id="radio10_4" name="respuesta_10" value="d">
            <label for="radio10_4">d</label><br>
        </div>


        <button class="red" type="submit">Enviar respuestas</button>
    </div>
</form>

</body>
</html>