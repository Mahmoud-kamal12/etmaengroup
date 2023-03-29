<?php 

namespace App\Http\Repository\Eloquent;

use App\Models\Setting;
use Illuminate\Validation\Rule;
use DB;

class SettingRepository
{
    protected $model;

    public function __construct(Setting $model)
    {
        $this->model = $model;
    }

    public function GetFirst()
    {
        return $this->model->first();
    }

    public function SettingUpdate($request, $id)
    {
        try{
            // validation 
            $validator = validator()->make($request->all(),[
                'phone' => 'required|max:30',
                'place' => 'required',
            ]);
            if($validator->fails()){
                flash()->error($validator->errors()->first());
                return back();
            }
            // db transaction
            // get setting by id
            $setting = $this->model->findOrFail($id);
            $setting->phone = $request->phone;
            $setting->place = $request->place;
            $setting->allow_direct_advertising_cars = $request->allow_direct_advertising_cars;
            $setting->allow_direct_advertising_spareparts = $request->allow_direct_advertising_spareparts;
            $setting->allow_direct_advertising_experts = $request->allow_direct_advertising_experts;
            $setting->save();
            flash()->success("Edited Has Been Done");
            return back();
        }catch(\Exception $ex){
            flash()->error("There Is Something Wrong , Please Contact Technical Support");
            return back();
        }
    }

}