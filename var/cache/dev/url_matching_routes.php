<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'app_admin_index', '_controller' => 'App\\Controller\\AdminController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/new' => [[['_route' => 'app_admin_new', '_controller' => 'App\\Controller\\AdminController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/category' => [[['_route' => 'app_category_index', '_controller' => 'App\\Controller\\CategoryController::index'], null, ['GET' => 0], null, true, false, null]],
        '/category/new' => [[['_route' => 'app_category_new', '_controller' => 'App\\Controller\\CategoryController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/difficulty' => [[['_route' => 'app_difficulty_index', '_controller' => 'App\\Controller\\DifficultyController::index'], null, ['GET' => 0], null, true, false, null]],
        '/difficulty/new' => [[['_route' => 'app_difficulty_new', '_controller' => 'App\\Controller\\DifficultyController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/exercise' => [[['_route' => 'app_exercise_index', '_controller' => 'App\\Controller\\ExerciseController::index'], null, ['GET' => 0], null, true, false, null]],
        '/exercise/new' => [[['_route' => 'app_exercise_new', '_controller' => 'App\\Controller\\ExerciseController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'app_main_base', '_controller' => 'App\\Controller\\MainController::index'], null, null, null, false, false, null]],
        '/quiz' => [[['_route' => 'app_main_quiz', '_controller' => 'App\\Controller\\MainController::quiz'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'app_main_register', '_controller' => 'App\\Controller\\MainController::register'], null, null, null, false, false, null]],
        '/connexion' => [[['_route' => 'app_main_login', '_controller' => 'App\\Controller\\MainController::login'], null, null, null, false, false, null]],
        '/deconnexion' => [[['_route' => 'app_main_logout', '_controller' => 'App\\Controller\\MainController::logout'], null, null, null, false, false, null]],
        '/result' => [[['_route' => 'app_result_index', '_controller' => 'App\\Controller\\ResultController::index'], null, ['GET' => 0], null, true, false, null]],
        '/result/new' => [[['_route' => 'app_result_new', '_controller' => 'App\\Controller\\ResultController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/admin/([^/]++)(?'
                    .'|/edit(*:192)'
                    .'|(*:200)'
                .')'
                .'|/category/([^/]++)(?'
                    .'|/edit(*:235)'
                    .'|(*:243)'
                .')'
                .'|/difficulty/([^/]++)(?'
                    .'|/edit(*:280)'
                    .'|(*:288)'
                .')'
                .'|/exercise/([^/]++)(?'
                    .'|/edit(*:323)'
                    .'|(*:331)'
                .')'
                .'|/question/maker/([^/]++)(*:364)'
                .'|/result/([^/]++)(?'
                    .'|(*:391)'
                    .'|/edit(*:404)'
                    .'|(*:412)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        192 => [[['_route' => 'app_admin_edit', '_controller' => 'App\\Controller\\AdminController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        200 => [[['_route' => 'app_admin_delete', '_controller' => 'App\\Controller\\AdminController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        235 => [[['_route' => 'app_category_edit', '_controller' => 'App\\Controller\\CategoryController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        243 => [[['_route' => 'app_category_delete', '_controller' => 'App\\Controller\\CategoryController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        280 => [[['_route' => 'app_difficulty_edit', '_controller' => 'App\\Controller\\DifficultyController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        288 => [[['_route' => 'app_difficulty_delete', '_controller' => 'App\\Controller\\DifficultyController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        323 => [[['_route' => 'app_exercise_edit', '_controller' => 'App\\Controller\\ExerciseController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        331 => [[['_route' => 'app_exercise_delete', '_controller' => 'App\\Controller\\ExerciseController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        364 => [[['_route' => 'question_maker', '_controller' => 'App\\Controller\\QuestionController::questionMaker'], ['id'], null, null, false, true, null]],
        391 => [[['_route' => 'app_result_show', '_controller' => 'App\\Controller\\ResultController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        404 => [[['_route' => 'app_result_edit', '_controller' => 'App\\Controller\\ResultController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        412 => [
            [['_route' => 'app_result_delete', '_controller' => 'App\\Controller\\ResultController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
