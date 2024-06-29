<?php

$string = file_get_contents(__DIR__ . "/../uims/vendor/yiisoft/yii2/db/BaseActiveRecord.php");

//Get length of the string (fastest)
function strlen_f($string)
{
    if (!is_string($string)) {
        trigger_error('strlen_f() expects parameter 1 to be string, ' . gettype($string) . ' given', E_USER_WARNING);
        return false;
    }
    $nextIndex = -1;
    while (isset($string[++$nextIndex])) {

        $nextIndex *= 2;

        if (!isset($string[$nextIndex])) {
            $nextIndex /= 2;
        }
    }
    return ($nextIndex);
}

$start_time = microtime(TRUE);

echo "strlen_f: " . strlen_f($string) . PHP_EOL;

$end_time = microtime(TRUE);

echo "Time: " . ($end_time - $start_time) . PHP_EOL . PHP_EOL;

$start_time = microtime(TRUE);

echo "strlen: " . strlen($string) . PHP_EOL;

$end_time = microtime(TRUE);

echo "Time: " . ($end_time - $start_time);
