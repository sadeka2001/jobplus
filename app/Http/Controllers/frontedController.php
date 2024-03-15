<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use App\Models\JobPost;
use App\Models\TopCompany;
use Illuminate\Http\Request;

class frontedController extends Controller
{

    public function index()
    {

        $data['job_lists'] = JobPost::get();
        $data['top_companys']=TopCompany::get();
        return view('index', $data);
    }


    public function about()
    {
        $data['about'] = About::first();
        $data['top_companys']=TopCompany::get();
        return view('fronted.pages.about', $data);
    }
    public function blog()
    {
        return view('fronted.pages.blog');
    }
    // public function job_list()
    // {
    //     return view('fronted.pages.job-listings');
    // }
    public function faq()
    {
        return view('fronted.pages.faq');
    }
    public function service()
    {
        return view('fronted.pages.service');
    }

    public function portfolio()
    {
        return view('fronted.pages.portfolio');
    }

    public function gallery()
    {
        return view('fronted.pages.gallery');
    }

    public function testimonial()
    {
        return view('fronted.pages.testimonial');
    }

    public function job_post()
    {
        return view('fronted.pages.job_post');
    }
    public function job_desc()
    {
        $data['job_lists']=JobPost::get();
        return view('fronted.pages.job-listings',$data);
    }

    public function job_desc_show($id)
    {
        $data['desc']=JobPost::find($id);
        return view('fronted.pages.job_desc',$data);
    }

    public function contact()
    {
        $data['top_companys']=TopCompany::get();
        return view('fronted.pages.contact',$data);
    }

    public function contact_store(Request $request)
    {

        try {
            $request->validate([
                'fname' => 'required',
                'lname' => 'required',
                'email' => 'required',
                'subject' => 'required',
                'message' => 'required',
            ]);

            Contact::create($request->all());
            return redirect('/');
        } catch (\Throwable $th) {
            return response()->json([
                'status' => 'error',
                'message' => $th->getMessage()
            ], 500);
        }
    }
}
