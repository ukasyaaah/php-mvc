<div class="container mt-5 ">
    <div class="row justify-content-center align-items-start">

        <h1 class="text-center">Daftar Mahasiswa</h1>
        <?php foreach ($data['mhs'] as $mhs) : ?>
            <div class="card mx-3 my-3" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><?= $mhs->nama ?></h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary" style="--bs-text-opacity: .9;">Jurusan <?= $mhs->jurusan ?></h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                    <!-- <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a> -->
                </div>
            </div>
        <?php endforeach ?>

    </div>
</div>