<?php

$pre_file_name = $_POST['name'];
        
$ext = ".txt";

$file_name = $pre_file_name.$ext;

fopen($file_name,'w');


?>

<html>
    <head>
        <title>title</title>
    </head>
    <body>
        <form action="edit_file.php" method="POST">
            Ingresa Texto: <br><textarea name="edit" cols="100" rows="20"></textarea> <p>
            <input type="hidden" name="file_name" value="<?php echo $file_name; ?>">  
            <input type="submit" value="Guardar"> 
            </p>

        </form>
        
    </body>
</html>
    



