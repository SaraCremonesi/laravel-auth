@extends('layouts.app');
@section('content')

  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1>Posts List</h1>
        <ul>
          @foreach ($posts as $post)
            <li>
              {{$post->title}}
              <div>
                <a href="{{route('posts.show', $post)}}">VISUALIZZA</a>
              </div>
            </li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>

@endsection
