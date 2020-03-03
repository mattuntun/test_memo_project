@extends('layout')



@section('content')

    <div>
        <a href="{{route('newMemo')}}">メモ新規作成</a>
    </div>

    <br>
    <br>
    @foreach($memos as $memo)
        <div>
            <span>{{$memo->content}}</span>
            <a href="{{route('editMemo',['id' => $memo->id ])}}">編集</a>
            <a href="{{route('delete',['id' => $memo->id ])}}">削除</a>
        </div>

    @endforeach

@endsection