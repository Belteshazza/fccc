<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\AccessController::index'], null, null, null, false, false, null]],
        '/reset_password' => [[['_route' => 'reset_password', '_controller' => 'App\\Controller\\AccessController::reset_password'], null, null, null, false, false, null]],
        '/verify' => [[['_route' => 'verify_mda', '_controller' => 'App\\Controller\\AccessController::verify_mda'], null, null, null, false, false, null]],
        '/login/redirect' => [[['_route' => '_login_redirect', '_controller' => 'App\\Controller\\AccessController::loginRedirectAction'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin_dashboard', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false, false, null]],
        '/admin/mda' => [[['_route' => 'admin_mda', '_controller' => 'App\\Controller\\AdminController::mdas'], null, null, null, false, false, null]],
        '/admin/mda/add' => [[['_route' => 'add_mda', '_controller' => 'App\\Controller\\AdminController::add_mda'], null, null, null, false, false, null]],
        '/admin/participants' => [[['_route' => 'admin_participants', '_controller' => 'App\\Controller\\AdminController::participants'], null, null, null, false, false, null]],
        '/admin/training' => [[['_route' => 'admin_training', '_controller' => 'App\\Controller\\AdminController::training'], null, null, null, false, false, null]],
        '/admin/training/add' => [[['_route' => 'admin_add_training', '_controller' => 'App\\Controller\\AdminController::add_training'], null, null, null, false, false, null]],
        '/admin/training/participant/register' => [[['_route' => 'admin_register_training_participant', '_controller' => 'App\\Controller\\AdminController::admin_register_training_participant'], null, null, null, false, false, null]],
        '/admin/invoice' => [[['_route' => 'admin_invoice', '_controller' => 'App\\Controller\\AdminController::invoice'], null, null, null, false, false, null]],
        '/admin/participants_allowed' => [[['_route' => 'admin_participants_allowed', '_controller' => 'App\\Controller\\AdminController::admin_participants_allowed'], null, null, null, false, false, null]],
        '/admin/account' => [[['_route' => 'admin_account', '_controller' => 'App\\Controller\\AdminController::admin_manage_account'], null, null, null, false, false, null]],
        '/admin/account/update/password' => [[['_route' => 'admin_update_password', '_controller' => 'App\\Controller\\AdminController::admin_update_password'], null, null, null, false, false, null]],
        '/admin/users' => [[['_route' => 'admin_users', '_controller' => 'App\\Controller\\AdminController::admin_users'], null, null, null, false, false, null]],
        '/backup' => [[['_route' => 'backup', '_controller' => 'App\\Controller\\AdminController::backup'], null, null, null, false, false, null]],
        '/admin/mass_attended' => [[['_route' => 'mass_attended', '_controller' => 'App\\Controller\\AdminController::mass_attended'], null, null, null, false, false, null]],
        '/admin/query' => [[['_route' => 'query', '_controller' => 'App\\Controller\\AdminController::quey'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\PagesController::index'], null, null, null, false, false, null]],
        '/mda/letter' => [
            [['_route' => 'mda_letter', '_controller' => 'App\\Controller\\PagesController::mda_letter'], null, null, null, false, false, null],
            [['_route' => 'mda_letter33', '_controller' => 'App\\Controller\\PagesController::mda_2letter'], null, null, null, false, false, null],
        ],
        '/test' => [[['_route' => 'test', '_controller' => 'App\\Controller\\TestController::index'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'user_dashboard', '_controller' => 'App\\Controller\\UserController::index'], null, null, null, false, false, null]],
        '/user/mda' => [[['_route' => 'user_mda', '_controller' => 'App\\Controller\\UserController::user_mda'], null, null, null, false, false, null]],
        '/user/trainings' => [[['_route' => 'user_trainings', '_controller' => 'App\\Controller\\UserController::user_trainings'], null, null, null, false, false, null]],
        '/user/invoice' => [[['_route' => 'user_invoice', '_controller' => 'App\\Controller\\UserController::user_invoice'], null, null, null, false, false, null]],
        '/user/account' => [[['_route' => 'user_account', '_controller' => 'App\\Controller\\UserController::user_manage_account'], null, null, null, false, false, null]],
        '/user/account/update/password' => [[['_route' => 'user_update_password', '_controller' => 'App\\Controller\\UserController::update_password'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/re(?'
                    .'|set_password/([^/]++)(*:34)'
                    .'|gister/([^/]++)(*:56)'
                .')'
                .'|/admin/(?'
                    .'|mda/([^/]++)/edit(*:91)'
                    .'|participant(?'
                        .'|/([^/]++)(*:121)'
                        .'|s_allowed/([^/]++)/delete(*:154)'
                    .')'
                    .'|training/(?'
                        .'|edit/([^/]++)(*:188)'
                        .'|link/([^/]++)(*:209)'
                        .'|delete/([^/]++)(*:232)'
                        .'|([^/]++)(*:248)'
                        .'|participant/(?'
                            .'|attended/([^/]++)(*:288)'
                            .'|not_attended/([^/]++)(*:317)'
                        .')'
                        .'|session/([^/]++)(*:342)'
                        .'|([^/]++)/session/add(*:370)'
                        .'|session/([^/]++)/(?'
                            .'|edit(*:402)'
                            .'|close(*:415)'
                            .'|delete(*:429)'
                            .'|open(*:441)'
                        .')'
                        .'|([^/]++)/participant/([^/]++)/edit(*:484)'
                        .'|participant/(?'
                            .'|([^/]++)/delete(*:522)'
                            .'|register/(?'
                                .'|session/([^/]++)/([^/]++)(*:567)'
                                .'|refresher/session/([^/]++)/([^/]++)(*:610)'
                            .')'
                        .')'
                    .')'
                    .'|invoice/([^/]++)(?'
                        .'|(*:640)'
                        .'|/pay/(?'
                            .'|cash(*:660)'
                            .'|online(*:674)'
                            .'|bank(*:686)'
                            .'|undertaken(*:704)'
                        .')'
                    .')'
                    .'|user/([^/]++)/(?'
                        .'|delete(*:737)'
                        .'|edit(*:749)'
                    .')'
                .')'
                .'|/generate/letter/([^/]++)(*:784)'
                .'|/mda/([^/]++)/letter/print(*:818)'
                .'|/user/(?'
                    .'|training/([^/]++)(?'
                        .'|/(?'
                            .'|apply(*:864)'
                            .'|new/apply(*:881)'
                            .'|refresher/apply(*:904)'
                        .')'
                        .'|(*:913)'
                    .')'
                    .'|invoice/([^/]++)(?'
                        .'|(*:941)'
                        .'|/payment/verify/online(*:971)'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:1012)'
                    .'|wdt/([^/]++)(*:1033)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:1080)'
                            .'|router(*:1095)'
                            .'|exception(?'
                                .'|(*:1116)'
                                .'|\\.css(*:1130)'
                            .')'
                        .')'
                        .'|(*:1141)'
                    .')'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        34 => [[['_route' => 'reset_password_2', '_controller' => 'App\\Controller\\AccessController::reset_password2'], ['id'], null, null, false, true, null]],
        56 => [[['_route' => 'register', '_controller' => 'App\\Controller\\AccessController::register'], ['mda_code'], null, null, false, true, null]],
        91 => [[['_route' => 'admin_edit_mda', '_controller' => 'App\\Controller\\AdminController::edit_mda'], ['id'], null, null, false, false, null]],
        121 => [[['_route' => 'admin_view_participants', '_controller' => 'App\\Controller\\AdminController::view_participants'], ['id'], null, null, false, true, null]],
        154 => [[['_route' => 'admin_delete_participant_allowed', '_controller' => 'App\\Controller\\AdminController::admin_delete_participants_allowed'], ['id'], null, null, false, false, null]],
        188 => [[['_route' => 'admin_edit_training', '_controller' => 'App\\Controller\\AdminController::edit_training'], ['id'], null, null, false, true, null]],
        209 => [[['_route' => 'admin_link_training', '_controller' => 'App\\Controller\\AdminController::link_training'], ['id'], null, null, false, true, null]],
        232 => [[['_route' => 'admin_delete_training', '_controller' => 'App\\Controller\\AdminController::delete_training'], ['id'], null, null, false, true, null]],
        248 => [[['_route' => 'admin_view_training', '_controller' => 'App\\Controller\\AdminController::view_training'], ['id'], null, null, false, true, null]],
        288 => [[['_route' => 'admin_mark_participant_attended', '_controller' => 'App\\Controller\\AdminController::mark_participant_attended'], ['id'], null, null, false, true, null]],
        317 => [[['_route' => 'admin_mark_participant_not_attended', '_controller' => 'App\\Controller\\AdminController::mark_participant_not_attended'], ['id'], null, null, false, true, null]],
        342 => [[['_route' => 'admin_training_session', '_controller' => 'App\\Controller\\AdminController::training_session'], ['id'], null, null, false, true, null]],
        370 => [[['_route' => 'admin_add_training_session', '_controller' => 'App\\Controller\\AdminController::add_session'], ['id'], null, null, false, false, null]],
        402 => [[['_route' => 'admin_edit_training_session', '_controller' => 'App\\Controller\\AdminController::edit_session'], ['id'], null, null, false, false, null]],
        415 => [[['_route' => 'admin_close_training_session', '_controller' => 'App\\Controller\\AdminController::close_session'], ['id'], null, null, false, false, null]],
        429 => [[['_route' => 'admin_delete_training_session', '_controller' => 'App\\Controller\\AdminController::delete_session'], ['id'], null, null, false, false, null]],
        441 => [[['_route' => 'admin_open_training_session', '_controller' => 'App\\Controller\\AdminController::open_session'], ['id'], null, null, false, false, null]],
        484 => [[['_route' => 'admin_edit_participant', '_controller' => 'App\\Controller\\AdminController::admin_edit_participant'], ['training_id', 'id'], null, null, false, false, null]],
        522 => [[['_route' => 'admin_delete_participant', '_controller' => 'App\\Controller\\AdminController::admin_delete_participant'], ['id'], null, null, false, false, null]],
        567 => [[['_route' => 'admin_register_training_participant_session', '_controller' => 'App\\Controller\\AdminController::admin_register_training_participant_session'], ['mda_id', 'training_id'], null, null, false, true, null]],
        610 => [[['_route' => 'admin_register_refresher_training_participant_session', '_controller' => 'App\\Controller\\AdminController::admin_register_refresher_training_participant_session'], ['mda_id', 'training_id'], null, null, false, true, null]],
        640 => [[['_route' => 'admin_view_invoice', '_controller' => 'App\\Controller\\AdminController::admin_view_invoice'], ['id'], null, null, false, true, null]],
        660 => [[['_route' => 'admin_pay_invoice_cash', '_controller' => 'App\\Controller\\AdminController::admin_invoice_cash'], ['id'], null, null, false, false, null]],
        674 => [[['_route' => 'admin_pay_invoice_online', '_controller' => 'App\\Controller\\AdminController::admin_invoice_online'], ['id'], null, null, false, false, null]],
        686 => [[['_route' => 'admin_pay_invoice_bank', '_controller' => 'App\\Controller\\AdminController::admin_invoice_bank'], ['id'], null, null, false, false, null]],
        704 => [[['_route' => 'admin_pay_invoice_undertaken', '_controller' => 'App\\Controller\\AdminController::admin_invoice_undertaken'], ['id'], null, null, false, false, null]],
        737 => [[['_route' => 'admin_delete_user', '_controller' => 'App\\Controller\\AdminController::admin_delete_user'], ['id'], null, null, false, false, null]],
        749 => [[['_route' => 'admin_edit_user', '_controller' => 'App\\Controller\\AdminController::admin_edit_user'], ['id'], null, null, false, false, null]],
        784 => [[['_route' => 'generate_letter_step_2', '_controller' => 'App\\Controller\\PagesController::generate_letter'], ['mda'], null, null, false, true, null]],
        818 => [[['_route' => 'print_mda_letter', '_controller' => 'App\\Controller\\PagesController::print_mda_letter'], ['id'], null, null, false, false, null]],
        864 => [[['_route' => 'user_training_apply', '_controller' => 'App\\Controller\\UserController::user_apply_training'], ['id'], null, null, false, false, null]],
        881 => [[['_route' => 'user_new_training_apply', '_controller' => 'App\\Controller\\UserController::user_apply_new_training'], ['id'], null, null, false, false, null]],
        904 => [[['_route' => 'user_refresher_training_apply', '_controller' => 'App\\Controller\\UserController::user_apply_refresher_training'], ['id'], null, null, false, false, null]],
        913 => [[['_route' => 'user_view_training', '_controller' => 'App\\Controller\\UserController::user_viewtraining'], ['id'], null, null, false, true, null]],
        941 => [[['_route' => 'user_view_invoice', '_controller' => 'App\\Controller\\UserController::generate_invoice'], ['id'], null, null, false, true, null]],
        971 => [[['_route' => 'verify_invoice_online_payment', '_controller' => 'App\\Controller\\UserController::verify_online_payment'], ['id'], null, null, false, false, null]],
        1012 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        1033 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        1080 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        1095 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        1116 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        1130 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        1141 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
