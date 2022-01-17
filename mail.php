<?php
session_start();
      $code = mt_rand(000000,999999);
      $_SESSION['code'] = $code;
      $to_id = $_POST['toid'];
      $message = "Hey ".$username.",\nYour Verification Code is : ".$code;
      $subject = "User Verification Code At Blogger";
		  $headers = 'From: flutterdev0@gmail.com' . "\r\n" ;
		    if(mail($to_id,$subject,$message,$headers))
		    {
			       echo "Mail Sent";
		    }
		    else
		    {
			       echo "Mail Send failed";
		    }
        echo "<form action='mail.php' method='post' >"
        echo "<input type='number' name='verify' />"
        echo "<inpit type='submit' value='submit' />"
        echo "</form>"
	?>
</script>
