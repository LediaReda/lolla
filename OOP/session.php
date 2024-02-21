<?php


class Session
{
    public static function setSession($key, $value)
    {
        $_SERVER[$key] = $value;
    }

    public static function getSession($key)
    {
        return $_SERVER[$key] ?? null;
    }

    public static function 
}
