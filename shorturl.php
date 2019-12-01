<?php
		// Include database configuration file
		require_once 'dbConfig.php';

		// Include URL Shortener library file
		require_once 'Shortener.class.php';

		$shortener = new Shortener($db);

		echo "Fuera";

		//if(isset($_POST['verify'])){
			echo "Dentro";

			// Initialize Shortener class and pass PDO object
			

			//if (isset($_POST['url']) && trim($_POST['url']) != '' && preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|](\.)[a-z]{2}/i",$_POST['url'])){

			if (isset($_POST['url'])){

				echo "Dentro";
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
				    echo 'Short URL: <a href="'.$shortURL.'"target="_blank">'.$shortURL.'</a>';
				    $error .= 'Short URL: <a href="'.$shortURL.'"target="_blank">'.$shortURL.'</a>';;
				}catch(Exception $e){
				    // Display error
				    echo $e->getMessage();
				}
			}else{
				echo "fuera";
				$error .= '<i>Please enter a valid URL</i>';
			}
		//}
	//require 'index.php';
?>