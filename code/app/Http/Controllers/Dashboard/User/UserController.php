<?php

namespace App\Http\Controllers\Dashboard\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $data = User::where('role', 0)->paginate(10);

        return view('dashboard.penyewa.index', compact('data'));
    }
    public function edit(User $data)
    {
        $data['title'] = 'Edit Penyewa';
        $data['user'] = $data;
        return view('dashboard.penyewa.edit', $data);
    }
    public function destroy(User $data)
    {
        $data->delete();
        return redirect()->back()->with('success', 'Penyewa deleted successfully');
    }
}
