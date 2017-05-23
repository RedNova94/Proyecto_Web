<?php
/**
 * Created by PhpStorm.
 * User: Suheily
 * Date: 5/18/2017
 * Time: 10:56 AM
*/
$PageTitle="Carrito";
function customPageHeader(){
}
session_start();
if(isset($_SESSION["shadowplay_islog"])) {
include_once ("session_header.php");
} else {
include_once ("header.php");
}
	$id=$_GET['id'];
	include 'database/database_connection.php';
	if(isset($_SESSION['carrito'])){
        if(isset($id)){
            $arreglo=$_SESSION['carrito'];
            $encontro=false;
            $numero=0;
            for($i=0;$i<count($arreglo);$i++){
                if($arreglo[$i]['Id']==$id){
                    $encontro=true;
                    $numero=$i;
                }
            }
            if($encontro==true){
                $arreglo[$numero]['Cantidad']=$arreglo[$numero]['Cantidad']+1;
                $_SESSION['carrito']=$arreglo;
            }else{
                $nombre="";
                $precio=0;
                $imagen="";
                $artista="";
                $sql_query = "SELECT * FROM inventory WHERE product_id=$id";
                $resultado = mysqli_query($conexion, $sql_query);
                while ($f=mysqli_fetch_array($resultado)) {
                    $nombre=$f['product_name'];
                    $artista=$f['product_artist'];
                    $imagen=$f['product_image'];
                    $precio=$f['product_price'];

                }
                $datosNuevos=array('Id'=>$id,
                    'Nombre'=>$nombre,
                    'Artista'=>$artista,
                    'Imagen'=>$imagen,
                    'Precio'=>$precio,
                    'Cantidad'=>1);

                array_push($arreglo, $datosNuevos);
                $_SESSION['carrito']=$arreglo;

            }
        }




    }else{
        if(isset($id)){
            $nombre="";
            $precio=0;
            $imagen="";
            $sql_query = "SELECT * FROM inventory WHERE product_id=$id";
            $resultado = mysqli_query($conexion, $sql_query);
            while ($f=mysqli_fetch_array($resultado)) {
                $nombre=$f['product_name'];
                $artista=$f['product_artist'];
                $imagen=$f['product_image'];
                $precio=$f['product_price'];
            }
            $arreglo[]=array('Id'=>$id,
                'Nombre'=>$nombre,
                'Artista'=>$artista,
                'Imagen'=>$imagen,
                'Precio'=>$precio,
                'Cantidad'=>1);
            $_SESSION['carrito']=$arreglo;
        }
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <title>Carrito de Compras</title>
    <link rel="stylesheet" type="text/css" href="./css/estilos.css">
    <script type="text/javascript"  href="./js/scripts.js"></script>
</head>
<body>
<section>
    <?php
    $total=0;
    if(isset($_SESSION['carrito'])){
        $datos=$_SESSION['carrito'];

        $total=0;
        for($i=0;$i<count($datos);$i++){

            ?>
            <div class="producto">
                <center>
                    <img src="<?php echo $datos[$i]['Imagen'] ?>" style="width: 30%; height: 30%;"/><br>
                    <span><?php echo $datos[$i]['Nombre'];?></span><br>
                    <span><?php echo $datos[$i]['Artista'];?></span><br>
                    <span>Precio: <?php echo $datos[$i]['Precio'];?></span><br>
                    <span>Cantidad: <input type="text" value="<?php echo $datos[$i]['Cantidad'];?>"></span><br>
                    <span>Subtotal:<?php echo $datos[$i]['Cantidad']*$datos[$i]['Precio'];?></span><br>
                    
                </center>
            </div>
            <?php
            $total=($datos[$i]['Cantidad']*$datos[$i]['Precio'])+$total;
        }

    }else{
        echo '<center><h2>No has añadido ningun producto</h2></center>';
    }
    echo '<center><h2>Total: '.$total.'</h2></center>';

    ?>
    <center><a href="disc_catalog.php">Ver catalogo</a></center>
