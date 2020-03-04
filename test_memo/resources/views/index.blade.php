@extends('layout')



@section('content')

    
    <div class="text-right">
        <a href="{{route('newMemo')}}" class="btn btn-outline-secondary btn-sm mt-4" id="btn">メモ新規作成</a>
    </div>

    <script type="text/javascript">
        var btn = document.getElementById('btn');


        btn.addEventListener('click', function() {
            alert("自由にメモを書いてください");
        });

    </script>


    <div class="container">
        <div class="row">
        

        @foreach($memos as $memo)
            <div class="col-md-3 text-left mt-3">
            
                <div class="card">
                    <div class="card-body">
                        <p class="text-black-50">{{$memo->content}} </p>
                    </div>

                    <div class="card-footer text-right">
                        <a class="text-info" href="{{route('editMemo',['id' => $memo->id ])}}">編集</a>
                        <a class="text-info" href="{{route('delete',['id' => $memo->id ])}}">削除</a>
                    </div>
                
                </div>
            
            </div>
        @endforeach
        </div>


    </div>


@endsection