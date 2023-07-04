@extends('layouts/layoutMaster')

@section('title', 'Show articles')
@section('styles')
  <link href="{{ asset('css/spin.css') }}" rel="stylesheet">
@endsection
@section('content')

  @if (session('success'))
    <div class="alert alert-success">
      {{ session('success') }}
    </div>
  @endif
  <div class="container">
    <h1>{{ $article->title }}</h1>
    <p>Author: {{ $article->author }}</p>
    <p>Content: {{ $article->content }}</p>
    <p>Published At: {{ $article->published_at }}</p>
    <div class="image-container">
      <img class="card-img-top spinning-image" src="{{ asset('assets/images/articles/' . $article->url_images) }}" alt="Card image cap" />
    </div>
    <a href="{{ route('articles.index') }}" class="btn btn-info">Go back</a>
  </div>
@endsection
