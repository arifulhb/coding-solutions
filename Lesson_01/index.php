<?php 

echo 'Welcome to BinaryGap Test'.PHP_EOL;


binaryGap(529);

function binaryGap($n){

    $binary = decbin($n);
    $bnry = explode('1', trim($binary, "0"));

    $longest = 0;
    foreach($bnry as $key=>$value){
        if(strlen($value)>$longest){
            $longest = strlen($value);
        }
    } 
    return $longest;
}



