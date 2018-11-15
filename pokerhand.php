<?php
$input       = "D4C4C8D8S4";
$arrNumber   = array();
$inputlength = strlen($input);
for ($i = 0; $i < $inputlength; $i++) {
    if ($i % 2 == 1) {
        $num = substr($input, $i, 1);
        array_push($arrNumber, $num);
    }
}
sort($arrNumber);
$a1            = $arrNumber[0];
$count         = 0;
$output        = "";
$inputlength_1 = count($arrNumber);
for ($i = 1; $i < $inputlength_1; $i++) {
    if ($output == "") {
        if ($arrNumber[$i] === $a1) {
            $output = "1P";
            $count  = 1;
        } else {
            $count = 0;
        }
    } else if ($output == "1P") {
        if ($arrNumber[$i] === $a1 && $count == 1) {
            $output = "3C";
        } else if ($arrNumber[$i] === $a1) {
            $count  = 1;
            $output = "2P";
        } else {
            $count = 0;
        }
    } else if ($output == "2P") {
        if ($arrNumber[$i] === $a1) {
            $output = "FH";
        }
    } else if ($output == "3C") {
        if ($arrNumber[$i] === $a1 && $count == $i) {
            $output = "4C";
        } else if ($arrNumber[$i] === $a1) {
            $output = "FH";
        } else {
            $count = 0;
        }
        ;
    }
    $a1 = $arrNumber[$i];
}
print_r($output);
?>
