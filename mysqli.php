<?php 
$db = array ( 
    'host' => 'localhost', 
    'user' => 'root', 
    'pass' => 'usbw', 
    'dbname' => 'test' 
); 

if(!mysqli_connect($db['host'], $db['user'], $db['pass'], $db['dbname'])) 
{ 
    trigger_error('Fout bij verbinden: '.mysqli_error()); 
} 
elseif(!mysqli_select_db($db['dbname'])) 
{ 
    trigger_error('Fout bij selecteren database: '.mysqli_error()); 
} 
else 
{ 
    $sql = "SET SESSION sql_mode = 'ANSI,ONLY_FULL_GROUP_BY'"; 
    if(!mysqli_query($sql)) 
    { 
        trigger_error('MySQL in ANSI niet mogelijk'); 
    } 
} 

//echo uit DB

?>