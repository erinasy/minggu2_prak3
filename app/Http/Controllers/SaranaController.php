<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaranaController extends Controller
{
    public function kantor() {
        return "Berikut adalah sarana prasarana perkantoran";
    }
    public function lab() {
        return "Berikut adalah sarana prasarana laboratorium";
    }
    public function kelas() {
        return "Berikut adalah sarana dan prasarana kelas";
    }
    public function lain() {
        return "Berikut adalah sarana dan prasarana lainnya";
    }
}

