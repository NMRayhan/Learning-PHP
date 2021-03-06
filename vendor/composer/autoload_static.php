<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit287bd98ad0282e844c6097af862ce319
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
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit287bd98ad0282e844c6097af862ce319::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit287bd98ad0282e844c6097af862ce319::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit287bd98ad0282e844c6097af862ce319::$classMap;

        }, null, ClassLoader::class);
    }
}
