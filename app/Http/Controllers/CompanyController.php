<?php

namespace App\Http\Controllers;

use App\Models\CompanieModel;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function saveCompanyDetails(Request $request)
    {
        $details = $request->all();
        dd($details->file('logo'));

        CompanieModel::create([
            'name' => $request->name,
            'email' => $request->email,
            'logo' => $request->file('logo'),
            'website' => $request->link,
        ]);

        return response()->json(['status' => 'success', 'msg' => 'Company details Saved Succesfully']);
    }
}
