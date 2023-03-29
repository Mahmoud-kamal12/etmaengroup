<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\ProductRequests\ProductStoreRequest;
use App\Http\Repository\Eloquent\ProductRepository;
use App\Models\Admin;

class ProductController extends Controller
{

    public $product;

    public function __construct(ProductRepository $product)
    {
        $this->product = $product;
    }

    public function index(){
        try{
            $products = $this->product->GetAll();
            return view('admin.products.index', compact('products'));
        }catch(\Exception $ex){
            return $ex;
            flash()->error("There Is Something Wrong , Please Contact technical Support");
            return back();
        }
    }

    public function create(){
        try{
            $users = Admin::active()->where('is_teacher', 1)->get();
            return view('admin.products.create')->with('users', $users);
        }catch(\Exception $ex){
            flash()->error("There Is Something Wrong , Please Contact Technical Support");
            return back();
        }
    }

    public function store(ProductStoreRequest $request){
        return $this->product->ProductStore($request);
    }

    public function edit($id){
        return $this->product->ProductEdit($id);
    }

    public function update(Request $request, $id){
        return $this->product->ProductUpdate($request, $id);
    }

    public function activate($id){
        return $this->product->ProductActivate($id);
    }

    public function delete($id){
        return $this->product->ProductDelete($id);
    }

    public function search(Request $request){
        return $this->product->ProductSearch($request);
    }

    public function getMore(Request $request){
        return $this->product->ProductGetMore($request);
    }

}
