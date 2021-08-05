<?php

$conn = mysqli_connect('localhost', 'root', '', 'data') or die ('Lỗi kết nối'); mysqli_set_charset($conn, "utf8");

if(isset($_POST['contact'])){
$username = trim($_POST['username']);
$fullname = trim($_POST['fullname']);
$citizenidentification = trim($_POST['citizenidentification']);
$phone = trim($_POST['phone']);
$email = trim($_POST['email']);
$product = trim($_POST['product']);
$datecontact = trim($_POST['datecontact']);


if (empty($username)) {
array_push($errors, "username is required"); 
}
if (empty($fullname)) {
array_push($errors, "fullname is required"); 
}
if (empty($citizenidentification)) {
array_push($errors, "citizenidentification is required"); 
}
if (empty($phone)) {
array_push($errors, "phone is required"); 
}
if (empty($email)) {
array_push($errors, "email is required"); 
}
if (empty($product)) {
array_push($errors, "product is required"); 
}
if (empty($datecontact)) {
array_push($errors, "datecontact is required"); 
}

$sql = "SELECT * FROM contact WHERE fullname = '$fullname' AND product = '$product'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0)
{
echo '<script language="javascript">alert("you had contacted!!"); window.location="index.php";</script>';

die ();
}
else {
$sql = "INSERT INTO contact (username, fullname, citizenidentification, phone, email, product, datecontact) VALUES ('$username', '$fullname', '$citizenidentification', '$phone','$email','$product','$datecontact')";
echo '<script language="javascript">alert("Thank you for contact us!!!"); window.location="index.php";</script>';

if (mysqli_query($conn, $sql)){
echo "username: ".$_POST['username']."<br/>";
echo "fullname: ".$_POST['fullname']."<br/>";
echo "citizenidentification: ".$_POST['citizenidentification']."<br/>";
echo "phone: " .$_POST['phone']."<br/>";
echo "email: ".$_POST['email']."<br/>";
echo "product: ".$_POST['product']."<br/>";
echo "datecontact: ".$_POST['datecontact']."<br/>";
}
else {
echo '<script language="javascript">alert("error in processing!!"); window.location="index.php";</script>';
}
}
}
?>
