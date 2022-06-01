@extends('app3')
@section('content')



<div class="container-fluid  w-25 p-4 mt-5 navbar-dark">
    <span class="text-light"><h2>Productos</h2></span>


<table class="table table-dark table-striped table-hover table-borderless">

    <?php
    use App\Models\productos;
   $idpro=$_GET['id'];
    session(['idpro' => $idpro]);
    $tables = Productos::where('idcategoria','=',$idpro)->get();
    ?>
    @foreach($tables as $table)
    <tr>

         <form action="{{ url('anadir-producto/'.$table->id) }}" method="post">
    @csrf
   <td> <button class="btn btn-dark">{{ $table->nombre }}</button></td>
    </form>
    </tr>
    
@endforeach
    </table>
    <a href="{{ route('comandas') }}" class="btn btn-primary">Volver</a>
    </div>
    
@endsection


