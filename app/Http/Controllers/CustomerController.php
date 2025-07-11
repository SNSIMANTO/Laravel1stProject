<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function customer(Request $request)
    {
       

       //
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $url=url('/customer');
        $data=compact('url');
        return view('customer')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        echo "<pre>";
        print_r($request->all());

          //insert query
        $customer= new Customer;
        $customer->name=$request['name'];
        $customer->email=$request['gender'];
        $customer->address=$request['address'];
        $customer->state=$request['state'];
        $customer->country=$request['country'];
        $customer->dob=$request['dob'];
        $customer->password=md5($request['password']);
        $customer->save();
        return redirect('/customer/view');

         $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'gender'=> 'required',
        'address'=>'required',
        'state'=>'required',
        'country'=>'required',
        'dob'=>'required',
        'password'=>'required',
        'password_confirmation' => 'required|same:password',
        'status'=>'required',
        'points'=>'required|numeric'
    ]);

    }
    

    public function view(){
        

        $customers=customer::all();
        $data=compact('customers');
        return view('Customer-view')->with($data);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id){
      $custom = Customer::find($id); // Find customer with ID 1
      if(!is_null($custom)){
      $custom->delete();// Delete the record 
      }
      return redirect('/customer/view');
    }
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $some=Customer::find($id);
        if(!is_null($some)){
            $data=compact('some');
        return view('customer')->with('$data');}
        else
        {
          $url=url('/customer/update')."/".$id;  
            return redirect('/customer');}
        
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
