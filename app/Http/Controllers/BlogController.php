<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{


    public function __construct()
    {
        $this->middleware(['auth:api','auth', 'verified']);
    }

    public function index()
    {
        return "This is blog";
    }
}
