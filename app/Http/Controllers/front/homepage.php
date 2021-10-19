<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Page;
use Illuminate\Http\Request;
use App\Models\Category;

class homepage extends Controller
{
    public function __construct()
    {
        view()->share('navs', Page::orderBy('order')->select('slug', 'title')->get());
    }

    public function index()
    {
        $data = [
            'categories' => Category::all(),
            'articles' => Article::query()->orderByDesc('created_at')->paginate(3),

        ];
        return view('front.homepage', $data);
    }

    public function single($category, $slug)
    {
        $category = Category::whereSlug($category)->first() ?? abort(403, "Böyle bir kategori bulunamadı.");
        $article = Article::where('slug', $slug)->where('category_id', $category->id)->first() ?? abort(403, "Böyle bir yazı bulunamadı");
        $article->increment('hit');

        // View Data Array
        $data = [
            'article' => $article,
            'categories' => Category::all(),
        ];
        return view('front.single', $data);
    }


    public function category($category)
    {
        $category = Category::where('slug', $category)->first() ?? abort(403, "Böyle bir kategori bulunamadı");
        $articles = Article::where('category_id', $category->id)->orderByDesc('created_at')->paginate(3);
        $data = [

            'category' => $category,
            'articles' => $articles,
            'categories' => Category::all(),
        ];

        return view('front.category', $data);
    }

    public function page($slug)
    {
        $page = Page::whereSlug($slug)->first() ?? abort(403, "Böyle bir sayfa bulunamadı");
        $data = [
            'page' => $page,
        ];

        return view('front.page', $data);
    }

    public function contact()
    {
        $data = [

        ];
        return view("front.contact", $data);
    }
}
