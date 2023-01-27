<?php

    // configuration
    require("../includes/config.php"); 

    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
     
	 //input validation  
	 if (empty($_POST["firstname"]))
	 {
		 apologize("Invalid Firstname.");
	 }
	 elseif (empty($_POST["lastname"]))
	 {
		 apologize("Invalid Lastname.");
	 }
	 elseif (empty($_POST["address"]))
	 {
		 apologize("invalid address");
	 }
	 
	$result = query("INSERT INTO driver(firstname,lastname,address) VALUES(?,?,?)", $_POST["firstname"], $_POST["lastname"], $_POST["address"]);
	
	if($result === false)
		{
			apologize("mali");
		}
		else
		{
			redirect("./driver.php");
		}   
    }
    else
    {
		
      render("adddriver.php",["title" => "Add driver"]);
    }

?>
