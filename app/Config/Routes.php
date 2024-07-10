<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/outra', 'Home::outraView');
$routes->get('/form', 'Home::showForm');
$routes->post('/recebadados','Home::recebaDados');
$routes->get('/listar','Home::listarAutomoveis');
$routes->get('/form_insert','Home::showFormInsert');
$routes->post('/inserirautomoveis','Home::salvarAutomoveis');
$routes->post('/remover','Home::removerAuto');








