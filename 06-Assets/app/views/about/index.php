<div class="container mt-4">
    <h1>About Me</h1>
    
    <!-- $data diambil dari url -->
    <p>Hallo, nama saya <?= $data['nama']; ?>, saya adalah seorang <?= $data['pekerjaan']; ?>. Saya berumur <?= $data['umur']; ?> tahun.</p>

    <!-- Mengambil gambar ice black.jpg -->
    <img src="<?= BASEURL; ?>/img/ice black.jpg" alt="Ice Cream Black" width="200" class="rounded-circle shadow">

</div>
