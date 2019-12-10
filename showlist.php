<?php

	if( isset($_POST['showlist']) ) {
	    $stadistics = $_POST['stadistics'];
	    echo "Tu nombre es: ".$stadistics;
	    throw new Exception("URL does not have a valid format.");

    }
?>