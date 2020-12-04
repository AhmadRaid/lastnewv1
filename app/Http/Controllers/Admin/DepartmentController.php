<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Enumerations\CategoryType;
use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index(){
        $departments= Department::all();
        return view('Admin.Departments.index',compact('departments'));
    }
    public function create(){
        $categories = Department::all();
        return view('Admin.Departments.create',compact('categories'));
    }

    public function store(Request $request){

        if($request -> type == 1) //main category
        {
            $request->request->add(['parent_id' => null]);
        }

        $department= Department::all();
        Department::create([
            'name' => $request->name,
            'parent_id' => $request->parent_id,
            'is_active' => Department::first()->is_active($request)
        ]);

        return redirect('Admin/Departments/index');
    }
}
