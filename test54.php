<?php

namespace HexletBasics\Conditionals\ElseIfStatement;

// BEGIN (write your solution here)
function whoIsThisHouseToStarks($name)
{   if ($name === "Karstark" || $name ==="Tully"){
        return 'friend';
    } elseif($name=== "Lannister" || $name === "Frey"){
        return 'enemy';
    }
    return 'neutral';
}
// END