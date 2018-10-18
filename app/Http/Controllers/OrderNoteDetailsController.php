<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class OrderNoteDetailsController extends Controller
{
    const MODEL = "App\OrderNoteDetail";

    use RESTActions;

    public function addDetails(Request $request)
    {
        $m = self::MODEL;

        $arr = Array();

        foreach ($request->all() as $on) {
            DB::table('order_note_details')->insert(
                [
                    //'order_note_id' => $valor['order_note_id'],
                    'type' => $on['type'],
                    'price' => $on['price'],
                    'quantity' => $on['quantity'],
                    'product_code' => $on['product_code']
                ]);
        }

        return response()
            ->json($arr, 201);

    }
}

