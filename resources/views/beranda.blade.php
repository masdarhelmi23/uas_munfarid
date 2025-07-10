@extends('layout')
@section('judul', 'Selamat Datang')

@section('konten')
    {{-- Mempercantik section hero dengan kelas Bulma --}}
    <section class="hero is-primary is-bold is-fullheight-with-navbar">
        <div class="hero-body">
            <p class="title is-1 has-text-centered has-text-shadow"> {{-- Judul lebih besar, di tengah, dan dengan bayangan teks --}}
                Selamat Datang
            </p>
            <p class="subtitle is-3 has-text-centered"> {{-- Subtitle lebih besar dan di tengah --}}
                INFORMASI KATEGORI LAPTOP
            </p>
        </div>
    </section>

    {{-- Tambahan konten di bawah hero (opsional) --}}
    {{-- Ini akan otomatis masuk dalam box di layout.blade.php --}}
    <div class="block has-text-centered"> {{-- Penambahan kelas Bulma untuk spacing dan centering --}}
        <h2 class="title is-4 mt-6 mb-4">Temukan Laptop Impian Anda</h2>
        <p class="subtitle is-6 mb-5">
            Jelajahi berbagai kategori dan merk laptop terbaik yang kami sediakan.
        </p>

        <div class="columns is-centered is-multiline">
            <div class="column is-one-third">
                <div class="card has-background-white-ter"> {{-- Kartu dengan warna latar belakang sedikit abu-abu --}}
                    <div class="card-content">
                        <div class="icon-text is-flex is-align-items-center is-justify-content-center mb-3">
                            <span class="icon has-text-info is-large">
                                <i class="fas fa-th-list"></i> {{-- Icon (membutuhkan Font Awesome, lihat catatan di bawah) --}}
                            </span>
                            <span class="title is-5 ml-2">Kategori Lengkap</span>
                        </div>
                        <p>Temukan laptop berdasarkan jenis penggunaan: gaming, desain, bisnis, dan lainnya.</p>
                        <a href="/kategori" class="button is-info is-light mt-4">Lihat Kategori</a>
                    </div>
                </div>
            </div>
            <div class="column is-one-third">
                <div class="card has-background-white-ter">
                    <div class="card-content">
                        <div class="icon-text is-flex is-align-items-center is-justify-content-center mb-3">
                            <span class="icon has-text-success is-large">
                                <i class="fas fa-laptop"></i> {{-- Icon --}}
                            </span>
                            <span class="title is-5 ml-2">Merk Terkenal</span>
                        </div>
                        <p>Jelajahi laptop dari merk-merk terkemuka seperti Dell, HP, Lenovo, ASUS, dan lainnya.</p>
                        <a href="/laptop" class="button is-success is-light mt-4">Lihat Merk Laptop</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection