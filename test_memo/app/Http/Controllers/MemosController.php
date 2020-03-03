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

    public function editMemo(Request $request) {
        $memo = Memo::find($request->id);
        //var_dump($memo);
        return view('edit',['memo'=>$memo]);
    }

    public function update(Request $request) {

        $memo = Memo::find($request->id);
        $content = $request->validate(['content'=>'required|max:500']);
        $memo->fill($content)->save();

        return redirect()->route('index');        
    }

    public function delete(Request $request) {
        $memo = Memo::find($request->id);
        $memo->delete();
        return redirect()->route('index'); 

    }


    


}
