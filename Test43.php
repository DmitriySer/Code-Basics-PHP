<?php

namespace HexletBasics\DefineFunctions\DefaultArguments;

// BEGIN (write your solution here)
function getHiddenCard($x,$y=4)
{
    return (str_repeat('*',$y).substr($x,-4));
}
// END
