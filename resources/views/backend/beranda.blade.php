@extends('backend.v_layouts.app')

@section('content')
<h2>Selamat Datang di Halaman Beranda</h2>

<!-- ✅ Menu navigasi -->

<hr>

<!-- ✅ Informasi User Login -->
<p>
Selamat datang, <b>{{ Auth::user()->nama }}</b> pada aplikasi Toko Online.<br>
Hak akses anda sebagai:
<b>
    @if (Auth::user()->role == 1)
        Super Admin 👑
    @elseif (Auth::user()->role == 0)
        Admin 🧑‍💼
    @else
        Tidak diketahui
    @endif
</b>
</p>

<p>Login berhasil! 🎉</p>
@endsection
