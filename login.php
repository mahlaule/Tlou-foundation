<?php

     session_start();
     require('connect.php');
     $error="";
     if(isset($_POST['login']))
     {
		 $username=trim($_POST['username']);
	     $password=trim($_POST['password']);
		 
		 if($username && $password)
		 {
			// $password=md5($password);
			 $login=mysql_query("select * from register where username='$username' and password='$password'");
			 $count=mysql_num_rows($login);
			 
			 if($count==1)
			 {
				 while($row=mysql_fetch_array($login))
				 {
					 $user_id=$row['user_id'];
					 $dbusername=$row['username'];
					 $dbpassword=$row['password'];
					 $dbrole=$row['role'];
					 
					 if($password == $dbpassword && $dbrole=='user')
                       {
						$_SESSION['user']=1;
						$_SESSION['user_id']=$user_id;
						$_SESSION['username']=$dbusername;		header('Location: booking.php');
					}
                    else if($password == $dbpassword && $dbrole=='admin')
						{
						$_SESSION['admin']=1;
						$_SESSION['user_id']=$user_id;
						$_SESSION['username']=$dbusername;		header('Location: admin/view.php');
						}
					 
					 else
					 {
						$error="Wrong password";
					 }
				 }
				 
			 }
			 else
			 {
				$error="username or password does not exist"; 
			 }
		 }
		 else
		 {
			 $error="all field are required";
		 }
	 }
		 
	
?>





<!doctype html>
<html lang="en">
<head>

</head>
<title>my login</title>
<link rel="stylesheet" href="css/style.css">

<body>

<div class="container">
<header>
<img src="images/logo.jpg" class="logo">
   </header>

    <content>
	
	<?php echo $error;?>
	</content>



    <form name="loginform" action="login.php" method="POST">
    <table width="309" border="0" align="center" cellpadding="2" cellspacing="5">
      <tr>
        <td colspan="2">	
			
    	</td>
      </tr>
      <tr>
        <td width="116"><div align="right">Username</div></td>
        <td width="177"><input name="username" type="text" /></td>
      </tr>
      <tr>
        <td><div align="right">Password</div></td>
        <td><input name="password" type="password" /></td>
      </tr>
      <tr>
        <td><div align="right"></div></td>
        <td><input name="login" type="submit" value="login" /></td>
      </tr>
    </table>
    </form>


               




	   
   </ul>
  </nav>
 

<!--footer-->
<footer>
&copy;created by kevin inc.all right reserved

</footer>


</body>
</div>
</html>

