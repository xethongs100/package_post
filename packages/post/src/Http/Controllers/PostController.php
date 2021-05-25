<?php

namespace Post\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index()
    {
        $array = [
            [
                'name' => 'Nguyen Van A',
                'age' => '21'
            ],
            [
                'name' => 'Nguyen Van B',
                'age' => '22'
            ],
            [
                'name' => 'Nguyen Van C',
                'age' => '23'
            ]
        ];
        return view('post::demo', compact('array'));
    }
}
