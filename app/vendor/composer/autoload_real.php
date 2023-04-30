<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit769e569fe09abde7aab7f5d1ec8917b3
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInit769e569fe09abde7aab7f5d1ec8917b3', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit769e569fe09abde7aab7f5d1ec8917b3', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit769e569fe09abde7aab7f5d1ec8917b3::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
