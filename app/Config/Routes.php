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
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
// $routes->get('/', 'Post::index');

// login
$routes->get('login', 'Masuk::index');
// dashbor
$routes->get('dashbor', 'Artikel::index');
// post
$routes->get('post/create', 'Artikel::create');
$routes->post('post/store', 'Artikel::store');
$routes->get('post/destroy/(:num)', 'Artikel::destroy/$1');
$routes->get('post/edit/(:num)', 'Artikel::edit/$1');
$routes->post('post/update/(:num)', 'Artikel::update/$1');

// detail
$routes->get('dashbor/detail/(:num)', 'Detail::index/$1');
$routes->post('detail/update/(:num)', 'Detail::update/$1');

// menu
// $routes->get('dashbor/menu', 'MenuPage::index');
// $routes->get('menu/destroy/(:num)', 'MenuPage::destroy/$1');
// $routes->post('menu/store', 'MenuPage::store');

// link
$routes->get('dashbor/link', 'Link::index');
$routes->get('link/create', 'Link::create');
$routes->post('link/store', 'Link::store');
$routes->get('link/edit/(:num)', 'Link::edit/$1');
$routes->post('link/update/(:num)', 'Link::update/$1');
$routes->get('link/destroy/(:num)', 'Link::destroy/$1');


// homepage
$routes->get('/', 'Menu::index');
$routes->get('beranda', 'Menu::index');
$routes->get('blog', 'Blog::index');
// $routes->get('dokumentasi', 'Dokumentasi::index');
$routes->get('unduh', 'Unduh::index');
$routes->get('kontak', 'Kontak::index');

// users
$routes->get('dashbor/users', 'Users::index');
$routes->get('users/create', 'Users::create');
$routes->post('users/store', 'Users::store');
$routes->get('users/destroy/(:segment)', 'Users::destroy/$1');

// berita
$routes->get('(:segment)', 'Menu::view/$1');


$routes->get('blog/form', 'Home::form');
$routes->post('blog/simpan', 'Home::simpan');
// $routes->post('blog/view/(:any)', 'Home::view/$1');
$routes->get('blog/view/(:segment)', 'Menu::view/$1');
$routes->get('blog/form_edit/(:num)', 'Home::form_edit/$1');
$routes->post('blog/edit', 'Home::edit');
$routes->get('blog/hapus/(:num)', 'Blog::hapus/$1');


// auth
$routes->get('auth/google', 'Auth::googleLogin');
$routes->get('auth/google/callback', 'Auth::googleCallback');
$routes->get('auth/logout', 'Auth::logout', ['as' => 'logout']);


// blog
// $routes->get('/', 'Home::index');
// $routes->get('blog', 'Blog::index');
// $routes->get('blog/form', 'Home::form');
// $routes->post('blog/simpan', 'Home::simpan');
// // $routes->post('blog/view/(:any)', 'Home::view/$1');
// $routes->get('blog/view/(:segment)', 'Home::view/$1');
// $routes->get('blog/form_edit/(:num)', 'Home::form_edit/$1');
// $routes->post('blog/edit', 'Home::edit');
// $routes->get('blog/hapus/(:num)', 'Blog::hapus/$1');

// ori
// $routes->get('blog', 'Blog::index');
// $routes->get('blog/form', 'Blog::form');
// $routes->post('blog/simpan', 'Blog::simpan');
// // $routes->post('blog/view/(:any)', 'Blog::view/$1');
// $routes->get('blog/view/(:num)', 'Blog::view/$1');
// $routes->get('blog/form_edit/(:num)', 'Blog::form_edit/$1');
// $routes->post('blog/edit', 'Blog::edit');


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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
