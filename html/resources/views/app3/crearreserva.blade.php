@extends('app3')

@section('content')
          <!--//   'turno','fecha','telefono','nombre','personas','idmesa'-->
<div class="container w-25 border p-4 mt-5">
<form action="{{ route('crearreserva') }}"method="POST">
          @csrf
          @if (session('success'))  
                <h6 class="alert alert-success">{{session('success')}}</h6>
          @endif
          @error('turno')
            <h6 class="alert alert-danger">{{$message}}</h6>
          @enderror
          @error('fecha')
            <h6 class="alert alert-danger">{{$message}}</h6>
          @enderror
          @error('personas')
            <h6 class="alert alert-danger">{{$message}}</h6>
          @enderror
            <div class="mb-3">
              <input type="date" name="fecha"class="form-control" placeholder="Fecha">
            </div>
            <div class="mb-3">
              <input type="text" name="personas"class="form-control" placeholder="Numero de personas">
            </div>
            <div class="mb-3">
              <input type="text" name="descripcion"class="form-control" placeholder="Descripcion">
            </div>
            <div class="mb-3">
                <select class="form-select" aria-label="Default select example" name="turno">
                    <option >Turno</option>
                    <option value="13:00-14:00">13:00-14:00</option>
                    <option value="15:00-16:00">15:00-16:00</option>
                    <option value="21:00-22:00">21:00-22:00</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Crear</button>
            <a href="{{ route('zona') }}" class="btn btn-primary">Volver</a>
          </form>
    </div>


@endsection