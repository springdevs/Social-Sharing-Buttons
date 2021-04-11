<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7ada588a49a98215bf74e82fd6bb7a30
{
    public static $files = array (
        'd081bacdd5f032d1090e39499af9e13c' => __DIR__ . '/../..' . '/includes/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Springdevs\\SocialShare\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Springdevs\\SocialShare\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7ada588a49a98215bf74e82fd6bb7a30::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7ada588a49a98215bf74e82fd6bb7a30::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7ada588a49a98215bf74e82fd6bb7a30::$classMap;

        }, null, ClassLoader::class);
    }
}