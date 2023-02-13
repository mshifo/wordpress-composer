<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb609a0c7901ef2924c3156171f28df05
{
    public static $prefixLengthsPsr4 = array (
        'w' => 
        array (
            'wpscholar\\phpdotenv\\' => 20,
        ),
        'M' => 
        array (
            'M1\\Env\\' => 7,
        ),
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'wpscholar\\phpdotenv\\' => 
        array (
            0 => __DIR__ . '/..' . '/wpscholar/phpdotenv/src',
        ),
        'M1\\Env\\' => 
        array (
            0 => __DIR__ . '/..' . '/m1/env/src',
        ),
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
    );

    public static $prefixesPsr0 = array (
        'j' => 
        array (
            'johnpbloch\\Composer\\' => 
            array (
                0 => __DIR__ . '/..' . '/johnpbloch/wordpress-core-installer/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb609a0c7901ef2924c3156171f28df05::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb609a0c7901ef2924c3156171f28df05::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitb609a0c7901ef2924c3156171f28df05::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitb609a0c7901ef2924c3156171f28df05::$classMap;

        }, null, ClassLoader::class);
    }
}
