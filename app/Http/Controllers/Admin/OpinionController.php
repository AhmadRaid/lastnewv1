<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\opinionrequest;
use App\Models\Department;
use App\Models\News;
use App\Models\Opinion;
use Illuminate\Http\Request;

class OpinionController extends Controller
{
    public function index()
    {
        $opinions = Opinion::all();
        return view('Admin.Opinion.index', compact('opinions'));
    }

    public function create()
    {
        return view('Admin.Opinion.create');
    }

    public function store(opinionrequest $request)
    {

        Opinion::create([
            'Content' => $request->content_,
            'Is_active' => 1,
            'Image' => $request->image_opinion,
        ]);

        return redirect()->route('Admin.News');


    }
}
