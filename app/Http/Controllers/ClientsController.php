<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clients;
use App\Models\Genders;
use App\Http\Requests\SaveClientRequest;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Validator;


class ClientsController extends Controller
{
    public function index(){
      
       // $clientes = Clients::paginate(4);
        
        $clientes = Clients::get();
       
        $generos = Genders::all();
        
        return view('paginas.cliente', ['clientes' => $clientes, 'generos' => $generos]);
       
    }
    public function create()
    {
      $generos = Genders::all();
      return view('paginas.cliente',['clientes' => new  Clients, 'generos' =>$generos]);

    }

    public function store(Request $request){

     
   $validated= $request->validate([


                          'identification_card' => 'required|unique:clients|max:10',
                          'name' => 'required|regex:/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]+$/i',
                          'last_name' => 'required|regex:/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]+$/i',
                          'id_genders' => 'required',
                          'phone' => 'required|regex:/^[0-9]+$/i|max:10',
                          'direction' => 'required|regex:/([^0-9][a-zA-Z0-9]+)/',
                          'email' => 'required|unique:clients|max:255',
                          /* 'email' => 'required|regex:/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/i' */

      ]);  
       
     
      
      $cliente= Clients::create($validated);
      /* $clientes = new Clients;
      $clientes->identification_card = $request->input('identification_card');
      $clientes->name= $request->input('name');
      $clientes->last_name= $request->input('last_name');
      $clientes->id_genders= $request->input('id_genders');
      $clientes->phone= $request->input('phone');
      $clientes->direction= $request->input('direction');
      $clientes->email= $request->input('email');
      $clientes->save();  
 */
      return to_route('paginas.cliente.index')->with("ok-crear", "");

      
    }

  //  public function update(Request $request,  Clients $client)
  //  {
    
  //     $generos = Genders::all();
      
  //      $validated = $request->validate([


  //                         'identification_card' => 'required',
  //                         'name' => 'required|regex:/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]+$/i',
  //                         'last_name' => 'required|regex:/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]+$/i',
  //                         'id_genders' => 'required',
  //                         'phone' => 'required|regex:/^[0-9]+$/i|max:10',
  //                         'direction' => 'required|regex:/([^0-9][a-zA-Z0-9]+)/',


  //                         'email' => 'required',
  //                         /* 'email' => 'required|regex:/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/i' */

  //     ]); 

  //     $client->update($validated);
      
  //     return to_route('paginas.cliente.index')->with("ok-editar","");
  //   }
     
      //session()->flash('status', 'Post updated!');
     //return to_route('paginas.cliente.index')

///////////////////////////////////////////////////////////////////////////////
       //encuentra el id 
     // $client= Clients::find($client);
     // $client= Clients::create($validated);



      
      //$client = Clients::where("id",$client)->latest()->first();
     

      //$client= Clients::first($client);
    
     /*  $client->identification_card = $request->input('identification_card');
      $client->name= $request->input('name');
      $client->last_name= $request->input('last_name');
      $client->id_genders= $request->input('id_genders');
      $client->phone= $request->input('phone');
      $client->direction= $request->input('direction');
      $client->email= $request->input('email');
      $client->save(); 
      
      return to_route('paginas.cliente.index')->with("ok-editar","");


   }*/ 
    
    public function update(SaveClientRequest $request, Clients $client)
   {
     
    $generos = Genders::all();

    $client->update($request->validated());
    return to_route('paginas.cliente.index')->with("ok-editar","");
   }
 




    public function destroy($client)
    {

     //return $id;
      $clientes = Clients::find($client);
      
      $clientes->delete();

      //return to_route('paginas.cliente.index')->with("ok-eliminar", "");

      //responder al ajax de javascrip
       return "ok";
    }

  }