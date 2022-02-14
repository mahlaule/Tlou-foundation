<?php
 session_start();
 require('connect.php');
 $error="";
 if(!$_SESSION['user']==1)
 {
 header('Location: login.php');
	 
 }


?>














<!doctype html>
<html lang="en">
<head>
<title> home page</title>
<link rel="stylesheet"href="css/style.css">
</head>
<body>
<!--website container-->

 <div class="container">
 <!--header-->
 <header>
  <img src="images/logo.jpg"class="logo">
 <div class="clear"></div>
 </header>
 <nav>
 <ul>
 
 <li><a href="index.php">home</a></li>
 <li><a href="booking.php">booking</a></li>
	  
	  
	  
	  
	  
	  <li><a href="email.php">emails</a></li>
	  
	
	
	  <li><a href="logout.php">logout</a></li>
	  </ul>
	  
	  </nav>
	
 <!--navigation-->
     <div class="col6">
	  <content>
	  <h1>emails</h1>
	  <?php
						$select=mysql_query("select Heading,left(message,30) as message ,date from emails limit 15");
						$count=mysql_num_rows($select);
						if($count!=0)
						{
							while($rows=mysql_fetch_array($select))
							{
								echo $rows['Heading'];
								echo $rows['message'];
								
								echo $rows['date'];
								echo "<hr>";
							}
						}
						else
						{
							echo "no recents messages ";
						}
						
					?>
	  
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
   
