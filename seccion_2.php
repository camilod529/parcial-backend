<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sección 2</title>
</head>
<body>
    <div class="party-assistance">
        <h2>Asistencia de Personas</h2>
        <form method="post">
            <div class="form-group">
                <label for="edad_asistente">Edad Asistente:</label>
                <input type="number" id="edad_asistente" name="edad_asistente">
            </div>
            <div class="form-group">
                <button type="submit" name="registrar">Registrar</button>
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
</body>
</html>
