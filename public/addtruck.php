<?php

    // configuration
    require("../includes/config.php"); 

    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
     
	 //input validation  
	 if (empty($_POST["plate_number"]))
	 {
		 apologize("You must enter a plate number");
	 }
	 elseif (empty($_POST["truck_type"]))
	 {
		 apologize("You must enter a truck type");
	 }
	 elseif (empty($_POST["truck_color"]))
	 {
		 apologize("You must enter a truck color");
	 }
	 
	$result = query("INSERT INTO truck(plate_number,truck_type,truck_color) VALUES(?,?,?)", $_POST["plate_number"], $_POST["truck_type"], $_POST["truck_color"]);
	
	if($result === false)
		{
			apologize("mali");
		}
		else
		{
			redirect("./truck.php");
		}   
    }
    else
    {
		
      render("addtruck.php",["title" => "Add truck"]);
    }

?>
