<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetingsController extends Controller
{
    public function greetings($time)
    {
        switch ($time) {
        case "morning":
            $time = "朝";
            $greet = "おはようございます";
            break;
        case "afternoon":
            $time = "昼";
            $greet = "こんにちは";
            break;
        case "evening":
            $time = "夕方";
            $greet = "こんばんは";
            break;
        case "night":
            $time = "夜";
            $greet = "おやすみ";
            break;
        }

        return view('message.greetings', ['time' => $time, 'greet' => $greet]);
    }

    public function freewords($msg)
    {
        return view('message.freewords' , ['msg' => $msg]);
    }

    public function random()
    {
        $greets = ['おはよう', 'こんにちは', 'こんばんは', 'おやすみ'];
        $greet = $greets[array_rand($greets, 1)];
    
        return view('message.random' , ['greet' => $greet]);
    }
}
