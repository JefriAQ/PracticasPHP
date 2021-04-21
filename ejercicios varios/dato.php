if (isset($_POST["num"])) {
    $valor=$_POST["num"];
    if (($valor>=1) && ($valor<=5)) {
        //if(($valor%2!=0)||($valor==2)){
            for ($i=$valor; $i <= $valor; --$i) {
                $resultado= $valor / $i;
                    if($resultado !== 0){
                        echo  "El numero es primo";
                        break;
                    }elseif ($resultado == 0){
                        echo "El numero no es primo";
                        break;
                    }
            //}
        }
    }else {
        echo "Error con el numero tiene que ser mayor o igual a 1 y menor o igual 5";
    }
}
