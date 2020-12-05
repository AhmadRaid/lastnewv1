<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\newsrequest;
use App\Models\Department;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(){
        $News= News::all();
        return view('Admin.News.index',compact('News'));
    }
    public function create(){
        $departments = Department::all();
        return view('Admin.News.create',compact('departments'));
    }

    public function store(newsrequest $request){

        News::create([
            'Title_News' => $request->title_news,
            'Department_id' => $request->department_id,
            'Content' => $request->content_,
            'Is_active' => 1,
            'Image' => $request->image_news,
            'Country' => $request->country,
            'Visit_Count' => $request->visit_count
        ]);

        return redirect()->route('Admin.News');


    }
}

