@extends('layouts/layoutMaster')

@section('title', 'Edit Article')

@section('vendor-script')
  <script src="{{asset('assets/vendor/libs/autosize/autosize.js')}}"></script>
@endsection

@section('page-script')
  <script src="{{asset('assets/js/forms-extras.js')}}"></script>
@endsection

@section('content')
  @if (session('success'))
    <div class="alert alert-success">
      {{ session('success') }}
    </div>
  @endif
  @if (Session::has('error'))
    <div class="alert alert-danger">
      {{ Session::get('error') }}
    </div>
  @endif
  @if($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif
  <h1>{{ $article->title }}</h1>
  <form action="{{ route('articles.update', $article->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to save the changes?');" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="col-xl-6 col-md-6 col-sm-12 mb-6">
      <label for="title">Título:</label>
      <input type="text" name="title" id="title" class="form-control" value="{{ $article->title }}">
    </div>
    <div class="col-xl-5 col-md-6 col-sm-12 mb-6">
      <label for="subtitle">Subtítulo:</label>
      <input type="text" name="subtitle" id="subtitle" class="form-control" value="{{ $article->subtitle }}">
    </div>
    <div class="col-xl-4 col-sm-12 mb-6">
      <label for="author">Autor:</label>
      <input type="text" name="author" id="author" class="form-control" value="{{ $article->author }}">
    </div>
    <div class="col-xl-10 col-md-6 col-sm-12 mb-6">
      <label for="content">Contenido:</label>
      <textarea name="content" id="autosize-demo" rows="4" class="form-control">{{ $article->content }}</textarea>
    </div>
    <div class="col-xl-3 col-md-6 col-sm-12 mb-6">
      <label for="url_images">Url image:</label>
      <input name="url_images" id="ulr_image"  class="form-control" value="{{ $article->url_images }}">
    </div>
    <div class="col-xl-3 col-md-6 col-sm-12 mb-6">
      <label for="upload">Actualizar imagen</label>
      <input type="file" class="form-control" name="upload" id="upload" placeholder="Actualizar imagen">
    </div>
    <div class="col-xl-2 col-md-6 col-sm-12 mb-2">
      <label for="published_at">Fecha de publicación:</label>
      <input type="date" name="published_at" id="published_at" class="form-control" value="{{ $article->published_at }}">
    </div>
    <button type="submit" class="btn btn-info">Save changes</button>
  </form>
  <br>
  <a href="{{ route('articles.index') }}" class="btn btn-label-info">Back</a>

@endsection
