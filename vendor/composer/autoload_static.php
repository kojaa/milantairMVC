<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfe73e37be879a7948b2ea71efb61a283
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfe73e37be879a7948b2ea71efb61a283::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfe73e37be879a7948b2ea71efb61a283::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}