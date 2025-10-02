<?php
$menu = [
    "Primeros platos" => [
        "Ensalada", 
        "Sopa", 
        "Pasta"
    ],
]
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP2</title>
</head>
<body>
    
    <?php
    foreach($menu as $categoria => $platos){
        ?>
        <h3><?php echo $categoria; ?></h3>
        <?php
    }
    ?>

</body>
</html>