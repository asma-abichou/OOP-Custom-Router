<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite5a2d2eec6ef8ac58b1dbb096eea19b0
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
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite5a2d2eec6ef8ac58b1dbb096eea19b0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite5a2d2eec6ef8ac58b1dbb096eea19b0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite5a2d2eec6ef8ac58b1dbb096eea19b0::$classMap;

        }, null, ClassLoader::class);
    }
}
