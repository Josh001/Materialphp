<?php


function redirect($newlocation){
    header("Location: ". $newlocation);
    exit();
}
?>