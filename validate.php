<!DOCTYPE html>
<html lang="en">
<head>
   <title>Login Form</title>
   <meta charset="utf-8">
</head>
<body>    
   <div class="container">
      <form name="loginform" id="loginform" method="post" action="process.php">
         <p>Username<br>
         <input type="text" id="usr" name="usr"></p>
	     <p>Password<br>
         <input type="password" id="psw" name="psw">
	     </p>
         <input type="submit" id="sub" name="sub" value="Log In">
      </form>
   </div>
   <div id="message" style="<?php echo $display; ?>">
     <?php if (!empty($usrErr)) { ?>
     <p class="invalid"><?php echo $usrErr; ?></p>
     <?php } ?>
     <?php if (!empty($pswErr)) { ?>
     <p class="invalid"><?php echo $pswErr; ?></p>
     <?php } ?>
    
     <p>Username: <?php echo $usr; ?></p>
     <p>Password: <?php echo $psw; ?></p>
     <p>Session ID: <?php echo session_id(); ?></p>  
   </div>
</body>
</html>
