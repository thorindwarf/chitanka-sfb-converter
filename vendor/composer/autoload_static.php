<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf776506ff19882d7dc8905cbda1a6390
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Sfblib\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Sfblib\\' => 
        array (
            0 => __DIR__ . '/../..' . '/lib',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf776506ff19882d7dc8905cbda1a6390::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf776506ff19882d7dc8905cbda1a6390::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
