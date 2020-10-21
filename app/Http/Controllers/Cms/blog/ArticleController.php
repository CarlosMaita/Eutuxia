<?php

namespace App\Http\Controllers\Cms\blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Blog\BlogArticle;
use App\Blog\BlogCategory;
use Storage;
use Str;

class ArticleController extends Controller
{

	//HOME ARTICULOS
    public function index()
    {
    	$articulos = BlogArticle::all();

    	return view('cms.blog.articulos.index', compact('articulos'));
    }


    //VISTA CREAR ARTICULOS
    public function crearArticulo()
    {
    	$categorias = BlogCategory::all();
    	return view('cms.blog.articulos.crear_articulo', compact('categorias'));
    }



    //GUARDAR ARTICULOS
    public function guardarArticulo(Request $request)
    {
    	$path = $request->file('image')->store('public');

    	$file = Str::replaceFirst('public/', '',$path);

    	$articulo = new BlogArticle;
		$slug = Str::slug($request->title);

    	$articulo->create([
    		'title' => $request->title,
    		'description' => $request->description,
    		'content' => $request->content,
    		'category_id' => $request->category_id,
			'image' => $file,
			'slug' => $slug,
    	]);

    	return back()->with('message', 'Articulo creado con éxito');

    }


    // VISTA EDITAR ARTICULOS
    public function editarArticulo($id)
    {
    	$article = BlogArticle::find($id);
    	$categorias = BlogCategory::all();

    	return view('cms.blog.articulos.editar_articulo', compact('article', 'categorias'));
    }


    //ACTUALIZAR ARTICULOS
    public function actualizarArticulo(Request $request, $id)
    {
    	$article = BlogArticle::find($id);

    	if($request->file('image'))
    	{
    		$deleted = Storage::disk('public')->delete($article->image);

    		if(isset($deleted) || $article->image == null)
    		{
    			$path = $request->file('image')->store('public');
				$file = Str::replaceFirst('public/', '',$path);
				$article->update([
    				'title' => $request->title,
    				'description' => $request->description,
    				'content' => $request->content,
    				'category_id' => $request->category_id,
					'image' => $file,
    			]);
    		} else {
    			return back()->with('error', 'No se pudo actualizar el articulo');
    		}


    	}else {
    		$article->update([
    			'title' => $request->title,
    			'description' => $request->description,
    			'content' => $request->content,
				'category_id' => $request->category_id,
    		]);
    	}

    	return back()->with('message', 'Articulo Actualizado con éxito');
    }

    //ELIMINAR ARTICULOS
    public function eliminarArticulo($id)
    {
    	$article = BlogArticle::find($id);

    	$deleted = Storage::disk('public')->delete($article->image);

    	if(isset($deleted) || $article->image == null)
    	{
    		$article->delete();

    		return back()->with('error', 'Articulo eliminado con éxito');
    	} else {
    		return back()->with('error', 'No se pudo eliminar el articulo');
    	}
    }
}
