<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estructuras de Control PHP</title>
</head>
<body>
<h1>Estructuras de Control PHP</h1>
<h2>Ejercicio 1: usando If</h2>
<?php
    $color="blue"; //red, green, blue ,\
    if($color=="red"){
 ?>     
<p style="color:red">Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat eaque esse delectus quo! Et asperiores illo consectetur provident tempora ducimus.</p>
 <?php   
 }
 
 if($color=="green"){
 ?>
<p style="color:green">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur hic dolor at quo iusto laborum sit adipisci quos expedita saepe, amet nisi nostrum nesciunt omnis tempore, a assumenda molestias. Reiciendis necessitatibus, natus rerum sapiente distinctio eaque dolores harum facilis non minus dolorem nulla autem, est fuga ducimus? Odit, dicta accusantium?</p>
 <?php
 }
 
 if($color=="blue"){
?>
<p style="color:blue">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, similique?</p>
<?php
 }

 $color2="red";

?> 
<h2>Ejercicio2: Incrustando PHP</h2>  
<p style="color:<?=$color2 ?>">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, rem atque. Provident ullam cumque cum!</p>

<h2>Ejercicio3: tabla de Multiplicar</h2>
<table border="1">
    <tr>
        <th>Número</th>
        <th>X</th>
        <th>Constante</th>
        <th>=</th>
        <th>Resultado</th>
    </tr>

   <?php
   define("NUMERO",12);
   $i=1;
   while($i<=NUMERO){
    $i++;
    if($i%2!=0){ //al impar
        continue;
    }
    ?>
    <tr>
        <td><?=$i?></td>
        <td>x</td>
        <td><?=NUMERO?></td>
        <td>=</td>
        <td><?=($i*NUMERO)?></td>
    </tr>
    <?php 
    
    } ?>
</table>

<h2>Ejercicio 4: Cuadrados de los 20 primeros números</h2>
<ul>
<?php 
for($i=1;$i<=20;$i++){
?>
    <li style="color:orangered">La potencia de <?=$i?> es <?=($i**2)?></li>
<?php 
    if($i==15){
        break;
    }
}
?>
</ul>
<h2>Ejercicio 5: Dia de la Semana</h2>
<?php
$numeroDia=7;

switch($numeroDia){
case 1:
    echo "Lunes";
    break;
case 2:
    echo "Martes";
    break;
case 3:
    echo "Miércoles";
    break;
case 4:
    echo "Jueves";
    break;  
case 5:
    echo "Viernes";
    break;
case 6:
    echo "Sábado";
    break; 
case 7:
    echo "Domingo";
    break;
default:
    echo "No se corresponde con ningún día";
}

?>
</body>
</html>