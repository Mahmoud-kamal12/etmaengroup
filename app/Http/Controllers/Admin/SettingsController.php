<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SettingsRequests\SettingsRequest;
use Illuminate\Http\Request;
use App\Http\Repository\Eloquent\SettingsRepository;

class SettingsController extends Controller
{

    public $settings;

    public function __construct(SettingsRepository $settings)
    {
        $this->settings = $settings;
    }

    public function index()
    {
        try{
            $settings = $this->settings->GetAll();
            return view('admin.settings.show', compact('settings'));
        }catch(\Exception $ex){
            flash()->error("There Is Something Wrong , Please Contact Technical Support");
            return back();
        }
    }
    public function create(){
        try {
            return view('admin.settings.add');
        }catch (\Exception $ex){
            return $ex;
            flash()->error("There IS Something Wrong , Please Contact Technical Support");
            return back();
        }
    }
    public function store(SettingsRequest $request){
        return $this->settings->SettingsStore($request);
    }
    public function show()
    {
        try{
            $settings = $this->settings->GetFirst();
            return view('admin.settings.settings_edit', compact('settings'));
        }catch(\Exception $ex){
            flash()->error("There Is Something Wrong , Please Contact Technical Support");
            return back();
        }
    }

    public function Edit($id){
        try{

            $setting = $this->settings->edit($id);
            return view('admin.settings.edit' , compact('setting'));
        }catch(\Exception $ex){
            flash()->error("There Is Something Wrong , Please Contact Technical Support");
            return back();
        }
    }
    public function update(Request $request, $id)
    {
         $this->settings->SettingUpdate($request, $id);
         return redirect(route('admin/settings/index'));
    }

}
