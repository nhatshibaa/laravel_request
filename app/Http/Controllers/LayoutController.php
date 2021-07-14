<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayoutController extends Controller
{
    public function layout(){
        return view('welcome');
    }

    public function index()
    {
        return view('admin.index');
    }

    public function list()
    {
        return view('admin.list');
    }

    public function form()
    {
        return view('admin.form');
    }

    public function calendar()
    {
        return view('admin.calendar');
    }

    public function ui()
    {
        return view('admin.ui');
    }
}
