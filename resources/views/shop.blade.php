<x-navigacija />

<div class="hero">
    <img src="{{ asset('slike/coalmine.jpg') }}" alt="Opis slike" />
</div>
<section class="kupovina">
    @foreach($sefovi as $sef)
    <h1>{{$sef->ime}}</h1>
    <p class="broj">{{$sef->kolicina}} kg</p>
        <form action="{{route('procesutoku')}}"  method="post">
            @csrf
    <button>Buy Coal for {{$sef->cijena}} CP</button>
        </form>
    @endforeach
</section>

<style>
    :root {
        --primary-color: #333;
        --accent-color: #ffcc00;
        --button-bg: #111;
        --button-hover: #222;
        --font-large: 3rem;
        --font-medium: 1.5rem;
        --transition-speed: 0.3s;
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        color: var(--primary-color);
        line-height: 1.6;
    }

    .hero {
        width: 100%;
        height: 55vh;
        display: flex;
        justify-content: center;
        align-items: center;
        overflow: hidden;
        margin-top: 20px;
    }

    .hero img {
        max-height: 100%;
        width: auto;
        transition: transform var(--transition-speed) ease;
    }

    .hero img:hover {
        transform: scale(1.02);
    }

    .kupovina {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 1rem;
        padding: 3rem 1rem;
        text-align: center;
    }

    .kupovina h1 {
        font-size: var(--font-large);
    }

    .kupovina .broj {
        font-size: 4rem;
        color: var(--accent-color);
        font-weight: bold;
    }

    .kupovina button {
        padding: 1rem 2rem;
        font-size: var(--font-medium);
        background-color: var(--button-bg);
        color: white;
        border: none;
        border-radius: 12px;
        cursor: pointer;
        transition: background-color var(--transition-speed), transform var(--transition-speed);
    }

    .kupovina button:hover {
        background-color: var(--button-hover);
        transform: scale(1.05);
    }

    @media (max-width: 768px) {
        .kupovina .broj {
            font-size: 2.5rem;
        }

        .kupovina button {
            width: 100%;
        }
    }
</style>
