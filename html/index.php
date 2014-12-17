
<?php

    // configuration
    require("../includes/config.php"); 

    $rows = query("SELECT id, symbol, shares FROM portfolio WHERE id = ?", $_SESSION["id"]);

    $portfolio = [];
    
    
    foreach($rows as $row)
    {
        $stock = lookup($row["symbol"]);
        
        $stock["shares"] = $row["shares"];
        $stock["total"] = $row["shares"] * $stock["price"];
        $stock["id"] = $row["id"];
        $portfolio[] = $stock;
    }
        
         $users = query("SELECT * FROM users WHERE id = ?", $_SESSION["id"]);

    render("portfolio.php", ["title" => "Portfolio", "portfolio" => $portfolio, "users" => $users]);

?>
