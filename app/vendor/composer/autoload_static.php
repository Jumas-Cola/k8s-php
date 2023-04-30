<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit769e569fe09abde7aab7f5d1ec8917b3
{
    public static $prefixLengthsPsr4 = array (
        'J' => 
        array (
            'JumasCola\\K8sPhp\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'JumasCola\\K8sPhp\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit769e569fe09abde7aab7f5d1ec8917b3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit769e569fe09abde7aab7f5d1ec8917b3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit769e569fe09abde7aab7f5d1ec8917b3::$classMap;

        }, null, ClassLoader::class);
    }
}