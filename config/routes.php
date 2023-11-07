<?php
/**
 * Routes configuration.
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * It's loaded within the context of `Application::routes()` method which
 * receives a `RouteBuilder` instance `$routes` as method argument.
 *
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

use Cake\Routing\Route\DashedRoute;
use Cake\Routing\RouteBuilder;

return function (RouteBuilder $routes): void {
    $routes->setRouteClass(DashedRoute::class);

    $routes->scope('/', function (RouteBuilder $builder): void {
        $builder->connect('/', ['controller' => 'Balcao', 'action' => 'index']);
        $builder->connect('/cadastro/curriculo', ['controller' => 'Users', 'action' => 'login']);
        $builder->connect('/empresas', ['controller' => 'Empresas', 'action' => 'index']);
        $builder->connect('/cadastro/empresas', ['controller' => 'Empresas', 'action' => 'cadastro']);
        $builder->connect('login', ['controller' => 'Users', 'action' => 'login']);

        $builder->connect('/pages/*', 'Pages::display');

        $builder->fallbacks();
    });
    $routes->prefix('admin', function (RouteBuilder $builder): void {
        $builder->connect('/', ['controller' => 'Admin', 'action' => 'index']);

        $builder->fallbacks();
    });

    $routes->scope('/api', function (RouteBuilder $builder): void {
        $builder->setExtensions(['json', 'xml']);
    });
    /*
     * If you need a different set of middleware or none at all,
     * open new scope and define routes there.
     *
     * ```
     * $routes->scope('/api', function (RouteBuilder $builder): void {
     *     // No $builder->applyMiddleware() here.
     *
     *     // Parse specified extensions from URLs
     *     // $builder->setExtensions(['json', 'xml']);
     *
     *     // Connect API actions here.
     * });
     * ```
     */
};
