<?php
$id=$_POST['id'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$fecha_nacimiento=$_POST['fecha_nacimiento'];
$estado_civil=$_POST['estado_civil'];
$cell=$_POST['cell'];
$email=$_POST['email'];
$direccion=$_POST['direccion'];
$hijos=$_POST['hijos'];

//conecta server

$servidor="localhost";
$usuario="anunciad_michael";
$password="maicolv";
$bd="anunciad_icam";
//sql

$conectar= new mysqli($servidor,$usuario,$password,$bd) or die("no se pudo conectar al servidor");
$conexion= $conectar;
$consulta= "INSERT INTO `jovenes`(`id`, `nombre`, `apellido`, `fecha_nacimiento`, `estado_civil`, `cell`, `email`, `direccion`, `hijos`) 
VALUES ('$id',  '$nombre',  '$apellido',  '$fecha_nacimiento',  '$estado_civil',  '$cell', '$email', '$direccion', '$hijos')";

//imprime_resultado
$ejecutar_consulta = $conectar->query(utf8_encode($consulta));
if($ejecutar_consulta){
    echo 'Ha Registrado Los Siguientes Datos';

    echo '<br><br>';
    echo 'id: '.$id;
    echo '<br><br>';
    echo 'nombre: '.$nombre;
    echo '<br>';
    echo 'apellido: '.$apellido;
    echo '<br>';
    echo 'fecha_nacimiento: '.$fecha_nacimiento;
    echo '<br>';
    echo 'estado_civil: '.$estado_civil;
    echo '<br>';
    echo 'cell: '.$cell;
    echo '<br>';
    echo 'email: '.$email;
    echo '<br>';    
    echo 'direccion: '.$direccion;
    echo '<br>';
    echo 'hijos: '.$hijos;
    echo '<br>';
    
    echo '<a href="jovenes.html">Volver</a>';
}
else
    echo 'No se pudo insertar los datos';
?>