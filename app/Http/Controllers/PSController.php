<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PSController extends Controller
{
    public function ti() {
        return "Selamat Datang di Program Studi Teknik Informatika";
    }
    public function mi() {
        return "Selamat Datang di Program Studi Manajemen Informatika";
    }
}
