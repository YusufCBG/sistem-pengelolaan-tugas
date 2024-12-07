<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Dashboard::index');


$routes->get('/login', 'LoginController::index');
$routes->post('/login/login', 'LoginController::login');
$routes->get('/logout', 'LoginController::logout');
$routes->get('/dashboard', 'Dashboard::index', ['filter' => 'auth']);


// Routes untuk User
$routes->get('/users', 'UserController::index');
$routes->get('/users/create', 'UserController::create');
$routes->post('/users/store', 'UserController::store');
$routes->get('/users/edit/(:num)', 'UserController::edit/$1');
$routes->post('/users/update/(:num)', 'UserController::update/$1');
$routes->get('/users/delete/(:num)', 'UserController::delete/$1');

// Routes untuk Role
$routes->get('/roles', 'RoleController::index');
$routes->get('/roles/create', 'RoleController::create');
$routes->post('/roles/store', 'RoleController::store');
$routes->get('/roles/edit/(:num)', 'RoleController::edit/$1');
$routes->post('/roles/update/(:num)', 'RoleController::update/$1');
$routes->get('/roles/delete/(:num)', 'RoleController::delete/$1');

// Routes untuk Task
$routes->get('/tasks', 'TaskController::index');
$routes->get('/tasks/create', 'TaskController::create');
$routes->post('/tasks/store', 'TaskController::store');
$routes->get('/tasks/edit/(:num)', 'TaskController::edit/$1');
$routes->post('/tasks/update/(:num)', 'TaskController::update/$1');
$routes->post('task/delete/(:num)', 'TaskController::delete/$1');       


// Routes untuk Category
$routes->get('/categories', 'CategoryController::index');
$routes->get('/categories/create', 'CategoryController::create');
$routes->post('/categories/store', 'CategoryController::store');
$routes->get('/categories/edit/(:num)', 'CategoryController::edit/$1');
$routes->post('/categories/update/(:num)', 'CategoryController::update/$1');
$routes->post('/categories/delete/(:num)', 'CategoryController::delete/$1');


// Routes untuk Status
$routes->get('/statuses', 'StatusController::index');
$routes->get('/statuses/create', 'StatusController::create');
$routes->post('/statuses/store', 'StatusController::store');
$routes->get('/statuses/edit/(:num)', 'StatusController::edit/$1');
$routes->post('/statuses/update/(:num)', 'StatusController::update/$1');
$routes->post('/statuses/delete/(:num)', 'StatusController::delete/$1');


// Routes for Comments
$routes->get('comments', 'CommentController::index');
$routes->get('comments/create', 'CommentController::create');
$routes->post('comments/store', 'CommentController::store');
$routes->get('comments/edit/(:num)', 'CommentController::edit/$1');
$routes->post('comments/update/(:num)', 'CommentController::update/$1');
$routes->get('comments/delete/(:num)', 'CommentController::delete/$1');


    

// Routes untuk Task Assignment
$routes->get('/task_assignments', 'TaskAssignmentController::index');
$routes->get('/task_assignments/create', 'TaskAssignmentController::create');
$routes->post('/task_assignments/store', 'TaskAssignmentController::store');
$routes->get('/task_assignments/edit/(:num)', 'TaskAssignmentController::edit/$1');
$routes->post('/task_assignments/update/(:num)', 'TaskAssignmentController::update/$1');
$routes->post('/task_assignments/delete/(:num)', 'TaskAssignmentController::delete/$1');



