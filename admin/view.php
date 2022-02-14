<?php

  session_start();
  require('../connect.php');
  //if(!$_SESSION['../admin']==1)
  {
	//  header('Location:login.php');
	  
  }
  
  //start of function delete
  
  if(isset($_GET['del']))
  {
	  $id=$_GET['del'];
	  $delete=mysql_query("delete from register where user_id='$id'");
	  if($delete)
	  {
		  $error=$id."<font color='green' is deleted</font>";
	  }
	  else
	  {
		  $error=$id."<font color='red'>is not deleted</font>";
	  }
  }
  
  //end of function delete
  
  
  
  
    $display="";
    $allusers=mysql_query("select * from register");
	$count=mysql_num_rows($allusers);
	
	$display.="<table>
	          <tr>
			  <th>user_id</th>
			  <th>name</th>
			  <th>surname</th>
			  <th>email</th>
			  <th>cell_no</th>
			  <th>location</th>
			  <th>username</th>
			  
			  
			  <th>edit</th>
			  <th>delete</th>
			  </tr>";
	
	while($rows=mysql_fetch_array($allusers))
	{
         $id=$rows['user_id'];
		$display .="<tr>";			
		$display .="<td>" .$rows['user_id']."</td>";
		$display .= "<td>" .$rows['name']."</td>";
		$display .= "<td>" .$rows['surname']."</td>";
		$display .= "<td>" .$rows['email']."</td>";
		$display .= "<td>" .$rows['cell_no']."</td>";
		$display .= "<td>" .$rows['name']."</td>";
		$display .= "<td>" .$rows['username']."</td>";
		$display .= "<td><a href='useredit.php?edit=$id'>edit</a></td>";
		$display .= "<td><a href='view.php?del=$id'>delete</a></td>";
		
		
		$display .="</tr>";
		
	}
   $display.="</table>";

?>

<!Doctype html>
<html lang="en">
   <head>
    <title>document</title>
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
	  
      
	  

        <body>
		
		<content>
<?php
	echo $display;
	
?>
		</content>
       
		
         </body>
         </html>
  