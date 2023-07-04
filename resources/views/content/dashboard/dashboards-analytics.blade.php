@extends('layouts/layoutMaster')

@section('title', 'Home')

@section('content')
  <h5 class="pb-1 mb-4">HOME</h5>
  <div class="row mb-5">
    @foreach ($articles->take(6) as $article)
      <div class="col-md-6 col-xl-4">
        <a href="{{ route('content.articles.show', $article->id) }}" class="card-link" style="text-decoration: none; color: black;">
          <div class="card mb-3">
            <div class="image-container">
              <img class="card-img-top" src="{{ asset('assets/images/articles/' . $article->url_images) }}" alt="Card image cap" style="height: 240px; object-fit: cover;">
            </div>
            <div class="card-body">
              <h5 class="card-title">{{ $article->title }}</h5>
              <p class="card-text">{{ Str::limit($article->content, 100) }}</p>
              <p class="card-text"><small class="text-muted">{{ $article->published_at }}</small></p>
            </div>
          </div>
        </a>
      </div>
    @endforeach
  </div>
@endsection
