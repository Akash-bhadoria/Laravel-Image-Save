<?php

namespace App\Http\Controllers;

use App\Models\CompanieModel;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function saveCompanyDetails(Request $request)
    {
        $details = $request->all();

        $fileName = $request->file('logo')->getClientOriginalName();
        $path = $request->file('logo')->store('public/logo');
        // dd($fileName);

        CompanieModel::create([
            'name' => $request->name,
            'email' => $request->email,
            'logo' => $fileName,
            'website' => $request->link,
        ]);

        return response()->json(['status' => 'success', 'msg' => 'Company details Saved Succesfully']);
    }
}
