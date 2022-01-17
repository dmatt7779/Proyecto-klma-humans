<?php
session_start();
include "../../global/conexion.php";

if (!isset($_SESSION['correo'])) {

    header("location:../login/login.php");
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos KLMA' HUMANS</title>
    <link  rel="icon"   href="../assets/img/favi_klma.png" type="image/png" />

    <!-- CSS only -->
    <link rel="stylesheet" href="../assets/librerias/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/style/style.css">
    <link rel="stylesheet" href="../assets/librerias/datatables.min.css">
    <link rel="stylesheet" href="../assets/style/mydatatable.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

</head>

<body>
    <?php include "../navbar_footer/header.php"; ?>


    <div class="mt-5">
        <form action="agregar.php" method="post" enctype="multipart/form-data">
            <div class="newdata">
                <input type="text" name="codigo" class="newprofile" placeholder="REFERENCIA">
                <input type="text" name="nombre" class="newprofile" placeholder="NOMBRE">
                <select class="form-control col-md-4 newprofile" aria-placeholder="UNIDAD NEQ" name="tipologia" id="exampleFormControlSelect1">
                    <option>SELECCIONAR UNIDAD NEQ</option>
                    <option value="223">TRANSITION-223</option>
                    <option value="220">CALMWEAR-220</option>
                    <option value="315">LOUNGEWEAR-315</option>
                </select>
                <input type="text" name="precio_venta" class="newprofile" placeholder="PRECIO VEN">
                <input type="text" name="precio_compra" class="newprofile" placeholder="PRECIO PROD">
                <input type="text" name="cantidad" class="newprofile" placeholder="STOCK">
                <input type="text" name="historia" class="newprofile" placeholder="HISTORIA">
                <input type="text" name="descripcion" class="newprofile" placeholder="DESCRIPCION">
                <input type="text" name="genero" class="newprofile" placeholder="GENERO">
                <label for="imagen" class="mt-2" style="text-align: center; color: black; word-spacing: .2rem; letter-spacing: .2rem; font-family: MoristonPersonal-Bold; font-size: 6pt; color: rgb(0, 0, 0); opacity: 60%;">IMAGEN PRINCIPAL</label>
                <input type="file" name="imagen" class="newprofile" placeholder="IMAGEN" required>
                <label for="imagenes[]" class="mt-2" style="text-align: center; color: black; word-spacing: .2rem; letter-spacing: .2rem; font-family: MoristonPersonal-Bold; font-size: 6pt; color: rgb(0, 0, 0); opacity: 60%;">IMAGENES CARRUSEL</label>
                <input type="file" name="imagenes[]" class="newprofile" multiple>
                <input type="text" name="emocion" class="newprofile" placeholder="EMOCION">
                <input type="text" name="empaque" class="newprofile" placeholder="EMPAQUE">
                <label for="imagencalmwear" class="mt-3" style="text-align: center; color: black; word-spacing: .2rem; letter-spacing: .2rem; font-family: MoristonPersonal-Bold; font-size: 6pt; color: rgb(0, 0, 0); opacity: 60%;">IMAGEN DE TIPO CALMWEAR</label>
                <input type="file" name="imagencalmwear" class="newprofile">
                <label for="imagencalmwear" class="mt-3" style="text-align: center; color: black; word-spacing: .2rem; letter-spacing: .2rem; font-family: MoristonPersonal-Bold; font-size: 6pt; color: rgb(0, 0, 0); opacity: 60%;">IMAGEN DE MATERIAL 1</label>
                <input type="file" name="imagenmaterial1" class="newprofile">
                <label for="imagencalmwear" class="mt-3" style="text-align: center; color: black; word-spacing: .2rem; letter-spacing: .2rem; font-family: MoristonPersonal-Bold; font-size: 6pt; color: rgb(0, 0, 0); opacity: 60%;">IMAGEN DE MATERIAL 2</label>
                <input type="file" name="imagenmaterial2" class="newprofile">

                <label for="imagencalmwear" class="mt-3" style="text-align: center; color: black; word-spacing: .2rem; letter-spacing: .2rem; font-family: MoristonPersonal-Bold; font-size: 6pt; color: rgb(0, 0, 0); opacity: 60%;">IMAGEN DE TALLA S</label>
                <input type="file" name="talla_S" class="newprofile">
                <label for="imagencalmwear" class="mt-3" style="text-align: center; color: black; word-spacing: .2rem; letter-spacing: .2rem; font-family: MoristonPersonal-Bold; font-size: 6pt; color: rgb(0, 0, 0); opacity: 60%;">IMAGEN DE TALLA L</label>
                <input type="file" name="talla_L" class="newprofile">
                <label for="imagencalmwear" class="mt-3" style="text-align: center; color: black; word-spacing: .2rem; letter-spacing: .2rem; font-family: MoristonPersonal-Bold; font-size: 6pt; color: rgb(0, 0, 0); opacity: 60%;">IMAGEN DE TALLA M</label>
                <input type="file" name="talla_M" class="newprofile">
                <label for="imagencalmwear" class="mt-3" style="text-align: center; color: black; word-spacing: .2rem; letter-spacing: .2rem; font-family: MoristonPersonal-Bold; font-size: 6pt; color: rgb(0, 0, 0); opacity: 60%;">IMAGEN DE TALLA XL</label>
                <input type="file" name="talla_XL" class="newprofile">

                <label for="imagencalmwear" class="mt-3" style="text-align: center; color: black; word-spacing: .2rem; letter-spacing: .2rem; font-family: MoristonPersonal-Bold; font-size: 6pt; color: rgb(0, 0, 0); opacity: 60%;">DISEÑADOR</label>
                <input type="text" name="diseñador" class="newprofile">
                <label for="imagencalmwear" class="mt-3" style="text-align: center; color: black; word-spacing: .2rem; letter-spacing: .2rem; font-family: MoristonPersonal-Bold; font-size: 6pt; color: rgb(0, 0, 0); opacity: 60%;">FRASE</label>
                <input type="text" name="frase" class="newprofile">
                <label for="imagencalmwear" class="mt-3" style="text-align: center; color: black; word-spacing: .2rem; letter-spacing: .2rem; font-family: MoristonPersonal-Bold; font-size: 6pt; color: rgb(0, 0, 0); opacity: 60%;">CAMPAÑA</label>
                <input type="text" name="campaña" class="newprofile">


            </div>

            <div class="btn-newprofile mt-2">
                <button type="submit" class="btn btn-submit">AGREGAR</button>
            </div>
        </form>
    </div>

    <div class="jumbotrontable">
        <div class="container-fluid">
            <!-- DIV PARA EL DATATABLE -->
            <!--         <div class="tableadmin"> -->
            <table class="records_list table-striped table-bordered table-hover" id="mydatatable">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Referencia</th>
                        <th>Nombre</th>
                        <th>Unidad negocio</th>
                        <th>Precio venta</th>
                        <th>Precio compra</th>
                        <th>Cantidad</th>
                        <th>Habilitado</th>
                        <th>Fecha</th>
                        <th>Descripcion</th>
                        <th>Genero</th>
                        <th>Campaña</th>
                        <th>Emocion</th>
                        <th>Cambiar Estado</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Filter..</th>
                        <th>Filter..</th>
                        <th>Filter..</th>
                        <th>Filter..</th>
                        <th>Filter..</th>
                        <th>Filter..</th>
                        <th>Filter..</th>
                        <th>Filter..</th>
                        <th>Filter..</th>
                        <th>Filter..</th>
                        <th>Filter..</th>
                        <th>Filter..</th>
                        <th>Filter..</th>
                        <th>Filter..</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php
                    $sentencia = $pdo->prepare("SELECT * FROM productos");
                    $sentencia->execute();
                    $listaproductos = $sentencia->fetchAll(PDO::FETCH_ASSOC);
                    ?>

                    <?php foreach ($listaproductos as $producto) {  ?>
                        <tr>

                            <td><?php echo $producto['id'] ?></td>
                            <td><?php echo $producto['codigo'] ?></td>
                            <td><?php echo $producto['nombre'] ?></td>
                            <td><?php switch ($producto['tipologia_id']) {
                                    case '1':

                                        echo 'Loungewear';
                                        break;
                                    case '2':
                                        echo 'Calmwear';
                                        break;
                                    case '3':
                                        echo 'Transition';
                                        break;

                                    default:
                                        break;
                                } ?></td>
                            <td><?php echo $producto['precio_venta'] ?></td>
                            <td><?php echo $producto['precio_compra'] ?></td>
                            <td><?php echo $producto['cantidad'] ?></td>
                            <td><?php switch ($producto['habilitado']) {
                                    case '1':

                                        echo 'habilitado';
                                        break;
                                    case '0':
                                        echo 'deshabilitado';
                                        break;

                                    default:
                                        break;
                                } ?></td>
                            <td><?php echo $producto['fecha'] ?></td>

                            <td><?php echo $producto['descripcion'] ?></td>
                            <td><?php echo $producto['genero'] ?></td>
                            <td><?php echo $producto['campaña'] ?></td>

                            <td><?php echo $producto['emocion'] ?></td>
                            <td>
                                <form action="estadoproductoh.php" method="get" class="text-center">
                                    <input type="hidden" name="id" value="<?php echo $producto['id'] ?>">
                                    <button class="btn" onclick="myconfirmhab(event)" type="submit"> <i class="fal fa-check"></i> </button>
                                </form>
                                <form action="estadoproducto.php" method="get" class="text-center">
                                    <input type="hidden" name="id" value="<?php echo $producto['id'] ?>">
                                    <button class="btn" onclick="myconfirmdes(event)" type="submit"> <i class="fal fa-ban"></i> </button>
                                </form>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table><!-- FIN DIV PARA EL DATATABLE -->
        </div>
    </div>
    <!-- JS, Popper.js, and jQuery -->
    <script src="../assets/js/my.js"></script>

    <script src="../assets/librerias/jquery-3.5.1.min.js"></script>
    <script src="../assets/librerias/popper.min.js"></script>
    <script src="../assets/librerias/bootstrap.min.js"></script>

    <!-- Datatables -->
    <script src="../assets/librerias/datatables.min.js"></script>
    <script src="../assets/js/mydatatable.js"></script>


</body>

</html>