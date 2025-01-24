<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<h1><b>control structure</b></h1>
<h1><u>loops</u></h1>

<h1><u><b>for loop</b></u></h1>


<?php





$initalvalue = 1;
$startvalue = 5;
$looprange = 10;

for($i = $initalvalue; $i <=$looprange; $i++){
    echo "<br>";
    echo "this is for loop" . "  " .  $i;

};
echo "<br>";

for($i = $initalvalue; $i <=$looprange; $i++){
    echo "<br>";
    echo "$startvalue x $i = " . $startvalue * $i;
};


?>

<h1><b>while loop</b></h1>

<?php

$k = 2;
while($k <10){
    $k++;
    echo "<br>";
    echo "this is while loop" . " " . $k;
}






?>


<h1><b>do while loop</b></h1>

<?php
$j =20;
do{
    $j++;
    echo "<br>";
    echo "this is do while loops" . " " . $j;
}while ($j <10)






?>


</body>
</html>
