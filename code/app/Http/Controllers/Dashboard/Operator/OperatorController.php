<?php

namespace App\Http\Controllers\Dashboard\Operator;

use App\Http\Controllers\Controller;
use App\Models\Operator;
use Illuminate\Http\Request;

class OperatorController extends Controller
{
    public function index()
    {
        $data = Operator::where('role', 0)->paginate(10);

        return view('dashboard.operator.index', compact('data'));
    }
}
