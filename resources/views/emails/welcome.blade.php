<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Devis</title>

    <style>
        body {
            font-family: sans-serif;
            margin: 20px;
            font-size: 10pt;
            line-height: 1.5
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
        }

        .content {
            display: flex;
            flex-direction: row;
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
                {{-- <img src="logo.png" alt="Logo" class="logo"> --}}
            </div>
            <div class="text-right">
                <h1 style="margin-bottom: -10px;">Devis</h1>
                <p style="margin-bottom: -10px;">Merci de votre demande de devis.</p>
                <p style="">Nous vous enverrons un devis dans les plus brefs délais.</p>
            </div>

        </div>

        <div style="display: inline-block; width: 100%; text-align: center; margin-top: 50px">
            <div style="display: inline-block; width: 270px; background-color: #f2f2f2; padding: 10px; margin: 0 10px 0 0;">
                <h2 style="">Emetteur</h2>
                <p style="margin-bottom: -10px;">Nom de l'entreprise</p>
                <p style="margin-bottom: -10px;">Adresse</p>
                <p style="margin-bottom: -10px;">Téléphone</p>
                <p>Email</p>
            </div>
            <div style="display: inline-block; width: 270px; background-color: #f2f2f2; padding: 10px; margin: 0 0 0 10px;">
                <h2 style="">Destinataire</h2>
                <p style="margin-bottom: -10px;">Nom de l'entreprise</p>
                <p style="margin-bottom: -10px;">Adresse</p>
                <p style="margin-bottom: -10px;">Téléphone</p>
                <p >Email</p>
            </div>
        </div>



        <p style="text-align: center; margin-top: 50px">Voici le détail des prestations proposées ainsi que leur tarification associée :</p>

        <div style="margin-top: 50px; position: relative">
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
                        <td>Ligne 1</td>
                        <td>20%</td>
                        <td>100 €</td>
                        <td>1</td>
                        <td>100 €</td>
                    </tr>
                    <tr>
                        <td>Ligne 2</td>
                        <td>10%</td>
                        <td>50 €</td>
                        <td>2</td>
                        <td>100 €</td>
                    </tr>
                    <tr>
                        <td>Ligne 3</td>
                        <td>5,5%</td>
                        <td>25 €</td>
                        <td>3</td>
                        <td>75 €</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="4">Total HT</td>
                        <td>275 €</td>
                    </tr>
                    <tr>
                        <td colspan="4">TVA</td>
                        <td>50 €</td>
                    </tr>
                    <tr style="background-color: #f2f2f2">
                        <td colspan="4">Total TTC</td>
                        <td>325 €</td>
                    </tr>
                </tfoot>
            </table>
        </div>

        <div class=" conditions-reglement">
            <h3>Conditions de règlement</h3>
            <p>
                Un acompte de 50 % du coût total, soit  XAF, est obligatoire pour le début des travaux du projet.
                <br>
                Le solde restant du sera payé à la livraison.
            </p>
            <p>Le délai de paiement est de 30 jours à réception de la facture.</p>
        </div>

        <div class=" conditions-reglement">
            <h3>Mode de règlement</h3>
            <p>Espèce, mobile money ou virement bancaire</p>
        </div>

        <div class="content signature" style="margin-bottom: 120px; text-decoration: underline">
            <p>Signature de l'émetteur</p>
            <p>Signature du client</p>
        </div>
        <p class="text-center" style="margin-bottom: 100px">Fait le : <?= date('d/m/Y') ?> à <?= date('H:i:s') ?> </p>
    </div>
</body>

</html>
