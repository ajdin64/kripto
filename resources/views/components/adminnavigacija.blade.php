<div>
    <!-- BOOTSTRAP CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for Crypto Icons and Arrow -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg py-3" style="background: linear-gradient(to right, rgba(255, 0, 150, 0.8), rgba(0, 204, 255, 0.8)); box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);">
        <div class="container d-flex justify-content-between align-items-center">
            <!-- Logo with Crypto Icon -->
            <a class="navbar-brand d-flex align-items-center text-white fw-bold fs-3 logo" href="{{route('adminpanel')}}">
                <!-- Bitcoin Icon -->
                <i class="fas fa-user-secret fs-2 me-2 logo-icon"></i> Admin
            </a>

            <!-- Toggle -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navContent" aria-controls="navContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Nav Links -->
            <div class="collapse navbar-collapse" id="navContent">
                <ul class="navbar-nav mx-auto gap-4">
                    <li class="nav-item">
                        <a class="nav-link text-white active animate__animated animate__fadeIn animate__delay-1s" href="{{route('adminproizvodi')}}">Proizvodi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light animate__animated animate__fadeIn animate__delay-1.2s" href="{{route('adminvault')}}">Rudnici</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light animate__animated animate__fadeIn animate__delay-1.4s" href="#">Paketi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light animate__animated animate__fadeIn animate__delay-1.6s" href="{{route('adminsveporuke')}}">Poruke</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light animate__animated animate__fadeIn animate__delay-1.8s" href="#">Sve Novosti</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light animate__animated animate__fadeIn animate__delay-1.8s" href="#">Transakcije</a>
                    </li>
                </ul>


                <div class="d-flex align-items-center gap-4">


                    <!-- My Cart Icon -->

                    @guest
                        <a class="btn btn-outline-light rounded-pill px-4 py-2 animate__animated animate__fadeInUp animate__delay-2.4s" href="{{ route('register') }}" role="button">
                            Register
                        </a>
                    @endguest
                    <!-- Dropdown -->@auth
                        <div class="dropdown">
                            <a class="btn btn-outline-light rounded-pill px-4 py-2 animate__animated animate__fadeInUp animate__delay-2.4s" href="#" role="button" id="dropdownUser" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ Auth::user()->name }}
                                <i class="fas fa-chevron-down ms-2" id="dropdownArrow"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end shadow-lg" aria-labelledby="dropdownUser">
                                <li><a class="dropdown-item" href="{{route('profile.edit')}}"><i class="fas fa-user me-2"></i>My Profile</a></li>
                                <li><a class="dropdown-item" href="{{route('mybalance')}}"><i class="fas fa-wallet me-2"></i>Pocetna</a></li>
                                <li><a class="dropdown-item" href="{{route('banka')}}"><i class="fas fa-university me-2"></i>Error List</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit" class="dropdown-item text-danger w-100 text-start">
                                            <i class="fas fa-sign-out-alt me-2"></i> Logout
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    @endauth
                </div>
            </div>
        </div>
    </nav>

    <!-- CUSTOM STYLES -->
    <style>
        .navbar {
            background: linear-gradient(to right, rgba(255, 0, 150, 0.8), rgba(0, 204, 255, 0.8));
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .btn-outline-light {
            border: 2px solid rgba(255, 255, 255, 0.7);
            color: white;
            transition: all 0.3s ease;
        }

        .btn-outline-light:hover {
            background-color: rgba(255, 255, 255, 0.3);
            color: white;
            transform: scale(1.05);
        }

        .nav-link {
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .nav-link:hover {
            color: rgba(255, 0, 150, 1) !important;
            transform: scale(1.1);
        }

        .navbar-toggler-icon {
            background-color: #ffffff;
        }

        .dropdown-menu {
            background: rgba(0, 0, 0, 0.7);
            border-radius: 10px;
        }

        .dropdown-item {
            color: white;
            transition: all 0.2s ease;
        }

        .dropdown-item:hover {
            color: rgba(255, 0, 150, 1);
            background-color: rgba(255, 255, 255, 0.1);
        }

        .fas.fa-shopping-cart {
            font-size: 1.5rem;
            color: white;
            transition: transform 0.3s ease;
        }

        .my-cart-icon:hover .fas.fa-shopping-cart {
            transform: rotate(360deg);
        }

        .d-flex a {
            text-decoration: none;
            font-weight: 500;
            color: white;
            transition: color 0.3s ease;
        }

        .d-flex a:hover {
            color: rgba(255, 0, 150, 1);
            transform: scale(1.1);
        }

        .logo i {
            transition: transform 0.3s ease;
        }

        .logo:hover .logo-icon {
            transform: translateY(-10px);
        }

        .logo:hover {
            transform: scale(1.05);
        }

        @import url('https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css');

        .animate__animated {
            animation-duration: 1.5s !important;
        }

        .animate__fadeIn {
            animation-name: fadeIn !important;
        }

        .animate__fadeInLeft {
            animation-name: fadeInLeft !important;
        }

        .animate__bounceIn {
            animation-name: bounceIn !important;
        }

        .animate__fadeInUp {
            animation-name: fadeInUp !important;
        }
    </style>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        const dropdownToggle = document.getElementById('dropdownUser');
        const arrow = document.getElementById('dropdownArrow');

        dropdownToggle.addEventListener('click', function () {
            // Promijeni smjer strelice
            if (arrow.classList.contains('fa-chevron-down')) {
                arrow.classList.remove('fa-chevron-down');
                arrow.classList.add('fa-chevron-up');
            } else {
                arrow.classList.remove('fa-chevron-up');
                arrow.classList.add('fa-chevron-down');
            }
        });
    </script>

</div>
