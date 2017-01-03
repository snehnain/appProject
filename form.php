<?php
    // collect value of input field
   session_start();
    $database="appproject";
    $conn=mysqli_connect("localhost","root","",$database);
    if(!$conn){
    	die("Connection failed". mysqli_connect_error());
    }
    else{
    	echo"Successfull";
    }
    if(isset($_POST['register'])){
    	$username = $_POST['username'];
    	$password = $_POST['password'];
    	$email = $_POST['email'];
    	$street = $_POST['street'];
    	$country = $_POST['country'];
    	$sql="INSERT INTO user (username,password,email,street,country)VALUES('$username','$password','$email','$street','$country')";
    	$a= mysqli_query($conn,$sql);
    	if($a){
    		echo"data inserted";
    	}
    	else{
    		echo"Unsuccessful";
    		
    	}
    	
    }
   /* $uname = $_POST['uname'];
    if (empty($uname)) {
        echo "Name is empty";
    } else {
        echo $uname;
    }
    $pass=$_POST('pass');
    $sql="Insert Into user(username,password)Values('a','b')";
    if(mysqli_query($conn,$sql)){
    	echo "Database updated";
    }
    else{
    	echo "error".$sql."<br>".mysqli-error($conn);
    }*/
    

?>