<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        $data = compact('students');

        return view('models.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('models.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' =>  'required|email',
            'age' => 'required|numeric|min:16',
            'city' => 'required'
        ]);

        // print_r($request->all());

        // Insert query using Eloquent ORM:
        $student = new Student;
        $student->name = $request['name'];
        $student->email = $request['email'];
        $student->age = $request['age'];
        $student->city = $request['city'];
        $student->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $students = Student::all();

        if ($students->contains($id)) {
            $student = $students->find($id);

            return view('models.show', ['data' => $student]);
        } else {
            return "<h2>Id not found!</h2>";
        }
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
        if (Student::contains($id)) {
            Student::find($id)::delete();
        } else {
            return "<h2>Id not found!</h2>";
        }

        return redirect()->route('index');
    }
}
