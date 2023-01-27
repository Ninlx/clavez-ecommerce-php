<?php

    // configuration
    require("../includes/config.php"); 

    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
     
                //input validation  
                if (empty($_POST["lastname"]))
                {
                    apologize("Invalid Lastname.");
                }
                elseif (empty($_POST["firstname"]))
                {
                    apologize("Invalid Firstname.");
                }
                elseif (empty($_POST["country"]))
                {
                    apologize("invalid country");
                }
                    
                
                $result = query("INSERT INTO authors(lastname,firstname,country) VALUES(?,?,?)", $_POST["lastname"], $_POST["firstname"], $_POST["country"]);
                
                if($result === false)
                    {
                        apologize("Data Not inserted.");
                    }
                    else
                    {
                        redirect("./author.php");
                    }   
    }
    else
    {
		//template or view input form
      render("addauthor.php",["title" => "Add Author"]);
    }

?>
