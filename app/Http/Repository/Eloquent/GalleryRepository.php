<?php 

namespace App\Http\Repository\Eloquent;

use App\Models\Gallery;
use DB;
use Hash;
use Illuminate\Validation\Rule;

class GalleryRepository extends AbstractRepository
{

    protected $model;

    public function __construct(Gallery $model)
    {
        $this->model = $model;
    }

    public function GalleryStore($request)
    {
        try{
            // validation
            //create gallery
            $gallery = new $this->model();
            $gallery->title = $request->title;
            $gallery->section = $request->section;
            //save file
            if (!$request->hasFile('file') == null) {
                $file = uploadIamge( $request->file('file'), 'galleries'); // function on helper file to upload file
                $gallery->file = $file;
            }
            $gallery->is_activate = 1;
            $gallery->save();
            flash()->success("Success Add");
            return back();
        }catch(\Exception $ex){
            flash()->error("There IS Something Wrong , Please Contact Technical Support");
            return back();
        }
    }

    public function GalleryEdit($id)
    {
        try{
            $gallery = $this->model->findOrFail($id);
            return view('admin.galleries.edit', compact('gallery'));
        }catch(\Exception $ex){
            flash()->error("There Is Something Wrong , Please Contact technical Support");
            return back();
        }
    }

    public function GalleryUpdate($request, $id)
    {
        try{
            // validation 
            //create admin
            $gallery = $this->model->findOrFail($id);
            $gallery->title = $request->title;
            $gallery->section = $request->section;
            //save file
            if (!$request->hasFile('file') == null) {
                $file = uploadIamge( $request->file('file'), 'galleries'); // function on helper file to upload file
                $gallery->file = $file;
            }
            $gallery->save();
            flash()->success("Updated Has Been Done");
            return back();
        }catch(\Exception $ex){
            flash()->error("There IS Something Wrong , Please Contact Technical Support");
            return back();
        }
    }

    public function GalleryActivate($id)
    {
        try{
            $gallery = $this->model->findOrFail($id);
            if($gallery->is_activate == 1){
                $gallery->update(['is_activate' => 0]);
            }else{
                $gallery->update(['is_activate' => 1]);
            }
            flash()->success("The Change Has Been Done");
            return back();
        }catch(\Exception $ex){
            flash()->error("There Is Something Wrong ,  Please Contact Technical Support");
            return back();
        }
    }

    public function GalleryDelete($id)
    {
        try{
            $gallery = $this->model->findOrFail($id);
            $gallery->delete();
            flash()->success("The Deleted Has Been Done");
            return back();
        }catch(\Exception $ex){
            flash()->error("There Is Something Wrong , Please Contact technical Support");
            return back();
        }
    }

    public function GalleryGetMore($request)
    {
        try{
            if(isset($request->id) && $request->id > 0){
                $galleries = $this->model->latest()->skip($request->id)->limit(PAGINATION_COUNT)->get();
            }else{
                $galleries = $this->model->latest()->skip(PAGINATION_COUNT)->limit(PAGINATION_COUNT)->get();
            }
            $allgalleries = [];
            if($galleries && count($galleries) > 0){
                foreach($galleries as $gallery ){
                    if($gallery->section == 1){
                        $gallery->section = 'الافتتاح';
                    }elseif($gallery->section == 2){
                        $gallery->section = 'الفيديوهات';
                    }
                    $gallery->urlRouteEdit = route('admin/galleries/edit', $gallery->id);
                    $gallery->urlRouteActivate = route('admin/galleries/activate', $gallery->id);
                    $gallery->urlRouteDelete = route('admin/galleries/delete', $gallery->id);
                    $allgalleries [] = $gallery;
                }
            }
            return $allgalleries;
        }catch(\Exception $ex){
            return response()->json(['error' => 'There Is Something Wrong , Please Contact Technical Support']);
        }
    }

    public function GallerySearch($request)
    {
        try{
            $query = $request->get('query');
            $galleries = [];
            if($query != ''){
                $galleries = $this->model->latest()->where('id', 'LIKE', '%'. $query .'%')
                                                ->orWhere('title', 'LIKE', '%'. $query .'%')
                                                ->get();
            }else{
                $galleries = $this->model->latest()->paginate(PAGINATION_COUNT);
            }
            $allgalleries = [];
            if($galleries && count($galleries) > 0){
                foreach($galleries as $gallery ){
                    if($gallery->section == 1){
                        $gallery->section = 'الافتتاح';
                    }elseif($gallery->section == 2){
                        $gallery->section = 'الفيديوهات';
                    }
                    $gallery->urlRouteEdit = route('admin/galleries/edit', $gallery->id);
                    $gallery->urlRouteActivate = route('admin/galleries/activate', $gallery->id);
                    $gallery->urlRouteDelete = route('admin/galleries/delete', $gallery->id);
                    if( $query != '' ){
                        $gallery->searchButton = 0;
                    }else{
                        $gallery->searchButton = 1;
                    }
                    $allgalleries [] = $gallery;
                }
            }
            return $allgalleries;
        }catch(\Exception $ex){
            return response()->json(['error' => 'There Is Something Wrong , Please Contact Technical Support']);
        }
    }

}