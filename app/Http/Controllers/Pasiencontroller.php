<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;

class Pasiencontroller extends Controller
{
    public function index(){
        $pasiens = Pasien::all();
        return view('Admin.pasien.index', compact('pasiens'));
    }
}
