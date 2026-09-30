<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $articles = ["Impremente", "Tablette", "Cables HDMI", "Stylet"];
    
    echo isset($articles) ? "<h1>Liste des article </h1>" : "<h1>Aucun articles</h1>";
    ?>
    <ul>

    
    <?php
    foreach($articles as $value) {
        ?>
        <li><?= $value; ?></li>
        <?php   
    }
    ?>
    </ul>
</body>
</html>