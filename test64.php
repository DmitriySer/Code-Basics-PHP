<?php

namespace HexletBasics\Loops\EdgeCases;

// BEGIN (write your solution here)
function isArgumentsForSubstrCorrect ($string, $number, $length)
{
    if (($length <= 0) || ($number <= 0) || ($number > (strlen($string))) || ($length + $number > (strlen($string)))) {
    return false;
    } else {
        return true;
    }
}
// END
