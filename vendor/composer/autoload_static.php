<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit76c6930e04fd41abb79ffe43c59df82d
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stripe\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stripe\\' => 
        array (
            0 => __DIR__ . '/..' . '/stripe/stripe-php/lib',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit76c6930e04fd41abb79ffe43c59df82d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit76c6930e04fd41abb79ffe43c59df82d::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
