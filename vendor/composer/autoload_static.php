<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit428c4c338e79fbffc0339543f50f48c9
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Component\\CssSelector\\' => 30,
        ),
        'B' => 
        array (
            'BaseCRM\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Component\\CssSelector\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/css-selector',
        ),
        'BaseCRM\\' => 
        array (
            0 => __DIR__ . '/..' . '/basecrm/basecrm-php/lib',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit428c4c338e79fbffc0339543f50f48c9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit428c4c338e79fbffc0339543f50f48c9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit428c4c338e79fbffc0339543f50f48c9::$classMap;

        }, null, ClassLoader::class);
    }
}