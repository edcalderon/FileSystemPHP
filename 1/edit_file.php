<?php

$edit = $_POST['edit'];

$file_name = $_POST['file_name'];

$file = @fopen($file_name,'w');
        
@fwrite($file,$edit);

@fclose($file);

echo "Fichero guardado <a href='index.php'> Click aca para continuar </a>";

?>       
     
