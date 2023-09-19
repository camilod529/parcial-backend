<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="seccion4.php" method="post">
        <label for="num">Ingrese el numero</label>
        <input type="number" name="number" id="num">
        <input type="submit" value="calcular">
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


</body>

</html>