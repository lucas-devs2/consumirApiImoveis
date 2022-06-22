<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use  GuzzleHttp\Client ;
use Hamcrest\Core\HasToString;
use Illuminate\Support\Facades\Http;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
      $response = Http::withToken('eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwczpcL1wvYXBpLnNvZnRwb3AuY29tLmJyXC9wdWJsaWNcL2FwaVwvdjFcL2xvZ2luIiwiaWF0IjoxNjU1OTIxNjg2LCJleHAiOjE2NTU5MjUyODYsIm5iZiI6MTY1NTkyMTY4NiwianRpIjoiT1hGNjFHQVFpcGZUalYyaiIsInN1YiI6MSwicHJ2IjoiMjNiZDVjODk0OWY2MDBhZGIzOWU3MDFjNDAwODcyZGI3YTU5NzZmNyJ9.WkOEQim8NXyGpeGSlakcrU5bVemUYYMWNQzfM7F70RE
      ')->get('https://api.softpop.com.br/public/api/v1/imovel')->json();
      //dd($response);
      
      return view('/api')->with(["imovel"=>$response['data']]);
      
    }



    

    
}
