<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\newsRequests\newsStoreRequest;
use App\Http\Repository\Eloquent\NewsRepository;
use App\Models\Admin;

class newsController extends Controller
{

    public $news;

    public function __construct(NewsRepository $news)
    {
        $this->news = $news;
    }

    public function index(){
        try{
            $AllNews = $this->news->GetAll();
            return view('admin.news.index', compact('AllNews'));
        }catch(\Exception $ex){
            return $ex;
            flash()->error("There Is Something Wrong , Please Contact technical Support");
            return back();
        }
    }

    public function create(){
        try{
            return view('admin.news.create');
        }catch(\Exception $ex){
            flash()->error("There Is Something Wrong , Please Contact Technical Support");
            return back();
        }
    }

    public function store(newsStoreRequest $request){
        return $this->news->newsStore($request);
    }

    public function edit($id){
        return $this->news->newsEdit($id);
    }

    public function update(Request $request, $id){
        return $this->news->newsUpdate($request, $id);
    }

    // public function activate($id){
    //     return $this->news->newsActivate($id);
    // }

    public function delete($id){
        return $this->news->newsDelete($id);
    }

    public function search(Request $request){
        return $this->news->newsSearch($request);
    }

    public function getMore(Request $request){
        return $this->news->newsGetMore($request);
    }

}
