@extends('layout')

@section('content')
    <div class="container">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Title post</th>
              </tr>
            </thead>
            <tbody>
                @foreach($posts as $key => $post) 
                    <tr>
                        <td>{{$post->id}}</td>
                        <td><a href="/post/{{$post->id}}">{{$post->title}}</a></td>
                    </tr>
                @endforeach
            
            </tbody>
        </table>
        <span>{{$posts->links()}}</span>
    </div>
@endsection