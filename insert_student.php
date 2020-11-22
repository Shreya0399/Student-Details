<!-- id_number  fname   city    contact     dob-->

<?php 
    include("connect.php");

    if(isset($_REQUEST['submit']))
    {
        $id_number = $_REQUEST['id_number'];
        $fname = $_REQUEST['fname'];
        $city = $_REQUEST['city'];
        $contact = $_REQUEST['contact'];
        $dob = $_REQUEST['dob'];

        mysqli_query($con,"insert into student(id_number,fname,city,contact,dob)value('$id_number','$fname','$city','$contact','$dob')");
        header("location:view_student.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>insert_students</title>
</head>
<style>
   h2{
    color: black;
    background-color: lightgrey;
    text-align: center;
    font-size: 80px;
    
   
  } 
  .container{
    color: green;
    background-color: lightgrey;
    text-align: center;
    
    font-size: 30px;
  }
  body{
    padding-left: 9%;
    padding-right: 10%;
    padding-bottom: 4%;
    
  }
</style>
<body>
<div class="container">
  <h2 style="font-size: 70px">Insert Students Details</h2>
  <form class="form-horizontal" method="post" id="form">

    <div class="form-group">
      <label class="control-label col-sm-2" for="id_number">Id_number:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="id_number" placeholder="Enter id_number" name="id_number" required>
      </div>
    </div>


    <div class="form-group">
      <label class="control-label col-sm-2" for="fname">Fullname:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="fname" placeholder="Enter Fullname" name="fname" required>
      </div>
    </div>


    <!-- <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox" name="remember"> Remember me</label>
        </div>
      </div>
    </div> -->

    <div class="form-group">
      <label class="control-label col-sm-2" for="city">City:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="city" placeholder="Enter City" name="city" required>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="contact">Contact:</label>
      <div class="col-sm-10">          
        <input type="number" class="form-control" id="contact" placeholder="Enter contact" name="contact" required>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="dob">Date of birth:</label>
      <div class="col-sm-10">          
        <input type="date" class="form-control" id="dob" placeholder="Enter DD/MM/YY" name="dob" required>
      </div>
    </div>



    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default" name="submit">Submit</button>
      </div>
    </div>



  </form>
</div>

</body>
</html>
<script>
  let contact = document.getElementById("contact")
  document.getElementById("form").onsubmit =(e)=>{
    if(contact.value.length != 10){
      alert("Number is not valid");
      e.preventDefault()
    }
  }
</script>