<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Memo;

class MemosController extends Controller
{
    public function index() {
        $memos = Memo::orderBy('created_at','desc')->get();
        return view('index',['memos'=>$memos]);
    }

    public function newMemo() {
        return view('create');
    }

    public function store(Request $request) {
        $content = $request->validate(['content' => 'required|max:500']
        );

        Memo::create($content);
        return redirect()->route('index');
    }


    


}
