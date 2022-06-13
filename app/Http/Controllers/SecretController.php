<?php

namespace App\Http\Controllers;

use App\Secret;
use Illuminate\Http\Request;

class SecretController extends Controller
{
    public function index(){
        return Secret::all();
    }
}
