<?php

    // configuration
    require("../includes/config.php");
	
	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		if($_POST["controller"] == "update")
		{
			// update / edit code SQL
			$result = query("UPDATE driver SET firstname = ?, lastname = ?, address = ? WHERE id = ?", $_POST["firstname"], $_POST["lastname"], $_POST["address"], $_POST["id"]);
			redirect("driver.php");
		}
		elseif($_POST["controller"] == "delete")
		{
			// delete
			query("DELETE FROM driver WHERE id = ?", $_POST["driverId"]);
			redirect("driver.php");
		}
		else
		{
			$drivers = query("SELECT * FROM driver WHERE id = ?", $_POST["driverId"]);
			if(count($drivers) == 1){
				$driver = $drivers[0];
				render("editdriver.php", ["title" => "Edit", "driver" => $driver]);
			}
		}
    }

?>