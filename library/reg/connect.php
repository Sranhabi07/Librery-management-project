<?php

	$fname=$_POST['fname'];
	$uname=$_POST['uname'];
	$password=$_POST['password'];
	$phno=$_POST['phno'];
	$email=$_POST['email'];
	$branch=$_POST['branch'];
	$regno=$_POST['regno'];

	// Database Connect


	$conn=new mysqli('localhost','root','','reg');
	if ($conn->connect_error) {
		 die('Connection Failed :'.$conn->connect_error);
	}
	else{
		$stmt=$conn->prepare("insert into reginfo(fname,uname,password,phno,email,branch,regno) values(?,?,?,?,?,?,?)");
		$stmt->bind_param("sssisss",$fname,$uname,$password,$phno,$email,$branch,$regno);
		$stmt->execute();
		echo "Registration sucessfully..";
		$stmt->close();
		$conn->close();
	}

?>