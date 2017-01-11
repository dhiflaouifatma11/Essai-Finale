<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appDevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),  4 =>   array (  ),),
        '_profiler_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),  4 =>   array (  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),  4 =>   array (  ),),
        '_profiler_search_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchBarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search_bar',    ),  ),  4 =>   array (  ),),
        '_profiler_purge' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:purgeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/purge',    ),  ),  4 =>   array (  ),),
        '_profiler_info' => array (  0 =>   array (    0 => 'about',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'about',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler/info',    ),  ),  4 =>   array (  ),),
        '_profiler_import' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:importAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/import',    ),  ),  4 =>   array (  ),),
        '_profiler_export' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:exportAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '.txt',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/\\.]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler/export',    ),  ),  4 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),),
        '_configurator_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_configurator/',    ),  ),  4 =>   array (  ),),
        '_configurator_step' => array (  0 =>   array (    0 => 'index',  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'index',    ),    1 =>     array (      0 => 'text',      1 => '/_configurator/step',    ),  ),  4 =>   array (  ),),
        '_configurator_final' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_configurator/final',    ),  ),  4 =>   array (  ),),
        'adminUtilisateurs' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\UtilisateursAdminController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/utilisateurs/',    ),  ),  4 =>   array (  ),),
        'adminAdressesUtilisateurs' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\UtilisateursAdminController::utilisateurAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/adresses',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/utilisateurs',    ),  ),  4 =>   array (  ),),
        'adminFacturesUtilisateurs' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\UtilisateursAdminController::utilisateurAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/factures',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/utilisateurs',    ),  ),  4 =>   array (  ),),
        'factures' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\UtilisateursController::facturesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/factures',    ),  ),  4 =>   array (  ),),
        'facturesPDF' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\UtilisateursController::facturesPDFAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/profile/factures/pdf',    ),  ),  4 =>   array (  ),),
        'registerPro' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOSUserBundle:views:Registration:register',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/pro/register',    ),  ),  4 =>   array (  ),),
        'fos_user_security_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),),
        'fos_user_security_check' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),),
        'fos_user_security_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),),
        'fos_user_profile_show' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/',    ),  ),  4 =>   array (  ),),
        'fos_user_profile_edit' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/edit',    ),  ),  4 =>   array (  ),),
        'fos_user_registration_register' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\RegistrationController::registerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/',    ),  ),  4 =>   array (  ),),
        'fos_user_registration_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\RegistrationController::checkEmailAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/check-email',    ),  ),  4 =>   array (  ),),
        'fos_user_registration_confirm' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\RegistrationController::confirmAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/register/confirm',    ),  ),  4 =>   array (  ),),
        'fos_user_registration_confirmed' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\RegistrationController::confirmedAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/confirmed',    ),  ),  4 =>   array (  ),),
        'fos_user_resetting_request' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/request',    ),  ),  4 =>   array (  ),),
        'fos_user_resetting_send_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/send-email',    ),  ),  4 =>   array (  ),),
        'fos_user_resetting_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/check-email',    ),  ),  4 =>   array (  ),),
        'fos_user_resetting_reset' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/resetting/reset',    ),  ),  4 =>   array (  ),),
        'fos_user_change_password' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/change-password',    ),  ),  4 =>   array (  ),),
        'adminPages' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pages\\PagesBundle\\Controller\\PagesAdminController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/pages/',    ),  ),  4 =>   array (  ),),
        'adminPages_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Pages\\PagesBundle\\Controller\\PagesAdminController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/pages',    ),  ),  4 =>   array (  ),),
        'adminPages_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pages\\PagesBundle\\Controller\\PagesAdminController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/pages/new',    ),  ),  4 =>   array (  ),),
        'adminPages_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pages\\PagesBundle\\Controller\\PagesAdminController::createAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/pages/create',    ),  ),  4 =>   array (  ),),
        'adminPages_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Pages\\PagesBundle\\Controller\\PagesAdminController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/pages',    ),  ),  4 =>   array (  ),),
        'adminPages_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Pages\\PagesBundle\\Controller\\PagesAdminController::updateAction',  ),  2 =>   array (    '_method' => 'post|put',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/pages',    ),  ),  4 =>   array (  ),),
        'adminPages_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Pages\\PagesBundle\\Controller\\PagesAdminController::deleteAction',  ),  2 =>   array (    '_method' => 'post|delete',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/pages',    ),  ),  4 =>   array (  ),),
        'page' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Pages\\PagesBundle\\Controller\\PagesController::pageAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/page',    ),  ),  4 =>   array (  ),),
        'admin' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\CommandesAdminController::commandesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/',    ),  ),  4 =>   array (  ),),
        'supprimer' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\PanierController::supprimerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/panier/supprimer',    ),  ),  4 =>   array (  ),),
        'ajouter' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\PanierController::ajouterAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/panier/ajouter',    ),  ),  4 =>   array (  ),),
        'panier' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\PanierController::panierAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/panier/',    ),  ),  4 =>   array (  ),),
        'livraison' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\PanierController::livraisonAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/panier/livraison',    ),  ),  4 =>   array (  ),),
        'validation' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\PanierController::validationAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/panier/validation',    ),  ),  4 =>   array (  ),),
        'livraisonAdresseSuppression' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\PanierController::adresseSuppressionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/panier/livraison/adresse/suppression',    ),  ),  4 =>   array (  ),),
        'produits' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitsController::produitsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),),
        'presentation' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitsController::presentationAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/produit',    ),  ),  4 =>   array (  ),),
        'categorieProduits' => array (  0 =>   array (    0 => 'categorie',  ),  1 =>   array (    '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitsController::produitsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'categorie',    ),    1 =>     array (      0 => 'text',      1 => '/categorie',    ),  ),  4 =>   array (  ),),
        'rechercheProduits' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitsController::rechercheTraitementAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/recherche',    ),  ),  4 =>   array (  ),),
        'adminProduits' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitsAdminController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/produits/',    ),  ),  4 =>   array (  ),),
        'adminProduits_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitsAdminController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/produits',    ),  ),  4 =>   array (  ),),
        'adminProduits_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitsAdminController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/produits/new',    ),  ),  4 =>   array (  ),),
        'adminProduits_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitsAdminController::createAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/produits/create',    ),  ),  4 =>   array (  ),),
        'adminProduits_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitsAdminController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/produits',    ),  ),  4 =>   array (  ),),
        'adminProduits_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitsAdminController::updateAction',  ),  2 =>   array (    '_method' => 'post|put',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/produits',    ),  ),  4 =>   array (  ),),
        'adminProduits_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitsAdminController::deleteAction',  ),  2 =>   array (    '_method' => 'post|delete',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/produits',    ),  ),  4 =>   array (  ),),
        'adminCategories' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\CategoriesAdminController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/categories/',    ),  ),  4 =>   array (  ),),
        'adminCategories_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\CategoriesAdminController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/categories',    ),  ),  4 =>   array (  ),),
        'adminCategories_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\CategoriesAdminController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/categories/new',    ),  ),  4 =>   array (  ),),
        'adminCategories_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\CategoriesAdminController::createAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/categories/create',    ),  ),  4 =>   array (  ),),
        'adminCategories_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\CategoriesAdminController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/categories',    ),  ),  4 =>   array (  ),),
        'adminCategories_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\CategoriesAdminController::updateAction',  ),  2 =>   array (    '_method' => 'post|put',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/categories',    ),  ),  4 =>   array (  ),),
        'adminCategories_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\CategoriesAdminController::deleteAction',  ),  2 =>   array (    '_method' => 'post|delete',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/categories',    ),  ),  4 =>   array (  ),),
        'adminCommande' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\CommandesAdminController::commandesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/commandes/',    ),  ),  4 =>   array (  ),),
        'adminShowFacture' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\CommandesAdminController::showFactureAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/commandes/facture',    ),  ),  4 =>   array (  ),),
        'validationCommande' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\CommandesController::validationCommandeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/api/banque',    ),  ),  4 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens);
    }
}