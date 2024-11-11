<?php
$font = $_POST['font'];
$bgcolor = $_POST['bgcolor'];
$message = $_POST['message'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Message</title>
    <style>
        body {
            background-color: <?php echo $bgcolor; ?>;
            font-family: <?php echo $font; ?>;
        }
    </style>
</head>
<body>
    <h1><?php echo $message; ?></h1>
</body>
</html>
