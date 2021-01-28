<html>
<head>
    <title>CALCULO DEL AREA DEL OCTOGONO REGULAR</title>
</head>
<body>
    <?php
    if (isset($_POST['btn']) && $_POST['btn'] == 'Calcular') {
        $longitud = $_POST['longitud'];
        /*
            - El angulo central de los poligonos regulares depende de su numero
            de lados del poligono, en este caso tiene 8 lados porque es un
            octogono, se calcula de la siguiente manera (360°/8(numero de lados) = 45°)

            - El apotema se calcula de la siguiente manera:
            longitud de los lados/(2*(tan(45°/2))))

            - Simplificado seria de esta manera:
            8 / (2 * (tan(22.5)))

            - 0,4142135623730950488016887242097 es el resultado de tan(22.5)

            - No se utilizo la funcion de php porque pide introducir los radianes
        */
        $apotema = $longitud/(2*(0.4142135623730950488016887242097));
        $area = null;

        if (!empty($longitud)) {
            echo "<h2 align='center'>CALCULO DEL AREA DEL OCTOGONO REGULAR</h2>";
            $area = (4*$longitud*($apotema));
            echo "<h3>Longitud de los lados: $longitud cm</h3>";
            echo "<br/><br/>";     
            $apotema = substr($apotema, 0, 5);       
            echo "<h3>Apotema: $apotema cm</h3>";
            echo "<br/><br/>";
            $area = substr($area, 0, 5);
            echo "<h3>Area del Octogono: $area cm2<h3>";
            echo "<br/><br/>";
            echo "<a href='index.html'>Regresar</a>";
        }
    }

    
    ?>
</body>

</html>