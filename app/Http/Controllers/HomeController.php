<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $blogs = [
            [
                'title' => 'Title one',
                'body' => 'this is a body text',
                'status' => 1
            ],
            [
                'title' => 'Title two',
                'body' => 'this is a body text',
                'status' => 0
            ],
            [
                'title' => 'Title three',
                'body' => 'this is a body text',
                'status' => 0
            ],
            [
                'title' => 'Title four',
                'body' => 'this is a body text',
                'status' => 1
            ]
        ];
        return view('home', compact('blogs'));
    }
}
