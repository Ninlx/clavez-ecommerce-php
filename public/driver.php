<?php

    // configuration
    require("../includes/config.php");
	 
	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{

	}
	else
	{
		$drivers = query("SELECT * FROM driver");
		render("driver.php", ["title" => "Drivers", "drivers" => $drivers]);
	}
        // else render form
       
    

?>
