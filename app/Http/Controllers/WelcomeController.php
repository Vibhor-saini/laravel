<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    // public function index()
    // {
    //      return view("welcome"); 
    //     //return "Coding kalakar!";
    // }

     public function index(){
    // $data = [
    //     'title' => 'Welcome to My Website',
    //     'message' => 'Hello, world!',
    //     'items' => ['Item 1', 'Item 2', 'Item 3']
    // ];

    //return view('welcome', $data);

    $title = 'Welcome to My Website';
    $message = 'Hello, world!';
    $items = ['Item 1', 'Item 2', 'Item 3'];

    // return view('welcome', compact('title', 'message', 'items'));
    // // When you use compact in PHP, it takes a list of variable names as its arguments and returns an 
    // // associative array where each key is the name of a variable and each value is the value of that variable.
    // }


    //In Laravel, the with method is used to pass data to a view. You can chain it with the view function to attach data to the view.
    return view('welcome')
    ->with('title', $title)
    ->with('message', $message)
    ->with('items', $items);

}

}
