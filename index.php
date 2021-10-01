<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$computer = array(
  'CPU' => "Intel Core i7",
  'RAM' => "HyperX Predator RGB 64GB",
  'SSD' => "120GB",
  'case'=> "Genesis IRID 300 BLUE",
  'keyboard'=> "Razer Huntsman Mini Mercury",
  'GPU'=> "GeForce RTX 3080 Ti",
  'mouse'=> "Glorious Model O",
  'headphones'=> "HyperX Cloud II",
  'display'=> "MSI Gaming Optix G24C4 ",
  'mainboard'=> "ASUS ROG STRIX X570-E GAMING",
  'fan'=> "Enermax Liqmax III ARGB 360",
);

?>

<h1>Můj počítač</h1>
<ul>
    <li><p>CPU: <?= $computer['CPU']; ?></p></li>
    <li><p>RAM: <?= $computer['RAM']; ?></p></li>
    <li><p>SSD: <?= $computer['SSD']; ?></p></li>
    <li><p>case: <?= $computer['case']; ?></p></li>
    <li><p>keyboard: <?= $computer['keyboard']; ?></p></li>
    <li><p>GPU: <?= $computer['GPU']; ?></p></li>
    <li><p>mouse: <?= $computer['mouse']; ?></p></li>
    <li><p>headphones: <?= $computer['headphones']; ?></p></li>
    <li><p>display: <?= $computer['display']; ?></p></li>
    <li><p>mainboard: <?= $computer['mainboard']; ?></p></li>
    <li><p>fan: <?= $computer['fan']; ?></p></li>
</ul>
    
</body>
</html>