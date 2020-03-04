@extends('layout')



@section('content')

<br>

    <form action="{{route('update',['id' => $memo->id ])}}" method="POST">
        @csrf
        <textarea name="content" rows="4" class="form-control mt4">{{$memo->content}}</textarea>  

        @if($errors->any())
            @foreach($errors->all() as $error)
                <p>{{$error}}</p>
            @endforeach

        @endif  

        <div class="text-right mt-4">
            <button type="submit" class="btn btn-outline-secondary btm-sm">更新</button>
            <a href="{{route('index')}}" class="btn btn-outline-secondary btm-sm">キャンセル</a>        
        </div>
        
    </form>



@endsection