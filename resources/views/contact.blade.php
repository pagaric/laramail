<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Page de contact</h1>

    <form action="/mail" method="post">

        @csrf

        <p>
            <label for="name">Nom</label>
            <input type="text" name="name" id="name">
        </p>

        <p>
            <label for="email">Mail</label>
            <input type="text" name="email" id="email">
        </p>

        <p>
            <label for="sujet">Sujet</label>
            <input type="text" name="sujet" id="sujet">
        </p>

        <p>
            <label for="message">Message</label>
            <textarea name="message" id="message"></textarea>
        </p>

        <p>
            <input type="submit" value="Envoyer">
        </p>
    </form>
</body>
</html>