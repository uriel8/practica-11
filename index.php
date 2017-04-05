<html>
    <head>
        <title>Practica 11</title>
    </head>
    <body>
        <?php
        //Nombre del alumno Uriel Gurria Malpica
        //Usando variables de php
        echo "<h1>Variables</h1>";
        $nombre='Uriel';
        $apellidos='Gurria Malpica';
        $edad=21;
        $salario= 777345.12;
        $fecha_nacimiento='08/05/1995';
        echo 'Nombre  completo '.$nombre.'</br>';
        echo $apellidos.'</br>';
        echo $edad.'</br>';
        echo $salario.'</br>';
        echo $fecha_nacimiento.'</br>';
        
        ?>
        <p>Dime tu nombre:</p>
        <input type="text" value =""
        //<?php 
        //    echo $row['nombre']; 
        //?> >
    </body>
</html>