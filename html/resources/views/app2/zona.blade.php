@extends('app2')
@section('content')



<div class="container-fluid  w-25 p-4 mt-5 navbar-dark">
    <span class="text-light"><h2>Zonas</h2></span>

<table class="table table-dark table-striped table-hover table-borderless">

<tr>
<td> <a href='reserva2?zona=interior' class='btn btn-dark'>Interior</a></td>
    <td> <a href='reserva2?zona=terraza' class='btn btn-dark'>Terraza</a></td>
    <td> <a href='reserva2?zona=barra' class='btn btn-dark'>Barra</a></td>
</tr>
    </table>

    </div>
    
@endsection
