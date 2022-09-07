<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Nomina</title>
    <!-- <link rel="stylesheet" href="./css/estilos.css"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;600&display=swap" rel="stylesheet">

</head>
<body>

    <section class="main">
        <!--
        <figure class="main__figure">
            <img src="./img/illustration.svg" class="main__img">
        </figure>
        -->

        <div class="main__contact">

            <h2 class="main__title">Formulario Nomina - UMD</h2>
            <p class="main__paragraph">Bienvenido, por favor diligencie todos los campos del formulario.</p>

            <form action="php/empleado.php" class="main__form" method="POST">
                <p>
                    <label for="favoriteOnly">Selecciona tu favorito:</label>
                    <select name="favoriteOnly" id="favoriteOnly" action="php/empleado.php" method="POST">
                        <option>Empleado Asalariado</option>
                        <option>Empleado base más Comision</option>
                        <option>Empleado por Horas</option>
                    </select>
                </p>
                <input type="text" name="nombres" placeholder="Nombre y apellido" class="main__input"><br><br>
                <input type="text" name="salario_base" placeholder="Salario mensual" class="main__input"><br><br>
                <input type="text" name="dias_laborados" placeholder="Cantidad de días laborados" class="main__input"><br><br>
                <input type="text" name="comisiones" placeholder="Comisiones" class="main__input"><br><br>
                <input type="text" name="deducciones" placeholder="Deducciones" class="main__input"><br><br>
                <input type="text" name="n_ventas" placeholder="Número de ventas" class="main__input"><br><br>
                <input type="text" name="tarifa_comision" placeholder="Tarifa de comisión" class="main__input"><br><br>
                <input type="text" name="h_trabajadas" placeholder="Horas trabajadas" class="main__input"><br><br>

                <input type="submit" name="enviar" value="Enviar" class="main__input main__input--send"><br>
                <input type="reset" name="limpiar" value="Limpiar" class="main__input main__input--send">
            </form>
        </div>
    </section>

</body>
</html>