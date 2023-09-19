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
        $digits=[];
        $added=[];
        $mod=[];
        $final=[];
        $number = $_GET['celular'];  
            
        for ($i = 0; $i < strlen($number); $i++) {
            $digits[$i] = $number[$i];
            $added[$i] = $digits[$i] + 7;
            $mod[$i] = $added[$i] % 10;
        } 

        $final[0] = $mod[2];
        $final[1] = $mod[3];
        $final[2] = $mod[0];
        $final[3] = $mod[1];  

        echo '<h3> Paso 1: Entero leído <h3>'.$number;
        echo '<h3> Paso 2: Sumando 7 <h3>';
        foreach($added as $value){
            echo $value.' ';
        }
        echo '<h3> Paso 3: Digito % 10 <h3>'.implode($mod);

        echo '<h3> Paso 4: Shuffle<h3>'.implode($final);
        
        
    ?>
</body>
</html>