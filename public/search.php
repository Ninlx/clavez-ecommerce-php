<?php

	
	// configuration
    require("../includes/config.php");
	

	// if the form was submitted.
    if ($_SERVER["REQUEST_METHOD"] == "GET")
	{
		if(!empty($_GET["keyword"]))
		{
			$rows = query("SELECT * FROM driver WHERE firstname LIKE ? OR lastname LIKE ?", $_GET["keyword"].'%', $_GET["keyword"].'l%');
			if(count($rows) == 0)
			{
				apologize("Nothing found with the keyword: " . $_GET["keyword"]);
			}
			else
			{
				$employees = [];
				$cntr = (count($rows));

				foreach($rows as $row)
				{
					$driver[] = [
						"id" => $row["id"],
						"firstname" => $row["firstname"],
						"lastname" => $row["lastname"],
						"address" => $row["address"]
						
						
					];
					
				}
				
				// render all patient list
				render("./drivers_form.php", ["x" => $cntr, "driver" => $drivers, "title" => "drivers"]);
			}
			
		}
		else
		{
			apologize("Please provide some search keywords.");
		}
	
	}
	else
	{
		
		print_r("weeeee"); die();
	}
	

?>
