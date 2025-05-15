<x-navigacija />
<x-pretraga />
<div class="dugmeklasa">
    <x-mojedugme text="Objavi Artikal" url="{{ route('objaviartikal') }}" />
</div>

<div class="velikakocka">
    <!-- Sekcija za Ugalj -->
    <div class="naslov">
        <h1>Coal</h1>
    </div>
    <div class="oglasi-container">
        @foreach($coalruda as $ruda)
            <div class="oglas">
                <div id="ugalj" class="oglas-slikica"></div>
                <div class="oglas-info">
                    <h3>{{ $ruda->ime }}</h3>
                    <p>{{ Str::limit($ruda->opis, 100) }}</p>
                    <p><strong>Cijena:</strong> {{ $ruda->cijena }} KM</p>
                    <p><strong>Količina:</strong> {{ $ruda->kolicina }}</p>
                    <a href="{{ route('pogledajproizvod', ['id' => $ruda->id]) }}" class="btn-pogledaj">Pogledaj</a>

                </div>
            </div>
        @endforeach
    </div>
<style>
    .dugmeklasa {
        display: flex;
        justify-content: flex-start;
        align-items: center;
        height: 50px;
        width: 100%;
        padding: 10px;
    }

    .naslov {
        border-radius: 15px;
        display: flex;
        align-items: center;
        justify-content: start;
        height: 70px;
        width: 300px;
        background: linear-gradient(to right, rgba(255, 0, 150, 0.8), rgba(0, 204, 255, 0.8));
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        margin-top: 40px;
        margin-left: 40px;
        padding-left: 40px;
    }
    .naslov h1{
        color: white;
        font-family: sans-serif;
        font-weight: 500;
        font-size: 40px;
    }

    .oglasi-container {
        display: flex;
        flex-wrap: wrap; /* Omogućava prebacivanje u novi red */
        gap: 20px;
        margin-left: 20px;
        padding: 20px;
        justify-content: flex-start; /* Poravnava oglase s lijeva na desno */
    }

    .oglas {
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        flex: 1 1 250px; /* Fleksibilna širina oglasa */
        max-width: 300px; /* Maksimalna širina oglasa */
    }

    .oglas:hover {
        transform: translateY(-10px);
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
    }

    .oglas-slikica {

        height: 200px;
        background-image: url("{{ asset('slike/komad.jpg') }}");
        width: 100%;
        background-size: 80%;
        background-repeat: no-repeat;
        background-position: center;


    }

    .oglas-info {
        padding: 15px;
        text-align: center;
    }

    .btn-pogledaj {
        display: block;
        background-color: #d72ea4;
        color: white;
        padding: 10px;
        font-weight: bold;
        text-decoration: none;
        border-radius: 30px;
        text-align: center;
        transition: background-color 0.3s, transform 0.3s;
    }

    .btn-pogledaj:hover {
        background-color: #0056b3;
        transform: scale(1.05);
    }

    @media (max-width: 768px) {
        .oglas {
            flex: 1 1 200px;
        }
    }

    @media (max-width: 480px) {
        .oglasi-container {
            flex-direction: column;
            align-items: center;
        }
    }
</style>
