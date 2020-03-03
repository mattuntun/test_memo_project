@extends('layout')



@section('content')

    <form action="{{route('store')}}" method="POST">
        @csrf
        <textarea name="content"  rows="4"></textarea>    

        <button type="submit">作成</button>
        <a href="{{route('index')}}">キャンセル</a>
    </form>



@endsection