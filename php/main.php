<?php

$strValue = "Symfony Components are a set of decoupled and reusable PHP libraries. Battle-tested in thousands of projects and downloaded billions of times, they've become the standard foundation on which the best PHP applications are built on";
$strCutValue = substr($strValue, 0, 74);
if ($strCutValue[strlen($strCutValue) - 1] != ' ') {
    $arrStrCut = str_split(strrev($strCutValue));
    for ($i = 0; $i < count($arrStrCut); $i++) {
        if ($arrStrCut[$i] == ' ') {
            $strCutValue = substr($strCutValue, 0, strlen($strCutValue) - $i);
            echo $strCutValue;
            break;
        }
    }
} else {
    echo $strCutValue;
}


function debug($value){
    echo '<pre>';
    echo print_r($value, true);
    echo '</pre>';
}
