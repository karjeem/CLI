<?php
if(!defined("STDIN")) { define('STDIN', fopen('php://stdin', 'r')); }

class CLI {
    public static function getLine($prompt = '') {
        echo $prompt . "> ";
        return trim(fgets(STDIN));
    }

    public static function getInt($prompt = '') {
        echo $prompt . "> ";
        $input = (int) trim(fgets(STDIN));
        return is_numeric($input) ? $input : false;
    }

    public static function say($text = '') {
        echo $text;
    }

    public static function sayLine($text = '') {
        echo $text . "\n";
    }
}
?>
