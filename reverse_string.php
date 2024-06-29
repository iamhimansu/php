<?php

// Reverse string
$string = 'himanshu raj aman';

$rev = '';
$nextIndex = -1;
while(isset($string[++$nextIndex])){
   $rev = $string[$nextIndex] . $rev;
};
echo $rev;
