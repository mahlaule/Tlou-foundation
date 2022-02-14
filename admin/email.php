<?php 
	session_start();
	if(!$_SESSION['../admin']==1)
	{
		header('Location: ../login.php');
	}
	require('../connect.php');
	$error="";
	if(isset($_POST['send']))
	{
		$heading=trim($_POST['heading']);
		$message=trim($_POST['message']);
		$ref=trim($_POST['ref']);
		$name=trim($_POST['name']);
		//$name=$_SESSION['username'];
		$image='image';
		
		$query=mysql_query("insert into emails values(null,'$heading','$message','$name','$ref','$image')");
		
		if($query)
		{
			$error="message sent";
		}
		else
		{
			$error="message not sent";
		}
		
	}
?>





















<!doctype html>
<html lang="en">
<head>
<title> home page</title>
<link rel="stylesheet"href="css/style2.css">
</head>
<body>
<!--website container-->
<link rel="stylesheet" href="../css/style.css"> 
	   
        
            <body>
<div class="container">
         
 <header>
 <img src="../images/logo.jpg"class="logo">
 </header>
 <nav>
 <ul>
 
 <li><a href="view.php">view user</a></li>
 <li><a href="booking.php">bookings</a></li>
 <li><a href="email.php">emails</a></li>
	  
	  
	  
	  
	  
	  
	  
	
	
	  <li><a href="logout.php">logout</a></li>
	  </ul>
	  
	  </nav>
	 
   <content>
	  
	  
	  
	  <?php echo $error; ?>
			  	<form action="" method="POST">
					<div class="col10">
						<input type="text" class="announcement" name="heading" placeholder="email" required="required"><br>
					</div>
					
					<div class="col10">
						<input type="text" class="announcement" name="name" placeholder="name"required="required"><br>
					</div>
					
					<div class="col10">
						<input type="text" class="announcement" name="ref" placeholder="ref"required="required"><br>
					</div>
					
					<div class="col10">
						<textarea class="announcement" rows="5" col="10" name="message" placeholder="message"required="require">
						</textarea>
					</div> 
					<div class="col10">
						<input type="submit" class="announcement" name="send" value="Send"><br>
					</div>
				</form>			 
			 </content>
			 </div>


	  
	  
	  
	  
	  
	  <div class="clear"></div>
	  <!--footer-->
	  <footer>
	  &copy;copyright 2015 inc.all right reserved
	  
	  </footer>
	  </div>
	  </body>
	  </html>
   
