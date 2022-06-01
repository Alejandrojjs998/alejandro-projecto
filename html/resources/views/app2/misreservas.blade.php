@extends('app2')
@section('content')


<div class="container-fluid  w-25 p-4 mt-5 navbar-dark">
    <span class="text-light"><h2>Reservas para esa mesa</h2></span>


<table class="table table-dark table-striped table-hover table-borderless">

    <?php
    use App\Models\reservas;
 
    $nombre = session('usu');
    $tables = Reservas::where('nombre','=',$nombre)->get();

?>
        <tr>
        <td>numero</td>
        <td>zona</td>
        <td>Fecha</td>
        <td>Turno</td>


    </tr>
    @foreach($tables as $table)

    <tr>

<!--//   'turno','fecha','telefono','nombre','personas','idmesa'-->
    <td> <a href='#' class='btn btn-dark'>{{ $table->numero }}</a></td>
    <td> <a href='#' class='btn btn-dark'>{{ $table->zona }}</a></td>
    <td> <a href='#' class='btn btn-dark'>{{ $table->fecha }}</a></td>
    <td> <a href='#' class='btn btn-dark'>{{ $table->turno }}</a></td>


    <form action="{{ url('borrar-reserva/'.$table->id) }}" method="post">
    @csrf

</form>

    </tr>
    
@endforeach
    </table>
  
    <a href="{{ route('crearreserva2') }}" class="btn btn-primary">Crear Reserva</a>
    <a href="{{ route('reserva2') }}" class="btn btn-primary">Volver</a>
    </div>
@endsection


