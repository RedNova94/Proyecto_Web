<?php
/**
 * Created by PhpStorm.
 * User: Suheily
 * Date: 21/05/2017
 * Time: 12:18 PM
 */
$PageTitle="Miembros";
session_start();

include_once ("session_header.php");

include "database/database_connection.php";
$sql_query = "SELECT * FROM users";
$resultado = mysqli_query($conexion, $sql_query);
?>
<div class="box">

<?php
while ($row = mysqli_fetch_array($resultado)){ ?>
      <div class="box-content">


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
                    }?>
               </td>
            </tr>
            <?php if($row['admin'] == 0){ ?>
                <tr>
                <td>
                    <button onclick="window.location='delet_this.php?id=<?php echo $row['username']; ?>'">Eliminar</button>
                </td>
            </tr>

            <?php
                }
            ?>
        </table>
      </div>
      <hr />

<?php }?>
</div>
