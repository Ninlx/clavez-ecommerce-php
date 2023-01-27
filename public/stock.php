<?php

    // configuration
    require("../includes/config.php");
	 
	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{

	}
	else
	{
		$stocks = query("SELECT * FROM stock");
		render("stock.php", ["title" => "Stocks", "stocks" => $stocks]);
	}
        // else render form
       
    

?>
