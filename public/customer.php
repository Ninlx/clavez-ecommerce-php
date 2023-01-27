<?php

    // configuration
    require("../includes/config.php");
	 
	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{

	}
	else
	{
		$customers = query("SELECT * FROM customer");
		render("customer.php", ["title" => "Customers", "customers" => $customers]);
	}
        // else render form
       
    

?>
