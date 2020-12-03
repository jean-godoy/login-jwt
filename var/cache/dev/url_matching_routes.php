<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/check' => [
            [['_route' => 'check', '_controller' => 'App\\Controller\\SecurityController::check'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'login_check'], null, ['POST' => 0], null, false, false, null],
        ],
        '/users' => [[['_route' => 'user_', '_controller' => 'App\\Controller\\UserController::index'], null, null, null, false, false, null]],
        '/create' => [[['_route' => 'create', '_controller' => 'App\\Controller\\UserController::create'], null, ['POST' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
