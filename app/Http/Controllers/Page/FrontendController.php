<?php

namespace App\Http\Controllers\Page;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PresupuestoRequest;
use App\Http\Requests\ContactoRequest;
use App\Data;
use App\Logo;
use App\Slider;
use App\Product;
use App\Icon;
use App\Content;
use App\Banner;
use App\Red;
use App\Category;
use Mail;

class FrontendController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        $banner = Banner::where('section', 'home')->first();
        $icons = Icon::where('section', 'home')->orderBy('order')->get();
        $products = Product::where('outstanding', 'on')->orderBy('updated_at', 'desc')->take(4)->get();
        $sliders = Slider::where('section', 'home')->orderBy('order')->get();
        return view('page.home', compact('sliders', 'products', 'icons', 'banner'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function empresa()
    {
        $content = Content::where('section', 'empresa')->first();
        $sliders = Slider::where('section', 'empresa')->orderBy('order')->get();
        return view('page.empresa', compact('content', 'sliders'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function categorias()
    {
        $category = Category::orderBy('order')->get();
        return view('page.categorias', compact('category'));
    }

    public function categoria($id)
    {
        $active = Category::find($id)->first(); //botonera
        $category = Category::orderBy('order')->get(); //botonera
        $product = Product::where('category_id',$id)->get();
        return view('page.categoria', compact('category', 'product', 'active'));
    }

    public function producto($id)
    {
        $category = Category::orderBy('order')->get(); //botonera
        $product = Product::find($id);
        $relacionados = Product::orderBy('order', 'desc')->where('category_id', $product->category_id)->where('id', '<>', $id)->take(3)->get();
        return view('page.producto', compact('category', 'product', 'relacionados'));
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function presupuesto($id = null)
    {
        if(isset($id)){
          $product = Product::find($id);
        }
        return view('page.presupuesto', compact('product'));
    }

    public function solicitar($id = null)
    {
        if(isset($id)){
          $product = Product::find($id);
        }
        return view('page.presupuesto', compact('product'));
    }

    public function solicitud(PresupuestoRequest $request)
    {
        $data = array(['name'  => $request->get('name'),
                    'location' => $request->get('location'),
                    'phone'    => $request->get('phone'),
                    'email'    => $request->get('email'),
                    'messagex' => $request->get('messagex')]);
        Mail::send('page.solicitud', $data[0], function($send){
          $dato = Data::where('type', 'info-correo')->first();
	    		$send->subject('Te han enviado un mensaje desde la web');
	    		$send->to($dato->route);
	    	}
	    );

    	return redirect()->back()->with('alert', '¡Gracias por contactarnos!');
    }

    public function contactar(ContactoRequest $request)
    {
        $data = array(['name'  => $request->get('name'),
                    'lastname' => $request->get('lastname'),
                    'phone'    => $request->get('phone'),
                    'email'    => $request->get('email'),
                    'messagex' => $request->get('messagex')]);
        Mail::send('page.contactar', $data[0], function($send){
          $dato = Data::where('type', 'info-correo')->first();
	    		$send->subject('Te han enviado un mensaje desde la web');
	    		$send->to($dato->route);
	    	}
	    );

    	return redirect()->back()->with('alert', '¡Gracias por contactarnos!');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function contacto()
    {
        return view('page.contacto');
    }

    public function buscador()
    {
        return view('page.buscador');
    }

    public function consultar(Request $request)
    {
        $palabras = explode(' ', $request->consulta);
        $products = Product::where(function($q) use ($palabras) {
                      foreach ($palabras as $valor) {
                      $q->orWhere('code', 'like', "%". $valor . "%")
                        ->orWhere('title_es', 'like', "%". $valor . "%")
                        ->orWhere('text_es', 'like', "%". $valor . "%")
                        ->orWhere('keyword_es', 'like', "%". $valor . "%");
                      }
                    })->orWhereHas('color', function($q1) use ($palabras) {
                      foreach ($palabras as $valor) {
                        $q1->Where('title_es', 'like', "%". $valor . "%");
                      }
                    })->orWhereHas('presentation', function($q2) use ($palabras) {
                      foreach ($palabras as $valor) {
                        $q2->Where('title_es', 'like', "%". $valor . "%")
                         ->OrWhere('title_es', 'like', "%". $valor . "%");
                      }
                    })->orWhereHas('grammage', function($q3) use ($palabras) {
                      foreach ($palabras as $valor) {
                        $q3->Where('title_es', 'like', "%". $valor . "%");
                      }
                    })->orWhereHas('size', function($q4) use ($palabras) {
                      foreach ($palabras as $valor) {
                        $q4->Where('title_es', 'like', "%". $valor . "%");
                      }
                    })->get();

        return view('page.buscador', compact('products'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
