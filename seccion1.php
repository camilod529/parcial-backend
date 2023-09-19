<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cifrando Dígitos</title>
</head>
<body>
    
    <h1>Cifrando Dígitos<br></h1>
    <form action="seccion1.php" method="get">
        Entero de 4 dígitos: <input type="text" name="celular"/>
        <br>
        <input type="submit" value="Enviar">
    </form>
    <?php         
        echo '<h3> Paso 1: Entero leído <h3>';
        $digits=[];
        $number = $_GET['celular'];        

        for ($i = 0; $i < strlen($number); $i++) {
            $digits[] = $number[$i];
        }
        print_r($number);

        echo '<h3> Paso 2: Sumando 7 <h3>';
        for ($i = 0; $i < count($digits); $i++) {
            $digits[$i] = $number[$i] + 7;
        }
        //$paso2_print = implode($digits);
        foreach($digits as $value){
            echo $value.' ';
        }
        

        echo '<h3> Paso 3: Digito % 10 <h3>';
        $mod=[];
        for ($i = 0; $i < count($digits); $i++) {
            $mod[] = $digits[$i] % 10;
        }
        echo implode($mod);

        echo '<h3> Paso 4: Shuffle<h3>'; 
        $final=[];
        $final[0] = $mod[2];
        $final[1] = $mod[3];
        $final[2] = $mod[0];
        $final[3] = $mod[1];  
        
        echo implode($final);
        
        
    ?>
</body>
</html>