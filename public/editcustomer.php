<?php

    // configuration
    require("../includes/config.php");
	
	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		if($_POST["controller"] == "update")
		{
			// update / edit code SQL
				$result = query("UPDATE customer SET firstname = ?, lastname = ?, address = ?, contact = ? WHERE id = ?", $_POST["firstname"], $_POST["lastname"], $_POST["address"], $_POST["contact"], $_POST["id"]);
			redirect("customer.php");
			
			redirect("customer.php");
		}
		elseif($_POST["controller"] == "delete")
		{
			// delete
			query("DELETE FROM customer WHERE id = ?", $_POST["customerId"]);
			redirect("customer.php");
		}
		else
		{
			$customers = query("SELECT * FROM customer WHERE id = ?", $_POST["customerId"]);
			if(count($customers) == 1){
				$customer = $customers[0];
				render("editcustomer.php", ["title" => "Edit", "customer" => $customer]);
			}
		}
    }

?>