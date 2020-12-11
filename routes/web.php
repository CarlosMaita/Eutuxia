<?php

use Illuminate\Support\Facades\Route;
use App\Cms\Product;
use App\Cms\Service;
use App\Cms\Project;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/cms', function () {
	if (Auth::check()) {
		// The user is logged in...
		return view('cms.index');
	}else{
		return view('auth.login');
	}
})->name('login');


Route::post('/login', 'LoginController@authenticate');

Route::prefix('cms')->middleware('auth')->group(function () {

	

	//-------------- SERvICIOS ----------------
	Route::get('/servicios', 'Cms\ServicioController@index')->name('service.home');
	Route::get('/crear/servicio', 'Cms\ServicioController@crearServicio')->name('service.create');
	Route::get('/editar/servicio/{id}', 'Cms\ServicioController@editarServicio')->name('service.show');

	//metodos posts

	Route::post('/guardar/servicio', 'Cms\ServicioController@guardarServicio')->name('service.store');
	Route::post('/actualizar/servicio/{id}', 'Cms\ServicioController@actualizarServicio')->name('service.update');
	Route::post('/eliminar/servicio/{id}', 'Cms\ServicioController@eliminarServicio')->name('service.destroy');

	//-------------- PRODUCTOS ----------------

	Route::get('/productos', 'Cms\ProductController@index')->name('producto.home');

	Route::get('/crear/producto', 'Cms\ProductController@crearProducto')->name('producto.crear');

	Route::get('/editar/producto/{id}', 'Cms\ProductController@editarProducto')->name('producto.editar');


		//metodo posts
	Route::post('/guardar/product', 'Cms\ProductController@guardarProducto')->name('producto.guardar');

	Route::post('/actualizar/producto/{id}', 'Cms\ProductController@actualizarProducto')->name('producto.actualizar');

	Route::post('/eliminar/producto/{id}', 'Cms\ProductController@eliminarProducto')->name('producto.delete');


	//-------------- PROYECTOS ----------------

	Route::get('/proyectos', 'Cms\ProjectController@index')->name('project.home');
	Route::get('/proyectos/create', 'Cms\ProjectController@crearProyecto')->name('project.create');
	Route::get('/proyectos/editar/{id}', 'Cms\ProjectController@editarProyecto')->name('project.show');
		//metodos posts

	Route::post('/proyectos/guardar', 'Cms\ProjectController@guardarProyecto')->name('project.store');
	Route::post('/proyectos/actualizar/{id}', 'Cms\ProjectController@actualizarProyecto')->name('project.update');
	Route::post('/proyectos/eliminar/{id}', 'Cms\ProjectController@eliminarProyecto')->name('project.delete');



	//-------------- SECCIONES ----------------
	Route::get('/secciones', 'Cms\SectionController@index')->name('section.home');

	Route::get('/seccion/obtener/{id}', 'Cms\SectionController@obtenerSeccion');

		//métodos post
	Route::post('/crear/seccion', 'Cms\SectionController@guardarSeccion')->name('seccion.crear');

	Route::post('/actualizar/section/{id}', 'Cms\SectionController@actualizarSeccion');
	
	Route::post('/eliminar/section/{id}', 'Cms\SectionController@eliminarSeccion')->name('seccion.eliminar');


	//-------------- PRODUCTS BANNERS ----------------
	Route::get('/banners/product/{id}', 'Cms\ProductBannerController@index')->name('banners.product');
	Route::get('/banner/product/create/{id}', 'Cms\ProductBannerController@crearBannerProducto')->name('banners.product.create');
	Route::get('/banner/product/{product}/edit/{id}', 'Cms\ProductBannerController@editarBannerProducto')->name('banner.product.show');

		//metodos posts
	Route::post('/banner/product/guardar', 'Cms\ProductBannerController@guardarBannerProducto')->name('banners.product.store');
	Route::post('/banner/product/update/{id}', 'Cms\ProductBannerController@actualizarBannerProducto')->name('banner.product.update');
	Route::post('/banner/producto/eliminar/{id}', 'Cms\ProductBannerController@eliminarBannerProducto')->name('banner.product.destroy');

	//-------------- SERVICES BANNERS ----------------
	Route::get('/banners/service/{id}', 'Cms\ServiceBannerController@index')->name('banners.service');
	Route::get('/banners/service/create/{id}', 'Cms\ServiceBannerController@crearBannerServicio')->name('banner.service.create');
	Route::get('/banner/service/{service}/edit/{id}', 'Cms\ServiceBannerController@editarBannerServicio')->name('banner.service.show');

		//metodos posts
	Route::post('/banners/service/guardar', 'Cms\ServiceBannerController@guardarBannerServicio')->name('banner.service.store');
	Route::post('/banner/service/update/{id}', 'Cms\ServiceBannerController@actualizarBannerServicio')->name('banner.service.update');
	Route::post('/banner/service/delete/{id}', 'Cms\ServiceBannerController@eliminarBannersServicio')->name('banner.servicio.destroy');


	//-------------- PROJECTS BANNERS ----------------
	Route::get('/banners/project/{id}', 'Cms\ProjectBannerController@index')->name('banners.project');
	Route::get('/banners/project/create/{id}', 'Cms\ProjectBannerController@crearBannerProyecto')->name('banner.project.create');
	Route::get('/banner/project/{proyecto}/edit/{id}', 'Cms\ProjectBannerController@editarBannerProyecto')->name('banner.project.show');

		//metodos posts
	Route::post('/banners/project/guardar', 'Cms\ProjectBannerController@guardarBannerProyecto')->name('banner.project.store');
	Route::post('/banners/project/update/{id}', 'Cms\ProjectBannerController@actualizarBannerProyecto')->name('banner.project.update');
	Route::post('/banners/project/delete/{id}', 'Cms\ProjectBannerController@eliminarBannersProject')->name('banner.project.destroy');


	//-------------- BLOG ----------------

			//------ CATEGORIAS ----------

	Route::get('/blog/categorias', 'Cms\blog\CategoryController@index')->name('blog.category');
	Route::get('/blog/crear/categoria', 'Cms\blog\CategoryController@crearCategoria')->name('blog.category.create');
	Route::get('/blog/editar/categoria/{id}', 'Cms\blog\CategoryController@editarCategoria')->name('blog.category.edit');

		//metodo post
	Route::post('/blog/guardar/categoria', 'Cms\blog\CategoryController@guardarCategoria')->name('blog.category.store');

	Route::post('/blog/actualizar/categoria/{id}', 'Cms\blog\CategoryController@actualizarCategoria')->name('blog.category.update');

	Route::post('/blog/eliminar/categoria/{id}', 'Cms\blog\CategoryController@eliminarCategoria')->name('blog.category.destroy');

			//------ ARTICULOS ----------

	Route::get('/blog/articulos', 'Cms\blog\ArticleController@index')->name('blog.article');
	Route::get('/blog/crear/articulo', 'Cms\blog\ArticleController@crearArticulo')->name('blog.article.create');
	Route::get('/blog/editar/articulo/{id}', 'Cms\blog\ArticleController@editarArticulo')->name('blog.article.show');

		//metodo post

	Route::post('/blog/guardar/articulo', 'Cms\blog\ArticleController@guardarArticulo')->name('blog.article.store');

	Route::post('/blog/actualizar/articulo/{id}', 'Cms\blog\ArticleController@actualizarArticulo')->name('blog.article.update');

	Route::post('/blog/eliminar/articulo/{id}', 'Cms\blog\ArticleController@eliminarArticulo')->name('blog.article.destroy');

	//-------------- MENSAJES DE CONTACTO ----------------

	Route::get('/mensajes', 'Cms\MessageController@index')->name('message.home');
	Route::get('/message/get/{id}', 'Cms\MessageController@getMessage');

	//-------------- LEADS ----------------
	Route::get('/leads', 'LeadController@index')->name('lead.home');
});



