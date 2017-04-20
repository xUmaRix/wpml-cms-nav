<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit674a337d1fd6fa6fca664d3ca6e4efb5
{
    public static $prefixesPsr0 = array (
        'x' => 
        array (
            'xrstf\\Composer52' => 
            array (
                0 => __DIR__ . '/..' . '/xrstf/composer-php52/lib',
            ),
        ),
    );

    public static $classMap = array (
        'WPML_CMS_Navigation' => __DIR__ . '/../..' . '/inc/cms-navigation.class.php',
        'WPML_Cache_Directory' => __DIR__ . '/..' . '/wpml-shared/wpml-lib-cache/src/cache/class-wpml-cache-directory.php',
        'WPML_Dependencies' => __DIR__ . '/..' . '/wpml-shared/wpml-lib-dependencies/src/dependencies/class-wpml-dependencies.php',
        'WPML_Navigation_Widget' => __DIR__ . '/../..' . '/inc/widgets/sidebar_navigation_widget.class.php',
        'wpml_cms_nav_cache' => __DIR__ . '/../..' . '/inc/cache.class.php',
        'xrstf\\Composer52\\AutoloadGenerator' => __DIR__ . '/..' . '/xrstf/composer-php52/lib/xrstf/Composer52/AutoloadGenerator.php',
        'xrstf\\Composer52\\Generator' => __DIR__ . '/..' . '/xrstf/composer-php52/lib/xrstf/Composer52/Generator.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit674a337d1fd6fa6fca664d3ca6e4efb5::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit674a337d1fd6fa6fca664d3ca6e4efb5::$classMap;

        }, null, ClassLoader::class);
    }
}
