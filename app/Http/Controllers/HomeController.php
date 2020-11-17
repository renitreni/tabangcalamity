<?php

namespace App\Http\Controllers;

use App\Models\HelpRequest;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('home');
    }

    public function table()
    {
        return DataTables::of(HelpRequest::all())->make(true);
    }

    public function preview($id)
    {
        $data = HelpRequest::find($id);

        return view('form_preview', compact('data'));
    }
}
