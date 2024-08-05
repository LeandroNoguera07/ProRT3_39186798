<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('inicio', 'Home::inicio');
$routes->get('quienessomos', 'Home::quienessomos');
$routes->get('acercade', 'Home::acercade');
$routes->get('registrarse', 'Home::registrarse');
/*$routes->get('login', 'Home::login');*/

/*rutas del registro  de usuarios*/ 
$routes->get('/registro', 'usuario_controller::create');
$routes->post('/enviar-form','usuario_controller::formValidation');

/* rutas del login */
$routes->get('/login','login_controller');
$routes->post('/enviarlogin','login_controller::auth');
$routes->get('/panel','panel_controller::index',['filter' => 'auth']);
$routes->get('/logout','login_controller::logout');