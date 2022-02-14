<?php

  session_start();
  require('../connect.php');
 // if(!$_SESSION['admin']==1)
  {
	 // header('Location:login.php');
	  
  }
  
  //start of function delete
  
  if(isset($_GET['del']))
  {
	  $id=$_GET['del'];
	  $delete=mysql_query("delete from booking where user_id='$id'");
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
    $allusers=mysql_query("select * from booking");
	$count=mysql_num_rows($allusers);
	
	$display.="<table>
	          <tr>
			  <th>id_no</th>
			  <th>name</th>
			  <th>surname</th>
			  
			  <th>contact_no</th>
			  <th>email</th>
			  <th>date</th>
			  <th>ticket</th>
			 
			  <th>delete</th>
			  </tr>";
	
	while($rows=mysql_fetch_array($allusers))
	{
         $id=$rows['id_no'];
		$display .="<tr>";			
		$display .="<td>" .$rows['id_no']."</td>";
		$display .= "<td>" .$rows['name']."</td>";
		$display .= "<td>" .$rows['surname']."</td>";
		$display .= "<td>" .$rows['contact_no']."</td>";
		$display .= "<td>" .$rows['email']."</td>";
		$display .= "<td>" .$rows['date']."</td>";
		$display .= "<td>" .$rows['ticket']."</td>";
		//$display .= "<td><a href='useredit.php?edit=$id'>edit</a></td>";
		$display .= "<td><a href='users.php?del=$id'>delete</a></td>";
		
		
		$display .="</tr>";
		
	}
   $display.="</table>";

?>

<!Doctype html>
<html lang="en">
   <head>
    <title>document</title>
    <link rel="stylesheet" href="../css/style.css"> 
	   
        </head>
   
        <body>
		<nav>
 <ul>
 
 <li><a href="view.php">view user</a></li>

 <li><a href="email.php">emails</a></li>
	  
	 <li><a href="booking.php">bookings</a></li> 
	  
	  
	  
	  
	  
	
	
	  <li><a href="logout.php">logout</a></li>
	  </ul>
	  
	  </nav>
	
		<content>
<?php
	echo $display;
	
?>
		</content>
       
		
         </body>
         </html>
  