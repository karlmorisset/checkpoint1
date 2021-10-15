<?php
    require "config.php";

    $c = new PDO("mysql:host=".HOST.";dbname=".DATABASE, USER, PASSWORD);
    $s = $c->query("SELECT * from potdevin");
    $pdv = $s->fetchAll(PDO::FETCH_ASSOC);

    var_dump($pdv);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <div class="box1 box">Box 1</div>
        <div class="book box">
            <div class="box2 page">Page de gauche</div>
            <div class="box3 page">page de droite </div>

        </div>
        <div class="box4 box">Box 3</div>
    </main>
</body>
</html>