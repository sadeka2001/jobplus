<?php

namespace App\Http\Controllers\Backend\Company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JobPost;

class CompanyBlogController extends Controller
{
    public function index()
    {
        $data['job_posts'] = JobPost::get();
        return view('backend.company.blogs.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.company.blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {

            $request->validate([
                'job_title' => 'required',
                'email' => 'required',
                'phone' => 'required',
                'job_location' => 'required',
                'job_type' => 'required',
                'job_description' => 'required',
                'experience' => 'required',
                'education' => 'required',
                'salary' => 'required',
                'gender' => 'nullable',
                'published_date' => 'required',
                'deadline_date' => 'required',
                'company_name' => 'nullable',
                'company_details' => 'required',
                'company_website' => 'required',
                'fb_link' => 'nullable',
                'linkdin_link' => 'nullable',
                'twitter_link' => 'nullable',
                'other_benefit' => 'required',
                'company_logo' => 'required|mimes:jpg,jpeg,png,svg|max:2048',

            ]);
            $job = JobPost::create($request->all());

            if ($request->hasFile('company_logo')) {
                $file = $request->file('company_logo');
                $file_name = time() . rand(0000, 9999) . $file->getClientOriginalName();
                $file->move('uploads/job/', $file_name);
                $job->company_logo = 'uploads/job/' . $file_name;
            }
            $job->save();
            return redirect()->route('c-job-posts.index');
        } catch (\Throwable $th) {
            return response()->json([
                'status' => 'error',
                'message' => $th->getMessage()
            ], 500);
        }
    }

    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data['job'] = JobPost::find($id);
        return view('backend.company.blogs.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {

            $job = JobPost::find($id);
            $job->update($request->all());

            if ($request->hasFile('company_logo')) {
                $file = $request->file('company_logo');
                $file_name = time() . rand(0000, 9999) . $file->getClientOriginalName();
                $file->move('uploads/job/', $file_name);
                $job->company_logo = 'uploads/job/' . $file_name;
            }
            $job->save();
            return redirect()->route('c-job-posts.index');
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
            $job = JobPost::find($id);
            $job->delete();
            return redirect()->route('c-job-posts.index')
                ->with('success', 'job post deleted successfully');
        } catch (\Throwable $th) {
            return response()->json([
                'status' => 'error',
                'message' => $th->getMessage()

            ], 500);
        }
    }
}
