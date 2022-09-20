<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $total_space = disk_total_space("/");
        $free_space = disk_free_space("/");
        // dd($this->dataSize($total_space));

        $datas = [
            'data' => [
                'space_text' => [
                    'total_text' => $this->dataSize($total_space),
                    'free_text' => $this->dataSize($free_space),
                ],
                'space' => [
                    'total' => $total_space,
                    'free' => $free_space,
                ],
            ]
        ];

        return view('home', compact('datas'));
    }

    function dataSize($Bytes)
    {
        $Type = array("", "kilo", "mega", "giga", "tera");
        $counter = 0;
        while ($Bytes >= 1024) {
            $Bytes /= 1024;
            $counter++;
        }
        return ("" . $Bytes . " " . $Type[$counter] . "bytes");
    }
}
