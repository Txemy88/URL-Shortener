<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>URL Shortener</title>
    
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <link rel="stylesheet" href="css/style.css">
    <!-- Include JQuery library -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>


    
</head>

<body>
	<div class="container-form">

			<!-- use "<?php //echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"  instead url_validate_func.php but else doesn't work -->

	        <form action="url_validate_func.php" method="post" class="form">
	            <div class="urlshorter-form"><h1>URL Shortener</h1></div>
	            
	            <div class="url line-input">
	                <label class="lnr lnr-envelope"></label>
	                <input type="text" placeholder="Enter new url" name="url">
	            </div>

	            <!-- Show error message or Shorted URL -->
	            <?php if(!empty($error)): ?>
	                <div class="mensaje">
	                <?php echo $error; ?>
	            </div>
	            <?php endif; ?>
	            
	            <button type="submit" name="verify">Short</button>
	    	</form>
	</div>
</body>
</html>