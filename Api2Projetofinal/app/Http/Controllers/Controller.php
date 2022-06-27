<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use  GuzzleHttp\Client ;
use Hamcrest\Core\HasToString;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
 
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
      $response = Http::withToken('eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwczpcL1wvYXBpLnNvZnRwb3AuY29tLmJyXC9wdWJsaWNcL2FwaVwvdjFcL2xvZ2luIiwiaWF0IjoxNjU2MjkyMzA4LCJleHAiOjE2NTYyOTU5MDgsIm5iZiI6MTY1NjI5MjMwOCwianRpIjoiSFRWQUIwRXpLZUx5RUlnaSIsInN1YiI6MSwicHJ2IjoiMjNiZDVjODk0OWY2MDBhZGIzOWU3MDFjNDAwODcyZGI3YTU5NzZmNyJ9.o9j7ACe22Km6-otHYJCH55LCYqPshD0JV6pNCtnGuhg
      ')->get('https://api.softpop.com.br/public/api/v1/imovel')->json();
      //dd($response['data']);
      
      return view('/api')->with(["imovel"=>$response['data']]);
      
    }

public function inserir(Request $request)
{
  if($request->titulo == null || $request->descricao==null || $request->conteudo==null || $request->price==null || $request->banheiro==null || $request->quarto==null || $request->area_propriedade == null || $request->total_area_propriedade == null || $request->slug == null){
    echo('Voce não pode inserir novo imovel sem preencher todos os campos!');
    
    return view('/api')->with(Controller::class, 'index');
  }
  else{

  
  $response = Http::withToken('eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwczpcL1wvYXBpLnNvZnRwb3AuY29tLmJyXC9wdWJsaWNcL2FwaVwvdjFcL2xvZ2luIiwiaWF0IjoxNjU2MjkyMzA4LCJleHAiOjE2NTYyOTU5MDgsIm5iZiI6MTY1NjI5MjMwOCwianRpIjoiSFRWQUIwRXpLZUx5RUlnaSIsInN1YiI6MSwicHJ2IjoiMjNiZDVjODk0OWY2MDBhZGIzOWU3MDFjNDAwODcyZGI3YTU5NzZmNyJ9.o9j7ACe22Km6-otHYJCH55LCYqPshD0JV6pNCtnGuhg
  ')->asForm()->post('https://api.softpop.com.br/public/api/v1/imovel',[
  'user_id'=> $request->user_id,
    'titulo' => $request->titulo,
  'descricao' =>  $request->descricao,
  'conteudo' =>  $request->conteudo,
  'price' =>  $request->price,
  'banheiro' =>  $request->banheiro,
  'quarto' =>  $request->quarto,
  'area_propriedade' =>  $request->area_propriedade,
  'total_area_propriedade' =>  $request->total_area_propriedade,
  'slug' =>  $request->slug,
 
  ]);

  return ["imovel"=>$response['data']];
redirect('/api');
  }
}
public function editar($id)
{
  $response = Http::withToken('eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwczpcL1wvYXBpLnNvZnRwb3AuY29tLmJyXC9wdWJsaWNcL2FwaVwvdjFcL2xvZ2luIiwiaWF0IjoxNjU2MjkyMzA4LCJleHAiOjE2NTYyOTU5MDgsIm5iZiI6MTY1NjI5MjMwOCwianRpIjoiSFRWQUIwRXpLZUx5RUlnaSIsInN1YiI6MSwicHJ2IjoiMjNiZDVjODk0OWY2MDBhZGIzOWU3MDFjNDAwODcyZGI3YTU5NzZmNyJ9.o9j7ACe22Km6-otHYJCH55LCYqPshD0JV6pNCtnGuhg
  ')->get('https://api.softpop.com.br/public/api/v1/imovel/'.$id)->json();
  //dd($response['data']);
  
  return view('/editar')->with(["imovel"=>$response['data']]);
}   
public function editarImovel(Request $request, $id)
{
  
  $response = Http::withToken('eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwczpcL1wvYXBpLnNvZnRwb3AuY29tLmJyXC9wdWJsaWNcL2FwaVwvdjFcL2xvZ2luIiwiaWF0IjoxNjU2MjkyMzA4LCJleHAiOjE2NTYyOTU5MDgsIm5iZiI6MTY1NjI5MjMwOCwianRpIjoiSFRWQUIwRXpLZUx5RUlnaSIsInN1YiI6MSwicHJ2IjoiMjNiZDVjODk0OWY2MDBhZGIzOWU3MDFjNDAwODcyZGI3YTU5NzZmNyJ9.o9j7ACe22Km6-otHYJCH55LCYqPshD0JV6pNCtnGuhg
  ')->asForm()->put('https://api.softpop.com.br/public/api/v1/imovel/'.$id,[
  'user_id'=> $request->user_id,
    'titulo' => $request->titulo,
  'descricao' =>  $request->descricao,
  'conteudo' =>  $request->conteudo,
  'price' =>  $request->price,
  'banheiro' =>  $request->banheiro,
  'quarto' =>  $request->quarto,
  'area_propriedade' =>  $request->area_propriedade,
  'total_area_propriedade' =>  $request->total_area_propriedade,
  'slug' =>  $request->slug,
  
  ]);
  $response->successful();
  return view('/editar')->with(["imovel"=>$response['data']]);

}
public function deletar($id)
{
  $response = Http::withToken('eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwczpcL1wvYXBpLnNvZnRwb3AuY29tLmJyXC9wdWJsaWNcL2FwaVwvdjFcL2xvZ2luIiwiaWF0IjoxNjU2MjkyMzA4LCJleHAiOjE2NTYyOTU5MDgsIm5iZiI6MTY1NjI5MjMwOCwianRpIjoiSFRWQUIwRXpLZUx5RUlnaSIsInN1YiI6MSwicHJ2IjoiMjNiZDVjODk0OWY2MDBhZGIzOWU3MDFjNDAwODcyZGI3YTU5NzZmNyJ9.o9j7ACe22Km6-otHYJCH55LCYqPshD0JV6pNCtnGuhg
  ')->delete('https://api.softpop.com.br/public/api/v1/imovel/'.$id)->json();
  //dd($response['data']);
  
  return view('/excluir')->with(["imovel"=>$response['data']]);
}   
}
