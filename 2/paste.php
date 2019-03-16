<?php

@$file = $_GET['file'];
@$fileToPaste = $_GET['name'];
@$PasteName =  $_GET['pastename'];
@$PathFile = $_GET['pathfile'];

    function createFolder($folder){
        $path = "."; 
        echo dirname($folder); 
        echo $path;  
        if($folder != '.' && $folder != '/' ) {      
           mkdir("$path/$folder", 0777, true);   
           $file = scandir($folder);             
           foreach (glob("*") as $file) {
            @copy($file,"$path/$folder/$file" );
           }          
        }
        if (file_exists("$path/$folder")) {
            return is_writable($folder);
        }
    }

if (!empty($file)){

echo "Deseas pegar el archivo ($fileToPaste) en la carpeta ($file) ? <a href='paste.php?pastename=$fileToPaste&pathfile=$file'> click aqui </a><br>";

}

if (!empty($PasteName)){
    
    if(is_dir($PasteName)){
        createFolder($PasteName);
    }
    else{
    fopen("$filepath/$PasteName",'w');
    }

    echo "El archivo ($PasteName) ha sido copiado en la carpeta ($PathFile) ? <a href='index.php'> click aqui para continuar </a><br>";
}