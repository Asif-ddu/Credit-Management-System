
<?php
session.start();
include('pdo.php');
if(isset($_POST['submit'])){
    $uname=$_POST['username'];
    $password=$_POST['password'];
    $sql = "SELECT * FROM loginform WHERE user=:username AND pass=:password";
    $query = $pdo -> prepare($sql);
    $query-> bindParam(':username',$uname,PDO::PARAM_STR);
    $query-> bindParam(':password',$password,PDO::PARAM_STR);

    $query->execute();
    $result=$query->fetchAll(PDO::FETCH_OBJ);
    if($query->rowCount()>0){
        echo "SUccessful";
        echo "<script type='text/javascript'> document.location = 'index.html'; </script>";
    }
    else{
        echo "<script>alert('Invalid Details');</script>";
    
    }

}
?>
<html>
<head>
	<title> Login Form </title>
	<link rel="stylesheet" a href="style.css">
	<link rel="stylesheet" a href="font-awesome.min.css">
</head>
<body style="background-image: url('credit.png');">
	<div class="container">
	<!-- <img src="image/login.png"/> -->
		<form method="POST"> 
			<div class="form-input">
				<input type="text" name="username" placeholder="Enter the User Name"/>	
			</div>
			<div class="form-input">
				<input type="password" name="password" placeholder="Enter your password"/>
			</div>
			<input type="submit" name="submit" value="LOGIN" class="btn-login"/>
		</form>
	</div>
</body>
</html>