Route::get('/', 'MainController@home');

Route::get('/contactanos', 'MainController@contactanos')->name('contactanos');
Route::get('/gracias-por-contactarnos', 'MainController@contactanos')->name('gracias');


Route::post('/contacto/send', 'Cms\MessageController@sendMessage')->name('contacto.send');

Route::get('/blog', 'MainController@blog')->name('blog');
Route::get('/blog/cat/{category_id}', 'MainController@blogCat')->name('blog.cat');

Route::get('/blog/{slug}', 'MainController@blogDetail')->name('blog.show');

Route::get('/productos/{id}', 'MainController@productos')->name('product.option');


Route::get('/proyectos/{id}', 'MainController@proyectos')->name('project.option');


Route::get('/servicios', function () {
	$productos = Product::all();
	$servicios = Service::all();
	$proyectos = Project::all();
    return view('servicios')->with(compact('productos', 'servicios', 'proyectos'));
});

Route::get('/servicios/{id}', 'MainController@servicios')->name('service.option');

Route::get('/nosotros', function () {
	$productos = Product::all();
	$servicios = Service::all();
	$proyectos = Project::all();
    return view('nosotros')->with(compact('productos', 'servicios', 'proyectos'));
});

Route::get('/servicios', function () {
	$productos = Product::all();
	$servicios = Service::all();
	$proyectos = Project::all();
    return view('servicios')->with(compact('productos', 'servicios', 'proyectos'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// funnels
Route::get('/tienda-de-instagram-venezuela', 'FunnelController@funnel_01')->name('funnel_01');
Route::get('/tienda-de-instagram-ropa', 'FunnelController@funnel_02')->name('funnel_02');
Route::get('/tienda-de-instagram-empresa', 'FunnelController@funnel_03')->name('funnel_03');
Route::get('/tienda-de-instagram-venezuela_ok', 'FunnelController@funnel_01_ok')->name('funnel_01_ok');
Route::get('/tienda-de-instagram-venta', 'FunnelController@funnel_04_venta')->name('funnel_o4_venta');

//leads
Route::resource('Lead', 'LeadController');

//politicas de privacidad
Route::get('/politicas-de-privacidad', function(){
	return view('politicas_privacidad');
})->name('politicas_privacidad');