<?php

@$file = $_GET['file'];
@$pastefile = $_GET['name'];
@$pastename = $_GET['pastename'];
@$filepath = $_GET['filepath'];



if (!empty($file)){

echo "Deseas pegar el archivo ($pastefile) en la carpeta ($file) ? <a href='paste.php?pastename=$pastefile&filepath=$file'> click aqui </a><br>";

}


if (!empty($pastename)){

    function createFolder($folder)
    {
        $path = ".";
        
        if($folder != '.' && $folder != '/' ) { 
            
           mkdir("$path/$folder", 0777, true);
        }
        if (file_exists("$path/$folder")) {
            return is_writable($folder);
        }
        #foreach (glob("*") as $file) {
        #    @copy($file,"$file_name/$file" );
        #}   

    }

    if(is_dir($pastename)){
        createFolder($pastename);
    }
    else{
    fopen("$filepath/$pastename",'w');
    
    }
 

    echo "El archivo ($pastename) ha sido copiado en la carpeta ($filepath) ? <a href='index.php'> click aqui para continuar </a><br>";

}