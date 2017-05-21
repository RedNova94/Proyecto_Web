<?php
/**
 * Created by PhpStorm.
 * User: Suheily
 * Date: 21/05/2017
 * Time: 12:18 PM
 */
$PageTitle="Users";
include_once ("header.php");

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
                <td> <?php if ($row['admin']==1){
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


