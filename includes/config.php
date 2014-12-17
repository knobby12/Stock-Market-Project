<?php

    ini_set("display_errors", true);
    error_reporting(E_ALL);
    require("constants.php");
    require("functions.php");

    session_start();

    if (!preg_match("{(?:main|login|logout|register|quote)\.php$}", $_SERVER["PHP_SELF"]))
    {
        if (empty($_SESSION["id"]))
        {
            redirect("main.php");
        }
    }

?>
