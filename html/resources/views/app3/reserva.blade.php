@extends('app3')
@section('content')



<div class="container-fluid  w-25 p-4 mt-5 navbar-dark">
    <span class="text-light"><h2>Mesas</h2></span>

<table class="table table-dark table-striped table-hover table-borderless">
    <tr>
        <td>Numero</td>
        <td>Capacidad</td>
        <td>Reservar</td>
    </tr>

    <?php
    use App\Models\mesas;

        $zona=$_GET['zona'];
       
    $tables = mesas::where('zona','=',$zona)->get();

    ?>
    @foreach($tables as $table)
    <tr>
    <td>{{ $table->numero }}</td>
    <td>{{ $table->capacidad }}</td>

    
 <td> <a href='reservas3?id={{ $table->id }}&numero={{ $table->numero }}&zona={{ $table->zona }}&capacidad={{ $table->capacidad }}' class='btn btn-dark'>Reservar</a></td>
    </tr>

    
@endforeach
    </table>
    <a href="{{ route('zona') }}" class="btn btn-primary">Volver</a>
    </div>
    
@endsection


