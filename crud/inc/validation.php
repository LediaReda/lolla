<?php




function requiredInput($value)
{
    $srt = trim($value);
    if(strlen($srt) > 0)
    {
        return true;
    }
    return false;
}


function santString($value)
{
    $str = trim($value);
    $str = filter_var($str,FILTER_SANITIZE_STRING);
    return $str;
}

function santInput($email)
{
    $str = trim($email);
    $str = filter_var($str,FILTER_SANITIZE_EMAIL);
    return $email ;
}



?>