<?php

    // configuration
    require("../includes/config.php"); 
    if (empty($_SESSION["id"]))
        {
                if ($_SERVER["REQUEST_METHOD"] == "POST")
            {
                $info = [];
           
                if (empty($_POST["quote"]))
                {          
                    apologize("You must enter a stock symbol");
                }      

                if (lookup($_POST["quote"])=== false)
                {
                    apologize("Invalid stock symbol");
                }
                $infor = lookup($_POST["quote"]);
                $info[] = $infor;
                render("quote_price.php", ["title" => "Quote", "info" => $info]);

            }
            else
            {
                render("quote_form.php", ["title" => "Quote"]);
            }
        }
   else{
        
        $cash =	query("SELECT cash FROM users WHERE id = ?", $_SESSION["id"]);	 
        $user =	query("SELECT username FROM users WHERE id = ?", $_SESSION["id"]);
        
        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {
            $info = [];
       
            if (empty($_POST["quote"]))
            {          
                apologize("You must enter a stock symbol");
            }      

            if (lookup($_POST["quote"])=== false)
            {
                apologize("Invalid stock symbol");
            }
            $infor = lookup($_POST["quote"]);
            $info[] = $infor;
            render("quote_price.php", ["title" => "Quote", "info" => $info]);

        }
        else
        {
            render("quote_form.php", ["title" => "Quote", "cash" => $cash, "user" => $user]);
        }
    }
?>
