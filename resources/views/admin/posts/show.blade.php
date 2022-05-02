@extends('layouts.app')

@section('content')
  <div class="container">
  
    <h1>{{ $post->title }}</h1>

    <div class="d-flex justify-content-end">
      <h3>Published at: {{ $post->published_at }}</h3>
    </div>

    <div id="content">
      {{ $post->content }}
    </div>

  </div>    
@endsection