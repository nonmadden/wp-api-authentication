<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitce4d8915baf4172e74ce65dcef7d0594
{
    public static $files = array (
        'c65d09b6820da036953a371c8c73a9b1' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/polyfills.php',
    );

    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
            'Facebook\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
        'Facebook\\' => 
        array (
            0 => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitce4d8915baf4172e74ce65dcef7d0594::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitce4d8915baf4172e74ce65dcef7d0594::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
