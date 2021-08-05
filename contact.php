<?php

$conn = mysqli_connect('localhost', 'root', '', 'data') or die ('Lỗi kết nối'); mysqli_set_charset($conn, "utf8");

if(isset($_POST['contact'])){
$name = trim($_POST['name']);
$phone = trim($_POST['phone']);
$email = trim($_POST['email']);
$product = trim($_POST['product']);
$date = trim($_POST['date']);


if (empty($name)) {
array_push($errors, "name is required"); 
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
if (empty($date)) {
array_push($errors, "date is required"); 
}

$sql = "SELECT * FROM contact1 WHERE phone = '$phone' OR email = '$email'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0)
{
echo '<script language="javascript">alert("you had contacted!!"); window.location="index.php";</script>';

die ();
}
else {
$sql = "INSERT INTO contact1 (name, phone, email, product, date) VALUES ('$name','$phone','$email','$product','$date')";
echo '<script language="javascript">alert("Thank you for contact us!!!"); window.location="index.php";</script>';

if (mysqli_query($conn, $sql)){
echo "name: ".$_POST['name']."<br/>";
echo "phone: " .$_POST['phone']."<br/>";
echo "email: ".$_POST['email']."<br/>";
echo "product: ".$_POST['product']."<br/>";
echo "date: ".$_POST['date']."<br/>";
}
else {
echo '<script language="javascript">alert("Có lỗi trong quá trình xử lý"); window.location="index.php";</script>';
}
}
}
?>
