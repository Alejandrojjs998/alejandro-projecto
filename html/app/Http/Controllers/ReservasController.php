<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\reservas;

use Auth;


class ReservasController extends Controller
{
  
    //   'turno','fecha','telefono','nombre','personas','idmesa'
    public function storereserva(Request $request){
        $idmesa = session('idmesa');
        $telefono = session('tlf');
        $nombre = session('usu');
        $numero = session('numero');
        $zona = session('zona');
        $request->validate([
            'turno' => 'required',
            'fecha' => 'required',
            'personas' => 'required|min:1',
            'descripcion'
    
        ]);

       $reservas = new Reservas;
       $reservas->turno = $request->turno;
       $reservas->fecha = $request->fecha;
       $reservas->personas = $request->personas;
       $reservas->descripcion = $request->descripcion;
       $reservas->idmesa =$idmesa;
       $reservas->telefono =$telefono;
       $reservas->nombre =$nombre;
       $reservas->numero =$numero;
       $reservas->zona =$zona;
       $reservas->save();
        return redirect()->route('crearreserva')->with('success','Reserva creada con exito');
    }
    public function storereserva2(Request $request){
        $idmesa = session('idmesa');
        $telefono = session('tlf');
        $nombre = session('usu');
        $numero = session('numero');
        $capacidad = session('capacidad');
        $zona = session('zona');
        $request->validate([
            'turno' => 'required',
            'fecha' => 'required',
            'personas' => 'required|min:1'
    
        ]);

       $reservas = new Reservas;
       $reservas->turno = $request->turno;
       $reservas->fecha = $request->fecha;
       $personas=$request->personas;
       if ($personas >$capacidad) {
        return back()->withErrors(['personas'=>'Demasiadas personas'])->withInput([request('personas')]);
       }else {
        $reservas->personas = $request->personas;
 
       $reservas->idmesa =$idmesa;
       $reservas->telefono =$telefono;
       $reservas->nombre =$nombre;
       $reservas->numero =$numero;
       $reservas->zona =$zona;
       $reservas->descripcion ="-";
       $reservas->save();
        return redirect()->route('crearreserva2')->with('success','Reserva creada con exito');
    }
    }




    public function destroyreserva($id){

       $reservas =Reservas::where('id',$id)->first();

        if ($reservas != null) {
           $reservas->delete();
            return redirect()->route('zona')->with(['message'=> 'Successfully deleted!!']);
        }
      
        return redirect()->route('zona')->with(['message'=> 'Wrong ID!!']);
        
       }

       public function destroyreserva2($id){

        $reservas =Reservas::where('id',$id)->first();
 
         if ($reservas != null) {
            $reservas->delete();
             return redirect()->route('reservasactuales')->with(['message'=> 'Successfully deleted!!']);
         }
       
         return redirect()->route('reservasactuales')->with(['message'=> 'Wrong ID!!']);
         
        }
 




}
