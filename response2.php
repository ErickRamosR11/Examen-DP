<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        background-color:black;
    }
    .contenedor{
        height:100px;
        width: 200px;
        font-size: 25px;
        color: white;
    }
</style>
<body>
    <?php
    $tennis_red = $_GET['tennis_red'];
    ?>
    <div class="contenedor">
        <?php echo $tennis_red; ?>
    </div>
</body>
</html>