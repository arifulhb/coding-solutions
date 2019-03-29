<?php 

const ENTRY_FEE = 2;
const FIRST_HOUR = 3;
const CONG_HOUR = 4;

/**
 * $e string "HH:MM"
 * $l string "HH:MM"
 */
function solution ($e, $l){

    $total_hours =0;
    $total_hours = totalHourCount($e, $l);
    echo "hours: ".$total_hours.PHP_EOL;
   
    $first_hour = 1;
    $total_hours = $total_hours - $first_hour;

     
    $fee = ENTRY_FEE;

    if ($total_hours == 0){
        $fee = $fee + FIRST_HOUR;

    } else {

        $fee = $fee + FIRST_HOUR;
        $fee = $fee + ($total_hours * CONG_HOUR);
    }

    echo "Total Fee: ".$fee.PHP_EOL.PHP_EOL;


    return $fee;
}

echo "Test 1: ".PHP_EOL;
echo "10:00 - 13:21".PHP_EOL;
solution("10:00", "13:21");


echo PHP_EOL."Test 2: ".PHP_EOL;
echo "09:42", "11:42".PHP_EOL;
solution("09:42", "11:42");



echo PHP_EOL."Test 3 ".PHP_EOL;
echo "08:00", "09:00".PHP_EOL;
solution("08:00", "09:00");


function totalHourCount ($e, $l){

    $start = strtotime($e);
    $end = strtotime($l);
    $difference = ceil(round(abs($start - $end) / 3600, 2));

    return $difference;

}

