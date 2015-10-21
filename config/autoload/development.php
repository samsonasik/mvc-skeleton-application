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
    'db' => [
        'driver'  => 'pdo',
        'dsn'     => 'mysql:dbname=DATEBASE;host=localhost;charset=utf8',
        'user'    => 'USER',
        'pass'    => 'PASS',
    ],
    'service_manager' => [
        'factories' => [
            'Zend\Db\Adapter\Adapter' => 'BjyProfiler\Db\Adapter\ProfilingAdapterFactory',
        ],
    ],
];
