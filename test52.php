<?php

namespace HexletBasics\Conditionals\IfElse;

// BEGIN
function normalizeUrl($url)
{
    if (strpos($url, 'http://') === 0) {
        $realUrl = substr($url, 7);
    } else {
        $realUrl = $url;
    }

    return "https://{$realUrl}";
}
// END