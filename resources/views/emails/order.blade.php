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
    </style>
</head>

<body>
    <div class="container">
        <div class="introduction" style="text-align: justify">
            <p style="margin-top: 10px"><b>Madame, Monsieur,</b></p>

            <p style="margin-top: 10px">
                Je m'appelle Précieux Assako et je suis développeur web. Je vous remercie de l'intérêt que vous portez
                pour mes services et pour votre projet <b> {{ $order->project_name }}</b>.
            </p>
            <p style="margin-top: 10px">
                Je vous adresse ci-joint le devis pour la réalisation de ce projet. Il détaille les différentes
                prestations que je propose, ainsi que leur prix.
            </p>
            <p style="margin-top: 10px">
                N'hésitez pas à me contacter si vous avez des questions ou si vous souhaitez modifier ce devis.
            </p>
        </div>

        <div class="contact">
            <p style="margin-top: 10px">Cordialement,</p>
            <p style="margin-top: 10px">
                <b>Précieux Assako</b>
            </p>
            <p style="margin-top: 10px">
                <b>Développeur Web</b>
            </p>
            <p  style="margin-top: 10px">
                <b>+242 06 989 71 69</b>
            </p>
        </div>

        <div class="ps">
            <p  style="margin-top: 10px"><b> P.S.</b> Si vous validez ce devis, merci de me le retourner signé et accompagné d'un acompte de 50%.</p>
        </div>
    </div>
</body>

</html>
