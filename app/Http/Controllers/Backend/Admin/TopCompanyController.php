<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use App\Models\TopCompany;
use Illuminate\Http\Request;

class TopCompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['companies'] = TopCompany::get();
        return view('backend.admin.brand.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.admin.brand.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required',
                'email' => 'required',
                'address' => 'required',
                'phone' => 'required',
                'logo' => 'required|mimes:jpg,jpeg,png,svg|max:2048',
                'details' => 'required',
                'website' => 'required',
                'fb' => 'required',
                'linkedin' => 'required',
                'twitter' => 'required',
            ]);

            $company = new TopCompany();
            $company->user_id = 1;
            $company->name = $request->name;
            $company->email = $request->email;
            $company->address = $request->address;
            $company->phone = $request->phone;
            $company->details = $request->details;
            $company->website = $request->website;
            $company->fb = $request->fb;
            $company->linkedin = $request->linkedin;
            $company->twitter = $request->twitter;
            $company->linkedin = $request->linkedin;

            if ($request->hasFile('logo')) {
                $file = $request->file('logo');
                $file_name = time() . rand(0000, 9999) . $file->getClientOriginalName();
                $file->move('uploads/company/', $file_name);
                $company->logo = 'uploads/company/' . $file_name;
            }
            $company->save();
            return redirect()->route('company.index');

        } catch (\Throwable $th) {
            return response()->json([
                'status' => 'error',
                'message' => $th->getMessage()
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data['company']=TopCompany::find($id);
        return view('backend.admin.brand.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {

            $top_company = TopCompany::find($id);
            $top_company->update($request->all());

            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $file_name = time() . rand(0000, 9999) . $file->getClientOriginalName();
                $file->move('uploads/topCompany/', $file_name);
                $top_company->image = 'uploads/topCompany/' . $file_name;
            }
            $top_company->save();
            return redirect()->route('company.index');
        } catch (\Throwable $th) {
            return response()->json([
                'status' => 'error',
                'message' => $th->getMessage()
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $top_company = TopCompany::find($id);
            $top_company->delete();
            return redirect()->route('company.index')
                ->with('success', 'Company deleted successfully');
        } catch (\Throwable $th) {
            return response()->json([
                'status' => 'error',
                'message' => $th->getMessage()

            ], 500);
        }
    }
}
