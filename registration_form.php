<html>
    <head><title>Registraation form</title></head>
    <body style="background-color:grey">
    <img class="imgs" src="Logo.png" alt="Login Logo">  
    <form action="insertagent.php" method="post">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill  this form to create an account</p>
    <hr>

   
Agent ID:        <input type="text" name="agent_id" placeholder="Agent ID" required><br>
Agent Password:  <input type="text" name="agent_password" placeholder="Agent Password" required><br>
Agent Name:        <input type="text" name="name" placeholder="Agent Name" required><br>
Branch:          <input type="text" name="branch" placeholder="Branch" required><br>
Phone:           <input type="text" name="phone" placeholder="Phone" required><br>

<input type="submit">
<input type="reset">
  </div>
  <div class="container terms&privacy">
    <p>Before Creating account Please Read Terms and conditions<a href="terms&privacy.php">  terms & privacy</a>.</p>
  </div>
  <div class="container signin">
    <p>Already have an account? <a href="index.php">Sign in</a>.</p>
  </div>
</form>
</html>
<style>
* {box-sizing: border-box}

/* Add padding to containers */
.container {
  padding: 16px;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit/register button */
.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  /* border: black solid; */

  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity:1;
}

/* Add a blue text color to links */
a {
  color: purple;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color:grey;
  text-align: center;
  border:black;
}

.imgs
{
	  margin-top: 0%;
	  margin-left: 45%;
		weight: 50%;
		height: 25%;
     border-radius: 50%;  
	  align:center;
}
</style>