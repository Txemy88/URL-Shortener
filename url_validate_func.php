<?php

	// Include database configuration file
	require_once 'dbConfig.php';

	// Include URL Shortener library file
	require_once 'Shortener.class.php';


	// Shortener class instance
	$shortener = new Shortener($db);



	if(isset($_POST['verify'])){
    
		$valor = $_POST['url'];
		$error = '';

			$url = $_POST['url'];

				// Long URL
			$longURL = $url;

				// Prefix of the short URL 
			$shortURL_Prefix = 'https://localhost/URLShortener/redirect.php?c=';

			try{
				    // Get short code of the URL
				$shortCode = $shortener->urlToShortCode($longURL);
				    
				    // Create short URL
				$shortURL = $shortURL_Prefix.$shortCode;
				    
				    // Display short URL
				$error .= '<a href="'.$shortURL.'"target="_blank">'.$shortURL.'</a>';

			}catch(Exception $e){
				    // Display error
				//echo $e->getMessage();
				$error .= '<i>Please enter a valid URL</i>';

			}
		

	}	

require 'index.php';

?>