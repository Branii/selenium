<?php 

class Config {

    private static $config;

    public static function getConfig() {
        return self::$config ?: self::$config = [
            '->' => 'mysql:host=localhost;dbname=selenium',
            '-->' => 'root',
            '--->' => 'root',
        ];
    }
 
}