<?php
/**
 * ZF3 book MVC Skeleton Application
 *
 * @package    Application
 * @author     Ralf Eggert <ralf@travello.de>
 * @link       https://github.com/zf3buch/mvc-skeleton-application
 * @license    http://opensource.org/licenses/MIT The MIT License (MIT)
 */

return [
    'modules'                 => [
        'AssetManager',
        'Application',
        'TravelloViewHelper',
        'ZendDeveloperTools',
        'BjyProfiler',
        'SanSessionToolbar',
    ],
    'module_listener_options' => [
        'config_glob_paths'        => [
            APPLICATION_ROOT . '/config/autoload/{,*.}{global,development,local}.php',
        ],
        'module_paths'             => [
            APPLICATION_ROOT . '/module',
            APPLICATION_ROOT . '/vendor',
        ],
        'cache_dir'                => APPLICATION_ROOT . '/data/cache',
        'config_cache_enabled'     => false,
        'config_cache_key'         => 'module_config_cache',
        'module_map_cache_enabled' => false,
        'module_map_cache_key'     => 'module_map_cache',
    ],
];
