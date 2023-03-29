<?php

namespace App\Http\Repository\Eloquent;

use App\Models\Admin;
use App\Models\Product;
use App\Models\User;
use DB;
use Hash;
use Illuminate\Validation\Rule;

class ProductRepository extends AbstractRepository
{

    protected $model;

    public function __construct(Product $model)
    {
        $this->model = $model;
    }

    public function ProductStore($request)
    {
        try{
            // validation
            //create admin
//            dd($request->all());
            $quiz = array_filter($request->quiz);
            $product = new $this->model();
            $product->title = $request->title;
            $product->quiz = $quiz;
            $product->duration = $request->duration;
            $product->link = $request->link;
            //save image
            if (!$request->hasFile('photo') == null) {
                $file = uploadIamge( $request->file('photo'), 'products'); // function on helper file to upload file
                $product->photo = $file;
            }
            $product->description = $request->description;
            $product->type = $request->type;
            $product->price = $request->price;
            $product->user_id = $request->user_id;
            $product->user_desc = $request->user_desc;
            $product->is_activate = 1;
            $product->save();
            flash()->success("Success Add");
            return back();
        }catch(\Exception $ex){
            return $ex;
            flash()->error("There IS Something Wrong , Please Contact Technical Support");
            return back();
        }
    }

    public function ProductEdit($id)
    {
        try{
            $product = $this->model->findOrFail($id);
            $users = Admin::active()->where('is_teacher', 1)->get();
            return view('admin.products.edit', compact('product', 'users'));
        }catch(\Exception $ex){
            flash()->error("There Is Something Wrong , Please Contact technical Support");
            return back();
        }
    }

    public function ProductUpdate($request, $id)
    {
        try{
            // validation
            //create admin
            $quiz = array_filter($request->quiz);
            $product = $this->model->findOrFail($id);
            $product->title = $request->title;
            $product->duration = $request->duration;
            $product->quiz  = $quiz;
            $product->link = $request->link;
            //save image
            if (!$request->hasFile('photo') == null) {
                $file = uploadIamge( $request->file('photo'), 'products'); // function on helper file to upload file
                $product->photo = $file;
            }
            $product->description = $request->description;
            $product->type = $request->type;
            $product->price = $request->price;
            $product->user_id = $request->user_id;
            $product->user_desc = $request->user_desc;
            $product->save();
            flash()->success("Updated Has Been Done");
            return back();
        }catch(\Exception $ex){
            return $ex;
            flash()->error("There IS Something Wrong , Please Contact Technical Support");
            return back();
        }
    }

    public function ProductActivate($id)
    {
        try{
            $product = $this->model->findOrFail($id);
            if($product->is_activate == 1){
                $product->update(['is_activate' => 0]);
            }else{
                $product->update(['is_activate' => 1]);
            }
            flash()->success("The Change Has Been Done");
            return back();
        }catch(\Exception $ex){
            flash()->error("There Is Something Wrong ,  Please Contact Technical Support");
            return back();
        }
    }

    public function ProductDelete($id)
    {
        try{
            $product = $this->model->findOrFail($id);
            $product->delete();
            flash()->success("The Deleted Has Been Done");
            return back();
        }catch(\Exception $ex){
            flash()->error("There Is Something Wrong , Please Contact technical Support");
            return back();
        }
    }

    public function ProductGetMore($request)
    {
        try{
            if(isset($request->id) && $request->id > 0){
                $products = $this->model->latest()->skip($request->id)->limit(PAGINATION_COUNT)->get();
            }else{
                $products = $this->model->latest()->skip(PAGINATION_COUNT)->limit(PAGINATION_COUNT)->get();
            }
            $allProducts = [];
            if($products && count($products) > 0){
                foreach($products as $product ){
                    if($product->type == 1){
                        $product->type = 'استشاري';
                    }elseif($product->type == 2){
                        $product->type = 'لغات';
                    }elseif($product->type == 3){
                        $product->type = 'كورسات';
                    }
                    $product->photo = asset($product->photo);
                    $product->user_name = optional($product->user)->name;
                    $product->urlRouteEdit = route('admin/products/edit', $product->id);
                    $product->urlRouteActivate = route('admin/products/activate', $product->id);
                    $product->urlRouteDelete = route('admin/products/delete', $product->id);
                    $product->urlRouteLessons = route('admin/lessons/index', $product->id);
                    $allProducts [] = $product;
                }
            }
            // photo_url
            return $allProducts;
        }catch(\Exception $ex){
            return response()->json(['error' => 'There Is Something Wrong , Please Contact Technical Support']);
        }
    }

    public function ProductSearch($request)
    {
        try{
            $query = $request->get('query');
            $products = [];
            if($query != ''){
                $products = $this->model->latest()->where('id', 'LIKE', '%'. $query .'%')
                                                ->orWhere('title', 'LIKE', '%'. $query .'%')
                                                ->get();
            }else{
                $products = $this->model->latest()->paginate(PAGINATION_COUNT);
            }
            $allProducts = [];
            if($products && count($products) > 0){
                foreach($products as $product ){
                    if($product->type == 1){
                        $product->type = 'استشاري';
                    }elseif($product->type == 2){
                        $product->type = 'لغات';
                    }elseif($product->type == 3){
                        $product->type = 'كورسات';
                    }
                    $product->photo = asset($product->photo);
                    $product->user_name = optional($product->user)->name;
                    $product->urlRouteEdit = route('admin/products/edit', $product->id);
                    $product->urlRouteActivate = route('admin/products/activate', $product->id);
                    $product->urlRouteDelete = route('admin/products/delete', $product->id);
                    $product->urlRouteLessons = route('admin/lessons/index', $product->id);
                    if( $query != '' ){
                        $product->searchButton = 0;
                    }else{
                        $product->searchButton = 1;
                    }
                    $allProducts [] = $product;
                }
            }
            return $allProducts;
        }catch(\Exception $ex){
            return response()->json(['error' => 'There Is Something Wrong , Please Contact Technical Support']);
        }
    }

}
