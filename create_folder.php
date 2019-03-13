<?php
 
$file_name = $_POST['name'];

createWritableFolder($file_name);

function createWritableFolder($folder)
{
    if($folder != '.' && $folder != '/' ) {
       mkdir($folder, 0777, true);
    }
    if (file_exists($folder)) {
        return is_writable($folder);
    }

}

$full_path = ".";

$file = scandir($full_path);




foreach (glob("*.php") as $file) {
    @copy($file,"$file_name/$file" );
}


?>

<html>
    <head>
        <title>title</title>    
    </head>
    <body>
        <p> 
          <?php echo "Carpeta creada  <a href='index.php'>  Click aqui para continuar </a> " ; ?>
        </p>
    </body>
</html>
    