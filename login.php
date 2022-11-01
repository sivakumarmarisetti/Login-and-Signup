<?php
$error='';
if(isset($_POST['submit'])){
if(empty($_POST['username']) || empty($_POST['password'])){
$error = "";
}
else
{
$username=$_POST['username'];
$password=$_POST['password'];
$conn = mysqli_connect("localhost", "id13894395_shiva", "Msivakumar2000@", "id13894395_mpcs");
//Selecting Database
$db = mysqli_select_db($conn, "id13894395_mpcs");
//sql query to fetch information of registerd user and finds user match.
$query = mysqli_query($conn, "SELECT * FROM shiva WHERE username='$username' AND pass1='$password'");
$rows = mysqli_num_rows($query);
if($rows == 1){
  header("location: https://mpcs3rd.000webhostapp.com/sorry.html");
}
else
{
$error = "";
echo '<script>alert("Username or Password is Invalid")</script>'; 
}
mysqli_close($conn);
}
}
?>