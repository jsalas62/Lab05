<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios Propuestos Lab05</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-9 mt-2">
                <form action="ejercicios.html" method="post">

                    <?php
                    echo "<h1>Ejercicio 1</h1>";
                    $nombre = $_POST['nombre'];
                    $sueldobase = $_POST['sueldobase'];
                    $numhijos = $_POST['numhijos'];
                    $importeventas = $_POST['importeventas'];
                    $bonificacion = ($numhijos * 50);
                    $comision = ($importeventas * (7.5 / 100));
                    $sueldobruto = $bonificacion + $comision + $sueldobase;
                    $descuento = ($sueldobruto * (11 / 100));
                    $sueldoneto = $sueldobruto - $descuento;
                    // Mostrar datos:
                    echo "Nombre: " . $nombre . "<br>";
                    echo "Nro de hijos: " . $numhijos . "<br>";
                    echo "Bonificación: " . $bonificacion . "<br>";
                    echo "Comisión: " . $comision . "<br>";
                    echo "Sueldo Bruto: " . $sueldobruto . "<br>";
                    echo "Descuento: " . $descuento . "<br>";
                    echo "Sueldo Neto: " . $sueldoneto . "<br>";
                    ?>
                    <hr>
                    <?php
                    echo "<h1>Ejercicio 2</h1>";
                    $precio = $_POST['precio'];
                    $cantidad = $_POST['cantidad'];
                    $nuevoprecio = $precio - ($precio * (5 / 100));
                    $importecompra = $nuevoprecio * $cantidad;
                    $importedescuento = ($importecompra * (7 / 100));
                    $importepago = $importecompra - $importedescuento;
                    $caramelos = $_POST['cantidad'] * 2;
                    // Mostrar datos:
                    echo "Producto: Coca Cola 3L" . "<br>";
                    echo "Precio regular: " . $precio . "<br>";
                    echo "Precio con descuento: " . $nuevoprecio . "<br>";
                    echo "Importe de compra: " . $importecompra . "<br>";
                    echo "Importe de descuento: " . $importedescuento . "<br>";
                    echo "Total a pagar: " . $importepago . "<br>";
                    echo "Obsequio: " . $caramelos . " caramelos" . "<br>";
                    ?>
                    <hr>
                    <?php
                    echo "<h1>Ejercicio 3</h1>";
                    $tarifa = $_POST['tarifa'];
                    $dias = $_POST['dias'];
                    $importebruto = $tarifa * $dias;
                    $descuento = ($importebruto * (15 / 100));
                    $importeneto = $importebruto - $descuento;
                    $lapiceros = $_POST['dias'] * 3;
                    // Mostrar datos:
                    echo "La tarifa por día es: " . $tarifa . "<br>";
                    echo "La cantidad de días es: " . $dias . "<br>";
                    echo "Importe bruto: " . $importebruto . "<br>";
                    echo "Descuento: " . $descuento . "<br>";
                    echo "Total a pagar: " . $importeneto . "<br>";
                    echo "Obsequio: " . $lapiceros . " lapiceros" . "<br>";
                    ?>
                    <hr>
                    <?php
                    echo "<h1>Ejercicio 4</h1>";
                    $conos = $_POST['conos'];
                    $cantidadconos = $_POST['cantidadconos'];
                    $importeinicial = $conos * $cantidad;
                    $primerdescuento = ($importeinicial * (5 / 100));
                    $segundodescuento = ($importeinicial - $primerdescuento) * (5 / 100);
                    $totaldescuentos = $primerdescuento + $segundodescuento;
                    $totalapagar = $importeinicial - $totaldescuentos;
                    // Mostrar datos:
                    echo "El precio por cada cono es de: " . $conos . "<br>";
                    echo "La cantidad de conos a comprar es de: " . $cantidadconos . "<br>";
                    echo "Importe de la compra: " . $importeinicial . "<br>";
                    echo "Descuento: " . $totaldescuentos . "<br>";
                    echo "Total a pagar: " . $totalapagar . "<br>";
                    ?>
                    <hr>
                    <button type="submit" class="btn btn-primary">Regresar</button>
                </form>
                <br>
            </div>
        </div>
    </div>
    <!-- Agregamos el script de bootstrap al final del body -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
    </script>

</html>