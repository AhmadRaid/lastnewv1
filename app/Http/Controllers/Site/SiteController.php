<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Opinion;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        $news = News::all();

        $last_news = News::orderBy('created_at', 'desc')->take(3)->get();

        $Opinion = Opinion::all();

        return view('Site.index', compact('news'));
    }

    public function newspage($id)
    {

        $news = News::where('id',$id)->get();


        return view('Site.newspage',compact('news'));
    }

    public function image()
    {
        $news = News::all();

        $last_news = News::orderBy('created_at', 'desc')->take(5)->get();

        return view('Site.index', compact('news') , compact('last_news'));
    }
}
