<?php

namespace App\Http\Controllers;

use App\Models\CompanieModel;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function saveCompanyDetails(Request $request)
    {
        $fileName = $request->file('logo')->getClientOriginalName();
        $path = $request->file('logo')->store('public/logo');

        CompanieModel::create([
            'name' => $request->name,
            'email' => $request->email,
            'logo' => $fileName,
            'website' => $request->link,
        ]);

        return response()->json(['status' => 'success', 'msg' => 'Company details Saved Succesfully']);
    }

    public function getCompanyOnload()
    {
        $data = CompanieModel::select('id', 'name')->get();
        return response()->json(['status' => 'success', 'data' => $data]);
    }

    public function getCompanyDataOnload()
    {
        $data = CompanieModel::all();
        return response()->json(['status' => 'success', 'data' => $data]);
    }

    public function delCompDetails(Request $request)
    {
        $id = $request->id;

        CompanieModel::where('id', $id)->delete();
        return response()->json(['status' => 'success', 'msg' => 'Company details Deleted Succesfully']);
    }
}
