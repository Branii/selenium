<?php 

use Facebook\WebDriver\Remote\DesiredCapabilities;
use Facebook\WebDriver\Chrome\ChromeDriver;
use Facebook\WebDriver\Chrome\ChromeOptions;

class Core {

    private static $driver;

    public static function startDriver(){
        $options = new ChromeOptions();
        $desiredCapabilities = DesiredCapabilities::chrome();
        $desiredCapabilities->setCapability(ChromeOptions::CAPABILITY, $options);
        $options->addArguments(['--headless']);
        return self::$driver = ChromeDriver::start($desiredCapabilities);
    }

    public static function stopDriver(){
        return self::$driver->quit();
    }

}