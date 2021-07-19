@extends('layout')

@section('content')
    <div class="container">
        <h1>{{$post->title}}</h1>
        <h5>Latest comments: </h5>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">User name</th>
                <th scope="col">Comemnts</th>
                <th scope="col">Create at</th>
              </tr>
            </thead>
            <tbody>
                @foreach($comments as $key => $commnet) 
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$commnet->user_name}}</td>
                        <td>{{$commnet->comment}}</td>
                        <td>{{$commnet->created_at}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection