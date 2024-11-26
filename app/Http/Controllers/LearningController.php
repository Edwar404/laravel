<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LearningController extends Controller
{
    //
    public function index()
    {
        return "Hello World!";
    }

    public function edit($id)
    {
        return "Edit Data ID: " . $id;
    }

    public function delete($id)
    {
        return "Delete Data ID: " . $id;
    }

    // public function
}
