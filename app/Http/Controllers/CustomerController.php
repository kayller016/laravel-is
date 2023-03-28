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
    public function edit ($id){
        $data = Customer::findorFail($id);
        return view('customer.edit',['customer'=>$data]);
    }
    public function updateCustomer(Request $req){
        $req->validate([
        "firstName" => ['required','min:4'],
        "lastName" => ['required','min:4'],
        "email" => ['required', 'min:4'],
        "address"=> ['required', 'min:4'],
        ]);
        $data=Customer::find($req->id);
        $data->id=$req->id;
        $data->firstName=$req->firstName;
        $data->lastName=$req->lastName;
        $data->email=$req->email;
        $data->address=$req->address;
        
        $data->save();
        return redirect("/")->with('success', 'Customer edited successfully.');
        
        }
    public function delete ($id){
        $delete = DB::table("customers")
        ->where("id", "=", $id)
        ->delete();
        return redirect('/')->with('success', 'customer has been deleted');
    }

}
