<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Company;
use Views\customers;

use App\Events\NewCustomerHasRegisteredEvent;

class customerController extends Controller

{
     Public function __construct()
     
     {
         $this->middleware('auth'); //->except(['index']);except index everything is locked ->only(['edit']) only edit view is locked
     }



    public function index()
    {
        $customers=Customer::all();
        return view('customers.index',compact('customers'));
       // $activecustomers=Customer::active()->get();
        //$inactivecustomers=Customer::inactive()->get();
        
       // return view('customers.index',compact('activecustomers','inactivecustomers')
          //'activecustomers'=>$activecustomers,
          //'inactivecustomers'=>$inactivecustomers,


    }


    public function create()
    {
        $companies=Company::all();
        $customer=new Customer();
        return view('customers.create',compact('companies','customer'));
        

    }
    public function store()
    {
        $customer =Customer::create($this->validateRequest());
        event(new NewCustomerHasRegisteredEvent($customer)); 
        //return redirect('/customers/');
      
    }
    //public function show($customer)
    public function show(Customer $customer)
    {
        //$cus=Customer::search($customer); if in route and function parameter name is same we can use App model name instead
        //and get rid of above logic 
        
        return view('customers.show',compact('customer'));
        
    }

    public function edit(Customer $customer)
    {
        $companies=Company::all();
        return view('customers.edit',compact('customer','companies'));
    }

    public function update(Customer $customer)
    {
       
      
      $customer->update($this->validateRequest());
      return redirect('/customers/' . $customer->id);
    }

    public function destroy(Customer $customer)//this is called route model binding using same parametes in route and function
    {
         $customer->delete();
         return redirect('/customers/');
    }

   private function validateRequest()
   {
         return request()->validate([
        'name'=>'required|min:3',
        'email'=>'required|email',
        'active'=>'required',
        'company_id'=>'required',
       ]);
   }
}

