<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5fac674ad191c76d05791d8d0bdaab2b
{
    public static $files = array (
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Ctype\\' => 23,
            'Symfony\\Component\\Yaml\\' => 23,
            'Symfony\\Component\\Process\\' => 26,
            'Symfony\\Component\\EventDispatcher\\' => 34,
        ),
        'G' => 
        array (
            'Github\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
        'Symfony\\Component\\Yaml\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/yaml',
        ),
        'Symfony\\Component\\Process\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/process',
        ),
        'Symfony\\Component\\EventDispatcher\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/event-dispatcher',
        ),
        'Github\\' => 
        array (
            0 => __DIR__ . '/..' . '/knplabs/github-api/lib/Github',
        ),
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'SensioLabs\\AnsiConverter' => 
            array (
                0 => __DIR__ . '/..' . '/sensiolabs/ansi-to-html',
            ),
        ),
        'G' => 
        array (
            'Guzzle\\Tests' => 
            array (
                0 => __DIR__ . '/..' . '/guzzle/guzzle/tests',
            ),
            'Guzzle' => 
            array (
                0 => __DIR__ . '/..' . '/guzzle/guzzle/src',
            ),
            'GitWrapper' => 
            array (
                0 => __DIR__ . '/..' . '/cpliakas/git-wrapper/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5fac674ad191c76d05791d8d0bdaab2b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5fac674ad191c76d05791d8d0bdaab2b::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit5fac674ad191c76d05791d8d0bdaab2b::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
