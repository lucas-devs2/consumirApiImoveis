<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class Api extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $response = Http::withToken('eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwczpcL1wvYXBpLnNvZnRwb3AuY29tLmJyXC9wdWJsaWNcL2FwaVwvdjFcL2xvZ2luIiwiaWF0IjoxNjU1OTIwODc0LCJleHAiOjE2NTU5MjQ0NzQsIm5iZiI6MTY1NTkyMDg3NCwianRpIjoiZkJZdUI0amhFSTNrdVpVdyIsInN1YiI6MSwicHJ2IjoiMjNiZDVjODk0OWY2MDBhZGIzOWU3MDFjNDAwODcyZGI3YTU5NzZmNyJ9.5yaQNq1rA2mKz01Pf4jJurcE0UszNRpkARQrVTQNOxE
        ')->get('https://api.softpop.com.br/public/api/v1/imovel')->json();
        dd($response);
    }
}
