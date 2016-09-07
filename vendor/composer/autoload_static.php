<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitea939503be411f5478ca4976fabdaa0c
{
    public static $files = array (
        '185c4e929cdca231b7544ab54e07fde3' => __DIR__ . '/..' . '/symfony/intl/Symfony/Component/Intl/Resources/stubs/functions.php',
        'c964ee0ededf28c96ebd9db5099ef910' => __DIR__ . '/..' . '/guzzlehttp/promises/src/functions_include.php',
        'a0edc8309cc5e1d60e3047b5df6b7052' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/functions_include.php',
        '37a3dc5111fe8f707ab4c132ef1dbc62' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/functions_include.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
        ),
        'O' => 
        array (
            'Org_Heigl\\DateRange\\' => 20,
            'Org_Heigl\\DateRangeTest\\' => 24,
        ),
        'G' => 
        array (
            'GuzzleHttp\\Psr7\\' => 16,
            'GuzzleHttp\\Promise\\' => 19,
            'GuzzleHttp\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Org_Heigl\\DateRange\\' => 
        array (
            0 => __DIR__ . '/..' . '/org_heigl/daterange/src',
        ),
        'Org_Heigl\\DateRangeTest\\' => 
        array (
            0 => __DIR__ . '/..' . '/org_heigl/daterange/tests',
        ),
        'GuzzleHttp\\Psr7\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/psr7/src',
        ),
        'GuzzleHttp\\Promise\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/promises/src',
        ),
        'GuzzleHttp\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/guzzle/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'U' => 
        array (
            'User' => 
            array (
                0 => __DIR__ . '/../..' . '/app/src',
                1 => __DIR__ . '/../..' . '/tests',
            ),
        ),
        'T' => 
        array (
            'Twig_' => 
            array (
                0 => __DIR__ . '/..' . '/twig/twig/lib',
            ),
            'Talk' => 
            array (
                0 => __DIR__ . '/../..' . '/app/src',
                1 => __DIR__ . '/../..' . '/tests',
            ),
        ),
        'S' => 
        array (
            'Symfony\\Component\\Validator\\' => 
            array (
                0 => __DIR__ . '/..' . '/symfony/validator',
            ),
            'Symfony\\Component\\Translation\\' => 
            array (
                0 => __DIR__ . '/..' . '/symfony/translation',
            ),
            'Symfony\\Component\\Security\\Csrf\\' => 
            array (
                0 => __DIR__ . '/..' . '/symfony/security-csrf',
            ),
            'Symfony\\Component\\Security\\Core\\' => 
            array (
                0 => __DIR__ . '/..' . '/symfony/security-core',
            ),
            'Symfony\\Component\\PropertyAccess\\' => 
            array (
                0 => __DIR__ . '/..' . '/symfony/property-access',
            ),
            'Symfony\\Component\\OptionsResolver\\' => 
            array (
                0 => __DIR__ . '/..' . '/symfony/options-resolver',
            ),
            'Symfony\\Component\\Intl\\' => 
            array (
                0 => __DIR__ . '/..' . '/symfony/intl',
            ),
            'Symfony\\Component\\Form\\' => 
            array (
                0 => __DIR__ . '/..' . '/symfony/form',
            ),
            'Symfony\\Component\\EventDispatcher\\' => 
            array (
                0 => __DIR__ . '/..' . '/symfony/event-dispatcher',
            ),
            'Symfony\\Bridge\\Twig\\' => 
            array (
                0 => __DIR__ . '/..' . '/symfony/twig-bridge',
            ),
            'Slim\\Views' => 
            array (
                0 => __DIR__ . '/..' . '/slim/views',
            ),
            'Slim' => 
            array (
                0 => __DIR__ . '/..' . '/slim/slim',
            ),
            'Search' => 
            array (
                0 => __DIR__ . '/../..' . '/app/src',
                1 => __DIR__ . '/../..' . '/tests',
            ),
        ),
        'P' => 
        array (
            'Predis' => 
            array (
                0 => __DIR__ . '/..' . '/predis/predis/lib',
            ),
        ),
        'M' => 
        array (
            'Middleware' => 
            array (
                0 => __DIR__ . '/../..' . '/app/src',
                1 => __DIR__ . '/../..' . '/tests',
            ),
        ),
        'L' => 
        array (
            'Language' => 
            array (
                0 => __DIR__ . '/../..' . '/app/src',
                1 => __DIR__ . '/../..' . '/tests',
            ),
        ),
        'F' => 
        array (
            'Form' => 
            array (
                0 => __DIR__ . '/../..' . '/app/src',
                1 => __DIR__ . '/../..' . '/tests',
            ),
        ),
        'E' => 
        array (
            'Event' => 
            array (
                0 => __DIR__ . '/../..' . '/app/src',
                1 => __DIR__ . '/../..' . '/tests',
            ),
        ),
        'A' => 
        array (
            'Application' => 
            array (
                0 => __DIR__ . '/../..' . '/app/src',
                1 => __DIR__ . '/../..' . '/tests',
            ),
        ),
    );

    public static $classMap = array (
        'Collator' => __DIR__ . '/..' . '/symfony/intl/Symfony/Component/Intl/Resources/stubs/Collator.php',
        'IntlDateFormatter' => __DIR__ . '/..' . '/symfony/intl/Symfony/Component/Intl/Resources/stubs/IntlDateFormatter.php',
        'Locale' => __DIR__ . '/..' . '/symfony/intl/Symfony/Component/Intl/Resources/stubs/Locale.php',
        'NumberFormatter' => __DIR__ . '/..' . '/symfony/intl/Symfony/Component/Intl/Resources/stubs/NumberFormatter.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitea939503be411f5478ca4976fabdaa0c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitea939503be411f5478ca4976fabdaa0c::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitea939503be411f5478ca4976fabdaa0c::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitea939503be411f5478ca4976fabdaa0c::$classMap;

        }, null, ClassLoader::class);
    }
}
