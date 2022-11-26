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

    public function adminComics() {
        $date= DB::table('comics') -> get();
        return view('admin.comics', ['arr' => $date]);
    }

    public function redactor($id) {
        $date = DB::table('comics') -> where('id', $id)-> get();
        return view('admin.redactor', ['arr' => $date]);
    }

    public function change($id) {
        DB::table('comics') -> where('id', $id) -> update([
            'name' => 1,
            'price' => 1,
            'detail' => 1,
            'publisher' => 1,
            'year' => 1,
            'pages' => 1,
            'img' => 1,
            'category' => 1,
            'count' => 1
        ]);
        $date= DB::table('comics') -> get();
        return view('admin.comics', ['arr' => $date]);
    }

    public function delete($id) {
        DB::table('comics') -> where('id',  $id) -> delete();
        $date = DB::table('comics') -> get();
        return redirect('admin/comics');
    }

    public function create() {
        return view('admin.create');
    }

    public function add() {
        DB::table('comics') -> insertOrIgnore([
            'name' => 1,
            'price' => 1,
            'detail' => 1,
            'publisher' => 1,
            'year' => 1,
            'pages' => 1,
            'img' => 1,
            'category' => 1,
            'count' => 1
        ]);
        $date= DB::table('comics') -> get();
        return redirect('admin/comics');
    }
}