<?php

    // configuration
    require("../includes/config.php");
	 
	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{

	}
	else
	{
		$authors = query("SELECT * FROM authors");
		render("author.php", ["title" => "Authors", "authors" => $authors]);
	}
        // else render form
       
    

?>
