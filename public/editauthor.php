<?php

    // configuration
    require("../includes/config.php");
	
	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		if($_POST["controller"] == "update")
		{
			// update / edit code SQL
				$result = query("UPDATE authors SET lastname = ?, firstname = ?, country = ? WHERE authorid = ?", $_POST["lastname"], $_POST["firstname"], $_POST["country"], $_POST["authorid"]);
			redirect("author.php");
		
		
		}
		elseif($_POST["controller"] == "delete")
		{
			// delete
			query("DELETE FROM authors WHERE authorid = ?", $_POST["authorid"]);
			redirect("author.php");
		}
		else
		{
			$authors = query("SELECT * FROM authors WHERE authorid = ?", $_POST["authorid"]);
			if(count($authors) == 1){
				$author = $authors[0];
				render("editauthor.php", ["title" => "Edit", "author" => $author]);
			}
		}
    }

?>