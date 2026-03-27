<?php

function temperatura($celsius){
$f = $celsius*9.5+32;
return $f;
}


function exibir($f){
    $temp = $f;
    echo "Fº:".$f;

}

?>