<?php

namespace App\Http\Controllers;
use App\Home;
use App\Product;
use App\Category;
use App\Page;
use App\Team;
use App\Faq;
use App\Setting;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function getIndex()
    {
        $home = Home::first();
        $categories = Category::all();
        $products = Product::where('status',1)->where('featured',1)->get();
        if ( is_null($home))
        {
            abort(401, 'Fix configuration first.');
        }
        else{
            return  view('frontend.index')
            ->withHome($home)
            ->withCategories($categories)
            ->withProducts($products);
        }

    }
    public function getInspired()
    {
        $categories = Category::all();
        $page = Page::where('slug', 'get-inspired')->firstorFail();
        return  view('frontend.pages.get-inspired')
        ->withPage($page)
        ->withCategories($categories);
    }
    public function getDesign()
    {
        $page = Page::where('slug', 'rug-making-process')->firstorFail();
        $processes = Process::orderBy('id','asc')->get();
        return view('frontend.pages.order')
        ->withProcesses($processes)
        ->withPage($page);
        // return  view('frontend.pages.design');
    }
    public function orderProcess()
    {
        $page = Page::where('slug', 'design-your-rug')->firstorFail();
        return  view('frontend.pages.design')->withPage($page);
        // return  view('frontend.pages.design');
    }
    public function getAbout()
    {
        $teams = Team::all();
        $page = Page::where('slug', 'about')->firstorFail();
        return  view('frontend.pages.about')->withTeams($teams)
        ->withPage($page);
        // return  view('frontend.pages.about');
    }
    public function getContact()
    {
        return  view('frontend.pages.contact');
    }
    public function getSingleProduct()
    {
        return  view('frontend.pages.product');
    }
    public function getFAQ()
    {
        $page = Page::where('slug', '=', 'faq')->firstorFail();
        $faqs = Faq::all();
        return  view('frontend.pages.faq')->withFaqs($faqs)->withPage($page);
    }
    public function getByCategory($slug)
    {
        $category = Category::where('slug',$slug)->firstorFail();
        $products = Product::whereHas('category', function ($r) use ($slug) {
            $r->where('categories.slug', $slug);
        })->get();
        return view('frontend.pages.categories')
        ->withProducts($products)
        ->withCategory($category);
    }

    public function getProduct($category, $slug){
        $product =  Product::where('slug',$slug)->firstorFail();
        $similar = Product::whereHas('category', function ($r) use ($category) {
            $r->where('categories.slug', $category);
        })->take(6)->get();
        return view('frontend.pages.product')->withProduct($product)->withSimilars($similar);
    }


}
