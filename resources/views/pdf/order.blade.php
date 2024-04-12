<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Devis - {{ $order->project_name }}</title>

    <style>
        body {
            font-family: sans-serif;
            margin: 20px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
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

        .table-bordered {
            background-color: #adb5bd;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <img src="{{ public_path('storage/images/Tala-1.png') }}" style="width: 200px;" alt="Logo de votre entreprise"
                class="logo">
            <h1>Devis pour {{ $order->project_name }}</h1>
        </div>

        <div class="client-info">
            <h2>Client :</h2>
            <p>
                {{ $order->customer_name }}
            </p>
            <p>
                {{ $order->customer_email }}
            </p>
            <p>
                {{ $order->customer_phone }}
            </p>
            <p>
                {{ $order->customer_address }}
            </p>
        </div>

        @if ($order->additional_information)
            <div class="message">
                <h2>Message :</h2>
                <p>{{ $order->additional_information }}</p>
            </div>
        @endif

        <hr>

        <h2>Récapitulatif :</h2>
        <p>
            <strong>Catégorie :</strong> {{ $order->type->category->name }}
        </p>

        <p>
            <strong>Type :</strong> {{ $order->type->name }}
            @if ($order->type->description)
                <p>{{ $order->type->description }}</p>
            @endif

        </p>

        <p>
            <strong>Fonctionnalités :</strong>
            @foreach ($functionalities as $feature)
                <span
                    style="background-color: #007bff; color: #fff; padding: 5px 10px; border-radius: 5px;">{{ $feature->functionality->name }}</span>
            @endforeach
        </p>
        <p>
            <strong>Prix :</strong> {{ $order->total_amount }} XAF
        </p>

        <hr>

        <h2>Tableau de prix :</h2>

        <table class="table-bordered">
            <thead>
                <tr>
                    <th>Catégorie</th>
                    <th>Type</th>
                    <th>Fonctionnalité</th>
                    <th>Prix</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($functionalities as $feature)
                    <tr>
                        <td>{{ $feature->order->type->category->name }}</td>
                        <td>{{ $feature->order->type->name }}</td>
                        <td>{{ $feature->functionality->name }}</td>
                        <td>{{ $feature->price }} XAF</td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="3" class="total">Total</th>
                    <td class="total">{{ $order->total_amount }} XAF</td>
                </tr>
            </tfoot>
        </table>


        <div class="footer">
            <p class="text-center">Fait le : <?= date('d/m/Y') ?> à <?= date('H:i:s') ?> à Brazzaville
            <p class="text-right">Signature : _______________________</p>
            <p class="text-center">
                <a href="https://www.tala.cg">www.tala.cg</a>
            </p>
        </div>
    </div>
</body>

</html>
