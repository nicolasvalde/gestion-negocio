<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class OrderNotesController extends Controller
{
    const MODEL = "App\OrderNote";

    use RESTActions;

    public function all()
    {
        $m = self::MODEL;

        $data = array();

        foreach ($m::all() as $order_note) {
            $data[] = [
                "id" => $order_note->id,
                "provider_id" => $order_note->provider_id,
                "provider" => $order_note->provider->razon_social,
                "date" => $order_note->date,
                "total" => $order_note->total,
            ];
        }
        return $this->respond(Response::HTTP_OK, $data);
    }

    public function add(Request $request)
    {
        $m = self::MODEL;
        $this->validate($request, $m::$rules);
        return $this->respond(Response::HTTP_CREATED, $m::create($request->all()));
    }

    protected function respond($status, $data = [])
    {
        return response()->json($data, $status);
    }
}
