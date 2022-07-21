<meta charset="utf-8">
<?php
	include('includes/conn.php');
	
	if(isset($_POST['userid'])){
	$idx=$_POST['idx'];
		$fsl = $_POST['fsl'];
	
		foreach ($_POST['userid'] as $id):
		
		
				
				$query=mysqli_query($conn,"select * from `gg_moad` where id=$id  ");
				
				while($row=mysqli_fetch_array($query)){
			$mmx[$row[code]]=$row[name];
				$row[code]=$row[code].",".$fsl;
				
		////	$sql = "UPDATE gg_mdrs SET nsab = '$sgl', namem = '$name' WHERE idm = '$id'";
		$sql = "UPDATE gg_mdrs SET ";
		$xx="";
	for ($i1 = 1; $i1 <= $row[n1]-1; $i1++) {
    $i=$i+1;
    $xx=$xx."n".$i." = '".$row[code]."' , ";
    
}
$i=$i+1;
$xx=$xx."n".$i." = '".$row[code]."' "." WHERE idm = ".$idx;
	$sql=$sql.$xx;	
		echo $sql;
		///exit;
		if($conn->query($sql)){
		
		echo "good";
		}
else{
			echo $conn->error;
		}

				
				?>
				
				<br>
				<br>
					<tr>
						<td><?php echo $row['name']; ?></td>
						<td><?php echo $row['sf']; ?></td>
						<td><?php echo $row['n1']; ?></td>
					<?php 
					$mm=$row['code'][0].$row['code'][1].$row['code'][2];
					$ss=$row['code'][4].$row['code'][5].$row['code'][6].$row['code'][7].$row['code'][8];
	
 ?>

				<td><?php echo $mmx[$mm]; ?></td>
				<td><?php echo 	$ss ; ?></td>				
					</tr>
					<br>
				<br>
					<?php
					}

				
			
		endforeach;
		
		///header('location:rbt.php');
	}
	else{
		?>
		<script>
			window.alert('Please check user to Delete');
			///window.location.href='rbt.php';
		</script>
		<?php
	}
	
?>