<!-- 
    include("connect.php");
    // if(isset($_GET["edit"]))
    // {
    //   echo "hello";  
    //   $id = $_GET["edit"];
    //     // $sel = mysqli_query($con,"SELECT * FROM student WHERE id_number = '$id'");
    //     $query =  "SELECT * FROM student WHERE id_number = $id ";
        
    //     $fet = mysqli_query($con , $query);
    //     while ($fetch = mysqli_fetch_assoc($fet)) 
    //       {
  
		// 	    echo $fetch["id_number"]; 
		// 	    echo $fetch["fname"]; 
		// 	    echo $fetch["city"];
		// 	    echo $fetch["contact"]; 
		// 	    echo $fetch["dob"];
            
    //       }
        // $id_number = $_GET["id_number"];
        // $fname = $_GET["fname"];
        // $city = $_GET["city"];
        // $contact = $_GET["contact"];
        // $dob = $_GET["dob"];

          // $conference = "SELECT * FROM conference ORDER BY Year DESC";
          //   $conferenceresult = mysqli_query($link, $conference);
            
       

        // $result = mysqli_query($con,"SELECT * FROM student WHERE id = '$id'");
        // $row= mysqli_fetch_row($result);

    }

    // if(isset($_GET['update']))
    // {
    //     $id = $_GET["edit"];
    //     $id_number = $_GET["id_number"];
    //     $fname = $_GET["fname"];
    //     $city = $_GET["city"];
    //     $contact = $_GET["contact"];
    //     $dob = $_GET["dob"];

    //     mysqli_query($con,"update reg set id_number = '$id_number', fname = '$fname', city = '$city', conatct = '$contact', dob =  '$dob' where id = '$id'");
        
    //     header("location:view_student.php");
    // }
 -->

<?php 
include "connect.php" ;
// error_reporting(0);

// for fetching data
$id = $_GET["id"];
$id_number = $_GET["id_number"];
$fname = $_GET["fname"];
$city = $_GET["city"];
$contact = $_GET["contact"];
$dob = $_GET["dob"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Update Student</title>
</head>
<body>

<div class="container">
    <h2>Update Students Details</h2>
</div>    
<form class="form-horizontal" method="GET">

<div class="form-group">
  <label class="control-label col-sm-2" for="dob">Id_number:</label>
  <div class="col-sm-10">
  <input type="hidden" name="id" class="form-control" value='<?php echo $id; ?>'>
    <input type="text" class="form-control" id="id_number" placeholder="Enter id_number" name="id_number" required  value='<?php echo $id_number; ?>'>

  </div>
</div>


<div class="form-group">
  <label class="control-label col-sm-2" for="fname">Fullname:</label>
  <div class="col-sm-10">          
    <input type="text" class="form-control" id="fname" placeholder="Enter Fullname" name="fname" required value='<?php echo $fname; ?>'>
  </div>
</div>


<div class="form-group">
  <label class="control-label col-sm-2" for="city">City:</label>
  <div class="col-sm-10">          
    <input type="text" class="form-control" id="city" placeholder="Enter City" name="city" required value='<?php echo $city; ?>'>
  </div>
</div>

<div class="form-group">
  <label class="control-label col-sm-2" for="contact">Contact:</label>
  <div class="col-sm-10">          
    <input type="text" class="form-control" id="contact" placeholder="Enter contact" name="contact" required value='<?php echo $contact; ?>'>
  </div>
</div>

<div class="form-group">
  <label class="control-label col-sm-2" for="dob">Date of birth:</label>
  <div class="col-sm-10">          
    <input type="text" class="form-control" id="dob" placeholder="Enter DD/MM/YY" name="dob" required value='<?php echo $dob; ?>'>
  </div>
</div>

<div class="form-group">        
  <div class="col-sm-offset-2 col-sm-10">
    <button type="submit" class="btn btn-default" name="update">Update</button>
  </div>
</div>


</form>
</div>
</body>
</html>
<?php
if(isset($_GET['update']))
{
 
  $id = $_GET["id"];
  $id_number = $_GET["id_number"];
  $fname = $_GET["fname"];
  $city = $_GET["city"];
  $contact = $_GET["contact"];
  $dob = $_GET["dob"];

    $update = "UPDATE student SET id_number = '$id_number', fname = '$fname' , city = '$city',contact = '$contact', dob = '$dob' WHERE id = '$id'";
    if(mysqli_query($con, $update))
    {
      echo '<script>alert("data updated")
      window.location = " view_student.php" </script>';
      
    }
    else
    {
        echo 'Error: '.mysqli_error($con);
        echo '<script>alert("data not updated")</script>';
    }
    // header("location : view_student.php");
    
}
?>