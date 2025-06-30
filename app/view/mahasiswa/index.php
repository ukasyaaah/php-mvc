<div class="container  ">
    <div class="row mx-5 my-5 ">

        <h1 class="text-center">Daftar Mahasiswa</h1>

        <ul class="list-group ">
            <?php foreach ($data['mhs'] as $mhs) : ?>
                <li class="list-group-item d-flex justify-content-between align-items-center"><?= $mhs->nama ?>
                    <a href="<?= BASEURL ?>/mahasiswa/detail/<?= $mhs->id ?>"> <button type="button" class="btn btn-outline-dark ">Detail Mahasiswa</button>
                    </a>
                </li>

            <?php endforeach ?>
        </ul>
    </div>
</div>