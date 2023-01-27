<?php

    // configuration
    require("../includes/config.php");
	
	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		if($_POST["controller"] == "update")
		{
			// update / edit code SQL
			$result = query("UPDATE stock SET product_name = ?, product_type = ?, product_color = ? WHERE id = ?", $_POST["product_name"], $_POST["product_type"], $_POST["product_color"], $_POST["id"]);
			redirect("stock.php");
		}
		elseif($_POST["controller"] == "delete")
		{
			// delete
			query("DELETE FROM stock WHERE id = ?", $_POST["stockId"]);
			redirect("stock.php");
		}
		else
		{
			$stocks = query("SELECT * FROM stock WHERE id = ?", $_POST["stockId"]);
			if(count($stocks) == 1){
				$stock = $stocks[0];
				render("editstock.php", ["title" => "Edit", "stock" => $stock]);
			}
		}
    }

?>