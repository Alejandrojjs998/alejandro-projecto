@extends('app3')
@section('content')



<div class="container-fluid  w-25 p-4 mt-5 navbar-dark">
    <span class="text-light"><h2>Mesas</h2></span>

<table class="table table-dark table-striped table-hover table-borderless">
    <tr>
        <td>Numero</td>
        <td>Acceder</td>
    </tr>

    <?php
    use App\Models\mesas;

        $zona=$_GET['zona'];
       
    $tables = mesas::where('zona','=',$zona)->get();

    ?>
    @foreach($tables as $table)
    <tr>
    <td>{{ $table->numero }}</td>

    
 <td> <a href='ticket?id={{ $table->id }}&numero={{ $table->numero }}&zona={{ $table->zona }}' class='btn btn-dark'>Acceder</a></td>
    </tr>

    
@endforeach
    </table>
    <a href="{{ route('comandas') }}" class="btn btn-primary">Volver</a>
    </div>
    
@endsection


