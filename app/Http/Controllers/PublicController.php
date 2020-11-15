<?php

namespace App\Http\Controllers;

use App\Models\HelpRequest;
use Illuminate\Http\Request;
use Alert;

class PublicController extends Controller
{
    public function pageLanding(Request $request)
    {
        return view('landing');
    }

    public function sendForm(Request $request, HelpRequest $model)
    {
        $images = [];
        if ($request->file('image1')) {
            $images[] = $request->file('image1')->storeAs('', $request->file('image1')->getClientOriginalName());
        }
        if ($request->file('image2')) {
            $images[] = $request->file('image2')->storeAs('', $request->file('image2')->getClientOriginalName());
        }
        if ($request->file('image3')) {
            $images[] = $request->file('image3')->storeAs('', $request->file('image3')->getClientOriginalName());
        }

        $model->store($request, $images);

        Alert::success('Success!', 'Form Received!');

        return redirect()->back();
    }

    public function pageForm()
    {
        return view('form');
    }
}
