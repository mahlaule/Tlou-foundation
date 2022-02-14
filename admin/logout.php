<?php  //Start the Session

session_start();

 require('../connect.php');

// If the form is submitted or not.

// If the form is submitted

if (isset($_POST['username']) and isset($_POST['password'])){

// Assigning posted values to variables.

$username = $_POST['username'];

$password = $_POST['password'];

// Checking the values are existing in the database or not

$query = "SELECT * FROM register WHERE username='$username' and password='$password'";

  

$result = mysql_query($query) or die(mysql_error());

$count = mysql_num_rows($result);

// If the posted values are equal to the database values, then session will be created for the user.

if ($count == 1){

$_SESSION['username'] = $username;

}else{

// If the login credentials doesn't match, he will be shown with an error message.

echo "Invalid Login Credentials.";

}

}

// if the user is logged in Greets the user with message

if (isset($_SESSION['username'])){

/*$username = $_SESSION['username'];

echo "Hi " . $username . " ";

echo "This is the Members Area";

echo "<a href='logout.php'>Logout</a>";*/

 header("Location: ../login.php");
            exit; 

}else{

// When the user visits the page first time, simple login form will be displayed.


    if(isset($msg) & !empty($msg)){

        echo $msg;

    }
	
	//require('attendence.php');

 ?>

<!doctype html>

<html>

<head>

<title>Index</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>
<div class="main">

		<div class="imgWrap">
            
              <center><img src="images/capture.jpg" width="80%">
          </div></br></br></br></br>
		  <hr size="5" color="#4890D8" width="80%"></center>
		  
		  <div class="wraper">
			<div class="login">
			<h1>Login</h1>

			<form action="" method="POST">

				<p><label>User Name : </label>

				<input id="username" type="text" name="username" placeholder="username" /></p>

			  

				 <p><label>Password&nbsp;&nbsp; : </label>

				 <input id="password" type="password" name="password" placeholder="password" /></p>

				<input class="btn register" type="submit" name="submit" value="Login" />
				<input type="checkbox" name="remember" value="1">Remember Me</br> &nbsp &nbsp &nbsp &nbsp 
				&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Forgotten password

				</form>

			</div>
		  
		  </div>

</div>
<?php } ?>
</body>

</html>