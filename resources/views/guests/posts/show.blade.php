@extends('layouts.app');
@section('content')

  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1>Posts List</h1>
        <h2>{{$post->title}}</h2>
        <p>{{$post->created_at->format('d-m-Y')}}</p>
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
