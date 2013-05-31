<?php  

	// Grab javascript files.
	if ($handle = opendir('../fills')) {
		$fills =  array();
    	/* This is the correct way to loop over the directory. */
    	while (false !== ($entry = readdir($handle))) {
    		if (strpos($entry, ".js"))
	      		$fills[] = $entry;
    	}

	  	closedir($handle);
	}

	// Grab CSS files.
	if ($handle = opendir('../fills/css')) {
		$styles =  array();
    	/* This is the correct way to loop over the directory. */
    	while (false !== ($entry = readdir($handle))) {
    		if (strlen($entry) > 2 && !strpos($entry, "DS_Store"))	
	      		$styles[] = $entry;
    	}

	  	closedir($handle);
	}
		
	$response = array("fills" => $fills, "styles" => $styles);
	
	echo json_encode($response); 

?>