<?php

namespace App\Http\Controllers\Api\Orders;

use App\Http\Controllers\Controller;
use App\Http\Requests\Orders\OrderRequest;
use App\Models\Item;
use Illuminate\Http\Request;
use DateTime;
use App\Models\Admin\Order;
use App\Models\Admin\ItemOrder;


class OrderController extends Controller
{
    // public function generate(Request $request, Gateway $gateway){
        
    //     $token = $gateway->clientToken()->generate();

    //     $data = [
    //         "success" => true,
    //         "token" => $token
    //     ];


    //     return response()->json( $data,200 );
    // }

    public function getInfoCustomer(OrderRequest $request){

        // $orderMessage = '';
        $success = false;
        $total = 0;
        $data = $request->all();

        $cart = $data['order'];
        //calcolare il totale dell'ordine
        foreach ($cart as $elem) {
            $item = Item::where('id', $elem['id'])->first();
            $total += $item->price * $elem['quantity'];
        }

        $data['total_price'] = $total;
        $data['date'] = new DateTime();
        
        
        //devo creare un ordine
        $order = new Order();
        $order->fill($data);
        $order->save;

        // pivot
        foreach ($cart as $elem) {
            $item_order = new ItemOrder();
            $item_order->order_id = $order->id;
            $item_order->item_id = $item['id'];
            $item_order->qt_item = $item['quantity'];
            $item_order->save();
        }
        return response()->json(
            [
                'success' => true
            ]
        );



        // $result = $gateway->transaction()->sale([
        //     'amount' => $total,
        //     'paymentMethodNonce' => $request->token,
        //     'options' => [
        //         'submitForSettlement' => true
        //     ]
        // ]);



        // if($result->success){

        //     $data['total_price'] = $total;
        //     $data['date'] = new DateTime();
        //     $orderMessage  = 'I dati non sono stati salvati';
        //     $message = 'Il pagamento è stato effettuato';
        //     $success = true;
        //     $confNumb = 200;
        //     //
        //     //devo creare un ordine
        //     $order = new Order();
        //     $order->fill($data);
        //     $order->save();

        //     foreach ($cart as $product) {
        //         $item_order = new ItemOrder();
        //         $item_order->order_id = $order->id;
        //         $item_order->item_id = $item['id'];
        //         $item_order->qt_item = $item['quantity'];
        //         $item_order->save();
        //     }

        //     return response()->json($data, 200);

        // } else {

        //     $message = 'La transazione è stata rifiutata';
        //     $success = false;
        //     $confNumb = 401;

        //     $data = [
        //         "success" => $success,
        //         "message" => $message,
        //         'data_confirmation' => $orderMessage
        //     ];

        //     return response()->json($data, $confNumb);
        // }

        // return 'make payment';
    }
}
