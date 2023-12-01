<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
