<?php
// Include database configuration file
require_once 'dbConfig.php';

// Include URL Shortener library file
require_once 'Shortener.class.php';

// Initialize Shortener class and pass PDO object
$shortener = new Shortener($db);


$stmt = "";
$shortURL_Prefix = 'https://localhost/URLShortener/redirect.php?c=';

if (isset($_POST["set"])){

	$selection = $_POST["stadistics"];

	if ($selection == "From lowest to highest"){

		$stmt = $db->query("SELECT * FROM short_urls ORDER by hits ASC");
		
	}else if ($selection == "From highest to lowest"){

		$stmt = $db->query("SELECT * FROM short_urls ORDER by hits DESC");

	}else if ($selection == "From newest to oldest"){

		$stmt = $db->query("SELECT * FROM short_urls ORDER by created DESC");
	}else if ($selection == "From oldest to newest"){

		$stmt = $db->query("SELECT * FROM short_urls ORDER by created ASC");
	}else{

		$stmt = $db->query("SELECT * FROM short_urls");
	}

								
}else{

	$stmt = $db->query("SELECT * FROM short_urls");
}

							

while ($row = $stmt->fetch()) {


	$shortCode = $shortener->urlToShortCode($row['long_url']);
				    
	// Create short URL
	$shortURL = $shortURL_Prefix.$shortCode;

?>
	<tr>
		<td><?php echo $row['hits']?></td><td><?php echo $row['long_url']?></td><td><a href="<?php echo $shortURL ?>" target="_blank"><?php echo $shortURL ?></a></td>
	</tr>
<?php

}

?>