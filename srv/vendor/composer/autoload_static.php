<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf360f1458f51e3a6c41624336b7cc153
{
    public static $files = array (
        '37536c67338bb44a889bc63cd78e4b51' => __DIR__ . '/../..' . '/app.php',
    );

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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf360f1458f51e3a6c41624336b7cc153::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf360f1458f51e3a6c41624336b7cc153::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}