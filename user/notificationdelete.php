 <?php
   include 'server.html';
   $title=$_GET['titlen'];
   
   $query="Delete from notify where title = '$title'";
   $data=mysqli_query($con,$query);
   
   if($data){
        echo "<script type = 'text/javascript'> alert('Notification removed successfully') </script>" ; 
	?>
		<meta http-equiv="refresh" content="0; url=http://localhost/web/user/notificationlist.html">
		<?php
   }
   else{
        echo "<script type = 'text/javascript'> alert('Nothing deleted....') </script>" ; 
   }

  ?>