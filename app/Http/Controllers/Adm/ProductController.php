<?php

namespace App\Http\Controllers\Adm;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Extensions\Helpers;
use App\Category;
use App\Product;
use App\Gallery;
use App\Color;
use App\Size;
use App\Grammage;
use App\Presentation;
use Redirect;

class ProductController extends Controller
{
    protected $model = 'Product';

    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $master = Category::find($id);

        $color = Color::pluck('title_es', 'id')->all();
        $size = Size::where('category_id', $master->id)->orderBy('order')->pluck('title_es', 'id')->all();
        $gmge = Grammage::where('category_id', $master->id)->orderBy('order')->pluck('title_es', 'id')->all();
        $pttn = Presentation::where('category_id', $master->id)->orderBy('order')->pluck('title_es', 'id')->all();
        return view('adm.'.strtolower($this->model).'.create', ['model' => $this->model, 'master' => $master, 'size' => $size, 'gmge' => $gmge, 'pttn' => $pttn, 'color' => $color]);
    }

    /**
     * Store a newly created <res></res>ource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except('image');

        $store = Product::create($data);

        $store->size()->attach($request->get('size'));
        $store->color()->attach($request->get('color'));
        $store->grammage()->attach($request->get('gmge'));
        $store->presentation()->attach($request->get('pttn'));

        $file = new Gallery();
        $file->order = 'AA'; //
        $file->product_id = $store->id; //
        if (!file_exists(public_path('img/'.$this->model.'/'. $request['image']))){
            $file_save = Helpers::saveImage($request->file('image'), 'gallery');
            $file_save ? $file['image'] = $file_save : false;
        }
        $file->save();

        $success = $store->title_es . ' ¡Registro creado exitósamente!';

        if($request->repeatcheck){
          $repeat = $data;
          $repeat = array_add($repeat, 'image', $file['image']);
        }else{
          $repeat = null;
        }

        $master = Category::find($store->category_id);
        $color = Color::pluck('title_es', 'id')->all();
        $size = Size::where('category_id', $master->id)->orderBy('order')->pluck('title_es', 'id')->all();
        $gmge = Grammage::where('category_id', $master->id)->orderBy('order')->pluck('title_es', 'id')->all();
        $pttn = Presentation::where('category_id', $master->id)->orderBy('order')->pluck('title_es', 'id')->all();

        return view('adm.'.strtolower($this->model).'.create', ['color' => $color, 'size' => $size, 'gmge' => $gmge, 'pttn' => $pttn, 'master' => $master, 'model' => $this->model, 'section' => $request->section, 'repeat' => $repeat, 'success' => $success]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      dd('index.product');
      $data = Product::orderBy('order')->paginate(20);
      return view('adm.'.strtolower($this->model).'.show', ['data' => $data, 'model' => $this->model]);
    }

    public function show($id)
    {
        $master = Category::find($id);
        $data = Product::orderBy('order')->where('category_id', $id)->paginate(10);
        return view('adm.'.strtolower($this->model).'.show', ['data' => $data, 'model' => $this->model, 'master' => $master]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Product::find($id);
        $master = Category::orderBy('order')->pluck('title_es', 'id')->all();

        $color = Color::pluck('title_es', 'id')->all();
        $size = Size::where('category_id', $data->category_id)->orderBy('order')->pluck('title_es', 'id')->all();
        $gmge = Grammage::where('category_id', $data->category_id)->orderBy('order')->pluck('title_es', 'id')->all();
        $pttn = Presentation::where('category_id', $data->category_id)->orderBy('order')->pluck('title_es', 'id')->all();
        return view('adm.'.strtolower($this->model).'.edit', ['color' => $color, 'size' => $size, 'gmge' => $gmge, 'pttn' => $pttn, 'data' => $data, 'model' => $this->model, 'master' => $master]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function duplicate(Request $request, $id)
     {
         $data = Product::find($id);
         $son = Gallery::where('product_id', $data->id)->get();

         $store = $data->replicate();
         $store->save();

         foreach($son as $img){
           $img->product_id = $store->id;
           $fill = $img->replicate();
           $fill->save();
         }

         $success = $store->title_es . ' ¡Registro duplicado exitósamente!';
         return back()->with('success', $success);
     }

    public function update(Request $request, $id)
    {
        $data = $request->all();

        if (!file_exists(public_path('img/'.$this->model.'/'. $request['image']))){
            $file_save = Helpers::saveImage($request->file('image'), strtolower($this->model));
            $file_save ? $data['image'] = $file_save : false;
        }

        $store = Product::find($id);
        $store->fill($data);
        $store->save();

        $store->size()->attach($request->get('size'));
        $store->color()->attach($request->get('color'));
        $store->grammage()->attach($request->get('gmge'));
        $store->presentation()->attach($request->get('pttn'));

        $success = $store->title_es . ' ¡Registro editado exitósamente!';
        return back()->with('success', $success);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Product::find($id);
        $data->delete();

        $success = $data->title_es . ' ¡Registro eliminado exitósamente!';
        return back()->with('success', $success);
    }
}
