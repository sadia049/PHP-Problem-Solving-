<?php
 session_start();
 include 'connection_open.php';
?>


<html>
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Hello!!!</title>
</head>

<body>
    
	
	 <div class="col-md-12"><?php echo '<input type="text" name="email" class="form-control" placeholder="Enter Email id" value="'.$_SESSION['username'].'">';?></div required="">
        </div>
		
	<h2>Hello <?php echo $_SESSION['username'] ?></h2>




</body>
</html>
