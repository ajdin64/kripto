<!DOCTYPE html>
<html lang="bs">
<head>
    <meta charset="UTF-8">
    <title>Post Vijesti</title>

    <style>


        .post {
            display: flex;
            align-items: flex-start;
            background: #fff;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
            max-width: 900px;
            margin: 0 auto 40px auto;
            transition: transform 0.3s ease;
        }

        .post:hover {
            transform: translateY(-5px);
        }

        .post img {
            width: 300px;
            height: auto;
            object-fit: cover;
        }

        .post-content {
            padding: 25px;
            flex: 1;
        }

        #admindugme {
            height: 70px;
            width: 220px;
            background: linear-gradient(135deg, #d16ba5, #86a8e7, #5ffbf1);
            background-size: 300% 300%;
            color: white;
            border: none;
            font-weight: bold;
            font-size: 20px;
            font-family: 'Segoe UI', sans-serif;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
            cursor: pointer;
            transition: all 0.4s ease;
            animation: gradientMove 6s ease infinite;
        }

        #admindugme:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
        }

        #admindugme:active {
            transform: scale(0.98);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        }

        @keyframes gradientMove {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .post-content h2 {
            margin: 0 0 10px 0;
            font-size: 28px;
            color: #8e24aa; /* ljubičasta */
        }

        .post-content p {
            font-size: 16px;
            color: #444;
            line-height: 1.7;
        }

        @media (max-width: 768px) {
            .post {
                flex-direction: column;
            }

            .post img {
                width: 100%;
            }
        }
    </style>
</head>
<body>
<header>
    <x-navigacija />
</header>
<div class="razmak" style="height: 120px; width: 100%; display: flex; align-items: center; justify-content: center;">
    @can('access-admin-panel')
    <form action="{{route('adminobjava')}}">
    <button id="admindugme">Objavi vijest</button>
    </form>
    @endcan
</div>
@foreach($vijesti as $vijest)
    <div class="post">
        <img src="{{ asset('storage/' . $vijest->slika) }}" alt="Slika vijesti">
        <div class="post-content">
            <h2>{{ $vijest->naslov }}</h2>
            <p>
                {{ $vijest->kontent }}
            </p>
        </div>
    </div>
@endforeach

</body>
</html>
