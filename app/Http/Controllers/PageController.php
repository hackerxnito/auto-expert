<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function buy()
    {
        $brands = config('cars.brands');
        return view('pages.buy', compact('brands'));
    }

    public function sell()
    {
        return view('pages.sell');
    }

    public function diagnosis()
    {
        return view('pages.diagnosis');
    }

    public function financing()
    {
        return view('pages.financing');
    }

    public function testDrive()
    {
        $brands = config('cars.brands');
        return view('pages.test-drive', compact('brands'));
    }

    public function contact()
    {
        return view('pages.contact');
    }
}