<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventaries;
use App\Http\Requests\SaveProductRequest;

class InventariesController extends Controller
{
    public function index()
    {
       $productos = Inventaries::get();
      return view('paginas.producto', ['productos' => $productos]); 
      
    }

     public function store(SaveProductRequest $request)
    {
    
      //crea el formulario y valida los campos que estan en mi sendrequest
      Inventaries::create($request->validated());

     //mensajes de session flash
      session()->flash('status', 'Producto creado');
      return redirect()->route('paginas.producto.index');
      
    }

    /* public function show($id)
    {
      $producto= Inventaries::find($id);

      if(count($producto) != 0){
          return view("paginas.producto.index", array("status"=>200 , "productos"=> $productos));
         

      } else{
          return view("paginas.producto.index", array("status"=>404));

      }

    } */


    public function update(SaveProductRequest $request, Inventaries $product)
    {
      $product->update($request->validated());
      return to_route('paginas.producto.index')->with('ok-editar',"");
    }






    public function destroy($product)
    {
     $productos = Inventaries::find($product);
     $productos->delete();

     //responder al ajax de javascrip
       return "ok";

    }



}
