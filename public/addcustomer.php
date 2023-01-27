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
	 	 elseif (empty($_POST["contact"]))
	 {
		 apologize("invalid Contact");
	 }
	 
	$result = query("INSERT INTO customer(firstname,lastname,address,contact) VALUES(?,?,?,?)", $_POST["firstname"], $_POST["lastname"], $_POST["address"], $_POST["contact"]);
	
	if($result === false)
		{
			apologize("mali");
		}
		else
		{
			redirect("./customer.php");
		}   
    }
    else
    {
		
      render("addcustomer.php",["title" => "Add customer"]);
    }

?>
