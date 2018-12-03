<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CT extends Controller
{
    //Стартовая страница
    function index() {
        return view('welcome');
    }
    //Вывод json
    function json_() {
        return response()->
                        json(["name" => "John",
                              "age" => 35]);
    }
    //Страница, доступная по логину и выводящая $id из URL на страницу
    function logonly(Request $request) {
            //Если посетитель не гость, отправляем его не священную страницу
            $url=$request->path();
            if (!Auth::guest()) {
                return view('logonly')->with('url', $url);
            } //В ином случае заставляем залогиниться
            else return redirect('/login');
    }
}
