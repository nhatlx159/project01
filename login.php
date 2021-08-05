<?php
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>login</title>
<link rel="stylesheet" href="css/style.css" />
<link href="../register/cs1.css" rel="stylesheet" type="text/css">
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
<!--form-->
<div style="padding-top:80px; padding-bottom:auto">
<?php
  require('connect.php');
  session_start();
    if (isset($_POST['username'])){
	$username = addslashes($_POST['username']);
	$username = mysqli_real_escape_string($con,$username);
	$password = addslashes($_POST['password']);
    $password = mysqli_real_escape_string($con,$password);
	
    	$query ="SELECT username password FROM member WHERE username='$username' 
		and password='".md5($password)."'";
    $result = mysqli_query($con,$query) or die(mysqli_error($con));
    $rows = mysqli_num_rows($result);
        if($rows==1){
      $_SESSION['username'] = $username;
      header("Location: index.php");
            }else{
        echo '<script language="javascript">alert("Username or password error!!"); window.location="login.php";</script>';
        }
    }else{
?>

<div class="form">
<h2 style="text-align:center">Sign in</h2>

<form action="" method="post" name="login">
Username: <input type="text" name="username" required />

Password: <input type="password" name="password" required />
<input name="submit" type="submit" value="Sign in" />
</form>


<p>Don’t have an account ? <a href='http://localhost:8888/project/register/register.php'>Sign up</a></p><br/>
</div>

<?php } ?>
<!--end form-->
</body>
</html>