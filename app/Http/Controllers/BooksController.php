<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index()
    {
        return view('page.issuedbooklist');
    }

    public function AvailableBookList()
    {
        return view('page.availablebook');
    }
}
