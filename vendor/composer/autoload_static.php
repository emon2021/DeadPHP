<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitaed34f99ed433251ce183f696947f67f
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
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitaed34f99ed433251ce183f696947f67f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitaed34f99ed433251ce183f696947f67f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitaed34f99ed433251ce183f696947f67f::$classMap;

        }, null, ClassLoader::class);
    }
}
