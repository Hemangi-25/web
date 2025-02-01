<?php
session_start();
include("config/db.php");
if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phonenumber'];
    $cityname = $_POST['cityname'];
    $crime = $_POST['crime'];
    $case = $_POST['case'];

    if(!empty($name) && !empty($email) && !empty($phonenumber)  && !empty($cityname) && !empty($crime) && !empty($case)
     &&  is_numeric($phonenumber))
    {
        $query = "insert into addcase (name, email , phonenumber, cityname , crime ,`case`) values ('$name','$email',
        '$phonenumber','$cityname','$crime','$case')";
        mysqli_query($con,$query);
        echo "<script type='text/javascript'> alert('case added') </script>"; 
    }
    else
    {
        echo "<script type='text/javascript'> alert('Please Enter some info') </script>"; 
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Cases</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" 
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css">
    <link rel="stylesheet" type="text/css" href="css/addcases.css">
</head>
<body>
    <special-header></special-header>
    <br><br><br><br>
<div>
    <div  class="border">
    <h2><strong>ADD CASES</strong></h2>
    <form method="POST">
            <div>
                <label>Date</label><br>
                <input type="name" name="name" /><br><br>
                <label>Email id:</label><br>
                <input type="email" name="email" /><br><br>
                <label>Phone Number:</label><br>
                <input type="phonenumber" name="phonenumber" /><br><br>
                <label>City Name:</la<br>
                <input type="cityname" name="cityname" /><br><br>
                <label>Type of crime:</label><br>
                <input type="crime" name="crime" /><br><br>
                <label>Describe your case:</label><br>
                <input type="case" name="case" /><br><br>
            <br><br>
            <button class="submit">Submit</button>
        </div>
    </form>
</div>
</div>
</body>
<special-footer></special-footer>
<script src="js/mainnavbarfooter.js"></script>
</html>
