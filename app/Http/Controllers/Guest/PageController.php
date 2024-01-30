<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Trains;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        $today = today();
        $trains = Trains::where('data_di_partenza', '>=', $today)->get();
        return view('home', compact('trains'));
    }
}
