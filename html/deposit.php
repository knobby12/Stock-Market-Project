<?php

    // configuration
    require("../includes/config.php"); 
    
    $cash =	query("SELECT cash FROM users WHERE id = ?", $_SESSION["id"]);	 
    $user =	query("SELECT username FROM users WHERE id = ?", $_SESSION["id"]);  
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        if (preg_match("/^\d+$/", $_POST["deposit"]) == false)
        {            
            apologize("You must enter a whole, positive integer.");
        }
                
        query("UPDATE users SET cash = cash + ? WHERE id = ?", $_POST["deposit"], $_SESSION["id"]);

        redirect("/");
    }   
    else
    {       
        render("deposit_form.php", ["title" => "Deposit Form", "cash" => $cash, "user" => $user]);
    }

?>
