<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Primera Página PHP</title>
</head>
<body>
    <?php
        echo "<h1>Clases de PHP</h1>";
        $nombre="12 días con PHP";
        echo "Esta es mi primera página con PHP en el Curso denominado ".$nombre;
        $numero1=20;
        $numero2=3;
        $suma=$numero1+$numero2;
        echo "<br>";
        echo "La suma de $numero1 y $numero2 es $suma";
        $suma+=5;
        echo "<br>";
        echo "La nueva suma es $suma";

        //Ejercicio 1: Calcule la hipotenusa a partir del valor de sus dos catetos (Trángulo rectángulo)
        $a=4;
        $b=3;
        $c = ($a**2+$b**2)**0.5;
        echo "<br><h3>Ejercicio 3</h3>";
        echo "<p style='color:red'>La hipotenusa es $c</p>";
    ?>
        <p style="color:red">La hipotenusa es <?=$c ?></p>
    <!-- Ejercicio 2: Imprimir valores de los siguientes tipos: int, String, float, boolean   !-->

    <?php
        $int=5;
        $string='Hoy día Viernes 25 Jun 2021';
        $float=2.5;
        $bool=false;
        $int=10;
        var_dump($int); echo "<br>";
        var_dump($string);  echo "<br>";
        echo gettype($float);  echo "<br>";
        echo gettype($bool);
        echo is_double($float);

    ?>

    <!--  Ejercicio 3: Imprimir la tabla de multiplicar del 5 con PHP !-->
    <h3>Tabla de Multiplicar del 5</h3>
    <?php 
    
    $i=0;
    define("numero",5);

    ?>
    <table>
    <tr>
        <td><?=++$i ?></td>
        <td>x</td>
        <td><?=numero?></td>
        <td>=</td>
        <td><?=($i*numero)?></td>
    </tr>
    <tr>
        <td><?=++$i ?></td>
        <td>x</td>
        <td><?=numero?></td>
        <td>=</td>
        <td><?=($i*numero)?></td>
    </tr>
    <tr>
        <td><?=++$i ?></td>
        <td>x</td>
        <td><?=numero?></td>
        <td>=</td>
        <td><?=($i*numero)?></td>
    </tr>
    <tr>
        <td><?=++$i ?></td>
        <td>x</td>
        <td><?=numero?></td>
        <td>=</td>
        <td><?=($i*numero)?></td>
    </tr>
    </table>

    <?=settype($i, "boolean") ?>
</body>
</html>