<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit84eff476e9d8b9c0a207e90a4769445f
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

        spl_autoload_register(array('ComposerAutoloaderInit84eff476e9d8b9c0a207e90a4769445f', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit84eff476e9d8b9c0a207e90a4769445f', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit84eff476e9d8b9c0a207e90a4769445f::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}