<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Parcial</title>
</head>
<div class="header"> 
    <div class="second-navbar">
        <form action="index.php" method="get">
            <ul>
                <li><a href="seccion1.php">Cifrando Digitos</a></li>
                <li><a href="seccion_2.php">Fiesta Bucaramanga</a></li>
                <li><a href="seccion4.php">Primos que inician por 1</a></li>
                <li><a href="seccion6.php">Numero Amigos</a></li>
        </form>
    </div>
</div>
<body>
<div class="contenido">
    <div class="party-assistance">
        <h2>Asistencia de Personas</h2>
        <form method="post">
            <div class="form-group">
                <label class="NumberText"for="edad_asistente">Edad Asistente:</label>
                <input type="number" id="edad_asistente" name="edad_asistente">
            </div>
            <div class="form-group">
                <button class="Calcular" type="submit" name="registrar">Registrar</button>
            </div>
        </form>    
    </div>

    <div id="resultado">
        <?php
        session_start();

        if (!isset($_SESSION['masjoven'])) {
            $_SESSION['masjoven'] = INF;
            $_SESSION['promediar'] = 0;
            $_SESSION['cantidad'] = 0;
            $_SESSION['promedio'] = 0;
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $edad = $_POST["edad_asistente"];

            if ($edad < $_SESSION['masjoven'] && $edad != 0 && $edad >= 18) {
                $_SESSION['masjoven'] = $edad;
            }

            if ($edad < 18 && $edad > 0) {
                echo "Error: Los menores de edad no tienen permitida la entrada";
            } else if ($edad == 0) {
                echo "La cantidad de personas que asistieron fue: " . $_SESSION['cantidad'] . "<br>La edad promedio de asistentes fue: " . $_SESSION['promedio'] . "<br>La edad del menor asistente fue: " . $_SESSION['masjoven'];
                $_SESSION['masjoven'] = INF;
                $_SESSION['promediar'] = 0;
                $_SESSION['cantidad'] = 0;
                $_SESSION['promedio'] = 0;
            } else {
                $_SESSION['cantidad'] = $_SESSION['cantidad'] + 1;
                $_SESSION['promediar'] = $_SESSION['promediar'] + $edad;
                $_SESSION['promedio'] = $_SESSION['promediar'] / $_SESSION['cantidad'];
            }
        }
        ?>
    </div>
</div>
</body>
</html>