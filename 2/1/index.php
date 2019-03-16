<!DOCTYPE html>
<?php

  $father_path = "..";
  @$filepaste = $_GET['name'];
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
            
            if($file == "paste.php" or $file == "copy.php" or $file == "edit_access.php" or $file == ".git" or $file == "create_folder.php" or $file == "nbproject" or $file == "index.php" or $file == "create_file.php" or $file == "edit_file.php" or $file == "delete.php" or $file == "edit.php" or $file == "." or $file == ".." ) {
                continue;
                
            }
            
            if(empty($filepaste)){
                
            echo "<a href='$file'>$file</a> ....<a href='edit.php?name=$file'> Editar </a> ...... <a href='delete.php?name=$file'> Borrar </a>...... <a href='edit_access.php?name=$file'> Editar Permisos </a>...... <a href='copy.php?name=$file'> Copiar </a><br>";
            
            }
            if(!empty($filepaste)){
                
            echo "<a href='$file?name=$filepaste&file=$file'>$file</a> ....<a href='edit.php?name=$file'> Editar </a> ...... <a href='delete.php?name=$file'> Borrar </a>...... <a href='edit_access.php?name=$file'> Editar Permisos </a>...... <a href='copy.php?name=$file'> Copiar </a>...... <a href='paste.php?name=$filepaste&file=$file'> Pegar </a><br>";

            }
             
            

        endwhile;
            
        closedir($dir);
 
        ?>
        <h2> Crear archivos y carpetas </h2><p></p> 
        <p></p>  
        <form action="create_file.php" method="POST">
            Nombre Archivo: <input type="text" name="name">
            <input type="submit" value="Crear Archivo">
        </form>
        <p></p>  
        <form action="create_folder.php" method="POST">
            Nombre Carpeta: <input type="text" name="name">
            <input type="submit" value="Crear Carpeta">           
        </form>
        

       
    </body>
</html>
