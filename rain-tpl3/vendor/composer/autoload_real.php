<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit9b106fff36f847e7118e2b9f1c435c87
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

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInit9b106fff36f847e7118e2b9f1c435c87', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit9b106fff36f847e7118e2b9f1c435c87', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit9b106fff36f847e7118e2b9f1c435c87::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
