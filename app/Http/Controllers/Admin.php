<?php

namespace App\Http\Controllers;

use App\Comics;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Admin extends Controller
{
    public function admin() {
        return view('admin.main');
    }

    public function сomics() {
        $date= DB::table('comics') -> get();
        return view('admin.comics', ['arr' => $date]);
    }

    public function redactor($id) {
        $date = DB::table('comics') -> where('id', $id)-> get();
        return view('admin.redactor', ['arr' => $date]);
    }

    // Don't work
    public function change(Request $request) {
        $id=$request->input('id');
        DB::table('comics') -> where('id', $id) -> update([
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'detail' => $request->input('detail'),
            'publisher' => $request->input('publisher'),
            'year' => $request->input('year'),
            'pages' => $request->input('pages'),
            'img' => $request->input('img'),
            'category' => $request->input('category'),
            'count' => $request->input('count')
        ]);
        return redirect('admin/comics');
    }

    public function delete($id) {
        DB::table('comics') -> where('id',  $id) -> delete();
        return redirect('admin/comics');
    }

    public function create() {
        return view('admin.create');
    }

    public function add(Request $request) {
        DB::table('comics') -> insertOrIgnore([
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'detail' => $request->input('detail'),
            'publisher' => $request->input('publisher'),
            'year' => $request->input('year'),
            'pages' => $request->input('pages'),
            'img' => $request->input('img'),
            'category' => $request->input('category'),
            'count' => $request->input('count')
        ]);
        return redirect('admin/comics');
    }
}