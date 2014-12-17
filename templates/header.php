<!DOCTYPE html>

<html lang = "en">

    <head>
        <link rel="stylesheet" href="css/metro-bootstrap.css">
        <link rel="stylesheet" href="css/metro-bootstrap-responsive.css">
        <link rel="stylesheet" href="css/new.css">
        <link rel="stylesheet" href="css/iconFont.css">
        <link rel="stylesheet" href="font-awesome-4.1.0/css/font-awesome.min.css">
        <script src="js/jquery/jquery.min.js"></script>
        <script src="js/jquery/jquery.widget.min.js"></script>
        <script src="js/jquery/jquery.dataTables.js"></script>
        <script src="js/metro.min.js"></script>
       <!--<script src="js/validate.js"></script>-->
       <script src="js/symbol.js"></script>
        
         <script src="js/metro-input-control.js"></script>
         <script src="js/load-metro.js"></script>
         <script src="js/docs.js"></script>
         <script src="js/github.info.js"></script>
         <script src="js/jquery/jquery.mousewheel.js"></script>
         <script src="js/prettify.js"></script>

        <?php if (isset($title)): ?>
            <title>E Street: <?= htmlspecialchars($title) ?></title>
        <?php else: ?>
            <title>E Street</title>
        <?php endif ?>

    </head>

    <body class="metro"  style>

