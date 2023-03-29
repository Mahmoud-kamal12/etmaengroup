<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Airline;
use App\Models\Destination;
use App\Models\User;
use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx\Rels;

class HomeController extends Controller
{
    public function home(){
        return view('admin.home');
    }

    public function getDestinations(Request $request){
        try{
            if($request->get('q') == null){
                $hotels = Destination::active()->limit(PAGINATION_COUNT)->get();
            }else{
                $hotels = Destination::active()->where('name', 'LIKE', '%'. $request->get('q'). '%')->get();
            }
            return json_encode($hotels);
        }catch(\Exception $ex){
            return response()->json([ 'error' => 'There Is Something Wrong , Please Contact Technical Support' ]);
        }
    }

    public function getAirlines(Request $request){
        try{
            if($request->get('q') == null){
                $airlines = Airline::active()->limit(PAGINATION_COUNT)->get();
            }else{
                $airlines = Airline::active()->where('code', 'LIKE', '%'. $request->get('q'). '%')->get();
            }
            return json_encode($airlines);
        }catch(\Exception $ex){
            return response()->json([ 'error' => 'There Is Something Wrong , Please Contact Technical Support' ]);
        }
    }

    public function getUsers(Request $request){
        try{
            if($request->get('q') == null){
                $users = User::active()->limit(PAGINATION_COUNT)->get();
            }else{
                $users = User::active()->where('name', 'LIKE', '%'. $request->get('q'). '%')->get();
            }
            return json_encode($users);
        }catch(\Exception $ex){
            return response()->json([ 'error' => 'There Is Something Wrong , Please Contact Technical Support' ]);
        }
    }

}
