<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentMarkController extends Controller
{
    public function overview()
    {
        return view("overview", [
            "overview" => ["Trang xem điểm "]
        ]);
    }
}
