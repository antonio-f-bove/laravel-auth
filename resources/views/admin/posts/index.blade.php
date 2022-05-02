@extends('layouts.app')

@section('content')

<div class="container">
  <ul class="list-group">
    @foreach ($posts as $post)
      <li class="list-group-item">
        <a href="{{ route('admin.posts.show', $post) }}">
          {{ $post->title }}
        </a>
      </li>
    @endforeach
  </ul>
</div>

@endsection