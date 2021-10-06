<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Customer;
use App\Models\Machine;
use Illuminate\Support\Facades\DB;
use Hash;
use Illuminate\Support\Facades\Auth;


class adminController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'Username' => 'required',
            'password' => 'required|min:2',
        ]);
   
        $credentials = $request->only('Username', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                        ->withSuccess('Signed in');
        }
  
        return redirect("login")->withSuccess('Login details are not valid');
    }


//Add customer details

    public function add_customer(Request $request)
    {
        $customer = new customer();

        $customer->First_Name = $request->first_name;
        $customer->Last_Name = $request->last_name;
        $customer->Mobile_num = $request->mobile;
        $customer->Email = $request->email;
        $customer->Gender = $request->gender;

        if($request->has('file')){
            $img =   $request->file('file');
            $renameimg = time().'.'.$img->getClientOriginalExtension();
            $path = public_path('/Images');
            $img->move($path, $renameimg);  
        }
        
        $customer->Profile_Picture = $renameimg;
        $customer->save();

        return redirect('addcustomer');
    }

//Add machine details

    public function add_machine(Request $request)
    {
        $machine = new machine();

        $machine->Machine_Name = $request->machine_name;
        $machine->Weight = $request->weight;
        $machine->Price = $request->price;
        $machine->Company_name = $request->company_name;

        $machine->save();
        return redirect('addmachine');

    }

    public function customerpage(Request $request)
    {
        $customer_records = customer::all();

        return view('customerpage', compact('customer_records'));
    }

    public function machinelist(Request $request)
    {
        $machinedetails = machine::all();

        return view('machinelist', compact('machinedetails'));
    }
}