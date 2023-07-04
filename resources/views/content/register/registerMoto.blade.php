@extends('layouts/layoutMaster')

@section('title', 'Register new moto')

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
  <div class="col-12">
    <div class="card">
      <h5 class="card-header">New motorcycle registration</h5>
      <div class="card-body">
        <form action="{{ route('newMoto') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="brand">Marca</label>
                <input type="text" class="form-control" name="brand" id="brand" value="{{ old('brand') }}"
                       placeholder="Marca" required>
              </div>
              <div class="form-group">
                <label for="model">Modelo</label>
                <input type="text" class="form-control" name="model" id="model" value="{{ old('model') }}"
                       placeholder="Modelo" required>
              </div>
              <div class="form-group">
                <label for="year">Año</label>
                <input type="number" class="form-control" name="year" id="year" value="{{ old('year') }}"
                       placeholder="Año" required>
              </div>
              <div class="form-group">
                <label for="price">Precio</label>
                <input type="number" class="form-control" name="price" id="price" value="{{ old('price') }}"
                       placeholder="Precio" required>
              </div>
              <div class="form-group">
                <label for="cylinder_capacity">Cilindrada</label>
                <input type="text" class="form-control" name="cylinder_capacity" id="cylinder_capacity"
                       value="{{ old('cylinder_capacity') }}" placeholder="Cilindrada" required>
              </div>
              <div class="form-group">
                <label for="power">Potencia</label>
                <input type="text" class="form-control" name="power" id="power" value="{{ old('power') }}"
                       placeholder="Potencia" required>
              </div>
              <div class="form-group">
                <label for="transmission">Transmisión</label>
                <input type="text" class="form-control" name="transmission" id="transmission"
                       value="{{ old('transmission') }}" placeholder="Transmisión" required>
              </div>
              <div class="form-group">
                <label for="cycle">Ciclo</label>
                <input type="text" class="form-control" name="cycle" id="cycle" value="{{ old('cycle') }}"
                       placeholder="Ciclo" required>
              </div>
              <div class="form-group">
                <label for="cooling">Refrigeración</label>
                <input type="text" class="form-control" name="cooling" id="cooling" value="{{ old('cooling') }}"
                       placeholder="Refrigeración" required>
              </div>
              <div class="form-group">
                <label for="cylinders">Cilindros</label>
                <input type="text" class="form-control" name="cylinders" id="cylinders" value="{{ old('cylinders') }}"
                       placeholder="Cilindros" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="start">Arranque</label>
                <input type="text" class="form-control" name="start" id="start" value="{{ old('start') }}"
                       placeholder="Arranque" required>
              </div>
              <div class="form-group">
                <label for="secondary_transmission">Transmisión secundaria</label>
                <input type="text" class="form-control" name="secondary_transmission" id="secondary_transmission"
                       value="{{ old('secondary_transmission') }}" placeholder="Transmisión secundaria" required>
              </div>
              <div class="form-group">
                <label for="wheelbase">Distancia entre ejes</label>
                <input type="text" class="form-control" name="wheelbase" id="wheelbase" value="{{ old('wheelbase') }}"
                       placeholder="Distancia entre ejes" required>
              </div>
              <div class="form-group">
                <label for="front_brake">Freno delantero</label>
                <input type="text" class="form-control" name="front_brake" id="front_brake"
                       value="{{ old('front_brake') }}" placeholder="Freno delantero" required>
              </div>
              <div class="form-group">
                <label for="rear_brake">Freno trasero</label>
                <input type="text" class="form-control" name="rear_brake" id="rear_brake"
                       value="{{ old('rear_brake') }}" placeholder="Freno trasero" required>
              </div>
              <div class="form-group">
                <label for="seat_height">Altura del asiento</label>
                <input type="text" class="form-control" name="seat_height" id="seat_height"
                       value="{{ old('seat_height') }}" placeholder="Altura del asiento" required>
              </div>
              <div class="form-group">
                <label for="weight">Peso</label>
                <input type="text" class="form-control" name="weight" id="weight" value="{{ old('weight') }}"
                       placeholder="Peso" required>
              </div>
              <div class="form-group">
                <label for="tank_capacity">Capacidad del depósito</label>
                <input type="text" class="form-control" name="tank_capacity" id="tank_capacity"
                       value="{{ old('tank_capacity') }}" placeholder="Capacidad del depósito" required>
              </div>
              <div class="form-group">
                <label for="image_url">URL</label>
                <input type="text" class="form-control" name="image_url" id="image_url" value="{{ old('image_url') }}"
                       placeholder="URL de la imagen" required>
              </div>
              <div class="form-group">
                <label for="upload">Subir imagen</label>
                <input type="file" class="form-control" name="upload" id="upload" placeholder="Subir imagen" required>
              </div>
            </div>
          </div>
          <br>
          <button type="submit" class="btn btn-info">Confirm</button> &nbsp; &nbsp; &nbsp;
          <button type="reset" class="btn btn-label-info">Reset</button>
        </form>
      </div>
    </div>
  </div>
@endsection
