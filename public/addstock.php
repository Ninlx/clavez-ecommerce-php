<?php

    // configuration
    require("../includes/config.php"); 

    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
     
	 //input validation  
	 if (empty($_POST["product_name"]))
	 {
		 apologize("Invalid product name.");
	 }
	 elseif (empty($_POST["product_type"]))
	 {
		 apologize("Invalid product type.");
	 }
	 elseif (empty($_POST["product_color"]))
	 {
		 apologize("invalid product color");
	 }
	 
	$result = query("INSERT INTO stock(product_name,product_type,product_color) VALUES(?,?,?)", $_POST["product_name"], $_POST["product_type"], $_POST["product_color"]);
	
	if($result === false)
		{
			apologize("mali");
		}
		else
		{
			redirect("./stock.php");
		}   
    }
    else
    {
		
      render("addstock.php",["title" => "Add stock"]);
    }

?>
