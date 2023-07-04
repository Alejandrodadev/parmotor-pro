@extends('layouts/layoutMaster')

@section('title', 'Create Article')

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
  <form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="col-xl-6 col-md-6 col-sm-12 mb-6">
      <label for="title">Título:</label>
      <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}">
    </div>
    <div class="col-xl-5 col-md-6 col-sm-12 mb-6">
      <label for="subtitle">Subtítulo:</label>
      <input type="text" name="subtitle" id="subtitle" class="form-control" value="{{ old('subtitle') }}">
    </div>
    <div class="col-xl-4 col-sm-12 mb-6">
      <label for="author">Autor:</label>
      <input type="text" name="author" id="author" class="form-control" value="{{ old('author') }}">
    </div>
    <div class="col-xl-6 col-md-6 col-sm-12 mb-6">
      <label for="content">Contenido:</label>
      <textarea name="content" id="autosize-demo" rows="4" class="form-control">{{ old('content') }}</textarea>
    </div>
    <div class="col-xl-3 col-md-6 col-sm-12 mb-6">
      <label for="url_images">url image:</label>
      <input name="url_images" id="url_images"  class="form-control">
    </div>
    <div class="col-xl-3 col-md-6 col-sm-12 mb-6">
      <label for="upload">Subir imagen:</label>
      <input type="file" class="form-control" name="upload" id="upload" placeholder="Subir imagen">
    </div>
    <div class="col-xl-2 col-md-6 col-sm-12 mb-2">
      <label for="published_at">Fecha de publicación:</label>
      <input type="date" name="published_at" id="published_at" class="form-control date-mask" value="{{ date('Y-m-d') }}" readonly>
    </div>
    <br>
    <button type="submit" class="btn btn-info">Save</button>
    <a href="{{ route('articles.admin') }}" class="btn btn-label-info">Back</a>
  </form>

@endsection
