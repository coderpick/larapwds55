<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data['user'] = [
            'name' => 'John Doe',
            'email' => 'T6oZD@example.com',
            'phone' => '1234567890'
        ];
        $data['category'] = [
            'name' => 'Category 1',
        ];
        $data['subcategory'] = [
            'name' => 'Subcategory 1',
        ];
        // return view('welcome',compact('user', 'category', 'subcategory'));
        return view('welcome', $data);
    }

    public function contact()
    {
        return view('contact');
    }
}
