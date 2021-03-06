<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit14aa3e7e87a1c901d68349632ae3aeab
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Wetas\\CoreMvcFramework\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Wetas\\CoreMvcFramework\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit14aa3e7e87a1c901d68349632ae3aeab::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit14aa3e7e87a1c901d68349632ae3aeab::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit14aa3e7e87a1c901d68349632ae3aeab::$classMap;

        }, null, ClassLoader::class);
    }
}
