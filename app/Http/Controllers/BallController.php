<?php

namespace App\Http\Controllers;

use App\Models\Ball;
use App\Models\Bucket;

use Illuminate\Http\Request;

class BallController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function submit(Request $request)
    {

        $ballData = Ball::all();
        $ballData = json_decode(json_encode($ballData), true);

        $bucketData = Bucket::all();
        $bucketData = json_decode(json_encode($bucketData), true);

        $data = $request->all();





        $data = json_decode(json_encode($data), true);
        return view('index')->with(compact('data', 'ballData', 'bucketData'));
        // echo "<pre>";
        // print_r($request->all());
        // die();
    }
}
