<?php

    // configuration
    require("../includes/config.php");  
    
    
    $cash =	query("SELECT cash FROM users WHERE id = ?", $_SESSION["id"]);	 
    $user =	query("SELECT username FROM users WHERE id = ?", $_SESSION["id"]);   
	
    $table = query("SELECT * FROM history WHERE id = ?", $_SESSION["id"]);
    
    render("history_form.php", ["title" => "History", "cash" => $cash, "user" => $user, "table" => $table]);
   
?>
