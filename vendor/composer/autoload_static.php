<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0177f7787442601773fb8c4dd60ee3de
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Moin35\\Lvcrud\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Moin35\\Lvcrud\\' => 
        array (
            0 => __DIR__ . '/../..' . '/package/moin35/Lvcrud/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0177f7787442601773fb8c4dd60ee3de::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0177f7787442601773fb8c4dd60ee3de::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0177f7787442601773fb8c4dd60ee3de::$classMap;

        }, null, ClassLoader::class);
    }
}
