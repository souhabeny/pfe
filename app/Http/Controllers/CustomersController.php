<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\company;
class CustomersController extends Controller
{
    public function index(){
        $activeCustomers=Customer::where('active',1)->get();
        $inactiveCustomers=Customer::where('active',0)->get();
        $customers=Customer::All();
        $companies=company::All();
      //dd($inactiveCustomers);
        return view('customers.index',[
            'activecustomers'=>$activeCustomers,
            'inactivecustomers'=>$inactiveCustomers,
            'companies'=>$companies
            ]);
    }
    public function create(){
        $companies=company::All();
        $customer=new Customer();
        return view ('customers.create',[
            
            'companies'=>$companies,
            'customer'=>$customer
            ]);
    }
    public function store()
    {   $data=request()->validate([
        'name'=>'required|min:3',
        'email'=>'required|email',
        'active'=>'required',
        'company_id'=>'required'
       
    ]);
    //dd($data);
    Customer::create($data);
       /* $customer=new Customer();
        $customer->name=request('name');
        $customer->email=request('email');
        $customer->active=request('active');*/
        //$customer->save();
       
        return redirect('custumers/index');
    }
    public function show($customer){
        $customer=Customer::where('id',$customer)->firstOrfail();
        $company=company::where('id',$customer->company_id)->first();
        return view('customers.show',compact('customer','company'));
    }
    public function edit(Customer $customer)
    { $companies=company::All();
        return view ('customers.edit',[
            
            'companies'=>$companies,
            'customer'=>$customer
            ]);
       
    }
    public function update(Customer $customer)
    {
        $data=request()->validate([
            'name'=>'required|min:3',
            'email'=>'required|email',
            'active'=>'required',
           
        ]);
        $customer->update($data);
        return redirect('custumers/index');
    }
    public function destroy(Customer $customer){
        $customer->delete();
        return redirect('custumers/index');
    }
    
}
