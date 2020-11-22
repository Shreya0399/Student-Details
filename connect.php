<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>
    <?php 
        $host="localhost";
        $uname="root";
        $pass="";
        $dbname="student_db";
        $con = mysqli_connect($host,$uname,$pass,$dbname);
        if(!$con)
        {
            echo "database not connected";
        }

        // $con = mysqli_connect("localhost","root","","lab");
    ?>
</body>
</html>