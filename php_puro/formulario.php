<?php
$n1 = $_GET['n1']; //n1 es el nombre del campo del formulario "name"

$n2 = $_GET['n2']; //n2 es el nombre del campo del formulario "name"

if(isset($n1) && isset($n2)) //isset() determina si una variable está definida y no es NULL
{
    echo "La suma de $n1 + $n2 es: ".($n1+$n2);
}
else
{
    echo "No se han recibido los valores";
}



?>