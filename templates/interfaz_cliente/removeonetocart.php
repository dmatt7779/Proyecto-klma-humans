<?php
session_start();

include('../../global/conexion.php');



$id = $_POST['iddetalleventaresta'];

if (empty($id)) {
    header("location:../login/login.php");

}
$cantidad = $_POST['cantidadresta'];
if ($cantidad == 1) {


    $sql = "delete from detalleventa where id = '$id'";


    try {
        $sentencia = $pdo->prepare($sql);
        $sentencia->execute();
    } catch (\Throwable $th) {
    ?>

        <script>
            console.log(<?php echo $th ?>)
        </script>
    <?php
    }



    header("location:../main/menu2.php");
} else if ($cantidad > 1) {

    $cantidad = $cantidad - 1;

    $sql = "UPDATE detalleventa SET cantidad = $cantidad where id = $id";




    try {
        $sentencia = $pdo->prepare($sql);
        $sentencia->execute();
    } catch (\Throwable $th) {
    ?>

        <script>
            console.log(<?php echo $th ?>)
        </script>
    <?php
    }




    header("location:../main/menu2.php");
}






?>