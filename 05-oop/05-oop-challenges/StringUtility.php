<?php
//Challenge 2
class StringUtility{
    public static function shout($string){
        return strtoupper($string) . '!';
    }
    public static function whisper($string){
        return strtolower($string) . '.';
    }
    public static function repeat($string, $times = 2){
        return str_repeat($string, $times) .' ';
    }
}

$string1 = new StringUtility();
echo StringUtility::shout("salif kante");
echo '<br>';
echo StringUtility::whisper("SALIF KANTE");
echo '<br>';
echo StringUtility::repeat("SALIF KANTE");

