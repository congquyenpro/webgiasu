<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <title>
        <?php
            echo $name_page;
        ?>
    </title>
</head>

<body>
    <?php
        require_once "./src/views/partials/header.php";
    ?>
    <?php
        require_once "./src/views/content/$view.php";
    ?>
</body>
<script src="<?php echo $actual_link?>/public/javascript/main.js"></script>
</html>
