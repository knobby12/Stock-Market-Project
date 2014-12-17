<?php
    
    // configuration 
    require("../includes/config.php");   
    
    $cash =	query("SELECT cash FROM users WHERE id = ?", $_SESSION["id"]);	 
    $user =	query("SELECT username FROM users WHERE id = ?", $_SESSION["id"]);   
	

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        
        if (empty($_POST["symbol"]) || empty($_POST["shares"]))
        {          
            apologize("You must enter a stock symbol and quantity of shares to buy.");
        }        
        
        if (lookup($_POST["symbol"]) === false)
        {            
            apologize("Invalid stock symbol.");
        }

        if (preg_match("/^\d+$/", $_POST["shares"]) == false)
        {            
            apologize("You must enter a whole, positive integer.");
        }

        $transaction = 'BUY';
                
        $stock = lookup($_POST["symbol"]);        
        
        $cost = $stock["price"] * $_POST["shares"];        
        
        $cash =	query("SELECT cash FROM users WHERE id = ?", $_SESSION["id"]);	

        if ($cash < $cost)
        {       
            apologize("You can't afford this purchase.");
        }        
        
        else
        {
            $_POST["symbol"] = strtoupper($_POST["symbol"]);

            query("INSERT INTO portfolio (id, symbol, shares) VALUES(?, ?, ?) 
                ON DUPLICATE KEY UPDATE shares = shares + VALUES(shares)", $_SESSION["id"], $_POST["symbol"], $_POST["shares"]);
         
            query("UPDATE users SET cash = cash - ? WHERE id = ?", $cost, $_SESSION["id"]);

            query("INSERT INTO history (id, transaction, symbol, shares, price) VALUES (?, ?, ?, ?, ?)", $_SESSION["id"], $transaction, $_POST["symbol"], $_POST["shares"], $stock["price"]);
            
            redirect("/");    
        }
    }
    
   
    else
    {        
        render("buy_form.php", ["title" => "Buy Form", "cash" => $cash, "user" => $user]);
    }
    
?>
