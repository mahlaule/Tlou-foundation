
<?php
   session_start();
   require('connect.php');
 
    $all="";
    if (isset($_POST['register']))//this is the button for register
    {
	 $user_id=$_POST['user_id']; 
	 $name=$_POST['name'];
	 $surname=$_POST['surname'];
	 $email=$_POST['email'];
	 
	 $location=$_POST['location'];
	 $cell_no=$_POST['cell_no'];
	 $username=$_POST['username'];
	 $role=$_POST['role'];
	 $password=$_POST['password'];
	 
	 //$role=$_POST['user_id'];
	 $confirm=$_POST['confirm'];
	 
	 
	 if($password==$confirm)
		
	    {
		 //inserting to database
		 $query=mysql_query("insert into register values('$user_id','$name','$surname','$email','$cell_no','$location','$username','$password','$role')");
		 
		 //checking if is inserted
		 
		 
		 if($query)
		 {
			 $all=$name."data is successful inserted";
		 }
		
	     else
	      {
		      $all="password does not match";
	     }
	 
	 
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
 <!--header-->
 <header>
 <img src="images/logo.jpg"class="logo">

      </header>
	  
	     <div class="col3">
         <content>
	   
         
        
		<?php echo $all; ?>
		
       <form type="register" action="register.php" method="POST">
    
        <legend><h1>sign up</h1></legend>
		
		      <input type='hidden' name='submitted' id='submitted' value='1'/>
        <label for='client_id' >user_id*: </label><br>
        <input type='text' name='user_id' id='user_id' maxlength="50" required="required" /><br>
		
		
		
		
		
        <input type='hidden' name='submitted' id='submitted' value='1'/>
        <label for='name' >Your Full Name*: </label><br>
        <input type='text' name='name' id='name' maxlength="50"required="required" /><br>

        <label for='surname' >surname*: </label><br>
        <input type='text' name='surname' id='surname' maxlength="50" required="required" /><br>

        
        



        
		
		<label for='email' >Email Address*:</label><br>
        <input type='text' name='email' id='email' maxlength="50"required="required" /><br>
		
		<label for='cell_no' >cell no</label><br>
        <input type='text' name='cell_no' id='cell_no' maxlength="50"required="required" /><br>
		
		<label for='location' >location</label><br>
        <input type='text' name='location' id='location' maxlength="50" required="required" /><br>

       

		
 
        <label for='username' >UserName*:</label><br>
        <input type='text' name='username' id='username' maxlength="50"required="required" /><br>
		
		
		<label for='email' >Role*:</label><br>
        <input type='text' name='role' id='role' maxlength="50"required="required" /><br>

		
 
        <label for='password' >Password*:</label><br>
        <input type='password' name='password' id='password' maxlength="50"required="required" /><br>
		
		

         
	      


        <label for='confirm' >confirm*:</label><br>
        <input type='password' name='confirm' id='confirm' maxlength="50" required="required" /><br>

        <input type='submit' name='register' value='register' /><br>
         
 
 
       </fieldset>
       </form>
	   
	   
	   <a href="login.php">login</a>
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