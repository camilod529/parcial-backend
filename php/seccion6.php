<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
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
        <form action="seccion6.php" method="post">
            <ul>
                <label class="NumberText" for="num1">Ingrese el numero 1</label>

                <input type="number" name="number1" id="num1">
                <br class="br">


                <label class="NumberText" for="num2">Ingrese el numero 2</label>
                <input type="number" name="number2" id="num2">
                <br class="br">

                <input type="submit" value="Calcular" class="Calcular">
            </ul>
        </form>
        <?php
        function sumaDivisores($n)
        {
            $d = array();
            $s = 0;
            for ($i = 1; $i <= $n; $i++) {
                if ($n % $i == 0) {
                    array_push($d, $i);
                }
            }
            foreach ($d as $v) {
                $s += $v;
            }
            return $s;
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $a = $_POST['number1'];
            $b = $_POST['number2'];
            if (sumaDivisores($a) == sumaDivisores($b)) {
                echo "Los numeros $a y $b son amigos";
            } else {
                echo "Los numeros $a y $b no son amigos";
            }
        }
        ?>
    </div>
</body>

</html>