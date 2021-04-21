<!--2. Crear un programa que pida un número y diga si es par o impar.-->
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
                        <label for="formGroupExampleInput" class="form-label">Digite un numero</label>
                        <input type="text" class="form-control" name="num" placeholder="#">
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
</body>
</html>
<?php 
if (isset($_POST["num"])) {
    $numero=$_POST["num"];
    if ($numero%2==0) {
        echo "El numero ".$numero." es par";
    }else {
        echo "El numero ".$numero." es impar";
    }
}


?>