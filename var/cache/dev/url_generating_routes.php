<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    'check' => [[], ['_controller' => 'App\\Controller\\SecurityController::check'], [], [['text', '/check']], [], []],
    'user_' => [[], ['_controller' => 'App\\Controller\\UserController::index'], [], [['text', '/users']], [], []],
    'create' => [[], ['_controller' => 'App\\Controller\\UserController::create'], [], [['text', '/create']], [], []],
    'login_check' => [[], [], [], [['text', '/check']], [], []],
];
