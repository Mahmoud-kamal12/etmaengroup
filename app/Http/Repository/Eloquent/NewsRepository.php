<?php 

namespace App\Http\Repository\Eloquent;

use App\Models\Admin;
use App\Models\News;
use App\Models\User;
use DB;
use Hash;
use Illuminate\Validation\Rule;

class NewsRepository extends AbstractRepository
{

    protected $model;

    public function __construct(News $model)
    {
        $this->model = $model;
    }

    public function NewsStore($request)
    {
        try{
            // validation
            //create admin
            $News = new $this->model();
            $News->title = $request->title;
            //save image
            if (!$request->hasFile('photo') == null) {
                $file = uploadIamge( $request->file('photo'), 'News'); // function on helper file to upload file
                $News->photo = $file;
            }
            $News->description = $request->description;
            $News->save();
            flash()->success("Success Add");
            return back();
        }catch(\Exception $ex){
            return $ex;
            flash()->error("There IS Something Wrong , Please Contact Technical Support");
            return back();
        }
    }

    public function NewsEdit($id)
    {
        try{
            $news = $this->model->findOrFail($id);
            $users = Admin::active()->where('is_teacher', 1)->get();
            return view('admin.news.edit', compact('news', 'users'));
        }catch(\Exception $ex){
            flash()->error("There Is Something Wrong , Please Contact technical Support");
            return back();
        }
    }

    public function NewsUpdate($request, $id)
    {
        try{
            // validation 
            //create admin
            $News = $this->model->findOrFail($id);
            $News->title = $request->title;
            $News->description = $request->description;
            //save image
            if (!$request->hasFile('photo') == null) {
                $file = uploadIamge( $request->file('photo'), 'News'); // function on helper file to upload file
                $News->photo = $file;
            }
            $News->save();
            flash()->success("Updated Successfully");
            return back();
        }catch(\Exception $ex){
            return $ex;
            flash()->error("There IS Something Wrong , Please Contact Technical Support");
            return back();
        }
    }

    public function NewsActivate($id)
    {
        try{
            $News = $this->model->findOrFail($id);
            if($News->is_activate == 1){
                $News->update(['is_activate' => 0]);
            }else{
                $News->update(['is_activate' => 1]);
            }
            flash()->success("The Change Has Been Done");
            return back();
        }catch(\Exception $ex){
            flash()->error("There Is Something Wrong ,  Please Contact Technical Support");
            return back();
        }
    }

    public function NewsDelete($id)
    {
        try{
            $News = $this->model->findOrFail($id);
            $News->delete();
            flash()->success("The Deleted Has Been Done");
            return back();
        }catch(\Exception $ex){
            flash()->error("There Is Something Wrong , Please Contact technical Support");
            return back();
        }
    }

    public function NewsGetMore($request)
    {
        try{
            if(isset($request->id) && $request->id > 0){
                $News = $this->model->latest()->skip($request->id)->limit(PAGINATION_COUNT)->get();
            }else{
                $News = $this->model->latest()->skip(PAGINATION_COUNT)->limit(PAGINATION_COUNT)->get();
            }
            $allNews = [];
            if($News && count($News) > 0){
                foreach($allNews as $oneRow){
                    $News->photo = asset($oneRow->photo);
                    $News->title = $oneRow->title;
                    $News->description = $oneRow->description;
                    $News->urlRouteEdit = route('admin/news/edit', $oneRow->id);
                    $News->urlRouteDelete = route('admin/news/delete', $oneRow->id);
                    $allNews [] = $News;
                }
            }
            // photo_url
            return $allNews;
        }catch(\Exception $ex){
            dd($ex);
            return response()->json(['error' => 'There Is Something Wrong , Please Contact Technical Support']);
        }
    }

    public function NewsSearch($request)
    {
        try{
            $query = $request->get('query');
            $AllNews = [];
            if($query != ''){
                $AllNews = $this->model->latest()->where('id', 'LIKE', '%'. $query .'%')
                                                ->orWhere('title', 'LIKE', '%'. $query .'%')
                                                ->get();
            }else{
                $AllNews = $this->model->latest()->paginate(PAGINATION_COUNT);
            }
            $allNewsData = [];
            if($AllNews && count($AllNews) > 0){
                foreach($AllNews as $News ){
                    $News->photo = asset($News->photo);
                    $News->title = $News->title;
                    $News->description = $News->description;
                    $News->urlRouteEdit = route('admin/news/edit', $News->id);
                    $News->urlRouteDelete = route('admin/news/delete', $News->id);
                    if( $query != '' ){
                        $News->searchButton = 0;
                    }else{
                        $News->searchButton = 1;
                    }
                    $allNewsData [] = $News;
                }
            }
            return $allNewsData;
        }catch(\Exception $ex){
            return response()->json(['error' => 'There Is Something Wrong , Please Contact Technical Support']);
        }
    }

}