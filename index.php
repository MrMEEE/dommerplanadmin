<?php

$files = scandir(".");

foreach($files as $file){

    $name=explode("-",$file);
    if($name[0]=="dommerplan")
        echo "$file<br>";
}
?>