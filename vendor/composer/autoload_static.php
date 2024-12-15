<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3b106b5e4248369c1a5d4a9da6f59de9
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '88254829cb0eed057c30eaabb6d8edc4' => __DIR__ . '/..' . '/amphp/amp/src/functions.php',
        '429ae5f14a13a9076791c19422e10996' => __DIR__ . '/..' . '/amphp/amp/src/Future/functions.php',
        'c8601a4144b50a7b548da082c89c4dc1' => __DIR__ . '/..' . '/amphp/amp/src/Internal/functions.php',
        '2a3c2110e8e0295330dc3d11a4cbc4cb' => __DIR__ . '/..' . '/php-webdriver/webdriver/lib/Exception/TimeoutException.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Component\\Process\\' => 26,
        ),
        'R' => 
        array (
            'Revolt\\' => 7,
        ),
        'F' => 
        array (
            'Facebook\\WebDriver\\' => 19,
        ),
        'A' => 
        array (
            'Amp\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Component\\Process\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/process',
        ),
        'Revolt\\' => 
        array (
            0 => __DIR__ . '/..' . '/revolt/event-loop/src',
        ),
        'Facebook\\WebDriver\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-webdriver/webdriver/lib',
        ),
        'Amp\\' => 
        array (
            0 => __DIR__ . '/..' . '/amphp/amp/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Config' => __DIR__ . '/../..' . '/app/config/Config.php',
        'Core' => __DIR__ . '/../..' . '/app/core/Core.php',
        'Database' => __DIR__ . '/../..' . '/app/database/Database.php',
        'Helper' => __DIR__ . '/../..' . '/app/model/Helper.php',
        'Lottery' => __DIR__ . '/../..' . '/app/lotteries/Lottery.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3b106b5e4248369c1a5d4a9da6f59de9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3b106b5e4248369c1a5d4a9da6f59de9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3b106b5e4248369c1a5d4a9da6f59de9::$classMap;

        }, null, ClassLoader::class);
    }
}
