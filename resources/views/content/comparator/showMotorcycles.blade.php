@extends('layouts/layoutMaster')

@section('title', 'Show motorcycles')

@section('content')
  <body>
  <table class="table">
    <thead>
    <tr>
      <td></td>
      @foreach ($motorcycles as $motorcycle)
        <td><img class="table-image" src="{{ asset('assets/images/moto/' . $motorcycle->image_url) }}" style="width: 250px; height: auto;" alt=""></td>
      @endforeach
    </tr>
    <tr>
      <th scope="col">INFO</th>
      @foreach ($motorcycles as $key => $motorcycle)
        <th scope="col">MOTO {{ $key + 1 }}</th>
      @endforeach
    </tr>
    </thead>
    <tbody>
    @foreach (['Price', 'Brand', 'Model', 'Year', 'Cylinder capacity', 'Power', 'Transmission', 'Cycle', 'Cooling', 'Cylinders',
              'Start', 'Secondary Transmission', 'Wheelbase', 'Front Brake', 'Rear Brake', 'Seat Height',
              'Weight', 'Tank Capacity'] as $property)
      <tr>
        <td>{{ $property }}</td>
        @foreach ($motorcycles as $motorcycle)
          <td>{{ $motorcycle[strtolower(str_replace(' ', '_', $property))] }}</td>
        @endforeach
      </tr>
    @endforeach
    </tbody>
  </table>
  </body>
@endsection
