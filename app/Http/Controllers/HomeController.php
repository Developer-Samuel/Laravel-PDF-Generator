<?php

namespace App\Http\Controllers;

use App\Services\DataService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = DataService::prepareData();

        return response()->json($data);
    }
}
