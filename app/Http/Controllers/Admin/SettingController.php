<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Repository\Eloquent\SettingRepository;

class SettingController extends Controller
{

    public $setting;

    public function __construct(SettingRepository $setting)
    {
        $this->setting = $setting;
    }

    public function index()
    {
        try{
            $setting = $this->setting->GetFirst();
            return view('admin.settings.show', compact('setting'));
        }catch(\Exception $ex){
            flash()->error("There Is Something Wrong , Please Contact Technical Support");
            return back();
        }
    }

    public function update(Request $request, $id)
    {
        return $this->setting->SettingUpdate($request, $id);
    }

}
