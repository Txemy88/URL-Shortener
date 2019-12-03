<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <title>URL Shortener</title>
    
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <link rel="stylesheet" href="css/style.css">

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript">

		function ShowSelected(){
			/* Para obtener el valor */
			var cod = document.getElementById("statistics").value;
							
							 
			/* Para obtener el texto */
			var combo = document.getElementById("statistics");
			var selected = combo.options[combo.selectedIndex].text;
			
			$.load('index.php', {postname:selected});

			//alert(selected);
		}

	</script>
    
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

	<div class="container-form-show">


	        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="form">
	            <div class="urlsshow-form"><h1>URL list</h1></div>

	            <select name="stadistics" id="statistics">

				   	<option selected value="0"> Order by </option>

				       <optgroup label="Views"> 
				       <option >From lowest to highest</option> 
				       <option >From highest to lowest</option> 

				       <optgroup label="Date"> 
				       <option >From newest to oldest</option> 
				       <option >From oldest to newest</option> 

				</select><input type="submit" class="boton_1" name="set" id="set" value="Set">


				<!------ table to list URLS -->
				<table class="showhits">
					<thead>
						<tr>
							<th>Views</th>
							<th>Url</th>
							<th>ShortURL</th>
						</tr>
					</thead>
					<tbody>
						<?php require_once 'load_urls.php' ?>
					</tbody>	

				</table>
	    	</form>
	</div>
</body>
</html>