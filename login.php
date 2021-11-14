<?php

  include('koneksi.php');   


if(isset($_POST['loginindex'])){
    
    $uname=$_POST['username'];
    $password=$_POST['password'];
    
    $sql="select * from loginform where User='".$uname."'AND Pass='".$password."'";
    
    $result=mysqli_query($koneksi,$sql);
    $row = mysqli_fetch_assoc($result);

     if(mysqli_num_rows($result) === 1 ){
     	echo " You Have Successfully Logged in";
        header("Location: http://localhost/Website%20Buku/website/home.php");
        
    }
    else{
         
        $message = "You Have Entered Incorrect Password";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }

        
}
?>
<html>
<head>
	<title> Login Form </title>
	<style type="text/css">
		.container{
	width: 500px;
	height: 450px;
	text-align: center;
	margin: 0 auto;
	background-color: rgba(44, 62, 80,0.7);
	margin-top: 160px;
}

input[type="text"],input[type="password"]{
	margin-top: 30px;
	height: 45px;
	width: 300px;
	font-size: 18px;
	margin-bottom: 20px;
	background-color: #fff;
	padding-left: 40px;
}

.form-input::before{
	content: "\f007";
	font-family: "FontAwesome";
	padding-left: 07px;
	padding-top: 40px;
	position: absolute;
	font-size: 35px;
	color: #2980b9; 
}

.form-input:nth-child(2)::before{
	content: "\f023";
}

.btn-login{
	padding: 15px 25px;
	border: none;
	background-color: #27ae60;
	color: #fff;
}
	</style>
	<link rel="stylesheet" a href="css\style.css">
	<link rel="stylesheet" a href="css\font-awesome.min.css">
</head>
<body>
	<div class="container">
		<form method="POST" action="home.php">
			<div class="form-input">
				<input type="text" name="username" placeholder="Enter the User Name"/>	
			</div>
			<div class="form-input">
				<input type="password" name="password" placeholder="password"/>
			</div>
			<input type="submit" type="submit" name="loginindex" value="LOGIN" class="btn-login"/>
		</form>
	</div>
</body>
</html>