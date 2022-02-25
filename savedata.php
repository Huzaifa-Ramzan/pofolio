<?php
	$from="huzaifa@netlify.app";
	$to="huzaifa.1ramzan@gmail.com";
	$fname=$_POST['fname'];
	$email=$_POST['email']; 
	$con=mysqli_connect('localhost','root','','myportfolio') or die('not connect');			
	$sql="insert into contact (fname,email) values ('{$fname}','{$email}')";
  	mysqli_query($con,$sql);
	mail($to,$from,$suject,$email);

	header("Location:http://localhost/myportfolio/");
    
						

	?>
