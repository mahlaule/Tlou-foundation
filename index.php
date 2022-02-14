
<?php
  session_start();
  require('connect.php');
  $error="";
  
  $dbusername= $dbuser= $dbpassword="";
  if(isset($_POST['btnsearch']))
  {
	  $search=trim($_POST['search']);
	  if($search)
	  {
    
	$select=mysql_query("SELECT * FROM search WHERE sports_events LIKE '%".$search."%' or concerts_events LIKE '%".$search."%'");
     $count=mysql_num_rows($select);
	 echo$count;
	 if($count>=1)
	 {
	 while($rows=mysql_fetch_array($select))
	 {
		 echo $dbevents_id=$rows['events_id']."<br>";
		// echo $dbtitle=$rows['title']."<br>";
		 echo $dbsport_events=$rows['sports_events']."<br>";
		 echo $dbuser=$rows['concerts_events']."<br>";
		 echo $dbuser=$rows['entertainment']."<br>";
		 //echo $dbuser=$rows['item_img']."<br>";
		 
	 }
	 }
	 else
	 {
		 $error="results are not found";
		
	 }
	  }
     else
	 
	 {
		 $error="search input required";
		 
	 }	  
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
 <form type="search" action="index2.php" method="POST">
    
        
        
		



		
       
 
 
 
       
       </form>

 </header>
 
 <!--navigation-->
 <nav>
 <ul>
 <li><a href="index.php">home</a></li>
 <li><a href="login.php">login </a></li>
  <li><a href="register.php">REGISTER</a></li>
 

 </ul>
 </nav>
 
 
 
 
	  
	  
	  
	  
	  
	<form type="search" action="index.php" method="POST">
    
        


        <input type='submit' name='btnsearch' value='search' class="search"/><input type='text' name='search' id='search' maxlength="50"class="search" />
 
 </form>
 
 <div class="col6">
 <content>
 <img src="images/conc.jpg">
 </content>
 </div>
 <div class="col4">
 <content>
 <img src="images/sport.png"class="image">
 </content>
 </div>
       

 
       
 
 
 

	  
	  
	  <div class="clear"></div>
	  <!--footer-->
	  <footer>
	  &copy;created by kevin inc.all right reserved
	  
	  </footer>
	  </div>
	  </body>
	  </html>
   
