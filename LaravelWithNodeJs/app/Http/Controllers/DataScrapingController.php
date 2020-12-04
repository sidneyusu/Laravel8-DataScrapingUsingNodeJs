<?php

namespace App\Http\Controllers;

use App\Http\Reguests;
use Illuminate\Http\Request;
use DB;
use Session;

class DataScrapingController extends Controller
{
    public function index() {
        $data = json_decode(file_get_contents('output.json'));
        return view('data-scraping', compact('data'));
    }
}
