<?php

namespace App\Http\Controllers;
use App\Home;
use App\Product;
use App\Category;
use App\Page;
use App\Team;
use App\Faq;
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
        return  view('frontend.pages.design');
    }
    public function getAbout()
    {
        $teams = Team::all();
        return  view('frontend.pages.about')->withTeams($teams);
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
        $faqs = Faq::all();
        return  view('frontend.pages.faq')->withFaqs($faqs);
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
}
