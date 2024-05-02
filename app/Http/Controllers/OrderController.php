<?php

namespace App\Http\Controllers;

use App\Models\Functionality;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Type;
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
            $functionalities_ids = $request->input('selected_functionalities_ids');
            foreach ($functionalities_ids as $item) {
                $order_details = OrderDetail::create([
                    'order_id' => $order->id,
                    'functionality_id' => $item
                ]);
            }
            //$functionality = Functionality::where('id', $functionalityId)->first();
        } else {
            return back()->with('error', 'Order creation failed');
        }

        // Vérifier si la commande et les détails de la commande ont été créés avec succès

        if ($order AND $order_details) {

            $functionalities = OrderDetail::where('order_id', $order_details->order_id)->with('functionality')->get();

            $ip = request()->ip();

            // Récupérer la localisation de l'adresse IP
            $location = json_decode(file_get_contents('http://www.geoplugin.net/json.gp?ip=' . $ip));

            // Vérifier si l'utilisateur est en dehors de l'Afrique
            if (isset($location->geoplugin_continentCode) && $location->geoplugin_continentCode == 'AF') {
                $continent_code = "AF";
            } else {
                $continent_code = null;
            }


            // Générer une facture au format PDF
            $pdf = Pdf::loadView('pdf.order', [
                "order" => $order,
                "order_details" => $order_details,
                "functionalities" => $functionalities,
                "continent_code" => $continent_code ?? ''

            ])->setPaper('a4', 'portrait');

            // Envoyer un courriel de confirmation au client avec la facture en pièce jointe
            Mail::send('emails.order', [
                "order" => $order,
                "order_details" => $order_details,
            ], function ($message) use ($request, $order, $order_details) {
                $email = $request->customer_email;  // Assign email inside the closure
                $functionalities = OrderDetail::where('order_id', $order_details->order_id)->with('functionality')->get();

                $ip = request()->ip();

                // Récupérer la localisation de l'adresse IP
                $location = json_decode(file_get_contents('http://www.geoplugin.net/json.gp?ip=' . $ip));

                // Vérifier si l'utilisateur est en dehors de l'Afrique
                if (isset($location->geoplugin_continentCode) && $location->geoplugin_continentCode == 'AF') {
                    $continent_code = "AF";
                } else {
                    $continent_code = null;
                }

                // Generate PDF invoice file
                $pdf = Pdf::loadView('pdf.order', [
                    "order" => $order,
                    "order_details" => $order_details,
                    "functionalities" => $functionalities,
                    "continent_code" => $continent_code ?? ''
                ])->setPaper('a4', 'portrait');
                $message->to($email)
                    ->cc('assakoprecieux@gmail.com', 'Assako')
                    ->bcc('rolpharvey@gmail.com', 'Makiona')
                    ->subject('Confirmation de la commande de votre projet web')
                    ->attachData($pdf->output(), "commande-$order->project_name.pdf");
            });

            return $pdf->download("commande-$order->project_name.pdf");

        } else {
            return back()->with('error', 'Order creation failed');
        }
    }
}
