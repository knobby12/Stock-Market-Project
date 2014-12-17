<?php

    // configuration
    require("../includes/config.php"); 
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $cpassword = $_POST["c_password"];
        
        // validate submission
        if (empty($_POST["username"]))
        {
            apologize("You must provide your username.");
        }
        else if (empty($_POST["password"]))
        {
            apologize("You must provide your password.");
        }
        else if (empty($_POST["c_password"]))
        {
              apologize("You must retype your password.");
        }
        else if(!($password == $cpassword))
        {
           apologize("Your password must match");
        }
        $result = query("INSERT INTO users (username, hash, cash) VALUES (?, ?, 1000.00)", $_POST["username"], crypt($_POST["password"]));

        if($result === false)
        {
            apologize("Username already Exists please try something new");
        }
        else
        {
            $row = query("SELECT LAST_INSERT_ID() as id");
            $id = $row[0]["id"];
            $_SESSION["id"] = $id;
            redirect("/");
        }
    }
       
    else
    {
        render("register_form.php", ["title" => "Register"]);
    }

?>
