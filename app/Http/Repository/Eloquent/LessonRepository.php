<?php

namespace App\Http\Repository\Eloquent;

use App\Models\Lessons;
use Illuminate\Support\Facades\File as FacadesFile;
use Owenoj\LaravelGetId3\GetId3;

class LessonRepository extends AbstractRepository
{

    protected $model;

    public function __construct(Lessons $model)
    {
        $this->model = $model;
    }

    public function LessonIndex($id)
    {
        try{
            $lessons = $this->model->where('product_id', $id)->get();
            return view('admin.products.lessons.index', compact(['lessons', 'id']));
        }catch(\Exception $ex){
            flash()->error("There IS Something Wrong , Please Contact Technical Support");
            return back();
        }
    }

    public function LessonStore($request, $id)
    {
        try{
            // validation
            // create
            $lesson = new $this->model();
            $lesson->title = $request->title;
            $lesson->link = $request->link;
            $lesson->arrange = $request->arrange;
            $lesson->description = $request->description;
            // save video
            if (!$request->hasFile('video') == null) {
                $track = GetId3::fromUploadedFile($request->file('video'));
                $duration = $track->extractInfo()['playtime_string'];
                $lesson->duration = $duration;
                $file = uploadIamge( $request->file('video'), 'lessons'); // function on helper file to upload file
                $lesson->video = $file;
            }
            $lesson->is_activate = 1;
            $lesson->product_id = $id;
            $lesson->save();
            flash()->success("Success Add");
            return back();
        }catch(\Exception $ex){
            dd($ex->getMessage());
            flash()->error("There IS Something Wrong , Please Contact Technical Support");
            return back();
        }
    }

    public function LessonUpdate($request, $id)
    {
        try{
            // validation
            $validator = validator()->make($request->all(),[
                'title' => ['required'],
                'arrange' => ['required'],
                'description' => ['required'],
            ]);
            if($validator->fails()){
                flash()->error($validator->errors()->first());
                return back();
            }
            //create
            $lesson = $this->model->findOrFail($id);
            $lesson->title = $request->title;
            $lesson->link = $request->link;
            $lesson->arrange = $request->arrange;
            $lesson->description = $request->description;
            //save video
            if (!$request->hasFile('video') == null) {
                $track = GetId3::fromUploadedFile($request->file('video'));
                $duration = $track->extractInfo()['playtime_string'];
                $lesson->duration = $duration;
                $file = uploadIamge($request->file('video'), 'lessons'); // function on helper file to upload file
                $lesson->video = $file;
            }
            $lesson->save();
            flash()->success("Updated Has Been Done");
            return back();
        }catch(\Exception $ex){
            flash()->error("There IS Something Wrong , Please Contact Technical Support");
            return back();
        }
    }

    public function LessonActivate($id)
    {
        try{
            $lesson = $this->model->findOrFail($id);
            if($lesson->is_activate == 1){
                $lesson->update(['is_activate' => 0]);
            }else{
                $lesson->update(['is_activate' => 1]);
            }
            flash()->success("The Change Has Been Done");
            return back();
        }catch(\Exception $ex){
            flash()->error("There Is Something Wrong ,  Please Contact Technical Support");
            return back();
        }
    }

    public function LessonDelete($id)
    {
        try{
            $lesson = $this->model->findOrFail($id);
            if (FacadesFile::exists($lesson->video)) {
                FacadesFile::delete($lesson->video);
            }
            $lesson->delete();
            flash()->success("The Deleted Has Been Done");
            return back();
        }catch(\Exception $ex){
            flash()->error("There Is Something Wrong , Please Contact technical Support");
            return back();
        }
    }

}
