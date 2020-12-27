<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0d9039e89f92c59b61abe60243d01a4c
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'admin\\LTE\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'admin\\LTE\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0d9039e89f92c59b61abe60243d01a4c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0d9039e89f92c59b61abe60243d01a4c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0d9039e89f92c59b61abe60243d01a4c::$classMap;

        }, null, ClassLoader::class);
    }
}