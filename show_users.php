<?php
/**
 * Created by PhpStorm.
 * User: Suheily
 * Date: 21/05/2017
 * Time: 12:18 PM
 */
$PageTitle="Users";
<<<<<<< HEAD
session_start();

include_once ("session_header.php");
=======
include_once ("header.php");
>>>>>>> a81f08dff0ee3435fcd730659d849c49177ed116

include "database/database_connection.php";
$sql_query = "SELECT * FROM users";
$resultado = mysqli_query($conexion, $sql_query);

while ($row = mysqli_fetch_array($resultado)){ ?>
    <div class="box cd">
        <table>
            <tr>
                <td><strong> Nombre </strong></td>
                <td> <?php echo $row['username'] ?> </td>
            </tr>
            <tr>
                <td><strong> Password </strong></td>
                <td> <?php echo $row['password'] ?>
            </tr>
            <tr>
                <td><strong> Email </strong></td>
                <td> <?php echo $row['email'] ?> </td>
            </tr>
            <tr>
                <td><strong> Admin </strong></td>
<<<<<<< HEAD
               <td> <?php if ($row['admin']==1){
=======
                <td> <?php if ($row['admin']==1){
>>>>>>> a81f08dff0ee3435fcd730659d849c49177ed116
                    echo "si";
                    } else{
                    echo "no";
}?> </td>
            </tr>

        </table>
    </div>

    <br>
    <br>

<?php } ?>
<<<<<<< HEAD
=======


>>>>>>> a81f08dff0ee3435fcd730659d849c49177ed116
