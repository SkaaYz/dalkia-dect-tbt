<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit94aff42977547b48e87d10039c0cf15c
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit94aff42977547b48e87d10039c0cf15c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit94aff42977547b48e87d10039c0cf15c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit94aff42977547b48e87d10039c0cf15c::$classMap;

        }, null, ClassLoader::class);
    }
}
