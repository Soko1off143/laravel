<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;    

class TestController extends Controller
{
    // Задача 16.1
    public function form(Request $request) {
        if ($request->has('name') && $request->has('age')) {
            $request->flash();
        }
        return view('test.form');
    }

    public function result(Request $request) {
        return $request->old('name').' '.$request->old('age');
    }

    // Задача 16.2
    public function form1(Request $request) {
        if ($request->has('num1') && $request->has('num2') && $request->has('num3') && $request->has('num4') && $request->has('num5')) {
            $request->flash();
            return redirect('/test/result1');
        }
        return view('test.form');
    }

    public function result1(Request $request) {
        $result = $request->old('num1') + $request->old('num2') + $request->old('num3') + $request->old('num4') + $request->old('num5');
        return $result;
    }

    // Задача 16.3
    public function form2(Request $request) {
        $request->flash();
        if ($request->has('num1') && $request->has('num2')) {
            $request->flash();
        }
        return view('test.form');
    }

    public function result2(Request $request) {
        $result = $request->old('num1') + $request->old('num2');
        return $result;
    }

    // Задача 17.1
    public function response() {
        return response('Hello World', 200)->header('Content-Type', 'test/response');
    }
}
