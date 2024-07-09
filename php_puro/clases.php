<?php 

// ==================================== COMENTARIOS ====================================
// Comentario de una sola linea
// Para imprimir en pantalla una variable se usa print
print 'hola mundo';
// el echo es un print mas completo en donde se pueden imprimir varias cadenas de texto
echo ' Otra forma de imprimir',' y concatenar',' varias cadenas',' de texto';
// Se pueden incrustar elementos html en el codigo php, en este caso se incrusta un salto de linea
echo '<br>';
// se imprime un elemento con un elemento html añadido en el codigo php
echo 'Hola mundo <br>';


// ==================================== TIPOS VARIABLES ====================================
// Las variables en PHP se declaran con el signo de dolar $
$nombre = 'Juan ';
echo $nombre;
// Las variables son case sensitive
$Nombre = 'Pedro';
echo $nombre;
//Variables numericas
$numero = 5;
echo $numero;
//Variables booleanas
$verdadero = true;
$falso = false;
echo $verdadero;
echo $falso;
//Concatenacion
$nombre = 'Juan';
$apellido = 'Perez';
echo $nombre.' '.$apellido;

echo '<br>';

//Variables de tipo array
// ARRAYS INDEXADOS
$colores = array('rojo','verde','azul');
echo $colores[0];
echo $colores[2];
echo $colores[1];
//Otra forma de imprimir un array en la cual se imprime todo el array especificando el tipo de dato y los indices y valores
var_dump($colores);
// ARRAYS ASOCIATIVOS
$persona = array('nombre'=>'Juan','apellido'=>'Perez','edad'=>25);
echo $persona['nombre'];
echo $persona['apellido'];
echo $persona['edad'];
//Otra forma de imprimir un array asociativo
var_dump($persona);

echo '<br>';

// METODOS CON ARRAYS
// Agregar un elemento al final de un array
array_push($colores,'amarillo');
var_dump($colores);
// Agregar un elemento al inicio de un array
array_unshift($colores,'naranja');
var_dump($colores);
// Eliminar el ultimo elemento de un array
array_pop($colores);
var_dump($colores);
// Eliminar el primer elemento de un array
array_shift($colores);
var_dump($colores);
// Contar el numero de elementos de un array
echo count($colores);

echo '<br>';

// CHUNK
// Divide un array en arrays mas pequeños, basicamente crea una matriz
$frutas = array('manzana','pera','uva','sandia','melon');
$frutasDivididas = array_chunk($frutas,2);
var_dump($frutasDivididas);
// MERGE
// Une dos arrays
$verduras = array('zanahoria','lechuga','tomate');
$comida = array_merge($frutas,$verduras);
var_dump($comida);
// SORT
// Ordena un array
sort($frutas);
var_dump($frutas);
// REVERSE
// Invierte un array
$frutasInvertidas = array_reverse($frutas);
var_dump($frutasInvertidas);
// SLICE
// Extrae una parte de un array
$frutasExtraidas = array_slice($frutas,1,2);
var_dump($frutasExtraidas);
//SEARCH
// Busca un elemento en un array y devuelve su indice (un numero entero)
$indice = array_search('pera',$frutas);
echo $indice;

echo '<br>';

// MATRICES Y ARREGLOS MULTIDIMENSIONALES
// Una matriz es un array de arrays
$matriz = array(array(1,2,3),array(4,5,6),array(7,8,9));
echo $matriz[0][0];
echo $matriz[1][1];
echo $matriz[2][2];
// Un arreglo multidimensional es un array que contiene arrays
$arregloMultidimensional = array($colores,$frutas,$verduras);
var_dump($arregloMultidimensional);
echo '<br>';


// VARIABLES DE TIPO NULL
// Las variables de tipo null son variables que no tienen ningun valor
$variable = null;
echo $variable;

echo '<br>';

// VARIABLES DE TIPO RESOURCE
// Las variables de tipo resource son variables que almacenan referencias a recursos externos
// Por ejemplo, una conexion a una base de datos
$conexion = mysqli_connect('localhost','root','','base_datos');
echo $conexion;

echo '<br>';

// VARIABLES SCOPE
// El scope de una variable es el contexto en el que esta definida
// Las variables pueden ser locales o globales
// Las variables locales son aquellas que estan definidas dentro de una funcion y solo pueden ser accedidas dentro de esa funcion
// Las variables globales son aquellas que estan definidas fuera de una funcion y pueden ser accedidas desde cualquier parte del codigo
$variableGlobal = 'Soy una variable global';
function mostrarVariable(){
    $variableLocal = 'Soy una variable local';
    echo $variableLocal;
}
mostrarVariable();
echo $variableGlobal;

