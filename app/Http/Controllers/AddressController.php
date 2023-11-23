<?php

namespace App\Http\Controllers;

use App\Models\Addresses;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\DB;

class AddressController extends Controller
{
    public function index(){
        try{
            $addresses = Addresses::all();
            return view('address.index' , compact('addresses'));
        }catch(\Throwable $th){
            dd($th);
        }
    }

    public function create(){
        try{
            return view('address.create');
        }catch(\Throwable $th){
            dd($th);
        }
    }
    public function save(Request $request){
        DB::beginTransaction();
        try{
            dd($request);
            $address = Addresses::create($request);
            DB::commit();
            return redirect()->view('address.create');
        }catch(\Throwable $th){
            dd($th);
        }
    }
}
