<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Devis- {{ $order->project_name }}</title>

    <style>
        body {
            font-family: sans-serif;
            margin: 20px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
        }

        .content {
            display: flex;
            justify-content: space-between;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            margin-top: 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
        }

        th {
            text-align: center;
        }

        .total {
            font-weight: bold;
        }

        .logo {
            float: right;
        }

        .text-center {
            text-align: center;
        }

        .text-right {
            text-align: right;
        }

        .emetteur {
            background-color: #f2f2f2;
            padding: 50px;
            width: 35%;
            float: left;
            position: relative;
        }

        .client {
            background-color: #fff;
            padding: 50px;
            width: 35%;
            border: #555 1px solid;
            float: right;
            position: relative;
        }

        .table-devis {
            width: 100%;
            border-collapse: collapse;
        }

        .table-devis th,
        .table-devis td {
            border: 1px solid #ddd;
            padding: 8px;
        }

        .table-devis th {
            text-align: center;
        }

        .table-devis tfoot tr:last-child {
            background-color: #f2f2f2;
        }

        .conditions-reglement {
            margin-top: 30px;
        }

        .conditions-reglement h3 {
            margin-bottom: 10px;
        }

        .conditions-reglement p {
            margin-bottom: 5px;
        }

        .signature {
            margin-top: 30px;
            text-align: right;
        }

        .signature p {
            margin-bottom: 5px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="content">
            <div>
                <img src="{{ public_path('storage/images/logo-weegosoft.jpeg') }}" style="width: 100px; float: left;"
                    alt="Logo" class="logo">
            </div>
            <div class="text-right">
                <h1 style="margin-bottom: -10px;">Devis {{ $order->project_name }}</h1>
                <p style="margin-bottom: -10px;">
                    <span>Date de proposition : {{ $order->created_at->format('d/m/Y') }}</span>
                </p>
                <p style="margin-bottom: 30px;">
                    Date de fin de validité : {{ $order->created_at->addDays(30)->format('d/m/Y') }}
                </p>
            </div>
        </div>

        <div style="display: inline-block; width: 100%; text-align: center; margin-top: 50px">
            <div
                style="display: inline-block; width: 320px; background-color: #f2f2f2; padding: 15px; margin: 0 10px 0 0;">
                <h2 style="font-size: 16px;">Prestataire</h2>
                <p style="margin-bottom: -10px;">Précieux Assako</p>
                <p style="margin-bottom: -10px;">130 rue lekana, Moungali, Brazzaville</p>
                <p style="margin-bottom: -10px;">+242 06 989 71 69</p>
                <p>assakoprecieux@gmail.com</p>
            </div>
            <div
                style="display: inline-block; width: 320px; background-color: #f2f2f2; padding: 15px; margin: 0 0 0 10px;">
                <h2 style="font-size: 16px;">Client</h2>
                <p style="margin-bottom: -10px;">{{ $order->customer_name }}</p>
                <p style="margin-bottom: -10px;">{{ $order->customer_address }}</p>
                <p style="margin-bottom: -10px;">{{ $order->customer_phone }}</p>
                <p>{{ $order->customer_email }}</p>
            </div>
        </div>

        <p style="text-align: center; margin-top: -10px">Voici ci dessous le détail des prestations proposées ainsi que
            leur tarification associée :</p>

        <div style="">
            <table class="table-devis">
                <thead>
                    <tr>
                        <th>Désignation</th>
                        <th>TVA</th>
                        <th>P.U. HT</th>
                        <th>Qté</th>
                        <th>Total HT</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            @foreach ($functionalities as $feature)
                                @if (
                                    $loop->first ||
                                        $feature->order->type->category->name != $functionalities[$loop->index - 1]->order->type->category->name ||
                                        $feature->order->type->name != $functionalities[$loop->index - 1]->order->type->name)
                                    <p>{{ $feature->order->type->category->name }}</p>
                                    @if ($continent_code == 'AF')
                                        <p>
                                            {{ $feature->order->type->name }}
                                            ({{ number_format($feature->order->type->price / 2, 0, ',', '.') }} XAF)
                                        </p>
                                    @else
                                        <p>
                                            {{ $feature->order->type->name }}
                                            ({{ number_format($feature->order->type->price / 655, 0, ',', '.') }} €)
                                        </p>
                                    @endif
                                    {{-- <p style="text-align: justify">
                                                    {{ $feature->order->type->description }}
                                                </p> --}}
                                @endif
                                <ul>
                                    <li>
                                        {{ $feature->functionality->name }}
                                        @if ($continent_code == 'AF')
                                            ({{ number_format(($feature->order->type->price / 2) * $feature->functionality->ranking->coefficient, 0, ',', '.') }}
                                            XAF)
                                        @else
                                            ({{ number_format(($feature->order->type->price / 655) * $feature->functionality->ranking->coefficient, 0, ',', '.') }}
                                            €)
                                        @endif
                                    </li>
                                </ul>
                            @endforeach
                        </td>
                        <td>0%</td>
                        <td>
                            @if ($continent_code == 'AF')
                                {{ number_format($order->total_amount, 0, ',', '.') }} XAF
                            @else
                                {{ number_format($order->total_amount, 0, ',', '.') }} €
                            @endif
                        </td>
                        <td>1</td>
                        <td>
                            @if ($continent_code == 'AF')
                                {{ number_format($order->total_amount, 0, ',', '.') }} XAF
                            @else
                                {{ number_format($order->total_amount, 0, ',', '.') }} €
                            @endif
                        </td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="4">Total HT</td>
                        <td>
                            @if ($continent_code == 'AF')
                                {{ number_format($order->total_amount, 0, ',', '.') }} XAF
                            @else
                                {{ number_format($order->total_amount, 0, ',', '.') }} €
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4">TVA</td>
                        <td>0</td>
                    </tr>
                    <tr style="background-color: #f2f2f2">
                        <td colspan="4">Total TTC</td>
                        <td>
                            @if ($continent_code == 'AF')
                                {{ number_format($order->total_amount, 0, ',', '.') }} XAF
                            @else
                                {{ number_format($order->total_amount, 0, ',', '.') }} €
                            @endif
                        </td>
                    </tr>
                </tfoot>
            </table>

        </div>

        <div class="conditions-reglement">
            <h3>Conditions de règlement</h3>
            <p>
                {{-- Un acompte de 50 % du coût total, soit {{ number_format($order->total_amount * 0.5, 0, ',', '.') }} XAF, est obligatoire pour le début des travaux du projet.
                <br>
                Le solde restant du sera payé à la livraison. --}}
                50% à la signature, 25% à mi-parcours, 25% à la livraison du site web.
            </p>
            {{-- <p>Le délai de paiement est de 30 jours à réception de la facture.</p> --}}
        </div>

        <div class="conditions-reglement">
            <h3>Mode de règlement</h3>
            <p>Espèce, mobile money ou virement bancaire</p>
        </div>

        <div class="" style="margin-top: 30px">
            <h3>Modalités de réponse</h3>
            <p>Le client peut accepter ce devis en signant et en renvoyant une copie électronique ou papier par email ou
                par courrier.</p>
        </div>

        <div class="" style="margin-top: 30px">
            <h3>Validité du devis :</h3>
            <p>
                Ce devis est valide jusqu'au {{ $order->created_at->addDays(30)->format('d/m/Y') }}. Les tarifs et les
                conditions peuvent être sujets à révision après cette date.
            </p>
        </div>

        <div class="content signature" style="margin-bottom: 120px; text-decoration: underline">
            {{-- <p>Signature de l'émetteur</p> --}}
            <p>Signature du client</p>
        </div>
        <p class="text-center" style="margin-bottom: 100px">
            <a href="https://www.infos.weegosoft.com">www.infos.weegosoft.com</a>
        </p>
    </div>
</body>

</html>
