<div class="container  ">
    <div class="row mx-5 my-5 ">

        <h1 class="text-center">Daftar Mahasiswa</h1>
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <?php Flasher::flash() ?>
            </div>
        </div>


        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary tombolTambahData btn-lg gap-2 col-9 mx-auto mb-4" data-bs-toggle="modal" data-bs-target="#formModal">
            Tambah Data Mahasiswa
        </button>

        <form action="<?= BASEURL ?>/mahasiswa/cari" method="post">
            <div class="input-group mb-3">
                <input autocomplete="off" type="text" class="form-control" placeholder="Cari Mahasiswa" aria-label="Recipient’s username" aria-describedby="button-addon2" name="keyword" id="keyword">
                <button class="btn btn-outline-primary" type="submit" id="tombolCari">Cari</button>
            </div>
        </form>
        <ul class="list-group ">
            <?php foreach ($data['mhs'] as $mhs) : ?>
                <li class="list-group-item d-flex  justify-content-between align-items-center fw-semibold">

                    <?= $mhs->nama ?>


                    <div>
                        <a class="btn btn-outline-dark btn-sm m-2" href="<?= BASEURL ?>/mahasiswa/detail/<?= $mhs->id ?>">Detail</a>

                        <a class="btn btn-outline-warning tampilModalUbah btn-sm m-2" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $mhs->id ?>" href="<?= BASEURL ?>/mahasiswa/edit/<?= $mhs->id ?>">Edit</a>

                        <a class="btn btn-outline-danger btn-sm m-2" href="<?= BASEURL ?>/mahasiswa/hapus/<?= $mhs->id ?>">Hapus</a>
                    </div>
                </li>
            <?php endforeach ?>
        </ul>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="formModalLabel">Tambah Data Mahasiswa</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL ?>/mahasiswa/tambah" method="post">
                    <input type="hidden" name="id" id="id">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Mahasiswa</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                        <div id="nama" class="form-text">Masukin nama valid, ga boleh typo.</div>
                    </div>
                    <div class="mb-3">
                        <label for="nim" class="form-label">Nim Mahasiswa</label>
                        <input type="number" maxlength="5" class="form-control" id="nim" name="nim" required>
                        <div id="nim" class="form-text">Masukin nim valid, ga boleh typo.</div>
                    </div>
                    <div class="mb-3">
                        <label for="jurusan" class="form-label">Jurusan Mahasiswa</label>
                        <select class="form-select" name="jurusan" id="jurusan" aria-label="Default select example">
                            <option value="Teknologi Rekayasa Perangkat Lunak">Teknologi Rekayasa Perangkat Lunak</option>
                            <option value="Teknologi Rekayasa Multimedia Grafis">Teknologi Rekayasa Multimedia Grafis</option>
                            <option value="Teknologi Rekayasa Komputer Jaringan">Teknologi Rekayasa Komputer Jaringan</option>
                        </select>
                    </div>
            </div>
            <div class="modal-footer">

                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                <button type="submit" class="btn btn-primary">Tambah Data</button>

                </form>
            </div>
        </div>
    </div>
</div>