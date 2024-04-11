<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            "type_id" => "required|numeric",
            "customer_name" => "required|string",
            "customer_email" => "required|email",
            "customer_phone" => "required|string",
            "customer_address" => "string",
            "additional_information" => "string",
            "total_amount" => "required",

        ], [
            "type_id.required" => "Please select a type",
            "customer_name.required" => "Please enter customer names",
            "customer_email.required" => "Please enter customer email",
            "customer_phone.required" => "Please enter customer phone number",
            "total_amount.required" => "Please enter total amount of the orders"
        ]);

        $email = $request->customer_email;

        $order = new Order();
        $order->type_id = $request->type_id;
        $order->customer_name = $request->customer_name;
        $order->customer_email = $request->customer_email;
        $order->customer_phone = $request->customer_phone;
        $order->customer_address = $request->customer_address;
        $order->additional_information = $request->additional_information;
        $order->total_amount = $request->total_amount;

        $order->save();

        // Order details
        // Récupérer les valeurs de 'functionality_id' de la requête (qui seront dans un tableau)
        $functionalityIds = $request->input('functionality_id');
        foreach ($functionalityIds as $functionalityId) {
            OrderDetail::create([
                'order_id' => $order->id,
                'functionality_id' => $functionalityId
            ]);
        }

        // Création d'un nouvel email
        Mail::send('emails.welcome', ['name' => $request->customer_name], function ($message) use ($request) {
            $email = $request->customer_email;  // Assign email inside the closure
            $message->to($email)->subject('Order Confirmation');
        });

        if ($order) {
            return back()->with('success', 'Order created successfully');
        } else {
            return back()->with('error', 'Order creation failed');
        }
    }
}
