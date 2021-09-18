<?php
	
	$fname=$_POST['fname'];
	$email=$_POST['email']; 
	$con=mysqli_connect('localhost','root','','myportfolio') or die('not connect');			
	$sql="insert into contact (fname,email) values ('{$fname}','{$email}')";
    mysqli_query($con,$sql);
	
	$to="huzaifa.1ramzan@gmail.com";
	$subject='project';
	$header="From:$email";
	if(mail($to,$subject,$email,$header)){
		echo"send";
		}
	header("Location:http://localhost/myportfolio/");
    
						

	?>