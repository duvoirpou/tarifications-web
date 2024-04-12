<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Barryvdh\DomPDF\Facade\Pdf;

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
            "total_amount" => "required",

        ], [
            "type_id.required" => "Please select a type",
            "project_name.required" => "Please enter project name",
            "customer_name.required" => "Please enter customer names",
            "customer_email.required" => "Please enter customer email",
            "customer_phone.required" => "Please enter customer phone number",
            "total_amount.required" => "Please enter total amount of the orders"
        ]);

        $type_id = $request->type_id;
        $project_name = $request->project_name;
        $customer_name = $request->customer_name;
        $customer_email = $request->customer_email;
        $customer_phone = $request->customer_phone;
        $customer_address = $request->customer_address;
        $additional_information = $request->additional_information;
        $total_amount = $request->total_amount;

        $order = new Order();
        $order->type_id = $type_id;
        $order->project_name = $project_name;
        $order->customer_name = $customer_name;
        $order->customer_email = $customer_email;
        $order->customer_phone = $customer_phone;
        $order->customer_address = $customer_address;
        if ($additional_information) {
            $order->additional_information = $additional_information;
        }
        $order->total_amount = $total_amount;

        $order->save();

        if ($order) {
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

        // Vérifier si la commande et les détails de la commande ont été créés avec succès

        if ($order AND $order_details) {
            // Générer une facture au format PDF
            $pdf = Pdf::loadView('pdf.order', [
                "order" => $order,
                "order_details" => $order_details
            ])->setPaper('a4', 'landscape');

            // Envoyer un courriel de confirmation au client avec la facture en pièce jointe
            Mail::send('emails.order', [
                "order" => $order,
                "order_details" => $order_details,
            ], function ($message) use ($request, $order, $order_details) {
                $email = $request->customer_email;  // Assign email inside the closure
                // Generate PDF invoice file
                $pdf = Pdf::loadView('pdf.order', [
                    "order" => $order,
                    "order_details" => $order_details
                ])->setPaper('a4', 'landscape');
                $message->to($email)
                        ->subject('Confirmation de la commande de votre projet web')
                        ->attachData($pdf->output(), "commande-$order->project_name.pdf");
            });

            return $pdf->download("commande-$order->project_name.pdf");

        } else {
            return back()->with('error', 'Order creation failed');
        }
    }
}
