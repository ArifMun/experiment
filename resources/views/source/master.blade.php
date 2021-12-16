<!DOCTYPE html>
<html lang="en">

<head>
    <title>Selamat Datang Di Website</title>
</head>

<body>
    <header>
        <h2>Blog Personal</h2>
        <nav>
            <a href="/blog">HOME</a>
            <a href="/blog/tentang">TENTANG</a>
            <a href="/blog/kontak">KONTAK</a>
        </nav>
    </header>
    <br>
    <br>
    <br>
    <h3>@yield('judul_halaman')</h3>
    @yield('konten')
    <br>
    <br>
    <hr>
    <footer>
        <p>&copy;
        <h5>Mahasiswa Universitas Muhammadiyah Purworejo
            Program Studi Teknologi Informasi
        </h5>. 2021</p>
    </footer>
</body>

</html>