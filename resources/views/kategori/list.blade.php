@extends('layout')

@section('judul', 'Kategori')

@section('konten')
{{-- HERO SECTION --}}
<section class="hero is-primary is-bold"> {{-- is-primary untuk warna latar belakang, is-bold untuk efek teks --}}
    <div class="hero-body">
        <p class="title is-2 has-text-centered"> {{-- Judul lebih besar (is-2), teks di tengah --}}
            Kategori Laptop
        </p>
        <p class="subtitle is-4 has-text-centered"> {{-- Subtitle lebih besar (is-4), teks di tengah --}}
            Temukan Informasi Lengkap Kategori Laptop
        </p>
    </div>
</section>

{{-- SECTION DAFTAR KATEGORI --}}
{{-- Mengganti kelas latar belakang kustom dengan section standar Bulma dan menambahkan container --}}
<section class="section"> 
    <div class="container"> {{-- Memastikan konten di tengah dan memiliki lebar maksimal --}}
        <h2 class="title is-3 has-text-centered mb-5">Daftar Kategori Tersedia</h2> {{-- Judul daftar kategori --}}
        
        <div class="columns is-multiline is-centered"> {{-- Menggunakan sistem grid Bulma untuk tata letak responsif --}}
            @foreach ($data as $item)
            {{-- Kolom responsif: 3 di desktop, 2 di tablet, 1 di mobile --}}
            <div class="column is-one-third-desktop is-half-tablet is-full-mobile"> 
                <div class="card has-background-white has-text-dark"> {{-- Card dengan latar belakang putih dan teks gelap --}}
                    <div class="card-content">
                        <div class="content has-text-centered py-4"> {{-- Konten kartu di tengah, padding vertikal --}}
                            <p class="title is-4 has-text-primary mb-2"> {{-- Nama kategori lebih besar dan warna primary Bulma --}}
                                {{ $item->nama_kategori }}
                            </p>
                            {{-- Anda bisa menambahkan deskripsi singkat di sini jika ada data deskripsi --}}
                            {{-- <p class="is-size-6 has-text-grey">Deskripsi singkat kategori ini.</p> --}}
                        </div>
                    </div>
                    <footer class="card-footer">
                        <a href="/kategori/{{ $item->id }}" class="card-footer-item button is-primary is-light is-fullwidth is-rounded"> {{-- Tombol fullwidth, rounded, warna light --}}
                            Selengkapnya
                        </a>
                    </footer>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection