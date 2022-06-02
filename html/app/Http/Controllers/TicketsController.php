<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\tickets;

use App\Models\productos;

use Carbon\Carbon;

use Auth;

class TicketsController extends Controller
{
    public function añadorticket($id){

        $producto =Productos::where('id',$id)->first();
       $nombrepro= $producto['nombre'];
       $precio= $producto['precio'];

       $idmesa = session('idmesa');
        $numero = session('numero');

        $date = Carbon::now();
        $date = $date->format('Y-m-d');

        $ticket = new Tickets;
        $ticket->numero = $numero;
        $ticket->fecha = $date;
        $ticket->producto = $nombrepro;
        $ticket->numpro = '1';
        $ticket->precio = $precio;
        $ticket->idmesa=$idmesa;
        $ticket->descripcion="-";

        $ticket->save();
        return redirect()->route('comandas')->with('success',' creada con exito');

        }


        public function vaciar($id){

            $ticket=Tickets::where('idmesa','=',$id)->get();
            $ticket->each->delete();
            return redirect()->route('comandas')->with(['message'=> 'Successfully deleted!!']);
        
            
           }

           public function destroyticket($id){

            $tickets =Tickets::where('id',$id)->first();
    
            if ($tickets != null) {
                $tickets->delete();
                return redirect()->route('comandas')->with(['message'=> 'Successfully deleted!!']);
            }
          
            return redirect()->route('comandas')->with(['message'=> 'Wrong ID!!']);
            
           }
/*
           public function edit($id){
            $ticket=Tickets::findOrFail($id);
            return view('editarticket',compact('tickets'));
        }
*/
           public function updateticket(Request $request,$id)
           {

            $tickets =Tickets::where('id',$id)->first();

              $ticket->numpro = $request->numero;
              $ticket->precio = $request->precio;
              $ticket->descripcion = $request->descripcion;
             $tickets->update();
               return redirect()->route('comandas')->with(['message'=> 'Successfully deleted!!']);
           }



}
