<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function processCreate(request $request)
    {
        $name = $request->input('name');
        return "Data telah di submit:". $name;
    }
};
