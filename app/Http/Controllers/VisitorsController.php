<?php

namespace App\Http\Controllers;

use App\Models\Enquiry;
use App\Models\Post;
use App\Models\Portfolio;
use App\Models\Service;
use Illuminate\Http\Request;

class VisitorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Best Wedding Planner In Agra || Shadi Events';
        return view('visitors.index', compact('title'));
    }
    public function portfolio()
    {
        $portfolio = Portfolio::select('name', 'place', 'mainImage', 'slug',)->where('status','1')->orderBy('orders', 'ASC')->get();
        $title = 'Our Work | Shadievents';
        return view('visitors.portfolio', compact('portfolio', 'title'));
    }
    public function services()
    {
        $services = Service::select('title', 'subtitle', 'mainImage', 'slug',)->where('status', '1')->orderBy('orders', 'ASC')->get();
        $title = 'Our Services | Shadievents';
        return view('visitors.services', compact('services', 'title'));
    }
    public function service(Request $request)
    {
        $slug = $request->slug;
        $service = Service::where('slug', $slug)->first();
        $title = $service->title . ' | Shadievents';
        return view('visitors.service-single', compact('service', 'title'));
    }


    public function portfolioSingle(Request $request)
    {
        $slug = $request->slug;
        $portfolio = Portfolio::where('slug', $slug)->first();
        $title = $portfolio->name . ' | Shadievents';
        return view('visitors.portfolio-single', compact('portfolio', 'title'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Enquiry  $enquiry
     * @return \Illuminate\Http\Response
     */
    public function enquiryStore(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
        ]);

        $brand = new Enquiry;
        $brand->name = $request->name;
        $brand->email = $request->email;
        $brand->phone = $request->phone;
        $brand->type = $request->type;
        $brand->messg = $request->messg;
        $brand->save();

        return redirect()->back()->with('success', 'Enquiry Received successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Enquiry  $enquiry
     * @return \Illuminate\Http\Response
     */
    public function blog()
    {
        $posts = Post::where('status', 'PUBLISHED')->latest()->get();
        $featured = Post::where('featured', '1')->latest()->skip(0)->take(10)->get();
        $title = 'Our Blogs | Shadievents';
        return view('visitors.blog', compact('title', 'posts', 'featured'));
    }

    public function blogSingle(Request $request)
    {
        $slug = $request->slug;
        $post = Post::where('slug', $slug)->first();
        $featured = Post::where('featured', '1')->latest()->skip(0)->take(10)->get();

        return view('visitors.blog-single', compact('post', 'featured'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Enquiry  $enquiry
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Enquiry $enquiry)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Enquiry  $enquiry
     * @return \Illuminate\Http\Response
     */
    public function destroy(Enquiry $enquiry)
    {
        //
    }
}
