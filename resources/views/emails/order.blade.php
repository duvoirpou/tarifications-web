<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Devis - [Nom de votre entreprise]</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        body {
            font-family: sans-serif;
        }

        table {
            width: 100%;
            border-collapse: collapse;
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
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <img src="{{ asset('img/Tala-2.png') }}" style="width: 200px; margin-top: -70px" alt="Logo de votre entreprise" class="logo">
        <h1>Devis pour [Nom du projet]</h1>
        <p>Client : [Nom du client]</p>
        <p>Email : [Email du client]</p>
        <p>Téléphone : [Numéro du client]</p>
        <p>Adresse : [Adresse du client]</p>
        <p>Message : [Message du client]</p>
        <table class="table table-success table-bordered">
            <thead>
                <tr>
                    <th>Catégorie</th>
                    <th>Type</th>
                    <th>Fonctionnalité</th>
                    <th>Prix</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>[Catégorie du projet]</td>
                    <td>[Type de projet]</td>
                    <td>[Fonctionnalité 1]</td>
                    <td>[Prix de la fonctionnalité 1]</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>[Fonctionnalité 2]</td>
                    <td>[Prix de la fonctionnalité 2]</td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="3" class="total">Total</th>
                    <td class="total">[Prix total du projet]</td>
                </tr>
            </tfoot>
        </table>
        <p style="text-align: center;">Imprimé le : <?= date('d/m/Y') ?> à <?= date('H:i:s') ?> par l'impressionneuse.
        <p style="text-align: center;">
            <a href="https://www.tala.cg">www.tala.cg</a>
        </p>
    </div>
</body>

</html>
