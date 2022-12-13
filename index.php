<?php
session_start();

if(isset($_SESSION["username"])){
	header("Location: home.php");
	}
?>

<head>
<style>

.container{
	width: 450px;
    height: 700px;
    margin:auto;
	margin-top: 1%;
	padding-top: 1px;
	
}

.login-page {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
}
.form {
  padding-top: 30px;
  position: relative;
  z-index: 1;
  /* background: url("back.png") no-repeat;  */
  max-width: 349px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  boader: auto;
  boader color:white;
    box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.3), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #4CAF50;
  width: 100%;
  border: 2;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form button:hover,.form button:active,.form button:focus {
  background: red;
}
.body
{
  background-color: black;
  overflow: hidden; 
}
.imgs
{
	  margin-top: 0%;
	  margin-left: 45%;
		weight: 50%;
		height: 25%;
    /* border-radius: 50%;  */
	  align:center;
}
.form
{
  border: 4px solid white;
  border-radius: 20px;
  padding: 30px;
  margin-bottom: 30px;
  margin-top: 15x;
  overflow: hidden; 
}
.body
{
    background-color: white;
    overflow:hidden;

}
a
{
  color:white;
}
h1
{
  color:white;

}
</style>
<title>Login Page</title>
</head>
<body style="background-color:black">
<img class="imgs" src="Logo.png" alt="Login Logo">
<center><h1>Agent Login||Hiba Inamdar</h1></center>
<div class="container">
	<div class="login-page">
	  <div class="form">
		<form class="login-form" action="login.php" method="POST">
		  <input type="text" name="username" id="" placeholder="username" required> 
		  <input type="password" name="password" id="" placeholder="password"  required >
		  <button>login</button><br>
      <button><a href="registration_form.php">register</button></a>
      <a href="forgotpass.php"><p>Reset Password??</p></a>
		</form>

	  </div>
	</div>
</div>

</body>