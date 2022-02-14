<?php 
	session_start();
	// if(!$_SESSION['../admin']==1)
   {
	 //  header('Location:login.php');
   }
	require('connect.php');
	$error="";
	if(isset($_POST['book']))
	{
		$name=trim($_POST['name']);
		$surname=trim($_POST['surname']);
		$id_no=trim($_POST['id_no']);
		$contact_no=trim($_POST['contact_no']);
		
		$email=trim($_POST['email']);
		$date=trim($_POST['date']);
		$ticket=trim($_POST['ticket']);
		
		
		
		
		
		
		
		
		
		//$name=$_SESSION['username'];
		
		
		$query=mysql_query("insert into bookings values('$name','$surname','$id_no','$contact_no','$email','$date','$ticket')");
		
		if($query)
		{
			$error="your ticket is succesfuly booked";
		}
		else
		{
			$error="your ticket is not succesfuly booked";
		}
		
	}
?>
































 <!doctype html>
         <html lang="en">
         <head>
         <title>form</title>
 
<link rel="stylesheet"href="css/style.css">

           </head>
            <body>
<div class="container">
         
 <header>
 <img src="images/logo.jpg"class="logo">
 </header>
 <nav>
 <ul>
 
 <li><a href="index.php">home</a></li>
 <li><a href="booking.php">booking</a></li>
	  
	  
	  
	  
	  
	  <li><a href="email.php">emails</a></li>
	  
	
	
	  <li><a href="logout.php">logout</a></li>
	  </ul>
	  
	  </nav>
	  
      
	  
	     <div class="col7">
         <content>
	   
         
        
	<?php echo $error; ?>
		
       <form type="form" action="booking.php" method="POST">
    
        <legend><h1>book for your ticket</h1></legend>
        <input type='hidden' name='submitted' id='submitted' value='1'/>
        <label for='name' >name </label><br>
        <input type='text' name='name' id='name' maxlength="50" required="required" /><br>

        <label for='id_no' >second name</label><br>
        <input type='text' name='surname' id='surname' maxlength="50" required="required" /><br>
		
		
		<label for='id_no' >id no </label><br>
        <input type='text' name='id_no' id='id_no' maxlength="50" required="required" /><br>

		  <label for='contact_no' >contact_no</label><br>
        <input type='text' name='contact_no' id='contact_no' maxlength="50" required="required" /><br>
		
		
		  <label for='email' >email</label><br>
        <input type='text' name='email' id='email' maxlength="50" required="required" /><br>
 
       


        <label for='email' >date</label><br>
        <input type='text' name='date' id='email' maxlength="50" required="required" /><br>
		
		 
        <label for='school' >no of tickets</label><br>
        <input type='text' name='ticket' id='school' maxlength="50" required="required"/><br>
		
		 
        

		
		
		

        <input type='submit' name='book' value='book' /><br>
         
 
 
       </fieldset>
       </form>
	   
	   
	  
       </content>
	   </div>
	   
	   <div class="clear"></div>
	  <!--footer-->
	  <footer>
	  &copy;copyright created by kevin inc.all right reserved
	  
	  
	   
	   </div>
       </body>
       </html>