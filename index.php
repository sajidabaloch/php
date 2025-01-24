<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    
</head>
<body>
    <h1 class="php" style="background-color: lightgreen; text-align:center;padding:10px">This is PHP</h1>





    <?php
$id = "101";
$name = "anaya";
$email = "anaya@gmail.com";
$address = "karachi";
$phone = "031452766";
$work = "devloper";
?>


    <div class="card" style="width: 18rem;">
  <ul class="list-group list-group-flush">
  <li class="list-group-item"><?php echo $id ?></li>
    <li class="list-group-item"><?php echo $name ?></li>
    <li class="list-group-item"><?php echo $email ?></li>
    <li class="list-group-item"><?php echo $address ?></li>
    <li class="list-group-item"><?php echo $phone ?></li>
    <li class="list-group-item"><?php echo $work ?></li>
  </ul>
</div>


<div class="cotaniner mt-5 p-5">
    <div class="card">
        
<form action="data.php" method="$_GET">
    <h1 style="text-align: center;">Register Form</h1>
    <div class="mb-2 p-5">
  <label for="exampleFormControlInput1" class="form-label">name</label>
  <input type="text" name="name" class="form-control" id="name" placeholder="name">
</div>

<div class="mb-2 p-5">
  <label for="exampleFormControlInput1" class="form-label">Email</label>
  <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
</div>

<div class="mb-2 p-5">
  <label for="exampleFormControlInput1" class="form-label">password</label>
  <input type="password" name="password" class="form-control" id="password" placeholder="password">
</div>


<button class="btn btn-primary">Submit</button>


</form>


    </div>
</div>




</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>