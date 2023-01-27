<?php

    // configuration
    require("../includes/config.php"); 

    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
     
	 //input validation  
	 if (empty($_POST["leftMonth"]))
	 {
		 apologize("Invalid Firstname.");
	 }
	 elseif (empty($_POST["leftDay"]))
	 {
		 apologize("Invalid Lastname.");
	 }
	 elseif (empty($_POST["timeleft"]))
	 {
		 apologize("invalid address");
	 }
	 
	$result = query("INSERT INTO route(driver_id,dateleft,timeleft,status) VALUES(?,?,?,'PENDING')", $_POST["driverId"], $_POST["leftYear"] . '-' . $_POST["leftMonth"] . '-' . $_POST["leftDay"], $_POST["timeleft"] . ' ' . $_POST["meridiam"]);
	if($result === false)
		{
			apologize("mali");
		}
		else
		{
			redirect("./route.php");
		}   
    }
    else
    {
		$drivers = query("SELECT * FROM driver");
		render("addnewroute.php",["title" => "Add New Route", "drivers" => $drivers]);
    }

?>
