<?php

namespace HexletBasics\Conditionals\Elvis;

// BEGIN (write your solution here)
function generateAmount($quantity, $cost) 
{
    $mult = $cost * 3;

    $product = $quantity ?: $mult;
    return $product ;
}
// END
