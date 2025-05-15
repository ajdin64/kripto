<!DOCTYPE html>
<html lang="bs">
<head>
    <meta charset="UTF-8">
    <title>Kontakt Forma</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <x-navigacija />
</header>

<div class="kontakt-container">
    <h2>Kontaktirajte nas</h2>
    <form id="kontakt-forma" action="{{route('kontakti')}}" method="post">
        @csrf
        <label for="ime">Ime</label>
        <input type="text" id="ime" name="ime" placeholder="Vaše ime" required>

        <label for="email">Email adresa</label>
        <input type="email" id="email" name="email" placeholder="vas@email.com" required>

        <label for="poruka">Poruka</label>
        <textarea id="poruka" name="poruka" placeholder="Upišite vašu poruku..." required></textarea>

        <button type="submit">Pošalji poruku</button>
    </form>
    <div class="poruka" id="poruka-status"></div>
</div>

</body>
</html>
<style>
    body {
        margin: 0;
        padding: 0;
        background: linear-gradient(135deg, #e0bbf7, #d0f0ff, #ffe0f7);
        background-size: 300% 300%;
        animation: animacija 10s ease infinite;
        font-family: 'Segoe UI', sans-serif;
    }

    .kontakt-container {
        max-width: 500px;
        margin: 60px auto;
        background: white;
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 0 20px rgba(170, 100, 200, 0.3);
    }

    h2 {
        text-align: center;
        color: #8e44ad;
        margin-bottom: 25px;
    }

    label {
        display: block;
        margin-top: 15px;
        color: #6a1b9a;
    }

    input,
    textarea,
    button {
        width: 100%;
        padding: 10px;
        margin-top: 5px;
        border: 1px solid #d1c4e9;
        border-radius: 10px;
        font-size: 16px;
        box-sizing: border-box;
    }

    input:focus,
    textarea:focus {
        outline: none;
        border-color: #ba68c8;
        box-shadow: 0 0 5px #ba68c8;
    }

    textarea {
        resize: vertical;
        min-height: 100px;
    }

    button {
        background: linear-gradient(to right, #ce93d8, #81d4fa);
        color: white;
        border: none;
        margin-top: 25px;
        cursor: pointer;
        transition: background 0.3s ease;
    }

    button:hover {
        background: linear-gradient(to right, #ab47bc, #29b6f6);
    }

    .poruka {
        text-align: center;
        margin-top: 20px;
        font-weight: bold;
    }

    @keyframes animacija {
        0% { background-position: 0% 50% }
        50% { background-position: 100% 50% }
        100% { background-position: 0% 50% }
    }
</style>
