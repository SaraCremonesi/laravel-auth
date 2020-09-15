@extends('layouts.app');
@section('content')

  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1>{{$post->title}}</h1>
        <divs>
          <h3>Author</h3>
          <ul>
            <li>{{$post->user->name}}</li>
            <li>{{$post->user->email}}</li>
          </ul>
        </div>
        <div>
          <img src="{{$post->image}}" alt="">
        </div>
        <div>
          <p>{{$post->content}}</p>
        </div>
      </div>
    </div>
  </div>

@endsection
