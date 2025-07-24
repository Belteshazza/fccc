<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/login')) {
            // login
            if ('/login' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\AccessController::index',  '_route' => 'login',);
            }

            // _login_redirect
            if ('/login/redirect' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\AccessController::loginRedirectAction',  '_route' => '_login_redirect',);
            }

        }

        // logout
        if ('/logout' === $pathinfo) {
            return array('_route' => 'logout');
        }

        if (0 === strpos($pathinfo, '/reset_password')) {
            // reset_password
            if ('/reset_password' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\AccessController::reset_password',  '_route' => 'reset_password',);
            }

            // reset_password_2
            if (preg_match('#^/reset_password/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'reset_password_2')), array (  '_controller' => 'App\\Controller\\AccessController::reset_password2',));
            }

        }

        // register
        if (0 === strpos($pathinfo, '/register') && preg_match('#^/register/(?P<mda_code>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'register')), array (  '_controller' => 'App\\Controller\\AccessController::register',));
        }

        // verify_mda
        if ('/verify' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\AccessController::verify_mda',  '_route' => 'verify_mda',);
        }

        if (0 === strpos($pathinfo, '/admin')) {
            // admin_dashboard
            if ('/admin' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\AdminController::index',  '_route' => 'admin_dashboard',);
            }

            if (0 === strpos($pathinfo, '/admin/mda')) {
                // admin_mda
                if ('/admin/mda' === $pathinfo) {
                    return array (  '_controller' => 'App\\Controller\\AdminController::mdas',  '_route' => 'admin_mda',);
                }

                // admin_edit_mda
                if (preg_match('#^/admin/mda/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_edit_mda')), array (  '_controller' => 'App\\Controller\\AdminController::edit_mda',));
                }

                // add_mda
                if ('/admin/mda/add' === $pathinfo) {
                    return array (  '_controller' => 'App\\Controller\\AdminController::add_mda',  '_route' => 'add_mda',);
                }

            }

            // mass_attended
            if ('/admin/mass_attended' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\AdminController::mass_attended',  '_route' => 'mass_attended',);
            }

            if (0 === strpos($pathinfo, '/admin/participant')) {
                // admin_participants
                if ('/admin/participants' === $pathinfo) {
                    return array (  '_controller' => 'App\\Controller\\AdminController::participants',  '_route' => 'admin_participants',);
                }

                // admin_view_participants
                if (preg_match('#^/admin/participant/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_view_participants')), array (  '_controller' => 'App\\Controller\\AdminController::view_participants',));
                }

                if (0 === strpos($pathinfo, '/admin/participants_allowed')) {
                    // admin_participants_allowed
                    if ('/admin/participants_allowed' === $pathinfo) {
                        return array (  '_controller' => 'App\\Controller\\AdminController::admin_participants_allowed',  '_route' => 'admin_participants_allowed',);
                    }

                    // admin_delete_participant_allowed
                    if (preg_match('#^/admin/participants_allowed/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_delete_participant_allowed')), array (  '_controller' => 'App\\Controller\\AdminController::admin_delete_participants_allowed',));
                    }

                }

            }

            elseif (0 === strpos($pathinfo, '/admin/training')) {
                // admin_training
                if ('/admin/training' === $pathinfo) {
                    return array (  '_controller' => 'App\\Controller\\AdminController::training',  '_route' => 'admin_training',);
                }

                // admin_add_training
                if ('/admin/training/add' === $pathinfo) {
                    return array (  '_controller' => 'App\\Controller\\AdminController::add_training',  '_route' => 'admin_add_training',);
                }

                // admin_edit_training
                if (0 === strpos($pathinfo, '/admin/training/edit') && preg_match('#^/admin/training/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_edit_training')), array (  '_controller' => 'App\\Controller\\AdminController::edit_training',));
                }

                // admin_link_training
                if (0 === strpos($pathinfo, '/admin/training/link') && preg_match('#^/admin/training/link/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_link_training')), array (  '_controller' => 'App\\Controller\\AdminController::link_training',));
                }

                // admin_delete_training
                if (0 === strpos($pathinfo, '/admin/training/delete') && preg_match('#^/admin/training/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_delete_training')), array (  '_controller' => 'App\\Controller\\AdminController::delete_training',));
                }

                // admin_view_training
                if (preg_match('#^/admin/training/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_view_training')), array (  '_controller' => 'App\\Controller\\AdminController::view_training',));
                }

                // admin_mark_participant_attended
                if (0 === strpos($pathinfo, '/admin/training/participant/attended') && preg_match('#^/admin/training/participant/attended/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_mark_participant_attended')), array (  '_controller' => 'App\\Controller\\AdminController::mark_participant_attended',));
                }

                // admin_mark_participant_not_attended
                if (0 === strpos($pathinfo, '/admin/training/participant/not_attended') && preg_match('#^/admin/training/participant/not_attended/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_mark_participant_not_attended')), array (  '_controller' => 'App\\Controller\\AdminController::mark_participant_not_attended',));
                }

                // admin_training_session
                if (0 === strpos($pathinfo, '/admin/training/session') && preg_match('#^/admin/training/session/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_training_session')), array (  '_controller' => 'App\\Controller\\AdminController::training_session',));
                }

                // admin_add_training_session
                if (preg_match('#^/admin/training/(?P<id>[^/]++)/session/add$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_add_training_session')), array (  '_controller' => 'App\\Controller\\AdminController::add_session',));
                }

                if (0 === strpos($pathinfo, '/admin/training/session')) {
                    // admin_edit_training_session
                    if (preg_match('#^/admin/training/session/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_edit_training_session')), array (  '_controller' => 'App\\Controller\\AdminController::edit_session',));
                    }

                    // admin_close_training_session
                    if (preg_match('#^/admin/training/session/(?P<id>[^/]++)/close$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_close_training_session')), array (  '_controller' => 'App\\Controller\\AdminController::close_session',));
                    }

                    // admin_delete_training_session
                    if (preg_match('#^/admin/training/session/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_delete_training_session')), array (  '_controller' => 'App\\Controller\\AdminController::delete_session',));
                    }

                    // admin_open_training_session
                    if (preg_match('#^/admin/training/session/(?P<id>[^/]++)/open$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_open_training_session')), array (  '_controller' => 'App\\Controller\\AdminController::open_session',));
                    }

                }

                // admin_edit_participant
                if (preg_match('#^/admin/training/(?P<training_id>[^/]++)/participant/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_edit_participant')), array (  '_controller' => 'App\\Controller\\AdminController::admin_edit_participant',));
                }

                // admin_delete_participant
                if (0 === strpos($pathinfo, '/admin/training/participant') && preg_match('#^/admin/training/participant/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_delete_participant')), array (  '_controller' => 'App\\Controller\\AdminController::admin_delete_participant',));
                }

                if (0 === strpos($pathinfo, '/admin/training/participant/register')) {
                    // admin_register_training_participant
                    if ('/admin/training/participant/register' === $pathinfo) {
                        return array (  '_controller' => 'App\\Controller\\AdminController::admin_register_training_participant',  '_route' => 'admin_register_training_participant',);
                    }

                    // admin_register_training_participant_session
                    if (0 === strpos($pathinfo, '/admin/training/participant/register/session') && preg_match('#^/admin/training/participant/register/session/(?P<mda_id>[^/]++)/(?P<training_id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_register_training_participant_session')), array (  '_controller' => 'App\\Controller\\AdminController::admin_register_training_participant_session',));
                    }

                    // admin_register_refresher_training_participant_session
                    if (0 === strpos($pathinfo, '/admin/training/participant/register/refresher/session') && preg_match('#^/admin/training/participant/register/refresher/session/(?P<mda_id>[^/]++)/(?P<training_id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_register_refresher_training_participant_session')), array (  '_controller' => 'App\\Controller\\AdminController::admin_register_refresher_training_participant_session',));
                    }

                }

            }

            elseif (0 === strpos($pathinfo, '/admin/invoice')) {
                // admin_invoice
                if ('/admin/invoice' === $pathinfo) {
                    return array (  '_controller' => 'App\\Controller\\AdminController::invoice',  '_route' => 'admin_invoice',);
                }

                // admin_view_invoice
                if (preg_match('#^/admin/invoice/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_view_invoice')), array (  '_controller' => 'App\\Controller\\AdminController::admin_view_invoice',));
                }

                // admin_pay_invoice_cash
                if (preg_match('#^/admin/invoice/(?P<id>[^/]++)/pay/cash$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_pay_invoice_cash')), array (  '_controller' => 'App\\Controller\\AdminController::admin_invoice_cash',));
                }

                // admin_pay_invoice_online
                if (preg_match('#^/admin/invoice/(?P<id>[^/]++)/pay/online$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_pay_invoice_online')), array (  '_controller' => 'App\\Controller\\AdminController::admin_invoice_online',));
                }

                // admin_pay_invoice_bank
                if (preg_match('#^/admin/invoice/(?P<id>[^/]++)/pay/bank$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_pay_invoice_bank')), array (  '_controller' => 'App\\Controller\\AdminController::admin_invoice_bank',));
                }

                // admin_pay_invoice_undertaken
                if (preg_match('#^/admin/invoice/(?P<id>[^/]++)/pay/undertaken$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_pay_invoice_undertaken')), array (  '_controller' => 'App\\Controller\\AdminController::admin_invoice_undertaken',));
                }

            }

            elseif (0 === strpos($pathinfo, '/admin/account')) {
                // admin_account
                if ('/admin/account' === $pathinfo) {
                    return array (  '_controller' => 'App\\Controller\\AdminController::admin_manage_account',  '_route' => 'admin_account',);
                }

                // admin_update_password
                if ('/admin/account/update/password' === $pathinfo) {
                    return array (  '_controller' => 'App\\Controller\\AdminController::admin_update_password',  '_route' => 'admin_update_password',);
                }

            }

            elseif (0 === strpos($pathinfo, '/admin/user')) {
                // admin_users
                if ('/admin/users' === $pathinfo) {
                    return array (  '_controller' => 'App\\Controller\\AdminController::admin_users',  '_route' => 'admin_users',);
                }

                // admin_delete_user
                if (preg_match('#^/admin/user/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_delete_user')), array (  '_controller' => 'App\\Controller\\AdminController::admin_delete_user',));
                }

                // admin_edit_user
                if (preg_match('#^/admin/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_edit_user')), array (  '_controller' => 'App\\Controller\\AdminController::admin_edit_user',));
                }

            }

            // query
            if ('/admin/query' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\AdminController::quey',  '_route' => 'query',);
            }

        }

        // backup
        if ('/backup' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\AdminController::backup',  '_route' => 'backup',);
        }

        // home
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'App\\Controller\\PagesController::index',  '_route' => 'home',);
            if (substr($pathinfo, -1) !== '/') {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'home'));
            }

            return $ret;
        }

        // generate_letter_step_2
        if (0 === strpos($pathinfo, '/generate/letter') && preg_match('#^/generate/letter/(?P<mda>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'generate_letter_step_2')), array (  '_controller' => 'App\\Controller\\PagesController::generate_letter',));
        }

        // print_mda_letter
        if (0 === strpos($pathinfo, '/mda') && preg_match('#^/mda/(?P<id>[^/]++)/letter/print$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'print_mda_letter')), array (  'id' => NULL,  '_controller' => 'App\\Controller\\PagesController::print_mda_letter',));
        }

        if (0 === strpos($pathinfo, '/mda/letter')) {
            // mda_letter
            if ('/mda/letter' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\PagesController::mda_letter',  '_route' => 'mda_letter',);
            }

            // mda_letter33
            if ('/mda/letter' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\PagesController::mda_2letter',  '_route' => 'mda_letter33',);
            }

        }

        // test
        if ('/test' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\TestController::index',  '_route' => 'test',);
        }

        if (0 === strpos($pathinfo, '/user')) {
            // user_dashboard
            if ('/user' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\UserController::index',  '_route' => 'user_dashboard',);
            }

            // user_mda
            if ('/user/mda' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\UserController::user_mda',  '_route' => 'user_mda',);
            }

            if (0 === strpos($pathinfo, '/user/training')) {
                // user_trainings
                if ('/user/trainings' === $pathinfo) {
                    return array (  '_controller' => 'App\\Controller\\UserController::user_trainings',  '_route' => 'user_trainings',);
                }

                // user_training_apply
                if (preg_match('#^/user/training/(?P<id>[^/]++)/apply$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_training_apply')), array (  '_controller' => 'App\\Controller\\UserController::user_apply_training',));
                }

                // user_new_training_apply
                if (preg_match('#^/user/training/(?P<id>[^/]++)/new/apply$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_new_training_apply')), array (  '_controller' => 'App\\Controller\\UserController::user_apply_new_training',));
                }

                // user_refresher_training_apply
                if (preg_match('#^/user/training/(?P<id>[^/]++)/refresher/apply$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_refresher_training_apply')), array (  '_controller' => 'App\\Controller\\UserController::user_apply_refresher_training',));
                }

                // user_view_training
                if (preg_match('#^/user/training/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_view_training')), array (  '_controller' => 'App\\Controller\\UserController::user_viewtraining',));
                }

            }

            elseif (0 === strpos($pathinfo, '/user/invoice')) {
                // user_invoice
                if ('/user/invoice' === $pathinfo) {
                    return array (  '_controller' => 'App\\Controller\\UserController::user_invoice',  '_route' => 'user_invoice',);
                }

                // user_view_invoice
                if (preg_match('#^/user/invoice/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_view_invoice')), array (  '_controller' => 'App\\Controller\\UserController::generate_invoice',));
                }

                // verify_invoice_online_payment
                if (preg_match('#^/user/invoice/(?P<id>[^/]++)/payment/verify/online$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'verify_invoice_online_payment')), array (  '_controller' => 'App\\Controller\\UserController::verify_online_payment',));
                }

            }

            elseif (0 === strpos($pathinfo, '/user/account')) {
                // user_account
                if ('/user/account' === $pathinfo) {
                    return array (  '_controller' => 'App\\Controller\\UserController::user_manage_account',  '_route' => 'user_account',);
                }

                // user_update_password
                if ('/user/account/update/password' === $pathinfo) {
                    return array (  '_controller' => 'App\\Controller\\UserController::update_password',  '_route' => 'user_update_password',);
                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
