<?php

    // configuration
    require("../includes/config.php");
	 
	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{

	}
	else
	{
		$routes = query("SELECT * FROM route");
		render("route.php", ["title" => "Routes", "routes" => $routes]);
	}
        // else render form
       
    

?>
