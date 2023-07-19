<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ClassModel;

class ClassController extends Controller
{
    public function index()
    {
        $classes = ClassModel::all();
        return  $classes ;
    }

    public function create()
    {
       return view('classes.create');
    }

    public function store(Request $request)
    {
         $request->validate([
            'name' => 'required|string',
            'year' => 'required|integer',
        ]);

        ClassModel::create($request->all());

        return redirect()->route('classes.index')->with('success', 'Class created successfully.');
    
    }

    public function show(string $id)
    {
        return ClassModel::find($id);
    }

    public function edit(string $id)
    {
       return view('classes.edit', compact('class'));
    }

    public function update(Request $request, string $id)
    {
         $request->validate([
            'name' => 'required|string',
            'year' => 'required|integer',
        ]);

        $class->update($request->all());

        return redirect()->route('classes.index')->with('success', 'Class updated successfully.');
    
    }

    public function destroy(string $id)
    {
         $class->delete();

        return redirect()->route('classes.index')->with('success', 'Class deleted successfully.');

    
    }
}
