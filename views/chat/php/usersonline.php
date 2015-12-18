<?php 

$users = users_online();

function users_online(){
	    include "conexion.php";
        $result = $con->query('select * from online');
        $rows = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows; 
}

?>
<table class="table">
	<tr>
		<td><strong>#</strong></td>
 		<td><strong>Nombre</strong></td>
 	</tr>
 	<?php $count = 1; ?>
 	<?php foreach ($users as $row): ?>
 	<tr>
 	    <td><?php echo $count++; ?></td>
 	    <?php echo '<td><a href="javascript:void(0)" onclick="javascript:chatWith('; echo "'"; echo $row['onlineuser']; echo "'"; echo ')">'.$row['onlineuser'].'</a></td>'; ?>
 	</tr>
 	<?php endforeach ?>

</table>