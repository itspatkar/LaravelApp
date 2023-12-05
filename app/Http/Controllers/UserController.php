<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function welcome()
    {
        return "welcome";
    }

    public function welcomeView()
    {
        return view('controller.welcome');
    }

    public function greet()
    {
        return "<h2>Hello World!</h2>";
    }

    public function printName(string $name)
    {
        return "<h1>Hello " . $name . "</h1>";
    }

    public function printNameF(string $name)
    {
        return view('controller.greet', ['name' => $name]);
    }

    // Using compact:
    public function printCompact(string $name)
    {
        return view('controller.namecomp', compact('name'));
    }

    public function showGet()
    {
        // Using get():
        $students = DB::table('students')->get();
        // $students = DB::table('students')->where('id', 2)->get();

        //return $students;
        //dd($students); // debug & die
        //dump($students);

        // foreach ($students as $student) {
        //     echo $student->name . "<br>";
        // }

        return view('querybuilder.showstudents', ['data' => $students]);
    }

    public function showFind(string $id)
    {
        // Using find():
        $student = DB::table('students')->find($id);
        //return $student;
        return view('querybuilder.student', ['data' => $student]);
    }
}
