<?php
$conectar=@mysql_connect('localhost','root',' ');
if(!$conectar){
echo("conectado a mysql"."<br>");
}else{
echo("NO conectado a mysql"."<br>");
}

$selecciona_base=@mysql_select_db('cuestionario','$conectar');
if(!$selecciona_base){
echo("base de datos seleccionada");
}
else{
die("NO has seleccionado la base de datos");
}
$preg1=$_POST['txt_nombre'];
$preg2=$_POST['txt_edad'];
$preg3=$_POST['txt_dato1'];
$preg4=$_POST['txt_resp1'];
$preg5=$_POST['txt_resp2'];
$preg6=$_POST['txt_resp3'];
$preg7=$_POST['txt_resp4'];
$preg8=$_POST["txt_resp5"];


$insertar="insert into preguntas values('".$nombre."','".$edad."','".$dato1."','".$resp1."','".$resp2."','".$resp3."¨´,'".$resp4."¨´,'".$resp5."¨´,'")";
$ejecutar=@mysql_query('$insertar','$conectar');
if(!$ejecutar){
echo("Registro guardado");
}else{
die("El registro no se guardo");
} 
?>