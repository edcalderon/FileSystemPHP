<!DOCTYPE html>
<?php

  $father_path = "..";
  
?>
        
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sistema de archivos</title>
    </head>
    <body>
        <h1> <?php echo dirname(__FILE__);?></h1> 
        
        <img src="/icons/back.gif" alt="[PARENTDIR]"> 
        
        <a href="<?php echo $father_path; ?>">Volver </a><p></p>  
        
       <h2> Archivos y carpetas: </h2>
       
        <?php
         
        $full_path = ".";
        
        $dir = opendir($full_path) or die ("No se puede abrir el dir ");
        
        while($file = readdir($dir)):
        
            if ($file == "create_folder.php" or $file == "nbproject" or $file == "." or $file == ".." or $file == "index.php" or $file == "create_file.php" or $file == "edit_file.php" or $file == "delete.php" or $file == "edit.php") {
                continue;
            }   

            echo "<a href='$file'>$file</a> ....<a href='edit.php?name=$file'> Edit </a> ...... <a href='delete.php?name=$file'> Delete </a><br>";
            
   
        endwhile;
            
        closedir($dir);
 
        ?>
        <h2> Crear archivos y carpetas </h2><p></p> 
        <p></p>  
        <form action="create_file.php" method="POST">
            Nombre Archivo: <input type="text" name="name"><p>
            <input type="submit" value="Crear Archivo">
            
            </p>

        </form>
        
        <form action="create_folder.php" method="POST">
            Nombre Carpeta: <input type="text" name="name"><p>
            <input type="submit" value="Crear Carpeta">
            <p>
        </form>
        

       
    </body>
</html>
