<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('judul') | INFORMASI KATEGORI LAPTOP</title>
    <link rel="stylesheet" href="/bulma/css/bulma.min.css">
    
    {{-- Google Font (opsional, tapi disarankan untuk modernitas) --}}
    {{-- Bulma default-nya memakai font sans-serif sistem, tapi menambahkan Google Font bisa memberi kesan lebih 'desainer'. --}}
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

    <style>
        /* CSS kecil ini hanya untuk memastikan font Google terpakai jika Anda menambahkannya */
        /* Ini BUKAN CSS KUSTOM untuk desain, hanya untuk font */
        body {
            font-family: 'Open Sans', sans-serif;
        }
        .navbar-item b, .title {
            font-family: 'Montserrat', sans-serif;
        }
    </style>
</head>
<body>
    <div class="container is-fluid"> {{-- Menggunakan container is-fluid untuk lebar penuh dengan padding --}}
        <nav class="navbar is-dark" role="navigation" aria-label="main navigation"> {{-- Navbar gelap --}}
            <div class="navbar-brand">
                <a class="navbar-item is-size-4 has-text-weight-bold" href="/"> {{-- Ukuran teks lebih besar dan tebal --}}
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
                {{-- Anda bisa menambahkan navbar-end di sini jika perlu tombol login/daftar --}}
                {{-- <div class="navbar-end">
                    <div class="navbar-item">
                        <div class="buttons">
                            <a class="button is-primary is-light">
                                <strong>Daftar</strong>
                            </a>
                            <a class="button is-light">
                                Masuk
                            </a>
                        </div>
                    </div>
                </div> --}}
            </div>
        </nav>
        
        {{-- Konten Utama --}}
        <section class="section"> {{-- Menggunakan kelas section Bulma --}}
            <div class="box has-background-white p-5"> {{-- Menggunakan box dengan background putih dan padding --}}
                @yield('konten')
            </div>
        </section>
    </div>

    {{-- Footer --}}
    <footer class="footer has-background-dark has-text-white-ter"> {{-- Footer gelap --}}
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