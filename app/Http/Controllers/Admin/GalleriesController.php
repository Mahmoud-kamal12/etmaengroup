<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Repository\Eloquent\GalleryRepository;
use App\Http\Requests\Admin\GalleryRequests\GalleryStoreRequest;
use App\Models\Admin;

class GalleriesController extends Controller
{

    public $gallery;

    public function __construct(GalleryRepository $gallery)
    {
        $this->gallery = $gallery;
    }

    public function index(){
        try{
            $galleries = $this->gallery->GetAll();
            return view('admin.galleries.index', compact('galleries'));
        }catch(\Exception $ex){
            flash()->error("There Is Something Wrong , Please Contact technical Support");
            return back();
        }
    }

    public function create(){
        try{
            return view('admin.galleries.create');
        }catch(\Exception $ex){
            flash()->error("There Is Something Wrong , Please Contact Technical Support");
            return back();
        }
    }

    public function store(GalleryStoreRequest $request){
        return $this->gallery->GalleryStore($request);
    }

    public function edit($id){
        return $this->gallery->GalleryEdit($id);
    }

    public function update(Request $request, $id){
        return $this->gallery->GalleryUpdate($request, $id);
    }

    public function activate($id){
        return $this->gallery->GalleryActivate($id);
    }

    public function delete($id){
        return $this->gallery->GalleryDelete($id);
    }

    public function search(Request $request){
        return $this->gallery->GallerySearch($request);
    }

    public function getMore(Request $request){
        return $this->gallery->GalleryGetMore($request);
    }

}
