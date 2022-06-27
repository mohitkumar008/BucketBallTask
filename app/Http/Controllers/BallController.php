<?php

namespace App\Http\Controllers;

use App\Models\Ball;
use App\Models\Bucket;

use Illuminate\Http\Request;

class BallController extends Controller
{
    public function index()
    {
        $ballData = Ball::all();
        $ballData = json_decode(json_encode($ballData), true);

        $bucketData = Bucket::all();
        $bucketData = json_decode(json_encode($bucketData), true);

        return view('index')->with(compact('ballData', 'bucketData'));
    }

    public function submit(Request $request)
    {

        $ballData = Ball::all();
        $ballData = json_decode(json_encode($ballData), true);

        $bucketData = Bucket::all();
        $bucketData = json_decode(json_encode($bucketData), true);

        // Total Bucket Volume
        $totalBucketVolume = 0;
        foreach ($bucketData as $list) {
            $totalBucketVolume += $list['size'];
        }
        // echo $totalBucketVolume;

        // Total Volumne of balls
        $totalBallVolume = 0;
        foreach ($ballData as $list) {
            $totalBallVolume += $list['size'];
        }
        // echo $totalBallVolume;

        // Total Volumne of entered balls
        $result['bucketData'] = Bucket::all();

        $result['ballData'] = Ball::all();

        $result = json_decode(json_encode($result), true);

        // Ball database size
        $pinkSize =  $result['ballData'][0]['size'];
        $redSize =  $result['ballData'][1]['size'];
        $blueSize =  $result['ballData'][2]['size'];
        $orangeSize =  $result['ballData'][3]['size'];
        $greenSize =  $result['ballData'][4]['size'];

        // Ball post data
        $pinkBall = $request->post('pink');
        $redBall = $request->post('red');
        $blueBall = $request->post('blue');
        $orangeBall = $request->post('orange');
        $greenBall = $request->post('green');

        // Total ball per size
        $totalPinkVolume = $pinkSize * $pinkBall;
        $totalRedVolume = $redSize * $redBall;
        $totalBlueVolume = $blueSize * $blueBall;
        $totalOrangeVolume = $orangeSize * $orangeBall;
        $totalGreenVolume = $greenSize * $greenBall;

        $totalEnteredBallVolume = $totalPinkVolume + $totalRedVolume + $totalBlueVolume + $totalOrangeVolume + $totalGreenVolume;

        if ($totalEnteredBallVolume < $totalBucketVolume) {

            echo "<pre>";
            print_r($result);
            die();
        } else {
            echo 'Volume of ball is greater than the volumne of bucket';
        }








        // return view('index')->with(compact('data', 'ballData', 'bucketData'));
    }
}
