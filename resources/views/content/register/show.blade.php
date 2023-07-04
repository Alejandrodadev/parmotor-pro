@extends('layouts.layoutMaster')

@section('title', 'Edit motorcycle')

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
  <div class="col-12">
    <div class="card">
      <h5 class="card-header">Edit Motorcycle</h5>
      <div class="card-body">
        @foreach($motorcycles as $motorcycle)
          <form action="{{ route('motorcycle.update', [$motorcycle]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="brand">Marca</label>
                  <input type="text" class="form-control" name="brand" id="brand" value="{{ $motorcycle->brand }}" placeholder="Marca" required>
                </div>
                <div class="form-group">
                  <label for="model">Modelo</label>
                  <input type="text" class="form-control" name="model" id="model" value="{{ $motorcycle->model }}" placeholder="Modelo" required>
                </div>
                <div class="form-group">
                  <label for="year">Año</label>
                  <input type="number" class="form-control" name="year" id="year" value="{{ $motorcycle->year }}" placeholder="Año" required>
                </div>
                <div class="form-group">
                  <label for="price">Precio</label>
                  <input type="text" class="form-control" name="price" id="price" value="{{ $motorcycle->price }}" placeholder="Precio" required>
                </div>
                <div class="form-group">
                  <label for="cylinder_capacity">Cilindrada</label>
                    <input type="text" class="form-control" name="cylinder_capacity" id="cylinder_capacity" value="{{ $motorcycle->cylinder_capacity }}" placeholder="Cilindrada" required>
                </div>
                <div class="form-group">
                  <label for="power">Potencia</label>
                  <input type="text" class="form-control" name="power" id="power" value="{{ $motorcycle->power }}" placeholder="Potencia" required>
                </div>
                <div class="form-group">
                  <label for="transmission">Transmisión</label>
                  <input type="text" class="form-control" name="transmission" id="transmission" value="{{ $motorcycle->transmission }}" placeholder="Transmisión" required>
                </div>
                <div class="form-group">
                  <label for="cycle">Ciclo</label>
                  <input type="text" class="form-control" name="cycle" id="cycle" value="{{ $motorcycle->cycle }}" placeholder="Ciclo" required>
                </div>
                <div class="form-group">
                  <label for="cooling">Refrigeración</label>
                  <input type="text" class="form-control" name="cooling" id="cooling" value="{{ $motorcycle->cooling }}" placeholder="Refrigeración" required>
                </div>
                <div class="form-group">
                  <label for="cylinders">Cilindros</label>
                  <input type="text" class="form-control" name="cylinders" id="cylinders" value="{{ $motorcycle->cylinders }}" placeholder="Cilindros" required>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="start">Arranque</label>
                  <input type="text" class="form-control" name="start" id="start" value="{{ $motorcycle->start }}" placeholder="Arranque" required>
                </div>
                <div class="form-group">
                  <label for="secondary_transmission">Transmisión secundaria</label>
                  <input type="text" class="form-control" name="secondary_transmission" id="secondary_transmission" value="{{ $motorcycle->secondary_transmission}}" placeholder="Transmisión secundaria" required>
                </div>
                <div class="form-group">
                  <label for="wheelbase">Distancia entre ejes</label>
                  <input type="text" class="form-control" name="wheelbase" id="wheelbase" value="{{ $motorcycle->wheelbase }}" placeholder="Distancia entre ejes" required>
                </div>
                <div class="form-group">
                  <label for="front_brake">Freno delantero</label>
                  <input type="text" class="form-control" name="front_brake" id="front_brake" value="{{ $motorcycle->front_brake }}" placeholder="Freno delantero" required>
                </div>
                <div class="form-group">
                  <label for="rear_brake">Freno trasero</label>
                  <input type="text" class="form-control" name="rear_brake" id="rear_brake" value="{{ $motorcycle->rear_brake }}" placeholder="Freno trasero" required>
                </div>
                <div class="form-group">
                  <label for="seat_height">Altura del asiento</label>
                  <input type="text" class="form-control" name="seat_height" id="seat_height" value="{{ $motorcycle->seat_height }}" placeholder="Altura del asiento" required>
                </div>
                <div class="form-group">
                  <label for="weight">Peso</label>
                  <input type="text" class="form-control" name="weight" id="weight" value="{{ $motorcycle->weight }}" placeholder="Peso" required>
                </div>
                <div class="form-group">
                  <label for="tank_capacity">Capacidad del depósito</label>
                  <input type="text" class="form-control" name="tank_capacity" id="tank_capacity" value="{{ $motorcycle->tank_capacity }}" placeholder="Capacidad del depósito" required>
                </div>
                <div class="form-group">
                  <label for="image_url">URL</label>
                  <input type="text" class="form-control" name="image_url" id="image_url" value="{{ $motorcycle->image_url }}" placeholder="URL de la imagen" required>
                </div>
                <div class="form-group">
                  <label for="upload">Actualizar imagen</label>
                  <input type="file" class="form-control" name="upload" id="upload" placeholder="Actualizar imagen">
                </div>
              </div>
            </div>
            <br>
            <button type="submit" class="btn btn-info">Confirm</button> &nbsp; &nbsp; &nbsp;
            <button type="reset" class="btn btn-label-info">Reset</button>
          </form>
        <br>
          <form action="{{ route('motorcycle.delete', $motorcycle->id) }}" method="post" onsubmit="return confirm('Are you sure you want to delete this motorcycle?');">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger">Delete</button>
          </form>
          <br>
          <a href="{{ route('motorcycle.edit', $motorcycle->id)}}" class="btn btn-label-info">Back</a>
      </div>
    </div>
  </div>
  @endforeach

@endsection
