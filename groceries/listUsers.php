<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prueba</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
    <?php

    include("BaseDatos.php");

    $transaccion=new BaseDatos();
    $searchSQL="SELECT * FROM `users` WHERE 1";
    $users=$transaccion->searchData($searchSQL);

    
    print_r($users);
    
    ?>
    <div class="container">
            <div class="row row-cols-1 row-cols-md-3">

            <?php foreach($users as $users):?> <div class="col mb-4"> 
                <div class="card h-100"> 
                <img src="https://placeimg.com/640/480/nature" class="card-img-top" alt="..."> 
                    <div class="card-body"> 
                    <h5 class="card-title"><?php echo($users["charachterization"]) ?></h5> 
            <p class="card-text">
            <?php echo($users["charachterization"]) ?>
            </p> </div> 
                    </div> 
                </div> 
            <?php endforeach?>


    </div>
</body>