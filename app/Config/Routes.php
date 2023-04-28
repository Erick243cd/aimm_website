<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Pages');
$routes->setDefaultMethod('views');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Pages::views');
$routes->get('pages', 'Pages::views/$1');

$routes->group('', ['filter' => 'AuthCheck'], function ($routes) {
    //Protected routes
    $routes->get('/dashboard', 'Dashboard::index');
    $routes->get('/profile', 'Auth::profile');
    $routes->get('/settings', 'Auth::settings');


    $routes->get('list-users', 'Users::index');
    $routes->get('/add-picture', 'Users::addImage');
    $routes->get('/save-picture', 'Users::saveImage');
    $routes->get('/add-user', 'Users::create');
    $routes->post('/add-user', 'Users::create');
    $routes->get('/add-member', 'Team::create');
    $routes->get('/change-pwd', 'Auth::change');

    $routes->get('add-post', 'Posts::create');
    $routes->post('add-post', 'Posts::create');

    $routes->get('post-edit/(:any)', 'Posts::edit/$1');
    $routes->post('edit-post/(:any)', 'Posts::edit/$1');

    $routes->get('delete-post/(:any)', 'Posts::delete/$1');
    $routes->get('list-posts', 'Posts::index');
    $routes->get('post-image/(:any)', 'Posts::addImage/$1');
    $routes->post('post-image/(:any)', 'Posts::addImage/$1');
    $routes->post('save-post-picture', 'Posts::saveImage');


    $routes->get('coords', 'Coords::index');
    $routes->get('coords-update', 'Coords::update');

});

$routes->group('', ['filter' => 'AlreadyLoggedIn'], function ($routes) {
    //Protected routes
    $routes->get('login', 'Auth::index');
    $routes->get('signup', 'Auth::signup');
});


$setRoutes['about'] = 'Auth::about';
$setRoutes['contact'] = 'Auth::contact';
$setRoutes['donate'] = 'Pages::donate';

$setRoutes['activities'] = 'Posts::posts';
$setRoutes['post-detail/(:any)'] = 'Posts::detail/$1';
$setRoutes['search-activities'] = 'Posts::search';

$setRoutes['login'] = 'Auth::index';
$setRoutes['signup'] = 'Auth::signup';

$setRoutes['add-carousel'] = 'Carousel::create';
$setRoutes['add-service'] = 'Services::create';

$setRoutes['add-testimony'] = 'Testimonies::create';
$setRoutes['add-video'] = 'Videos::create';
$setRoutes['add-user'] = 'Users::create';
$setRoutes['list-users'] = 'Users::index';
$setRoutes['active-user/(:any)'] = 'Users::active/$1';
$setRoutes['delete-user/(:any)'] = 'Users::deleteUser/$1';

$setRoutes['add-member'] = 'Team::create';
$setRoutes['team-list'] = 'Team::list';
$setRoutes['change-pwd'] = 'Auth::change';
$setRoutes['settings'] = 'Auth::settings';
$setRoutes['logout'] = 'Auth::logout';

$setRoutes['save-picture'] = 'Users::saveImage';
$setRoutes['update-one-self'] = 'Auth::updateOneSelf';

$setRoutes['team'] = 'Team::index';
$setRoutes['coords'] = 'Coords::index';
$setRoutes['coords-update'] = 'Coords::update';

$setRoutes['carousel-list'] = 'Carousel::list';
$setRoutes['carousel-edit/(:any)'] = 'Carousel::edit/$1';
$setRoutes['carousel-image/(:any)'] = 'Carousel::addImage/$1';
$setRoutes['carousel-update-image'] = 'Carousel::saveImage';
$setRoutes['carousel-update'] = 'Carousel::update';

$setRoutes['service-list'] = 'Services::list';
$setRoutes['service-edit/(:any)'] = 'Services::edit/$1';
$setRoutes['service-image/(:any)'] = 'Services::addImage/$1';
$setRoutes['service-update-image'] = 'Services::saveImage';
$setRoutes['service-update'] = 'Services::update';
$setRoutes['message'] = 'Messages::index';

$setRoutes['video-list'] = 'Videos::list';

$setRoutes['projects'] = 'Projects::projects';
$setRoutes['project-list'] = 'Projects::list';
$setRoutes['add-project'] = 'Projects::create';
$setRoutes['project-edit/(:any)'] = 'Projects::edit/$1';
$setRoutes['project-image/(:any)'] = 'Projects::addImage/$1';

$setRoutes['project-update-image'] = 'Projects::saveImage';
$setRoutes['project-update'] = 'Projects::update';

$setRoutes['dashboard'] = 'Dashboard::index';
$setRoutes['products-list'] = 'Services::products';
$setRoutes['product-detail/(:any)'] = 'Services::productDetail/$1';


/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
$routes->map($setRoutes);

if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
