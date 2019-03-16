<?php

@$file = $_GET['name'];

if (!empty($file)){

echo "Deseas copiar el archivo ($file) ? <a href='copy.php?pastename=$file'> click aqui </a><br>";

}
@$pastefile = $_GET['pastename'];
        
if (!empty($pastefile)){
    echo "Archivo copiado al portapapeles ya puedes pegarlo en la carpeta deseada ";
    echo " <a href='index.php?name=$pastefile'> Clik aqui para continuar <a/><br>";
    
}
if (empty($pastefile)){
    echo "<a href='idex.php'> click aqui para volver </a>";
}