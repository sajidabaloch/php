<?php 


$vote = $_GET['vote'];


if($vote > 90){

$msg = "excellent";
}
 elseif($vote >=70)

 $msg = "good";



 elseif($vote >=50)

 $msg = "fair";


?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="#" method="$_GET">

<div class="form">


<input type="text" name="vote" placeholder="enter marks">
<button>click</button>
<h5><?php echo $msg ?></h5>

    
</div>
</form>








</body>
</html>