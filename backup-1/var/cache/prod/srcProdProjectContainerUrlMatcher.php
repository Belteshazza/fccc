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

        // verify_mda
        if ('/verify' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\AccessController::verify_mda',  '_route' => 'verify_mda',);
        }

        // register
        if (0 === strpos($pathinfo, '/register') && preg_match('#^/register/(?P<mda_code>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'register')), array (  '_controller' => 'App\\Controller\\AccessController::register',));
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

            elseif (0 === strpos($pathinfo, '/admin/participant')) {
                // admin_participants
                if ('/admin/participants' === $pathinfo) {
                    return array (  '_controller' => 'App\\Controller\\AdminController::participants',  '_route' => 'admin_participants',);
                }

                // admin_view_participants
                if (preg_match('#^/admin/participant/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_view_participants')), array (  '_controller' => 'App\\Controller\\AdminController::view_participants',));
                }

                // admin_mda_participants
                if (0 === strpos($pathinfo, '/admin/participants') && preg_match('#^/admin/participants/(?P<mda_code>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_mda_participants')), array (  '_controller' => 'App\\Controller\\AdminController::mda_participants',));
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

                // admin_delete_training
                if (0 === strpos($pathinfo, '/admin/training/delete') && preg_match('#^/admin/training/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_delete_training')), array (  '_controller' => 'App\\Controller\\AdminController::delete_training',));
                }

                // admin_view_training
                if (preg_match('#^/admin/training/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_view_training')), array (  '_controller' => 'App\\Controller\\AdminController::training_participants',));
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
                    // admin_close_training_session
                    if (preg_match('#^/admin/training/session/(?P<id>[^/]++)/close$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_close_training_session')), array (  '_controller' => 'App\\Controller\\AdminController::close_session',));
                    }

                    // admin_open_training_session
                    if (preg_match('#^/admin/training/session/(?P<id>[^/]++)/open$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_open_training_session')), array (  '_controller' => 'App\\Controller\\AdminController::open_session',));
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

            // admin_users
            if ('/admin/users' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\AdminController::admin_users',  '_route' => 'admin_users',);
            }

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
        if ('/generate/letter' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\PagesController::generate_letter',  '_route' => 'generate_letter_step_2',);
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
