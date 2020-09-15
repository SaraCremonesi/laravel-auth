@extends('layouts.app');

@section('content');
  <div class="container">
    <div class="row">
      <div class="">
      <h1>Posts List</h1>
      <h3>Ciao {{$user->name}}</h3>
      <ul>
        @foreach ($posts as $post)
          <li>{{$post->user->name}} - {{$post->title}}
            <a href="{{route('admin.posts.show', $post)}}">VISUALIZZA</a>
          </li>

        @endforeach
      </ul>
      </div>
    </div>
  </div>
@endsection
