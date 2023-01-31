<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9b106fff36f847e7118e2b9f1c435c87
{
    public static $prefixesPsr0 = array (
        'R' => 
        array (
            'Rain' => 
            array (
                0 => __DIR__ . '/..' . '/rain/raintpl/library',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit9b106fff36f847e7118e2b9f1c435c87::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit9b106fff36f847e7118e2b9f1c435c87::$classMap;

        }, null, ClassLoader::class);
    }
}
