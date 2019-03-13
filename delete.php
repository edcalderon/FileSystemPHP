<?php

$file = $_GET['name'];

delete_dir($file);

function delete_dir($file)
{
    $files = glob($file . '*', GLOB_MARK);
    foreach ($files as $file) {
        if (is_dir($file)) {
            delete_dir($file);
        } 
        else {
            unlink($file);
       }
    }
    @rmdir($file);  
}
        


echo "Archivo eleminado <a href='index.php'> Click aqui para continuar </a>";

?>