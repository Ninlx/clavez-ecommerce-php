<?php

    // configuration
    require("../includes/config.php");
	 
	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{

	}
	else
	{
		$products = query("SELECT * FROM product");
		render("product.php", ["title" => "Products", "products" => $products]);
	}
        // else render form
       
    

?>
