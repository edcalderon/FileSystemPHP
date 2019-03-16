<?php

@$file = $_GET['name'];
@$ToCopy = $_GET['toCopy'];


if (!empty($file)){

echo "Deseas copiar el archivo ($file) ? <a href='copy.php?toCopy=$file'> click aqui </a><br>";

}
     
if (!empty($ToCopy)){
    echo "Archivo copiado al portapapeles ya puedes pegarlo en la carpeta deseada ";
    echo " <a href='index.php?name=$ToCopy'> Clik aqui para continuar <a/><br>";
    
}
if (empty($ToCopy)){
    echo "<a href='index.php'> click aqui para volver </a>";
}