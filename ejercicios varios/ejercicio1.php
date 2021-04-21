<!--1. Crear un programa que pida un número del 1 al 5 y diga si es primo o no.-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <form action="" method="post">
                <div class="alert alert-primary" role="alert">
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Digite un numero del 1 al 5</label>
                        <input type="text" class="form-control" name="num" placeholder="#">
                    </div>
                </div></form>
            </div>
        </div>
    </div>
</body>
<?php
$divi=0;
if (isset($_POST["num"])) {
    $valor=$_POST["num"];
    $i=1;
    if (($valor >=1)&&($valor <=5)) {
        while ($i<=$valor) {
            if ($valor%$i==0) {
                $divi= $divi +1;
            }
            $i++;
        }
        if ($divi==2) {
            echo "El numero ingresado es primo";
        }else{
            echo "El numero ingresdo NO es primo";
        }
    }else {
        echo "Numero erroneo tiene que ser igual o mayor 1 y menor o igual que 5";
    }
}else {
    echo "Introduce un valor";
}
?>
</html>