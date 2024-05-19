<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitba8d1956e5769fea620c194949081356
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Artemis\\Shopify\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Artemis\\Shopify\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitba8d1956e5769fea620c194949081356::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitba8d1956e5769fea620c194949081356::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitba8d1956e5769fea620c194949081356::$classMap;

        }, null, ClassLoader::class);
    }
}
