<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MataKuliah;

class MataKuliahController extends Controller
{
    public function index()
    {
        $matkul = MataKuliah::all();
        return view('matakuliah',compact('matkul'));
    }
}
