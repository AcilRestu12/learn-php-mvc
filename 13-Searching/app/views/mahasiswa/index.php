<div class="container mt-3">
    <div class="row">
        <div class="col-lg-6">
            <!-- Menampilkan pesan flash -->
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <!-- Button trigger modal -->
            <!-- Button untuk menambah data mahasiswa -->
            <button type="button" class="btn btn-primary mt-3 tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal">
                Tambah Data Mahasiswa
            </button>
        </div>
    </div>
    
    <div class="row">
        <div class="col-lg-6">
            <!-- Form untuk mencari data mahasiswa sesuai dengan keyword yg dimasukkan -->
            <form action="<?= BASEURL; ?>/mahasiswa/cari" method="POST">
                <div class="input-group mt-3">
                    <input type="text" class="form-control" placeholder="Cari mahasiswa..." name="keyword" id="keyword" autocomplete="off">
                    <button class="btn btn-outline-primary" type="submit" id="tombolCari">Cari</button>
                </div>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">

            <h3 class="mt-4">Daftar Mahasiswa</h3>

            <!-- Menampilkan data mhs yang dikirim dari model lewat controller -->
            <ul class="list-group mt-3">
                <?php foreach ($data['mhs'] as $mhs): ?>
                    <li class="list-group-item">
                        <?=$mhs['nama']; ?>
                        <!-- Link untuk menghapus suatu data mahasiswa-->
                        <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge bg-danger float-end me-2" style="text-decoration:none;" onclick="return confirm('Yakin?')">Hapus</a>
                        <!-- Link untuk mengedit suatu data mahasiswa-->
                        <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge bg-success float-end me-2 tampilModalUbah" style="text-decoration:none;" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $mhs['id']; ?>">Edit</a>
                        <!-- Link untuk melihat detail dari suatu data mahasiswa-->
                        <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge bg-primary float-end me-2" style="text-decoration:none;">Detail</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="formModalLabel">Tambah Data Mahasiswa</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <!-- Form tambah data mahasiswa yg akan dikirim ke method tambah di controller mahasiswa dengan metode POST -->
        <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="POST" id="form-mahasiswa">
            <div class="modal-body">
                <!-- Inputan id -->
                <input type="hidden" name="id" id="id">
                <!-- Inputan nama -->
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama">
                </div>
                <!-- Inputan nim -->
                <div class="mb-3">
                    <label for="nim" class="form-label">NIM</label>
                    <input type="number" class="form-control" id="nim" name="nim">
                </div>
                <!-- Inputan email -->
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <!-- Inputan jurusan -->
                <div class="mb-3">
                    <label for="jurusan" class="form-label">Jurusan</label>
                    <select class="form-select" aria-label="Default select example" id="jurusan" name="jurusan">
                        <option value="Teknik Informatika">Teknik Informatika</option>
                        <option value="Teknik Sipil">Teknik Sipil</option>
                        <option value="Teknik Industri">Teknik Industri</option>
                        <option value="Teknik Mesin">Teknik Mesin</option>
                        <option value="Teknik Pangan">Teknik Pangan</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <!-- Button tipenya submit agar dapat mengirim data -->
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </div>
        </form>
    </div>
  </div>
</div>
