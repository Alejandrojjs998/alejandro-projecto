@extends('app3')
@section('content')
<div class="container-fluid  w-25 p-4 mt-5 navbar-dark">

    <?php
    use App\Models\tickets;
    $idmesa=$_GET['id'];
    $numero=$_GET['numero'];
    session(['idmesa' => $idmesa]);
    session(['numero' => $numero]);
    $tables = Tickets::where('numero','=',$numero)->get();
    $total=0;

?>
<table class="table table-dark table-striped table-borderless">
<tr>
        <td>producto</td>
        <td>cantidad</td>
        <td>precio</td>
        <td>descripcion</td>
        <td>editar</td>
        <td>eliminar</td>
        
    </tr>
<?php
$aux=isset($tables);
if ($tables==null) {
   ?>
   <a href="{{ route('comandas') }}" class="btn btn-primary">Volver</a>
<a href="{{ route('ticketcat') }}" class="btn btn-primary">Añadir Producto</a>
   <?php
}else {

        ?>
            @foreach($tables as $table)

            <tr>

            <td> <a href='#' class='btn btn-dark'>{{ $table->producto }}</a></td>
            <td> <a href='#' class='btn btn-dark'>{{ $table->numero }}</a></td>
            <td> <a href='#' class='btn btn-dark'>{{ $table->precio }}€</a></td>
            <td> <a href='#' class='btn btn-dark'>{{ $table->descripcion }}</a></td>
            <td> <a href="editarticket?id={{ $table->id }}" class="btn btn-primary">Editar</a></td>
            <form action="{{ url('borrar-ticket/'.$table->id) }}" method="post">
            @csrf
        <td> <button class="btn btn-danger btn-sm">Eliminar</button></td>
        </form>
        <?php
        $total+=$table['precio'];
        ?>
            </tr>

        @endforeach
        <tr>
            <td>Precio Total:</td>
            <td></td>
            <td>
        <?php
        echo $total;
        ?>€
            </td>
            <td></td>
            
            <td></td>
            <td></td>

        </tr>
        </table>
        <form action="{{ url('vaciar/'.$idmesa) }}" method="post">
            @csrf
        <button class="btn btn-primary btn-sm">Vaciar</button>
        </form>
        <a href="{{ route('comandas') }}" class="btn btn-primary">Volver</a>
        <a href="{{ route('ticketcat') }}" class="btn btn-primary">Añadir Producto</a>
        </div>

        <?php
        }
?>

@endsection


