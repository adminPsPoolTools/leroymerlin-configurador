@props(['user', 'logo' => null, 'logoAlt' => ''])

@php
$userEncoded = base64_encode($user);
@endphp

<header class="py-5 titulo cabhome" style="{{ $background }}">
    <div class="row">
        <div class="col container-wrapper">
            <div class="container_titulo">
                <div class="header-content">
                    <div class="texto">
                        <h1>{{ $title }}</h1>
                        <p>{{ $description }}</p>
                        {{-- <div class="flecha"><img src="{{ asset('storage/img/flecha.png')}}"></div> --}}
                    </div>
                    @if($logo)
                    <div class="header-logo-side">
                        <img src="{{ $logo }}" alt="{{ $logoAlt ?: 'Logo' }}">
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</header>

<style>
    /* General styles */
    .row {
        display: flex;
        flex-wrap: wrap;
        margin-right: -1rem;
        margin-left: -1rem;
    }

    .col {
        padding-right: 1rem;
        padding-left: 1rem;
        margin-bottom: 1rem;
        /* Espaciado entre columnas */
    }

    .py-5 {
        padding-top: 3rem;
        padding-bottom: 3rem;
    }

    .text-center {
        text-align: center;
    }

    .img-fluid {
        max-width: 100%;
        height: auto;
    }

    .mt-4 {
        margin-top: 1.5rem;
    }

    .header-content {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 1rem;
    }

    .header-logo-side {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        width: 164px;
        height: 164px;
        padding: 5px;
        border-radius: 10px;
        background: rgba(255, 255, 255, 0.9);
        box-shadow: 0 8px 18px rgba(0, 0, 0, 0.16);
    }

    .header-logo-side img {
        width: 100%;
        height: 100%;
        object-fit: contain;
    }

    /* Responsive styles */
    @media screen and (max-width: 1268px) {
        .container-wrapper {
            width: 100%;
            padding: 0 15px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .container_titulo,
        .texto {
            width: 100% !important;
            text-align: center;
            font-size: 18px !important;

        }

        .texto h1 {
            width: 100% !important;
            text-align: left;
            font-size: 40px !important;

        }

        .header-content {
            width: 100%;
            gap: 0.75rem;
        }

        .header-logo-side {
            width: 52px;
            height: 52px;
            padding: 4px;
        }

        .menu ul {
            flex-direction: column;
            align-items: center;
            width: 100% !important;
        }

        .menu ul li {
            margin: 10px 0;
            width: 100% !important;
            border-bottom: solid 1px white;
        }

        .album {
            margin-top: 100px !important;
        }

        .container_menu {
            width: 100% !important;
        }

    }

    /* Responsive styles */
    @media screen and (max-width: 430px) {
        .container-wrapper {
            width: 100%;
            padding: 0 15px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .container_titulo,
        .texto {
            width: 100% !important;
            text-align: center;
            font-size: 18px !important;

        }

        .texto h1 {
            width: 100% !important;
            text-align: left;
            font-size: 40px !important;

        }

        .header-content {
            width: 100%;
            flex-direction: row;
            align-items: flex-start;
            gap: 0.65rem;
        }

        .header-logo-side {
            width: 44px;
            height: 44px;
            padding: 3px;
            border-radius: 8px;
        }

        .menu ul {
            flex-direction: column;
            align-items: center;
            width: 100% !important;
        }

        .menu ul li {
            margin: 10px 0;
            width: 100% !important;
            border-bottom: solid 1px white;
        }

        .album {
            margin-top: 100px !important;
        }

        .container_menu {
            width: 100% !important;
        }

    }

    .menu ul li a {
        display: block;
        padding: 12px 20px;
        background-color: #00598d;
        /* Color azul destacado */
        color: white !important;
        //border-radius: 8px;
        font-size: 18px;
        text-align: center;
        text-decoration: none !important;
        transition: background-color 0.3s ease;
    }

    .menu ul li a:hover {
        background-color: #00598d;
    }

    .menu ul li {
        margin: 0 2px !important;
        text-decoration: none;
    }

    .menu ul li a.active {
        background-color: #000000;
        /* Un tono más oscuro para marcar como activo */
        font-weight: bold;
        box-shadow: 0 0 8px rgba(175, 175, 175, 0.2);
    }
</style>
