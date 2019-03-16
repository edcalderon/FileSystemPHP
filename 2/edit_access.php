<?php

$file = $_GET['name'];

@$action = $_GET['action'];
  
function editAccess($file,$action){
    
    $value = "chmod $action $file ";
    
    shell_exec($value);

}

editAccess($file, $action);


$perms = fileperms($file);

switch ($perms & 0xF000) {
    case 0xC000: // socket
        $info = 's';
        break;
    case 0xA000: // symbolic link
        $info = 'l';
        break;
    case 0x8000: // regular
        $info = 'r';
        break;
    case 0x6000: // block special
        $info = 'b';
        break;
    case 0x4000: // directory
        $info = 'd';
        break;
    case 0x2000: // character special
        $info = 'c';
        break;
    case 0x1000: // FIFO pipe
        $info = 'p';
        break;
    default: // unknown
        $info = 'u';
}

// Owner
$info .= (($perms & 0x0100) ? 'r' : '-');
$info .= (($perms & 0x0080) ? 'w' : '-');
$info .= (($perms & 0x0040) ?
            (($perms & 0x0800) ? 's' : 'x' ) :
            (($perms & 0x0800) ? 'S' : '-'));

// Group
$info .= (($perms & 0x0020) ? 'r' : '-');
$info .= (($perms & 0x0010) ? 'w' : '-');
$info .= (($perms & 0x0008) ?
            (($perms & 0x0400) ? 's' : 'x' ) :
            (($perms & 0x0400) ? 'S' : '-'));

// World
$info .= (($perms & 0x0004) ? 'r' : '-');
$info .= (($perms & 0x0002) ? 'w' : '-');
$info .= (($perms & 0x0001) ?
            (($perms & 0x0200) ? 't' : 'x' ) :
            (($perms & 0x0200) ? 'T' : '-'));

echo "Los permisos actuales para ($file) son: $info <br><p></p>"; 

echo "<a href='edit_access.php?action=700&name=$file'> Cambiar: Solo dueño puede r-w-x </a><br><p></p>";

echo "<a href='edit_access.php?action=755&name=$file'> Cambiar: Todos los usurios pueden r-x solo el dueño puede w </a><br><p></p>";   

echo "<a href='edit_access.php?action=777&name=$file'> Cambiar: Todos los usurios pueden r-w-x  </a><br><p></p>"; 


?>

        <form action="edit_access.php" method="GET">
            Ingrese los permisos en forma octal deseado: <input type="text" name="action">
            <input type="hidden" name="name" value="<?php echo $file; ?>">     
            <input type="submit" value="Enviar">
        </form>

        <img src="/icons/back.gif" alt="[PARENTDIR]"> 
        
        <a href="index.php">Volver</a>





