<?php
function loadfile($filename){
    $loaded_dir=$filename;
    $i=0;
    while($i<4){
        if(file_exists($loaded_dir)){
            include $loaded_dir;
            return NULL;
        }else{
            $loaded_dir="../".$loaded_dir;
            $i=$i+1;
        }
    }
    echo("<h1>fault</h1>");
    return NULL;
}
loadfile("breathe.php");
?>
