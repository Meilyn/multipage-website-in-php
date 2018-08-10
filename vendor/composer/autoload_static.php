<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitaeb10981872be241bb74e8693113634e
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'upload' => __DIR__ . '/..' . '/verot/class.upload.php/src/class.upload.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitaeb10981872be241bb74e8693113634e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitaeb10981872be241bb74e8693113634e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitaeb10981872be241bb74e8693113634e::$classMap;

        }, null, ClassLoader::class);
    }
}
