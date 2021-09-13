<?php

namespace App\Http\Controllers;

use Facade\FlareClient\Time\Time;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Http\Request;

class GreetController extends Controller
{
    private $time;

    public function greet($message)
    {
        if ($message == 'morning') {
            $message = 'おはようございます';
            $time = '朝';
        } elseif ($message == 'afternoon') {
            $message = 'こんにちわ';
            $time = '昼';
        } elseif ($message == 'evening') {
            $message = 'こんばんわ';
            $time = '夕方';
        } elseif ($message == 'night') {
            $message = 'おやすみ';
            $time = '夜';
        }

        return view('greeting/hello', ['message' => $message, 'time' => $time]);
    }

    public function text($text)
    {
        return view('greeting/text', ['text' => $text]);
    }

    public function random()
    {
        $num = rand(0, 3) % 4;
        $timeArray = ['朝', '昼', '夕方', '夜'];

        $displayMessage = $timeArray[$num];

        return view('greeting/random', ['displayMessage' => $displayMessage]);
    }
}
