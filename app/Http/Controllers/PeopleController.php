<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PeopleController extends Controller
{
    public function index()
    {
        return view('vpeople',['peoples'=>DB::table('people')->get()]);
    }
}
