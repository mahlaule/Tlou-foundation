<?php
   session_start();
   require('../connect.php');
   if(!$_SESSION['admin']==1)
   $error="";
   
     $id=$_GET['edit'];
	 
   $select=mysql_query("select * from register where user_id='$id'");
   
   while($pie=mysql_fetch_array($select))
   {
	   $user_id=$pie['user_id'];
	   $name=$pie['name'];
	   $username=$pie['username'];
   }
   
   if(isset($_POST['update']))
   {
	   $name=trim($_POST['name']);
	   $username=trim($_POST['username']);
	   
	   $edit=mysql_query("update register set name='$name', username='$username' where user_id='$id'");
	   
	   if($edit)
	   {
		   $error="succesful updated";
		   
	   }
	   else
	   {
		   $error="unsuccesful updated";
	   }
   }
?>









<!Doctype html>
<html lang="en">
   <head>
    <title>document</title>
    
	   
        </head>
   
        <body>
		
		<form type="" action="" method="POST">
		
       <label for='user_id' >user_id</label><br>
        <input type='text' name='user_id'value="<?php echo $user_id;?>" class="input"> <br>

		<label for='name' >full name</label><br>
        <input type='text' name='name'value="<?php echo $name;?>" class="input"> <br>
		
		
		 <label for='username' >username</label><br>
        <input type='text' name='username' value="<?php echo $username;?>" class="input"><br>

		<input type='submit' name='update' value='update'/><br>
</form>
		

		<content>

		</content>
       
		
         </body>
         </html>
  