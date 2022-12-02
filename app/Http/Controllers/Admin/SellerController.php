<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Seller;
use App\Models\Company;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Exceptions\RoleDoesNotExist;


class SellerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:seller');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        // $company = Company::with('company')->get();
        
        
        $sellers = Seller::with('company')->get();
        return view('backend.admin.seller.index', compact('sellers'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.admin.seller.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->status ? $status = 1 : $status = 0;
        $request->suspended ? $suspended = 1 : $suspended = 0;
        $user = User::findOrFail($id);
        $user->status = $status;
        $user->suspended = $suspended;
        $user->save();
        return redirect()->route('admin.sellers.index')->with('success', 'data updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Seller::where('id', $id)->delete();
        return redirect()->back();
    }

    public function delete($id, Request $request){
        Seller::where('id', $request->id)->delete();
    }
}
