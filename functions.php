<?php
function security ($value)
{
    $space = trim($value);
    $tag   = strip_tags($space);
    $chars = htmlspecialchars($tag);
    return $chars;
}

function session ($session)
{
    if(isset($_SESSION[$session])):
        return trim($_SESSION[$session]);
    else:
        return false;
    endif;
}
?>