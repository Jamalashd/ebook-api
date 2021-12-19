<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me()
    {
        return[
            "NISN" => 3103119122,
            "Nama" => "Muhammad Jamal Ash-shiddiq",
            "Gender" => "Laki-laki",
            "Phone" => 6282121231913,
            "Kelas" => "XII RPL 4"
        ];
    }
}
