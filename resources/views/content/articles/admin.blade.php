@extends('layouts/layoutMaster')

@section('title', 'articles')

@section('vendor-style')
  <link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css')}}">
@endsection

@section('vendor-script')
  <script src="{{asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js')}}"></script>
@endsection

@section('page-script')
  <script>
    $(document).ready(function() {
      $('#articles-table').DataTable({
        searching: true,
      });
    });
  </script>
@endsection

@section('content')
  @if (session('success'))
    <div class="alert alert-danger">{{ session('success') }}</div>
  @endif
  <table id="articles-table" class="table">
    <thead>
    <tr>
      <th>Title</th>
      <th>Subtitle</th>
      <th>Author</th>
      <th>Published</th>
      <th>Edit</th>
      <th>Delete</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($articles as $article)
      <tr>
        <td>{{ $article->title }}</td>
        <td>{{ $article->subtitle }}</td>
        <td>{{ $article->author }}</td>
        <td>{{ $article->published_at }}</td>
        <td><a href="{{ route('articles.edit', $article->id) }}" class="btn btn-info" title="Edit"><i class="fas fa-edit"></i></a></td>
        <td><form action="{{ route('articles.delete', $article->id) }}" method="post" onsubmit="return confirm('Are you sure you want to delete this article?');">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger" title="Delete"><i class="fas fa-trash-alt"></i></button>
          </form>
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
  <td><a href="{{ route('articles.create', $article->id) }}" class="btn btn-info" title="Create">Create</a></td>
@endsection
