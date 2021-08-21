<?php

namespace App\Http\Controllers;

use App\Models\Cluster;

class IndexController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $records = Cluster::orderBy('time', 'desc')->get();

        return view('index', [
            'records' => $records,
        ]);
    }
}
