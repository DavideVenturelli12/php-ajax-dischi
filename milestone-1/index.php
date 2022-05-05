<?php
include('disk.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Vue Dischi</title>
</head>
<body>
    <header>
        <img src="img/spotify-logo.png" alt="logo">
    </header>
    <div class="main-container">
        <?php
        foreach($diskArray as $disk){
        ?>      
        <div class="disk-card">
            <img class="img-card" src="<?= $disk['poster'] ?>" alt="<?= $disk['author']?>">
            <h2><?= $disk['title'] ?></h2>
            <p><?= $disk['author'] ?></p>
            <p><?= $disk['year'] ?></p>
        </div>         
                        
        <?php
        }
        ?>    
    </div>
    
</body>
</html>