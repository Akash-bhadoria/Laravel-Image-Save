<?php

namespace App\Http\Controllers;

use App\Models\EmployeeModel;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = EmployeeModel::select('employees.*', 'companies.name')->leftJoin('companies', 'companies.id', 'employees.company')->get();
        return response()->json(['status' => 'success', 'data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $data = $request->all();

        $this->validate($request, [
            'firstName' => 'required',
            'lastName' => 'required',
        ]);

        EmployeeModel::create([
            'first_name' => $data['firstName'],
            'last_name' => $data['lastName'],
            'company' => $data['company'],
            'email_id' => $data['email'],
            'phone' => $data['phone'],
        ]);

        return response()->json(['status' => 'success', 'msg' => 'Employee Details Saved Succesfully']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
        //
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
    public function destroy(Request $request)
    {
        $id = $request->id;
        EmployeeModel::where('id', $id)->delete();
        return response()->json(['status' => 'success', 'msg' => 'Employee details Deleted Succesfully']);
    }
}
