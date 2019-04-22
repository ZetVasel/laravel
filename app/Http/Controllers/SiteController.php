<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function main()
    {
        return view('main', ['New_Test'=>'LOL'], ['alert'=>'Danger overload']);
    }

    public function contacts()
    {
        return view('contacts');
    }

    public function category()
    {
        return view('category');
    }
}