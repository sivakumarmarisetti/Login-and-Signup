<?php
$username = $_POST['username'];
$password = $_POST['pass1'];
$email1 = $_POST['email1'];
$mobile1 = $_POST['mobile1'];
if (!empty($username) || !empty($password) || !empty($email) || !empty($mobile2)) {
    $host = "localhost";
    $dbUsername = "id13894395_shiva";
    $dbPassword = "Msivakumar2000@";
    $dbname = "id13894395_mpcs";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT email1 From shiva Where email1 = ? Limit 1";
     $SELECT = "SELECT username From shiva Where username = ? Limit 1";
     $INSERT = "INSERT Into shiva (username, pass1, email1, mobile1) values(?, ?, ?, ?)";
     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $email1);
     $stmt->bind_param("s", $username);
     $stmt->execute();
     $stmt->bind_result($email1);
     $stmt->bind_result($username);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("sssi", $username, $password, $email1, $mobile1);
      $stmt->execute();
      header("location: https://mpcs3rd.000webhostapp.com/thankyou.html");
    } else {
      echo '<script>alert("oops! Someone already registered using this username please go back and try with new one")</script>';
     }
     $stmt->close();
     $conn->close();
    }
}
     else{
         echo "All fields required<br>";
 echo "Please go back";
 die();
}
?>
