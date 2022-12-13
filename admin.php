<?php
session_start();

if(isset($_SESSION["admin_id"]))
{
	header("Location: home.php");
	}

	
include'connection.php';
	
	$sql = "SELECT * FROM admin WHERE admin_id = '$admin_id'";
	$result = $conn->query($sql);

  
?>


<head>
<style>

.container{
	width: 450px;
    height: 700px;
    margin:auto;
	margin-top: 4%;
	padding-top: 1px;
	
}

.admin-page {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
}
.admin {
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
.admin input {
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
.admin button {
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
.admin
{
  border: 4px solid white;
  border-radius: 20px;
  padding: 30px;
  margin-bottom: 30px;
  margin-top: 10x;
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
</style>
<title>Admin Login Page</title>
</head>
<body style="background-color:black">
<img class="imgs" src="Logo.png" alt="Login Logo">
<div class="container">
	<div class="admin-page">
	  <div class="admin">
		<form class="admin-form" action="home.php" method="POST">
		  <input type="text" name="admin_id" id="admin_id" placeholder="Admin id" required> 
		  <input type="password" name="admin_pass" id="admin_pass" placeholder="Admin pass"  required >
		  <button type="submit" class="btn btn-primary">Login</button>
    
      <a href="forgotpass.php"><p>Reset Password??</p></a>
		</form>

	  </div>
	</div>
</div>

</body>