<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Seller;
use App\Models\Company;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        
        $user_id = Auth::guard('seller')->id();
        $user = Seller::where('id', $user_id)->get()->first();
        $company = $user->company()->first();
        return view('backend.admin.company.index', compact('company'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.admin.company.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $company = Company::create($request->all());
        
        $user_id = Auth::guard('seller')->id;
        $user = Seller::where('id', $user_id)->get()->first();
        $user->company()->create($request->all());
        
        // User::where('id', $user)->update(['company_id'=> $company->id]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function superAdminCompanyShow($id){
        $company = Company::where('seller_id', $id)->with('documents')->first();
        return view('backend.superadmin.seller.company-information', compact('company'));
    }

     public function show($user_id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {

        return view('backend.admin.company.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        $company->update($request->all());
        return redirect()
            ->route('admin.company-information.index')
            ->withSuccess('Company Information Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {

        $company->delete();
        return redirect()
            ->route('admin.company-information.index')
            ->withSuccess('Company Information Deleted Successfully');
    }
}
