<?php

    // configuration
    require("../includes/config.php");
	
	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		if($_POST["controller"] == "update")
		{
			// update / edit code SQL
			$result = query("UPDATE route SET destination = ?, datearrival = ?, timearrival = ?, status = ? WHERE truck_id = ?", $_POST["destination"],$_POST["leftYear"] . '-' . $_POST["leftMonth"] . '-' . $_POST["leftDay"], $_POST["timearrival"] . ' ' . $_POST["meridiam"], $_POST["status"], $_POST["truck_id"]);
			redirect("route.php");
		}
		else
		{
			$routes = query("SELECT * FROM route WHERE truck_id = ?", $_POST["truck_id"]);
			if(count($routes) == 1){
				$route = $routes[0];
				render("editroute.php", ["title" => "Edit", "route" => $route]);
			}
		}
    }

?>