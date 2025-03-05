<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function index() {
        $person = 'John Doe';
        $friends = ['Jane Doe', 'James Doe', 'Jenny Doe'];
        return view('demo.file02', [
            'abc' => $person,
        ]) ->with('temans', $friends);

    }
}
