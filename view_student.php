<!-- id_number  fname   city    contact     dob-->

<?php
	include("connect.php");
	// if(isset($_REQUEST['del']))
	// {
	// 	$id = $_REQUEST["del"];
	// 	mysqli_query($con,"DELETE FROM student WHERE id = '$id'");
	// 	header("location:view_student.php");
	// }
	
// delete php 
	if (isset($_REQUEST['delete'])) {
        $sql = "DELETE FROM student WHERE id = '{$_REQUEST['title']}'
		";
        if (mysqli_query($con, $sql)) {
            echo  "<script>
            alert('deletd');
            </script>";
        } else {
            echo "Something went wrong";
        }
        header("location:view_student.php");
    }

?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
	<table align="center" border="1" cellpadding="3" cellspacing="0" >
		<tr>
			<th colspan="8">Home</th>
		</tr>
		<tr>
			<th>Id_number</th>
			<th>Fname</th>
			<th>City</th>
			<th>Contact</th>
            <th>DOB</th>
            <th colspan="3">Action</th>
			
		</tr>
		<?php
			$sel=mysqli_query($con,"SELECT * FROM student");
			while ($fetch = mysqli_fetch_array($sel))
			{
		?>
		<tr>
			<td><?php echo $fetch["id_number"]; ?></td>
			<td><?php echo $fetch["fname"]; ?></td>
			<td><?php echo $fetch["city"]; ?></td>
			<td><?php echo $fetch["contact"]; ?></td>
			<td><?php echo $fetch["dob"]; ?></td>
			<td>
				<!-- <a href="edit_student.php?edit = <?php echo $fetch["id_number"];?>">Edit</a> ||
				<a href="view_student.php?del = <?php echo $fetch['id_number'];?>">Delete</a> -->

				<!-- <a href='edit_student.php?id_number=$fetch[id_number]&fname=$fetch[fname]&city=$fetch[city]&contact=$fetch[contact]&dob=$fetch[dob]'><i class='fas fa-edit'></i>EEddiitt</a> -->


				<?php 
					echo "<a href='edit_student.php?id=$fetch[id]&id_number=$fetch[id_number] & fname=$fetch[fname] & city=$fetch[city] & contact=$fetch[contact] & dob=$fetch[dob]'>Edit</a> ";
				?>
			</td>

			<td>
				<?php
                    echo'<form method = "POST"><input type="hidden" name = "title" value = ' . $fetch['id'] . '><button name="delete" type="submit" >delete</button></form>';
                ?>
			</td>
		</tr>

		<?php 
			}
		?>
	</table>
</body>
</html>