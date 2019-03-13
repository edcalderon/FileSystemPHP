<?php

$file_name = $_GET['name'];

$file_read = fopen($file_name,"r");

$contents = fread($file_read,filesize($file_name));

fclose($file_read);


?>

<html>
    
    <form action="edit_file.php" method="POST">
        <textarea name="edit" cols ="100" rows="20"> <?php echo $contents; ?> </textarea><p>
        <input type="hidden" name="file_name" value="<?php $file_name;?>">
        <input type="submit" value="Guardar">
        </p>
    </form>    
    
</html>