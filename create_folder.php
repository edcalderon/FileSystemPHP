<?php
 
$file_name = $_POST['name'];



function createWritableFolder($folder)
{
    if($folder != '.' && $folder != '/' ) {
	$result = mkdir($folder, 0777, true);
    }
    if (!$result) {
        throw new Exception('Error encontrado');
    }
}


try {
    createWritableFolder($file_name);
    echo "Carpeta creada Correctamente <a href='index.php'>  Click aqui para continuar </a> ";
    }
    catch (Exception $e) {
        echo "Error $e <a href='index.php'>  Click aqui para continuar </a> ";
    }
   
$full_path = ".";

$file = scandir($full_path);

foreach (glob("*.php") as $file) {
    @copy($file,"$file_name/$file" );
}

?>
