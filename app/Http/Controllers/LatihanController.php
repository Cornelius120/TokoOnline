<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    public function getTabel()
    {
        return view('latihan.tabel');
    }

    public function getForm()
    {
        return view('latihan.form');
    }
}
