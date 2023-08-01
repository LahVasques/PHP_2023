<!DOCTYPE html>
<html>
<body>

<?php
echo "My first PHP script!";

$txt = "PHP";
echo "<br> I love $txt!";

$x = 10;
$y = 10.5;

echo "<br>" . $x + $y "<br>"; 

$cars = array("Volvo","BMW","Toyota");
var_dump($cars);

for($i=0; $i<3; $i++){
    echo "<br> carro na posição " .$i. " ". $cars[$i];
}

echo "<br> Meu nome tem " . strlen("Laiss Tie Hoga Vasques")." letras";
?>

</body>
</html>
