<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Cars;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("home", [
            "cars" => Cars::paginate(4)
        ]);
    }
}
