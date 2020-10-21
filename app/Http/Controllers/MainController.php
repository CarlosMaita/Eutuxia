<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cms\Product;
use App\Cms\Service;
use App\Cms\Project;


use App\Blog\BlogArticle;
use App\Blog\BlogCategory;

class MainController extends Controller
{
    public function home()
    {	
    	$servicios = Service::all();
    	$proyectos = Project::all();
        $productos = Product::all();
        
        $articulos = BlogArticle::orderBy('id', 'DESC')->take(4)->get();
    	return view('home')->with(compact('productos', 'servicios', 'proyectos', 'articulos' ));
    }


    public function contactanos()
    {
        $servicios = Service::all();
        $proyectos = Project::all();
        $productos = Product::all();
        return view('contacto')->with(compact('productos', 'servicios', 'proyectos'));
    }

    public function blog()
    {

        $servicios = Service::all();
        $proyectos = Project::all();
        $productos = Product::all();

        $categorias = BlogCategory::all();
        $articulos = BlogArticle::all();
        $recientes = BlogArticle::orderBy('id', 'DESC')->take(3)->get();
        return view('blog.index')->with(compact('productos', 'servicios', 'proyectos', 'categorias', 'articulos', 'recientes'));
    }

    public function blogCat($cat_id)
    {
        
        $servicios = Service::all();
        $proyectos = Project::all();
        $productos = Product::all();

        $categorias = BlogCategory::all();
        $articulos = BlogArticle::where('category_id', '=',$cat_id)->get();
        $recientes = BlogArticle::orderBy('id', 'DESC')->take(3)->get();
        return view('blog.index')->with(compact('productos', 'servicios', 'proyectos', 'categorias', 'articulos', 'recientes'));
    }

    public function blogDetail($slug)
    {
        $servicios = Service::all();
        $proyectos = Project::all();
        $productos = Product::all();
        $articulo = BlogArticle::where('slug','=', $slug)->firstOrFail();
        $recientes = BlogArticle::orderBy('id', 'DESC')->take(3)->get();
        return view('blog.blog_detail')->with(compact('productos', 'servicios', 'proyectos', 'articulo', 'recientes'));
    }

    public function productos($id){

    	$productos = Product::all();
    	$servicios = Service::all();
    	$proyectos = Project::all();
    	$producto = Product::find($id);
    	$banners = $producto->banners;
        $articulo = BlogArticle::find($id);
    	return view('productos.index')->with(compact('productos', 'producto', 'banners', 'servicios', 'proyectos'));
    }


    public function servicios($id){

    	$productos = Product::all();
    	$servicios = Service::all();
    	$proyectos = Project::all();
    	$servicio = Service::find($id);
    	$banners = $servicio->banners;

    	return view('servicios.index')->with(compact('servicios', 'servicio', 'banners', 'productos', 'proyectos'));
    }

    public function proyectos($id)
    {
    	$productos = Product::all();
    	$servicios = Service::all();
    	$proyectos = Project::all();
    	$proyecto = Project::find($id);

    	$banners = $proyecto->banners;
    	return view('proyectos.index')->with(compact('servicios', 'proyectos', 'proyecto', 'banners', 'productos'));
    }
}
