<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Option;

class OptionController extends Controller
{
    protected function index() {
        return view("pages.options");
    }
}
