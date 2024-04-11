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
            "project_name" => "required|string",
            "customer_name" => "required|string",
            "customer_email" => "required|email",
            "customer_phone" => "required|string",
            "customer_address" => "string",
            "additional_information" => "string",
            "total_amount" => "required",

        ], [
            "type_id.required" => "Please select a type",
            "project_name.required" => "Please enter project name",
            "customer_name.required" => "Please enter customer names",
            "customer_email.required" => "Please enter customer email",
            "customer_phone.required" => "Please enter customer phone number",
            "total_amount.required" => "Please enter total amount of the orders"
        ]);

        $order = new Order();
        $order->type_id = $request->type_id;
        $order->project_name = $request->project_name;
        $order->customer_name = $request->customer_name;
        $order->customer_email = $request->customer_email;
        $order->customer_phone = $request->customer_phone;
        $order->customer_address = $request->customer_address;
        $order->additional_information = $request->additional_information;
        $order->total_amount = $request->total_amount;

        $order->save();

        if ($order) {
            # code...
            // Récupérer les valeurs de 'functionality_id' de la requête (qui seront dans un tableau)
            $functionalityIds = $request->input('functionality_id');
            foreach ($functionalityIds as $functionalityId) {
                $order_details = OrderDetail::create([
                    'order_id' => $order->id,
                    'functionality_id' => $functionalityId
                ]);
            }
        } else {
            return back()->with('error', 'Order creation failed');
        }

        // Envoi d'un email de confirmation au client

        // Création d'un nouvel email
        Mail::send('emails.welcome', ['name' => $request->customer_name], function ($message) use ($request) {
            $email = $request->customer_email;  // Assign email inside the closure
            $message->to($email)->subject('Confirmation de la commande de votre projet web');
        });

        if ($order AND $order_details) {
            return back()->with('success', 'Order created successfully');
        } else {
            return back()->with('error', 'Order creation failed');
        }
    }
}
