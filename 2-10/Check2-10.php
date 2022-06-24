<?php
function Rectangular($vertical, $widht, $height){
    $volume = $vertical * $widht * $height;
    print "直方体の体積は".$volume."です。";
}

Rectangular(5,10,8);
?>