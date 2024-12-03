@extends('layout')

@section('konten')

<div class="jumbotron py-4 px-5 mt-4 styled-background">
    <div class="text-container">
        <img src="{{ asset('image/wikrama.png') }}" alt="Wikrama Image" class="img-fluid styled-image"/>
        <div class="overlay-text">
            <h1 class="display-4 text-white">Selamat datang!</h1>
            <h3 class="mt-2 text-white">
                Aplikasi ini digunakan hanya oleh Guru SMK WIKRAMA BOGOR, digunakan untuk mengelola data absensi siswa/siswi.
            </h3>
            <a href="https://smkwikrama.sch.id/" target="blank" class="btn btn-primary">Lihat Selengkapnya</a>
        </div>
    </div>
    <div class="info-container">
        <div class="info-box">
            <h3>MOTTO</h3>
            <p>Ilmu yang Amaliah, Amal yang Ilmiah, Akhlaqul Karimah</p>
        </div>
        <div class="info-box">
            <h3>AFIRMASI</h3>
            <p>Padamu negeri - kami berjanji - lulus Wikrama siap membangun negeri</p>
        </div>
        <div class="info-box">
            <h3>ATTITUDE</h3>
            <p>Aku ada lingkunganku bahagia</p>
        </div>
    </div>
</div>

@endsection

<style>
/* Kontainer teks dan gambar */
.text-container {
    position: relative;
    max-width: 800px; /* Lebar maksimal gambar */
    margin: auto; /* Tengah secara horizontal */
    height: auto; /* Sesuaikan tinggi kontainer */
    text-align: center;
    padding: 5px 0; /* Mengurangi jarak vertikal */
}

/* Styling gambar */
.styled-image {
    top: 60%;
    width: 100%; /* Gambar akan menyesuaikan dengan kontainer */
    max-width: 750px; /* Lebar maksimal lebih besar */
    height: auto; /* Proporsi tetap */
    border-radius: 10px;
    object-fit: cover; /* Menjaga kualitas gambar */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.6);
}

/* Styling overlay teks */
.overlay-text {
    position: absolute;
    top: 50%; /* Posisi teks lebih tinggi */
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: rgba(0, 0, 0, 0.5); /* Latar semi-transparan */
    padding: 15px 20px; /* Lebih rapat */
    border-radius: 10px;
    color: white;
    text-align: center;
    width: 85%; /* Sedikit lebih lebar */
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
}

.overlay-text h1,
.overlay-text h3 {
    margin: 8px 0; /* Jarak antar elemen teks lebih kecil */
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8); /* Efek bayangan teks */
}

.info-container {
    display: flex;
    justify-content: space-between; /* Memberikan jarak antar item */
    align-items: flex-start; /* Menjaga teks sejajar di atas */
    gap: 20px; /* Jarak antar elemen */
    padding: 20px;
    background-color: #f8f9fa; /* Warna latar belakang abu-abu terang */
}

/* Kotak individual */
.info-box {
    background-color: white; /* Latar belakang putih */
    padding: 20px;
    border-radius: 10px; /* Sudut melengkung */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Efek bayangan */
    flex: 1; /* Membuat setiap kotak memiliki lebar yang sama */
    text-align: center; /* Rata tengah teks */
    height: 130px;
}

/* Judul */
.info-box h3 {
    font-size: 18px;
    font-weight: bold;
    margin-bottom: 10px;
    color: #333;
}

/* Paragraf */
.info-box p {
    font-size: 16px;
    color: #555;
}
</style>
