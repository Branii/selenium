<?php 

class Database extends Config { // instances 

    private static $connection;
    public static function openLink() {
       return self::$connection = new PDO(
            parent::getConfig()['->'],
            parent::getConfig()['-->'],
            parent::getConfig()['--->']
        );
    }

    public static function closeLink() {
        self::$connection = null;
    }

    // Prevent cloning
    private function __clone() {}

    // Prevent unserializing
    public function __wakeup() {}

}