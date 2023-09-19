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
        <form method="post" onsubmit="return validarFormulario()">
            <div class="form-group">
                <label for="edad_asistente">Edad Asistente:</label>
                <input type="number" id="edad_asistente" name="edad_asistente">
            </div>
            <div class="form-group">
                <button type="submit" name="registrar">Registrar</button>
            </div>
        </form>    
    </div>

    <div id="resultado"></div>

    <script>
        var masjoven = Infinity; 
        var promediar = 0;
        var cantidad = 0;
        var promedio = 0;

        function validarFormulario() {
            var edad = parseInt(document.getElementById("edad_asistente").value);

            if (edad < masjoven && edad != 0 && edad >= 18){
                masjoven = edad;
            }

            if (edad < 18 && edad > 0) {
                alert ("Error: Los menores de edad no tienen permitida la entrada");
                document.getElementById("edad_asistente").value = "";
                document.getElementById("resultado").innerHTML = "";
                return false; 
            } else if (edad == 0){

                document.getElementById("resultado").innerHTML = "La cantidad de personas que asistieron fue: " + cantidad + "<br>La edad promedio de asistentes fue: " + promedio + "<br>La edad del menor asistente fue: " + masjoven;
                document.getElementById("edad_asistente").value = "";
                masjoven = Infinity; 
                promediar = 0;
                cantidad = 0;
                promedio = 0;
                return false; 

            } else {
                cantidad = cantidad + 1;
                promediar = promediar + edad;
                promedio = promediar/cantidad;
                document.getElementById("edad_asistente").value = "";
                document.getElementById("resultado").innerHTML = "";
                return false;
            }
        }
    </script>
</body>
</html>
