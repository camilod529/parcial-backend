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
        <div class="Form">
            <form action="seccion4.php" method="post">
                <label class="NumberText" for="num">Ingrese el numero</label>
                <input type="number" name="number" id="num">
                <input type="submit" value="Calcular" class="Calcular">
            </form>
            <?php
            function isPrime($n)
            {
                if ($n <= 1)
                    return false;

                for ($i = 2; $i < $n; $i++)
                    if ($n % $i == 0)
                        return false;

                return true;
            }
            function getFirstDigit($number)
            {
                $str = (string) $number;
                return $str[0];
            }


            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $res = 0;
                $a = $_POST['number'];
                if ($a <= 2000000 && $a >= 1) {
                    for ($i = 1; $i <= $a; $i++) {
                        if (isPrime($i)) {
                            if (getFirstDigit($i) == 1) {
                                $res += 1;
                            }
                        }
                    }
                }

                echo "La cantidad de primos que inician en <b>1</b> desde 1 hasta $a es: " . $res . "<br>";
            }

            ?>
        </div>
    </div>
    <div class="inicio">
        <div class="imagen">
            <img src="Backend.png">
        </div>
    </div>
</body>

</html>