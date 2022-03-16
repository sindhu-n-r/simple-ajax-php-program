<?php
// Array with queries
$a[] = "How far is Paris?" ;
$a[] = "How is the weather in Paris?"  ;
$a[] = "How can you reach Paris?"  ;
$a[] = "What time is it in Paris?";
$a[] = "What is the weather like in Paris?"  ;
$a[] = "What is the food like in Paris"  ;
$a[] = "Where is Paris?";
$a[] = "What is the most famous spot in Paris?"  ;
$a[] = "How much does it cost to go to Paris?"  ;
$a[] = "How long does it take to reach Paris?"  ;
$a[] = "How does Paris look at night?"  ;
$a[] = "What is it like in Paris?"  ;
$a[] = " ";
$a[] = " ";


$q = $_REQUEST["q"];

$hint = "SUGGESTIONS: ";


if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= " <br> $name";
            }
        }
    }
}


echo $hint === "" ? "no suggestion" : $hint;
?>