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
            <button type="button" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#formModal">
                Tambah Data Mahasiswa
            </button>
            
            <h3 class="mt-4">Daftar Mahasiswa</h3>

            <!-- Menampilkan data mhs yang dikirim dari model lewat controller -->
            <ul class="list-group mt-3">
                <?php foreach ($data['mhs'] as $mhs): ?>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <?=$mhs['nama']; ?>
                        <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge bg-primary" style="text-decoration:none;">Detail</a>
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
        <h5 class="modal-title" id="judulModal">Tambah Data Mahasiswa</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <!-- Form tambah data mahasiswa yg akan dikirim ke method tambah di controller mahasiswa dengan metode POST -->
        <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="POST">
            <div class="modal-body">
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
