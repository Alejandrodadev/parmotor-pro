@extends('layouts.layoutMaster')

@section('title', 'Edit motorcycle')

@section('content')
  @if (session('success'))
    <div class="alert alert-success">
      {{ session('success') }}
    </div>
  @endif
  @if (session('error'))
    <div class="alert alert-danger">
      {{ session('error') }}
    </div>
  @endif
  <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Edit /</span> Motorcycles</h4>
  <form action="{{ route('motorcycle.show') }}" method="POST">
    @csrf
    <div class="row">
      <div class="col-md-6">
        <div class="row">
          <div class="col-12">
            <div class="card mb-4">
              <h5 class="card-header">Select motorcycle to edit</h5>
              <div class="card-body demo-vertical-spacing demo-only-element">
                <div class="input-group">
                  <label class="input-group-text" for="brand1">Brand</label>
                  <select class="form-select" id="brand1" name="brand1" required>
                    <option selected>Choose...</option>
                    @foreach($products->pluck('brand')->unique() as $brand)
                      <option value="{{ $brand }}">{{ $brand }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="input-group">
                  <label class="input-group-text" for="model1">Model</label>
                  <select class="form-select" id="model1" name="model1" required>
                    <option value="">Choose a model</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <button type="submit" class="btn btn-info me-sm-2 me-1">Submit</button>
    <button type="reset" class="btn btn-label-info">Cancel</button>
  </form>
  <script src="{{ asset('js/jquery-3.6.4.min.js') }}"></script>
  <script src="{{ asset('js/models-edit.js') }}"></script>
@endsection
