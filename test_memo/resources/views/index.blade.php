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
        </div>

    @endforeach

@endsection