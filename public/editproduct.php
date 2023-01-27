<?php

    // configuration
    require("../includes/config.php");
	
	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		if($_POST["controller"] == "update")
		{
			// update / edit code SQL
			$result = query("UPDATE product SET destination = ?, datearrival = ?, timearrival = ?, status = ? WHERE product_id = ?", $_POST["destination"],$_POST["leftYear"] . '-' . $_POST["leftMonth"] . '-' . $_POST["leftDay"], $_POST["timearrival"] . ' ' . $_POST["meridiam"], $_POST["status"], $_POST["product_id"]);
			redirect("product.php");
		}
		else
		{
			$products = query("SELECT * FROM product WHERE product_id = ?", $_POST["product_id"]);
			if(count($products) == 1){
				$product = $products[0];
				render("editproduct.php", ["title" => "Edit", "product" => $product]);
			}
		}
    }

?>