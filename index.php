<?php
$HP = 100;
define ('MAX_DAMAGE', 50);
define ('MIN_DAMAGE', 1);
$damage
?>
<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
while ($HP > 0) {  
$damage = rand(MAX_DAMAGE, MIN_DAMAGE) ?>
<p> Byl jsi zraněn a bude ti odečteno <?= $damage ?> životů. </p> 
<?php

if ($HP >= $damage) {
    $HP = $HP - $damage;
}
else {
    $HP = 0;
}
?>
 Zbýva ti <?= $HP ?> životů.
<?php } ?> 

<p> Konec Hry </p>
</body>
</html>