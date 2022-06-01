@extends('app3')
@section('content')


<div class="container-fluid  w-20 p-4 mt-5 navbar-dark">
    <span class="text-light"><h2>Reservas para hoy</h2></span>


<table class="table table-dark table-striped table-hover table-borderless">

    <?php
    use App\Models\reservas;
    use Carbon\Carbon;
    $date = Carbon::now();
    $date = $date->format('Y-m-d');
    //$date->toDateString();
    $tables = Reservas::where('fecha','=',$date)->get();

?>
        <tr>
        <td>Numero</td>
        <td>Fecha</td>
        <td>Turno</td>
        <td>Telefono</td>
        <td>Correo</td>
        <td>Personas</td>
        <td>descripcion</td>
        <td>Eliminar</td>
        
    </tr>
    @foreach($tables as $table)

    <tr>

<!--//   'turno','fecha','telefono','nombre','personas','idmesa'-->

    <td> <a href='#' class='btn btn-dark'>{{ $table->numero }}</a></td>
    <td> <a href='#' class='btn btn-dark'>{{ $table->fecha }}</a></td>
    <td> <a href='#' class='btn btn-dark'>{{ $table->turno }}</a></td>
    <td> <a href='#' class='btn btn-dark'>{{ $table->telefono }}</a></td>
    <td> <a href='#' class='btn btn-dark'>{{ $table->nombre }}</a></td>
    <td> <a href='#' class='btn btn-dark'>{{ $table->personas }}</a></td>
    <td> <a href='#' class='btn btn-dark'>{{ $table->descripcion }}</a></td>

    <form action="{{ url('borrar-reserva2/'.$table->id) }}" method="post">
    @csrf
   <td> <button class="btn btn-danger btn-sm">Eliminar</button></td>
</form>

    </tr>
    
@endforeach
    </table>
    </div>
@endsection


