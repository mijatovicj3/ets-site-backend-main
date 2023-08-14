<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Course::all()->whereIn("id", [3, 7, 8, 1]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            
            'class_id' => 'required',
            'name' => 'required',
            'subject_id' => 'required',
            'professor_id' => 'required',
        ]);

       $Course = Course::create($validated);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       return Course::find($id);
    }

    public function getcourse(Request $request)
    {
       

        return Course::all()->whereIn("id", $request->get("id"));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
