<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit124b6c0371a1106caa6180ced3616f3e
{
    public static $prefixLengthsPsr4 = array (
        'm' => 
        array (
            'models\\' => 7,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/models',
        ),
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/controllers',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit124b6c0371a1106caa6180ced3616f3e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit124b6c0371a1106caa6180ced3616f3e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit124b6c0371a1106caa6180ced3616f3e::$classMap;

        }, null, ClassLoader::class);
    }
}
