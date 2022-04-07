<?php

namespace App\Http\Controllers;

use App\Models\Loja;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCreate;
//use Illuminate\Http\Response;

class LojaController extends Controller
{

    private $loja;

    function __construct(Loja $loja)
    {
       $this->loja = $loja;
    }

    public function index()
    {
       return 'teste';
    }

    public function returnAllStores()
    {
      //  dd($loja->with('products'));
        
       //return response(Loja::get()->toJson(),200)->header('Content-Type', 'application/json');
       //return response($loja->with('products')->all()->toJson(),200)->header('Content-Type', 'application/json');
       return $this->loja->all();
    }
    
    public function returnStore($id)
    {
      //  dd($loja->with('products'));
        
       //return response(Loja::get()->toJson(),200)->header('Content-Type', 'application/json');
       //return response($loja->with('products')->all()->toJson(),200)->header('Content-Type', 'application/json');
       
       
       return $this->loja->where('id', $id)->firstOrFail();
    }

    public function create(StoreCreate $request)
    {
        return Loja::create($request->all());
    }

    public function update(StoreCreate $request, Loja $loja, $id)
    {
       //dd( $loja->find($id));
        $loja = $loja->find($id);
        $loja ->update($request->all());
        return $loja;
    }
}
