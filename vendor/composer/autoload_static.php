<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitddbc0794f381180dd1f8ade7eb731772
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/application',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitddbc0794f381180dd1f8ade7eb731772::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitddbc0794f381180dd1f8ade7eb731772::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitddbc0794f381180dd1f8ade7eb731772::$classMap;

        }, null, ClassLoader::class);
    }
}
