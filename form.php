<?php require 'conn.php' ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="box4.css">
    <title>	form</title>

</head>
<div align="center;">
<div style="color: red; text-align: center;">
<head><p>REGISTRATION FORM</p></head>
<body style="background-color: orange;">

<p>
	  <form method="POST">
    <div class="registration-header">
    <div class="form">Application</div>
    <div class="fill-out-text">Please fill the form below accurately to enable us serve you better!..
        <br> 
    </div>
    </div>
<div class="form-details">
           
            ID:
            <input id="id" type="number" name="id" required><br>
            <div class="fn-text">First Name: </div> 
            <input id="f_name" type="text" name="f_name" required><br>
            <div class="ln-text"> Last Name:</div>
            <input id="l_name" type="text" name="l_name" required><br>
            <div class="fullname">
         
        </div>
            Email :<br>
            <input id="e_mail" type="text" name="e_mail" required><br>
            Phone :<br>
            <input id="c_phone" type="number" name="c_phone" required><br>
            <input name="submit" type="submit" id ="submit">
</div>	 
 <?php
    if(isset($_POST['submit'])){
    	$id = $_POST['id'];
        $f_name = $_POST['f_name'];
        $l_name = $_POST['l_name'];
        $e_mail = $_POST['e_mail'];
        $c_phone= $_POST['c_phone'];
        

        $sql = "INSERT INTO palista(id,f_name,l_name,e_mail,c_phone) VALUES(
        '$id','$f_name','$l_name','$e_mail','$c_phone')";

        if(mysqli_query($conn,$sql)){
            echo "<script> alert('You  are Successfully register.');</script>";
        }
        else{
            echo"error:" .$sql. "<br>".mysqli_error($conn);
        }
    }

?>
      

</body>
<footer style="color: red; text-align: center;"><p>brought to you by ALVEZ MANAGEMENT GROUP OF COMPANY.</p></footer>

</html>