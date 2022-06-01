@extends('app2')
@section('content')


<div class="container-fluid  w-25 p-4 mt-5 navbar-dark">
    <span class="text-light"><h2>Reservas para esa mesa</h2></span>


<table class="table table-dark table-striped table-hover table-borderless">

    <?php
    use App\Models\reservas;
    $idmesa=$_GET['id'];
    $numero=$_GET['numero'];
    $zona=$_GET['zona'];
    $capacidad=$_GET['capacidad'];
    session(['idmesa' => $idmesa]);
    session(['numero' => $numero]);
    session(['zona' => $zona]);
    session(['capacidad' => $capacidad]);
    $tables = Reservas::where('idmesa','=',$idmesa)->get();

?>
        <tr>
        <td>Fecha</td>
        <td>Turno</td>


    </tr>
    @foreach($tables as $table)

    <tr>

<!--//   'turno','fecha','telefono','nombre','personas','idmesa'-->

    <td> <a href='#' class='btn btn-dark'>{{ $table->fecha }}</a></td>
    <td> <a href='#' class='btn btn-dark'>{{ $table->turno }}</a></td>


    <form action="{{ url('borrar-reserva/'.$table->id) }}" method="post">
    @csrf

</form>

    </tr>
    
@endforeach
    </table>
  
    <a href="{{ route('crearreserva2') }}" class="btn btn-primary">Crear Reserva</a>
    <a href="{{ route('zona2') }}" class="btn btn-primary">Volver</a>
    </div>
@endsection


