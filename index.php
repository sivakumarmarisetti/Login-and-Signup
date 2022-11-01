<?php
include("login.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>MPCS login</title>
<link rel="shortcut icon" type="img/png" href="user.png">
<link rel="stylesheet" href="style.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<form name="login" method="post" onsubmit="return validation()" action="">
<div class="container">
<h1>Login</h1>
<div class="textbox">
<i class="fa fa-user" aria-hidden="true"></i>
<input type="text" placeholder="username" name="username" id="username">
</div>
<div class="textbox">
<i class="fa fa-lock" aria-hidden="true"></i>
<input type="password" placeholder="password" name="password" id="password">
</div>
<input class="btn" type="submit" value="Sign in" name="submit">
<input class="btn" type="button" onclick="location.href='register.html'" value="Register">
</div>
</form>
<script>
function validation(){
var username = document.login.username.value;
var password = document.login.password.value;
if(username == ""){
  alert("please enter username");
  return false;
}
if(password == ""){
  alert("please enter password");
  return false;
}
}
</script>
<span><?php echo $error; ?></span>
</body>
</html>