echo '<br>';// salto de linea

// VARIABLE GLOBAL
global $variableGlobal2; // con la palabra global se puede acceder a una variable global desde una funcion y modificarla o leerla
$variableGlobal2 = 'Soy una variable global';
echo $variableGlobal2;

echo '<br>';// salto de linea


// $GLOBALS
// La variable superglobal $GLOBALS es un array asociativo que contiene todas las variables globales
$n1 = 2;
$n2 = 3;
function sumaGlobal(){
    $GLOBALS['resultado'] = $GLOBALS['n1'] + $GLOBALS['n2'];
    return $GLOBALS['resultado'];
}
echo sumaGlobal();
echo $resultado;

// $SERVER
// La variable superglobal $SERVER es un array asociativo que contiene informacion sobre el servidor y la ejecucion del script
echo $_SERVER['PHP_SELF']; // devuelve el nombre del archivo del script que se esta ejecutando
echo $_SERVER['SERVER_NAME']; // devuelve el nombre del host del servidor
echo $_SERVER['HTTP_HOST']; // devuelve el nombre del host del servidor
echo $_SERVER['HTTP_USER_AGENT']; // devuelve la informacion sobre el agente de usuario que esta accediendo a la pagina
echo $_SERVER['SCRIPT_NAME'];  // devuelve la ruta del script actual
echo $_SERVER['SERVER_ADDR']; // devuelve la direccion IP del servidor
echo $_SERVER['SERVER_PORT']; // devuelve el puerto del servidor
echo $_SERVER['REMOTE_ADDR']; // devuelve la direccion IP del cliente
echo $_SERVER['REQUEST_METHOD']; // devuelve el metodo de solicitud utilizado para acceder a la pagina
echo $_SERVER['REQUEST_TIME']; // devuelve el tiempo de solicitud de la pagina
echo $_SERVER['QUERY_STRING']; // devuelve la cadena de consulta si se ha enviado
echo $_SERVER['HTTP_REFERER']; // devuelve la URL de la pagina desde la cual se accedio a la pagina actual
echo $_SERVER['HTTP_ACCEPT']; // devuelve una cadena de caracteres que especifica los tipos MIME que el cliente puede recibir
echo $_SERVER['HTTP_ACCEPT_LANGUAGE']; // devuelve una cadena de caracteres que especifica el idioma natural que se utiliza
echo $_SERVER['HTTP_ACCEPT_ENCODING']; // devuelve una cadena de caracteres que especifica las codificaciones de contenido que el cliente acepta
echo $_SERVER['HTTP_CONNECTION']; // devuelve una cadena de caracteres que especifica las conexiones activas
echo $_SERVER['HTTP_USER_AGENT']; // devuelve una cadena de caracteres que especifica el agente de usuario del cliente
echo $_SERVER['REMOTE_PORT']; // devuelve el numero de puerto del cliente
echo $_SERVER['SCRIPT_FILENAME']; // devuelve la ruta absoluta del script actual
echo $_SERVER['SERVER_ADMIN']; // devuelve la direccion de correo electronico del administrador del servidor
echo $_SERVER['SERVER_SIGNATURE']; // devuelve una cadena de caracteres que contiene la version del servidor y el sistema operativo
echo $_SERVER['PATH_TRANSLATED']; // devuelve la ruta del script actual despues de haber sido traducida por el servidor
echo $_SERVER['SCRIPT_URI']; // devuelve la URI del script actual
echo $_SERVER['SCRIPT_URL']; // devuelve la URL del script actual

echo '<br>';// salto de linea



// CONSTANTES
// Las constantes se declaran con la funcion define
define('PI',3.1416);
echo PI;
echo '<br>';



// ==================================== CONCATENACIONES ====================================
//al momento de concatenar un numero con una cadena de texto, el numero se convierte en cadena
$numero = 5;
echo 'El numero es '.$numero;
// otra forma de imprimir
echo "El numero es $numero";
echo '<br>';


// ==================================== OPERADORES ====================================
// Operadores aritmeticos
$suma = 5 + 3;
$resta = 5 - 3;
$multiplicacion = 5 * 3;
$division = 5 / 3;
$modulo = 5 % 3;
echo $suma;
echo $resta;
echo $multiplicacion;
echo $division;
echo $modulo;

// Operadores de asignacion
$numero = 5;
$numero += 3;
$numero -= 3;
$numero *= 3;
$numero /= 3;
$numero %= 3;
echo $numero;

