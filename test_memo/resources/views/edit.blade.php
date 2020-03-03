@extends('layout')



@section('content')
    <div>
        <h2>メモ編集</h2>
    </div>

    <form action="{{route('update',['id' => $memo->id ])}}" method="POST">
        @csrf
        <textarea name="content"  rows="4">{{$memo->content}}</textarea>    

        <button type="submit">更新</button>
        <a href="{{route('index')}}">キャンセル</a>
    </form>



@endsection