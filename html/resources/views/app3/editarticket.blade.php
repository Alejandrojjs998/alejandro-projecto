@extends('app3')

@section('content')


<?php
use App\Models\tickets;
$id=$_GET['id'];
$tickets =Tickets::where('id',$id)->first()
?>


<div class="container w-25 border p-4 mt-5">
<form action="editarticket?id=$id"method="POST">
          @csrf
          @if (session('success'))  
                <h6 class="alert alert-success">{{session('success')}}</h6>
          @endif
          @error('cantidad')
            <h6 class="alert alert-danger">{{$message}}</h6>
          @enderror
          @error('precio')
            <h6 class="alert alert-danger">{{$message}}</h6>
          @enderror
          @error('descripcion')
            <h6 class="alert alert-danger">{{$message}}</h6>
          @enderror
            <div class="mb-3">
              <input type="text" name="cantidad"class="form-control" placeholder="<?php echo $tickets['numero'];?>">
            </div>
            <div class="mb-3">
              <input type="text" name="precio"class="form-control" placeholder="<?php echo $tickets['precio'];?>">
            </div>
            <div class="mb-3">
              <input type="text" name="descripcion"class="form-control" placeholder="<?php echo $tickets['descripcion'];?>">
            </div>
            <button type="submit" class="btn btn-primary">Editar</button>
            <a href="{{ route('comandas') }}" class="btn btn-primary">Volver</a>
          </form>
    </div>


@endsection