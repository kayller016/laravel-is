<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function index()
    {
        $data = DB::table("customers")->get();
        return view('customer.index',['customers'=>$data]);
    } 
    public function delete ($id){
        $delete = DB::table("customers")
        ->where("id", "=", $id)
        ->delete();
        return redirect('/')->with('success', 'customer has been deleted');
    }
}
