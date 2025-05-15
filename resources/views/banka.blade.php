<x-navigacija />
<div class="pocetna">
    <div class="forma">
        <h1 id="post">Rude</h1>
    </div>
    <div class="velikakocka">
        @foreach($rude as $ruda)
            <div class="malekocke">
                <p id="imerude">{{ $ruda->ime }}</p>
                @if(empty($ruda->kolicina))
                    <p id="kilogrami">0 kg</p>
                @else
                    <p id="kilogrami">{{ $ruda->kolicina }} kg</p>
                @endif
            </div>
        @endforeach
    </div>
</div>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap');

    * {
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    body {
        margin: 0;
        padding: 0;
    }

    .pocetna {
        width: 100%;
        min-height: 100vh;
        display: flex;
        flex-direction: column;
        align-items: center;
        background: linear-gradient(135deg, #f3e7e9 0%, #e3eeff 100%);
        padding-bottom: 60px;
    }

    .forma {
        height: 100px;
        width: 90%;
        background: white;
        display: flex;
        align-items: center;
        border-radius: 20px;
        margin-top: 40px;
        box-shadow: 0 10px 25px rgba(101, 0, 68, 0.1);

    }

    #post {
        font-weight: 300;
        font-size: 36px;
        color: #9b268d;
        text-shadow: 1px 1px 2px rgba(101, 0, 68, 0.1);
        margin-left: 40px;
    }

    .velikakocka {
        width: 90%;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 30px;
        margin-top: 40px;
    }

    .malekocke {
        height: 260px;
        width: 260px;
        background: linear-gradient(135deg, #fff 0%, #f7f0fa 100%);
        border-radius: 25px;
        box-shadow: 0 15px 30px rgba(101, 0, 68, 0.15);
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border: 1px solid rgba(190, 127, 190, 0.2);
        text-align: center;
        padding: 20px;
    }

    .malekocke:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 40px rgba(101, 0, 68, 0.2);
    }

    #imerude {
        font-size: 24px;
        font-weight: 600;
        color: #4a0040;
        margin-bottom: 10px;

    }

    #kilogrami {
        font-size: 36px;
        font-weight: 500;
        color: #8c3f85;
    }

    @media (max-width: 768px) {
        .malekocke {
            width: 90%;
            height: auto;
            padding: 30px 20px;
        }

        #imerude {
            font-size: 22px;
        }

        #kilogrami {
            font-size: 30px;
        }

        .forma {
            height: auto;
            padding: 20px;
        }

        #post {
            font-size: 28px;
        }
    }
    @keyframes fadeInUp {
        0% {
            opacity: 0;
            transform: translateY(30px);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .malekocke {
        opacity: 0;
        animation: fadeInUp 0.8s ease forwards;
        animation-delay: calc(var(--i) * 0.1s); /* individualna kašnjenja */
    }

</style>
