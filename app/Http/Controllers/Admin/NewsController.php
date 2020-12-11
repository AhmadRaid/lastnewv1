<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\newsrequest;
use App\images;
use App\Models\Department;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $News = News::all();
        return view('Admin.News.index', compact('News'));
    }

    public function create()
    {
        $departments = Department::all();
        return view('Admin.News.create', compact('departments'));
    }

    public function store(newsrequest $request)
    {

        News::create([
            'Title_News' => $request->title_news,
            'Department_id' => $request->department_id,
            'Content' => $request->content_,
            'Is_active' => 1,
            'Country' => $request->country,
            'Visit_Count' => $request->visit_count
        ]);

        return redirect()->route('Admin.News');


    }

    public function getimage($News_id)
    {
        return view('Admin.News.image')->withId($News_id);
    }

    public function saveProductImagesFolder(Request $request)
    {


        $file = $request->file('dzfile');

        //dzfile : is the name of paramName that exist in create images file

        $file->store('/', 'media');
        $filename = $file->hashName();


        return response()->json([
            'name' => $filename,
            'original_name' => $file->getClientOriginalName(),
        ]);

    }


    public function saveProductImagesDB(Request $request)
    {

        // save dropzone images
        if ($request->has('document') && count($request->document) > 0) {
            foreach ($request->document as $image) {
                images::create([
                    'imageable_id' => $request->news_id,
                    'imageable_type' => 'App\Models\Product',
                    'photo' => $image
                ]);
            }
        }

        return 'operation good';


    }


}

