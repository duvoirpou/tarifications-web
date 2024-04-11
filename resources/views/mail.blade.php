<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Envoyer un email</title>
</head>
<body>
    <h1>Envoyer un email</h1>
    <form action="{{ route('send-mail') }}" method="post">
        @csrf
        <label for="email">Votre adresse email</label>
        <input type="email" name="email" id="email">
        <label for="message">Votre message</label>
        <textarea name="message" id="message"></textarea>
        <button type="submit">Envoyer</button>
    </form>
</body>
</html>
