<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaranaController extends Controller
{
    public function kelas() {
        return view('sarana.kelas');
    }

    public function lab() {
        return view('sarana.lab');
    }

    public function kantor() {
        return view('sarana.kantor');
    }

    public function lainnya() {
        return view('sarana.lainnya');
    }
}

