<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Facade\FlareClient\View;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends Controller
{
    public function index(){
        return view('home');
    }
}