// Operadores de comparacion
$numero1 = 5;
$numero2 = 3;
$igual = $numero1 == $numero2;
$diferente = $numero1 != $numero2;
$mayor = $numero1 > $numero2;
$menor = $numero1 < $numero2;
$mayorIgual = $numero1 >= $numero2;
$menorIgual = $numero1 <= $numero2;
echo $igual;
echo $diferente;
echo $mayor;
echo $menor;
echo $mayorIgual;
echo $menorIgual;

// Operadores logicos
$verdadero = true;
$falso = false;
$and = $verdadero && $falso;
$or = $verdadero || $falso;
$not = !$verdadero;
echo $and;
echo $or;
echo $not;

// ==================================== ESTRUCTURAS DE CONTROL ====================================

// IF
$numero = 5;
if($numero > 3){
    echo 'El numero es mayor a 3';
}

echo '<br>';// salto de linea

// IF ELSE
$numero = 5;
if($numero > 3){
    echo 'El numero es mayor a 3';
}else{
    echo 'El numero es menor o igual a 3';
}

echo '<br>';// salto de linea

// IF ELSEIF ELSE
$numero = 5;
if($numero > 3){
    echo 'El numero es mayor a 3';
}elseif($numero == 3){
    echo 'El numero es igual a 3';
}else{
    echo 'El numero es menor a 3';
}

echo '<br>';// salto de linea

// SWITCH
$numero = 5;
switch($numero){
    case 1:
        echo 'El numero es 1';
        break;
    case 2:
        echo 'El numero es 2';
        break;
    case 3:
        echo 'El numero es 3';
        break;
    default:
        echo 'El numero no es 1, 2 o 3';
        break;
}

echo '<br>';// salto de linea


// ==================================== CICLOS ====================================
// WHILE
$numero = 1;
while($numero <= 5){
    echo $numero;
    $numero++;
}

echo '<br>';// salto de linea

// DO WHILE
$numero = 1;
do{
    echo $numero;
    $numero++;
}while($numero <= 5);


echo '<br>';// salto de linea


// FOR
for($numero = 1; $numero <= 5; $numero++){
    echo $numero;
}

echo '<br>';// salto de linea

// FOREACH
$colores = array('rojo','verde','azul');
foreach($colores as $color){
    echo $color;
}

echo '<br>';// salto de linea

// FOREACH CON ARRAYS ASOCIATIVOS
$persona = array('nombre'=>'Juan','apellido'=>'Perez','edad'=>25);
foreach($persona as $clave=>$valor){
    echo $clave.' : '.$valor;
}

echo '<br>';// salto de linea



// ==================================== FUNCIONES ====================================
// Las funciones se declaran con la palabra function y sirven para encapsular codigo y reutilizarlo
function suma($numero1,$numero2){
    return $numero1 + $numero2;
}
echo suma(5,3);

// ==================================== CLASES ====================================
// Las clases se declaran con la palabra class y sirven para encapsular codigo y reutilizarlo de una forma mas estructurada
// Las clases tienen propiedades y metodos (funciones), basicamente se crea un objeto a partir de una clase
class Persona{
    public $nombre;
    public $edad;
    public function __construct($nombre,$edad){
        $this->nombre = $nombre;
        $this->edad = $edad;
    }
    public function saludar(){
        echo 'Hola mi nombre es '.$this->nombre.' y tengo '.$this->edad.' años';
    }
}
$persona = new Persona('Juan',25);
$persona->saludar();

// ==================================== HERENCIA ====================================
// La herencia es una caracteristica de la POO que permite que una clase herede propiedades y metodos de otra clase
class Empleado extends Persona{
    public $sueldo;
    public function __construct($nombre,$edad,$sueldo){
        parent::__construct($nombre,$edad);
        $this->sueldo = $sueldo;
    }
    public function trabajar(){
        echo 'Estoy trabajando y gano '.$this->sueldo;
    }
}
$empleado = new Empleado('Pedro',30,5000);
$empleado->saludar();
$empleado->trabajar();

// ==================================== INTERFACES ====================================
// Las interfaces son una caracteristica de la POO que permite definir metodos que deben ser implementados por las clases que la implementen
// basicamente en las interfaces se crean metodos sin cuerpo que se deben implementar en las clases que la implementen, es decir, se define que metodos deben tener las clases que implementen la interfaz
// mas no se define como deben ser implementados
interface Animal{
    // los metodos de las interfaces no tienen cuerpo
    public function hablar();
}
class Perro implements Animal{
    // las clases que implementan una interfaz deben implementar todos los metodos de la interfaz
    public function hablar(){
        echo 'Guau guau';
    }
}
$perro = new Perro();
$perro->hablar();



?>