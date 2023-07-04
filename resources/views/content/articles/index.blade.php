@extends('layouts/layoutMaster')

@section('title', 'articles')

@section('content')
  @if (session('success') )
    <div class="alert alert-danger">{{ session('success') }}</div>
  @endif
  <h4 class="fw-bold py-3 mb-4">Articles</h4>
  <div class="row mb-4">
    @foreach ($articles as $article)
      <div class="col-12 col-sm-6 col-lg-4 mb-4">
        <div class="card">
          <div class="card-body text-center">
            <a href="{{ route('content.articles.show', $article->id) }}" class="card-link" style="text-decoration: none; color: #4a4d61;">
              <h3>{{ $article->title }}</h3>
              <p>{{ $article->subtitle }}</p>
              <p>Author: {{ $article->author }}</p>
              <p>Published: {{ $article->published_at }}</p>
            </a>
          </div>
        </div>
      </div>
    @endforeach
  </div>
@endsection
