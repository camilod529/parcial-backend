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
                        <button type="submit" name="pagar">Pagar</button>
                    </div>
                </form>    
            </div>

<script>
    function validarFormulario() {
    var edad = document.getElementById("edad_asistente").value;
    var masjoven = 0;
    var promediar = 0;
    var cantidad = 0;
    var promedio = 0;

    if (edad < masjoven){
        masjoven = edad;
    }

    if (edad < 18 && edad > 0) {
        alert("Error: Su Los menores de edad no tienen permitida la entrada");
        return false; // Evita que el formulario se envíe
    } else if (edad == 0){
        // Procesar el pago aquí (simulación)
        alert("La cantidad de personas que asistieron fue: " + cantidad + "La edad promedio de asistentes fue: " + (promediar/cantidad) + "La edad del menor asistente fue: " + masjoven);

        return false; // Evita que el formulario se envíe
    }else{
        cantidad = cantidad + 1;
        promediar = promediar + edad;
        promedio = promediar/cantidad;
    }
}
</script>
</body>
</html>