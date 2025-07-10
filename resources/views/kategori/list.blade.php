<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('judul') | INFORMASI KATEGORI LAPTOP</title>

    {{-- PASTIKAN BARIS INI MENGGUNAKAN asset() HELPER --}}
    <link rel="stylesheet" href="{{ asset('bulma/css/bulma.min.css') }}">

    {{-- Google Font (opsional, tapi disarankan untuk modernitas) --}}
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

    <style>
        /* CSS kecil ini hanya untuk memastikan font Google terpakai jika Anda menambahkannya */
        /* Ini BUKAN CSS KUSTOM untuk desain, hanya untuk font */
        html, body {
            background-color: hsl(0, 0%, 96%); /* Light grey background */
            min-height: 100vh; /* Ensure body takes full viewport height */
            display: flex;
            flex-direction: column;
        }
        .navbar-item b, .title {
            font-family: 'Montserrat', sans-serif;
        }
        body {
            font-family: 'Open Sans', sans-serif;
        }
        .footer {
            margin-top: auto; /* Push footer to the bottom */
        }
        /* Jika Anda punya Font Awesome untuk ikon, tambahkan juga di sini */
        /* .icon-text .icon { font-size: 2.5rem; } */
        /* .icon-text .title { margin-left: 0.5rem; } */
    </style>
</head>
<body>
    <div class="container is-fluid is-paddingless-mobile"> 
        <nav class="navbar is-dark is-fixed-top" role="navigation" aria-label="main navigation">
            <div class="navbar-brand">
                <a class="navbar-item is-size-4 has-text-weight-bold" href="/">
                    INFORMASI KATEGORI LAPTOP
                </a>

                <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarSIFIKOM">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                </a>
            </div>

            <div id="navbarSIFIKOM" class="navbar-menu">
                <div class="navbar-start">
                    <a class="navbar-item" href="/">Beranda</a>
                    <a class="navbar-item" href="/kategori">Kategori Laptop</a>
                    <a class="navbar-item" href="/laptop">Merk Laptop</a>
                </div>
            </div>
        </nav>

        {{-- Konten Utama --}}
        <section class="section pt-6"> 
            <div class="box has-background-white p-5 mt-6"> 
                @yield('konten')
            </div>
        </section>
    </div>

    {{-- Footer --}}
    <footer class="footer has-background-dark has-text-white-ter">
        <div class="content has-text-centered">
            <p>
                <strong>INFORMASI KATEGORI LAPTOP</strong> oleh <a href="#" class="has-text-info">Nama Anda</a>. Hak Cipta &copy; {{ date('Y') }}.
            </p>
        </div>
    </footer>

    <script src="/js/jquery-3.7.1.min.js"></script>
    <script>
        $(document).ready(function(){
            $(".navbar-burger").click(function(){
                $(".navbar-burger").toggleClass("is-active");
                $(".navbar-menu").toggleClass("is-active");
            });
        });
    </script>

</body>
</html>