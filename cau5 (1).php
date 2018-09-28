<?php 
	require ('data.php');
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>cau 5</title>
 </head>
 <body>
 	<table>
 		<tr >
 			<td >ID</td>
 			<td >Name</td>
 			<td >Gmail</td>
 		</tr>
 			<?php for ($i=0; $i < count($users); $i++): ?>
 			<tr>
 			<td><?php echo $users[$i]['id'];?></td>
 			<td><?php echo $users[$i]['name'];?></td>
 			<td><?php echo $users[$i]['email']['gmail'];?></td>
 			</tr>
 			<?php endfor; ?>
 			
 	</table>
<br>
 		<form >
 			<input type="txt" name="name" >
 			<input type="submit" name="submit" value="Tim kiem">
 		</form>
 		<br>
 		<?php 
 		if(!empty($_GET['name'])) { ?>
 			<table>
 			<tr>
 				<td>ID</td>
 				<td>Name</td>
 				<td>Email</td>
 			</tr>
 			<?php for ($i=0; $i < count($users); $i++) { ?>
	 			<?php if ($_GET['name'] == substr($users[$i]['name'],0,1)|| $_GET['name']==$users[$i]['name']||$_GET['name']==$users[$i]['id']) { ?>
	 				<tr>
 					<td><?php echo $users[$i]['id'];?></td>
 					<td><?php echo $users[$i]['name'];?></td>
 					<td><?php echo $users[$i]['email']['gmail'];?></td>
 					</tr>
	 			<?php 
	 		} ?>
 			<?php 
 		} ?>
 			</table>
 		<?php
 	} 
 		 else { ?>
 			<p>Khong co du lieu</p>
 		<?php } ?>
 </body>
 </html>