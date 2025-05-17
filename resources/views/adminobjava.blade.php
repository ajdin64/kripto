<x-navigacija />

<div class="nova-vijest-wrapper">
    <form class="news-form" action="{{route('objavivijesti')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <h2>Dodaj Vijest</h2>

        <label for="title">Naslov vijesti</label>
        <input type="text" id="title" name="naslov" required>

        <label for="image">Slika (opcionalno)</label>
        <input type="file" id="image" name="slika">

        <label for="content">Sadržaj</label>
        <textarea id="content" name="kontent" required></textarea>

        <button type="submit">Objavi vijest</button>
    </form>
</div>

<style>
    .nova-vijest-wrapper {
        display: flex;
        justify-content: center;
        padding: 40px 15px;
        background: linear-gradient(to right, #fdf4ff, #f0f9ff); /* suptilna ljubičasto-plava pozadina */
    }

    .news-form {
        background: white;
        width: 100%;
        max-width: 600px;
        padding: 30px;
        border-radius: 16px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        border-top: 6px solid #c084fc; /* svijetlo ljubičasta */
    }

    .news-form h2 {
        color: #9333ea;
        margin-bottom: 20px;
        text-align: center;
        font-size: 24px;
    }

    .news-form label {
        display: block;
        margin-bottom: 6px;
        color: #7e22ce;
        font-weight: 600;
        font-size: 15px;
    }

    .news-form input,
    .news-form textarea {
        width: 100%;
        padding: 12px;
        margin-bottom: 18px;
        border: 1px solid #ddd6fe;
        border-radius: 10px;
        font-size: 15px;
        outline: none;
    }

    .news-form textarea {
        resize: vertical;
        min-height: 120px;
    }

    .news-form button {
        background: linear-gradient(to right, #ec4899, #8b5cf6); /* roze-plava */
        color: white;
        padding: 12px;
        border: none;
        border-radius: 10px;
        font-size: 16px;
        font-weight: bold;
        cursor: pointer;
        transition: 0.3s ease;
    }

    .news-form button:hover {
        background: linear-gradient(to right, #db2777, #7c3aed); /* tamnije nijanse */
    }
</style>
