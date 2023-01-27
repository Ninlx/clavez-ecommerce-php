<?php

    // configuration
    require("../includes/config.php");
	 
	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		if($_POST["controller"] == "edit"){
			$rows = query("SELECT * FROM truck WHERE id = ?", $_POST["id"]);
			if(count($rows) == 1) {
				$truck = $rows[0];
			}
			render("edit_truck.php", ["title" => "Edit", "truck" => $truck]);
		}
		elseif($_POST["controller"] == "update") {
			$updateResult = query("UPDATE truck SET plate_number = ?, truck_type = ?, truck_color = ? WHERE id = ?", $_POST["plate_number"], $_POST["truck_type"], $_POST["truck_color"], $_POST["id"]);
			if($updateResult === false){
				echo 'error update'; die();
			}
			else {
				redirect("truck.php");
			}
		}
		elseif($_POST["controller"] == "delete") {
			$deleteResult = query("DELETE FROM truck WHERE id= ?", $_POST["id"]);
			if($deleteresult === false){
				echo 'error delete'; die();
			}
			else{
				redirect("truck.php");
			}
		}
	  
	}
	else
	{
		$trucks = query("SELECT * FROM truck");
		render("truck.php", ["title" => "truck", "trucks" => $trucks]);
	}
        // else render form
       
    

?>
