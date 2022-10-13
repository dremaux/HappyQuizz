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
        '/admin/agence' => [[['_route' => 'admin.agence.index', '_controller' => 'App\\Controller\\Admin\\AdminAgenceController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/agence/new' => [[['_route' => 'admin.agence.new', '_controller' => 'App\\Controller\\Admin\\AdminAgenceController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/option' => [[['_route' => 'admin.option.index', '_controller' => 'App\\Controller\\Admin\\AdminOptionController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/option/new' => [[['_route' => 'admin.option.new', '_controller' => 'App\\Controller\\Admin\\AdminOptionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin' => [
            [['_route' => 'admin.property.index', '_controller' => 'App\\Controller\\Admin\\AdminPropertyController::index'], null, null, null, false, false, null],
            [['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\AdminPropertyController::index'], null, null, null, false, false, null],
        ],
        '/admin/property/create' => [[['_route' => 'admin.property.new', '_controller' => 'App\\Controller\\Admin\\AdminPropertyController::new'], null, null, null, false, false, null]],
        '/admin/question' => [[['_route' => 'admin.question.index', '_controller' => 'App\\Controller\\Admin\\AdminQuestionController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/question/new' => [[['_route' => 'admin.question.new', '_controller' => 'App\\Controller\\Admin\\AdminQuestionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/question/choix' => [[['_route' => 'admin.question.choix', '_controller' => 'App\\Controller\\Admin\\AdminQuestionController::choix'], null, ['GET' => 0], null, false, false, null]],
        '/admin/question/new/QCM' => [[['_route' => 'admin.question.newQCM', '_controller' => 'App\\Controller\\Admin\\AdminQuestionController::newQCM'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/question/new/ON' => [[['_route' => 'admin.question.newON', '_controller' => 'App\\Controller\\Admin\\AdminQuestionController::newON'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/question/new/Libre' => [[['_route' => 'admin.question.newLibre', '_controller' => 'App\\Controller\\Admin\\AdminQuestionController::newLibre'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/reponse' => [[['_route' => 'admin.reponse.index', '_controller' => 'App\\Controller\\Admin\\AdminReponseController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/reponse/new' => [[['_route' => 'admin.reponse.new', '_controller' => 'App\\Controller\\Admin\\AdminReponseController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/reponse/choix' => [[['_route' => 'admin.reponse.choix', '_controller' => 'App\\Controller\\Admin\\AdminReponseController::choix'], null, ['GET' => 0], null, false, false, null]],
        '/admin/reponse/new/QCM' => [[['_route' => 'admin.reponse.newQCM', '_controller' => 'App\\Controller\\Admin\\AdminReponseController::newQCM'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/reponse/new/ON' => [[['_route' => 'admin.reponse.newON', '_controller' => 'App\\Controller\\Admin\\AdminReponseController::newON'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/reponse/new/Libre' => [[['_route' => 'admin.reponse.newLibre', '_controller' => 'App\\Controller\\Admin\\AdminReponseController::newLibre'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/authent/temp' => [[['_route' => 'app_authent_temp', '_controller' => 'App\\Controller\\AuthentTempController::index'], null, null, null, false, false, null]],
        '/merci' => [
            [['_route' => 'app_merci', '_controller' => 'App\\Controller\\MerciController::index'], null, null, null, false, false, null],
            [['_route' => 'merci', '_controller' => 'App\\Controller\\MerciController::index'], null, null, null, false, false, null],
        ],
        '/biens' => [[['_route' => 'property.index', '_controller' => 'App\\Controller\\PropertyController::index'], null, null, null, false, false, null]],
        '/register' => [
            [['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null],
            [['_route' => 'register', '_controller' => 'App\\Controller\\RegistrationController.php'], null, null, null, false, false, null],
        ],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/randomQuestion' => [
            [['_route' => 'randomQuestion', '_controller' => 'App\\Controller\\ShopController::index'], null, null, null, false, false, null],
            [['_route' => 'shop', '_controller' => 'App\\Controller\\ShopController::index'], null, null, null, false, false, null],
        ],
        '/temps/travail' => [[['_route' => 'app_temps_travail', '_controller' => 'App\\Controller\\TempsTravailController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'logout'], null, null, null, false, false, null]],
        '/authentTemp' => [[['_route' => 'authentTemp', '_controller' => 'App\\Controller\\AuthentTempController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|wdt/([^/]++)(*:24)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:69)'
                            .'|router(*:82)'
                            .'|exception(?'
                                .'|(*:101)'
                                .'|\\.css(*:114)'
                            .')'
                        .')'
                        .'|(*:124)'
                    .')'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:159)'
                .')'
                .'|/admin/(?'
                    .'|agence(?'
                        .'|/([^/]++)/edit(*:201)'
                        .'|admin/agence/delete/([^/]++)(*:237)'
                    .')'
                    .'|option(?'
                        .'|/([^/]++)/edit(*:269)'
                        .'|admin/option/delete/([^/]++)(*:305)'
                    .')'
                    .'|property/(?'
                        .'|edit/([^/]++)(*:339)'
                        .'|delete/([^/]++)(*:362)'
                    .')'
                    .'|question(?'
                        .'|/([^/]++)/edit(*:396)'
                        .'|admin/question/delete/([^/]++)(*:434)'
                    .')'
                    .'|reponse(?'
                        .'|/([^/]++)/edit(*:467)'
                        .'|admin/reponse/delete/([^/]++)(*:504)'
                    .')'
                .')'
                .'|/biens/([a-z0-9\\-]*)\\-([^/]++)(*:544)'
                .'|/media/cache/resolve/(?'
                    .'|([A-z0-9_-]*)/rc/([^/]++)/(.+)(*:606)'
                    .'|([A-z0-9_-]*)/(.+)(*:632)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        69 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        82 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        101 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        114 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        124 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        159 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        201 => [[['_route' => 'admin.agence.edit', '_controller' => 'App\\Controller\\Admin\\AdminAgenceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        237 => [[['_route' => 'admin.agence.delete', '_controller' => 'App\\Controller\\Admin\\AdminAgenceController::delete'], ['id'], null, null, false, true, null]],
        269 => [[['_route' => 'admin.option.edit', '_controller' => 'App\\Controller\\Admin\\AdminOptionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        305 => [[['_route' => 'admin.option.delete', '_controller' => 'App\\Controller\\Admin\\AdminOptionController::delete'], ['id'], null, null, false, true, null]],
        339 => [[['_route' => 'admin.property.edit', '_controller' => 'App\\Controller\\Admin\\AdminPropertyController::edit'], ['id'], null, null, false, true, null]],
        362 => [[['_route' => 'admin.property.delete', '_controller' => 'App\\Controller\\Admin\\AdminPropertyController::delete'], ['id'], null, null, false, true, null]],
        396 => [[['_route' => 'admin.question.edit', '_controller' => 'App\\Controller\\Admin\\AdminQuestionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        434 => [[['_route' => 'admin.question.delete', '_controller' => 'App\\Controller\\Admin\\AdminQuestionController::delete'], ['id'], null, null, false, true, null]],
        467 => [[['_route' => 'admin.reponse.edit', '_controller' => 'App\\Controller\\Admin\\AdminReponseController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        504 => [[['_route' => 'admin.reponse.delete', '_controller' => 'App\\Controller\\Admin\\AdminReponseController::delete'], ['id'], null, null, false, true, null]],
        544 => [[['_route' => 'property.show', '_controller' => 'App\\Controller\\PropertyController::show'], ['slug', 'id'], null, null, false, true, null]],
        606 => [[['_route' => 'liip_imagine_filter_runtime', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterRuntimeAction'], ['filter', 'hash', 'path'], ['GET' => 0], null, false, true, null]],
        632 => [
            [['_route' => 'liip_imagine_filter', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterAction'], ['filter', 'path'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
