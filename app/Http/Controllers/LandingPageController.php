<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        $services = Service::limit(3)->orderby('id', 'desc')->get();

        return view('welcome', compact('services'));

        // return view('welcome', [
        //     'services' => $services
        // ]);
    }
}
