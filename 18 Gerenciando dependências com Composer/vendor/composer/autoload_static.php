<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita703835e0abb2f0bd2325da6c7877003
{
    public static $prefixesPsr0 = array (
        'M' => 
        array (
            'Monolog' => 
            array (
                0 => __DIR__ . '/..' . '/monolog/monolog/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInita703835e0abb2f0bd2325da6c7877003::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
