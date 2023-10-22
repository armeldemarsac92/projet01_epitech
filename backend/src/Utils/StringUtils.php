<?php

namespace App\Utils;

class StringUtils
{
    public function snakeToCamelCase($string)
    {
        $str = str_replace(' ', '', ucwords(str_replace('_', ' ', $string)));
        return ucfirst($str);
    }
}