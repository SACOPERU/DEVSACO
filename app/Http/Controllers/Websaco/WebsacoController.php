<?php

namespace App\Http\Controllers\Websaco;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebsacoController extends Controller
{
    public function index()
    {
        return view('websaco.dashboard');
    }

    public function show($id)
    {
        return view('websaco.show', ['id' => $id]);
    }

}
