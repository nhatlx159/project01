<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>regist</title>

<!--boostrap, js, ajax... link-->
<!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!--<link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- end boostrap, js, ajax... link-->
<link rel="stylesheet" href="../register/cs1.css"/ >


</head>
<style>
	body{
		height: 100vh;
    background: #000;
    background: url("http://localhost:8888/project/index/crs8.jpg");
    background-size: cover;
    width: 100%}
</style>
<body>
<div class="container-fluid">
<!--form-->



<div style="padding-top:80px; padding-bottom:auto">
<form method="post" action="register.php" class="form">

<h2 style="text-align:center">Sign up</h2>

Username: <input type="text" name="username" value="" required>

Password: <input type="password" name="password" value="" required/>

Email: <input type="email" name="email" value="" required/>

Phone: <input type="text" name="phone" value="" required/>

<input type="submit" name="dangky" value="Sign up"/>
<p>You already have account? <a href='http://localhost:8888/project/login/login.php'>Sign in now</a></p>
<?php require 'xuly.php';?>

</form>
</div>
<!--end form-->
</div>



</body>
</html>