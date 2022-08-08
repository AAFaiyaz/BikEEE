<?php

require 'MostPopularBikes.php';

$bikes = new MostPopularBikes('../data.csv');

$bikes->setJsonData();

$bikes->array_pluck('Model');

$bikes->setMostPopularModel();

// var_dump($bikes->mostPopular);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Document</title>
</head>
<body> 
    <div class="banner">
        <img class="top-cover" src="../bikee.png" alt="" style="width:100%; height: 500px">
    </div>
    <section>
        <header>Our Most Popular Bikes</header>
        <ol>
            <?php      
                foreach($bikes->getMostPopularBikes() as $key => $value) : ?>
                    <li><b><?php  echo $key; ?><b></li>
                    <br>
                <?php
                    endforeach; 
                ?>
        </ol>
        <a href="test.php">Test Case</a>
    </section>
</body>
</html>