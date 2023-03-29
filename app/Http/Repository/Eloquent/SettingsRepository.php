<?php

namespace App\Http\Repository\Eloquent;

use App\Models\Settings;
use Illuminate\Validation\Rule;
use DB;

class SettingsRepository
{
    protected $model;

    public function __construct(Settings $model)
    {
        $this->model = $model;
    }

    public function GetAll()
    {
        return $this->model->all();
    }

    public function SettingsStore($request){
        try{
            // validation
            $settings = new $this->model();
            $settings->title = $request->title;
            $settings->subject = $request->subject;
            $settings->save();
            flash()->success("Success Add");
            return back();
        }catch(\Exception $ex){
            return $ex;
            flash()->error("There IS Something Wrong , Please Contact Technical Support");
            return back();
        }
    }
    public function edit($id){
       $setting = $this->model->findOrFail($id);
       return $setting ;
    }

    public function SettingUpdate($request, $id)
    {
        try{
            // validation
            $validator = validator()->make($request->all(),[
                'title' => 'required',
                'subject' => 'required',
            ]);
            if($validator->fails()){
                flash()->error($validator->errors()->first());
                return back();
            }
            // db transaction
            // get setting by id
            $setting = $this->model->findOrFail($id);
            $setting->title = $request->title;
            $setting->subject = $request->subject;
            $setting->save();
            flash()->success("Edited Has Been Done");
            return back();
        }catch(\Exception $ex){
            flash()->error("There Is Something Wrong , Please Contact Technical Support");
            return back();
        }
    }

}
