<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Customer;
use App\Utils;

class CustomerController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    protected $validationRules = [
        'first_name'    => 'required|max:255',
        'last_name'     => 'required|max:255',
        'street'        => 'required|max:255',
        'city'          => 'required|max:255',
        'state'         => 'required|max:255',
        'zipcode'       => 'required|max:255',
        'home_phone'    => 'required|regex:/^[2-9]\d{2}-\d{3}-\d{4}$/',
        'work_phone'    => 'nullable|regex:/^[2-9]\d{2}-\d{3}-\d{4}$/',
    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::all();

        return view('customer.index')->with('customers', $customers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customer.create', ['states' => Utils::$states]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Add email rule for new Customer
        $this->validationRules['email'] = 'required|max:255|email|unique:customers,email';
        $validatedData = $request->validate($this->validationRules);

        Customer::create($validatedData);
        return redirect()->route('customers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        Log::debug('CustomerController->show()');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer = Customer::find($id);

        return view('customer.edit', ['customer' => $customer, 'states' => Utils::$states]);
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
        // Add email rule for existing Customer
        $this->validationRules['email'] = 'required|max:255|email|unique:customers,email,' . $id;
        $validatedData = $request->validate($this->validationRules);

        $customer = Customer::find($id);
        $customer->fill($validatedData)->save();

        return redirect()->route('customers.index');
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
