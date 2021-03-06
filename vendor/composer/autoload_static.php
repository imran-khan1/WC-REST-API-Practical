<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9a348966133a4531243cdb2922fdc6bb
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Automattic\\WooCommerce\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Automattic\\WooCommerce\\' => 
        array (
            0 => __DIR__ . '/..' . '/automattic/woocommerce/src/WooCommerce',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9a348966133a4531243cdb2922fdc6bb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9a348966133a4531243cdb2922fdc6bb::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
