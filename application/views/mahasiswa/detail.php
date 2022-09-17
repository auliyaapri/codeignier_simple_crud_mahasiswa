<section class="detail mt-5 pt-5">
    <div class="container">
        <div class="row">
            <div class="card" style="width: 35rem;">
                <div class="card-body">
                    <h3><?= $judul;?></h3>
                    <h5 class="card-title mb-3 mt-2"><?= $mahasiswa['nama']; ?></h5>
                    <div class="card-caontent d-flex">
                        <img src="<?= base_url(); ?>node_modules/bootstrap-icons/icons/envelope.svg" alt="" class="">
                        <h5 class="ms-2"><?= $mahasiswa['email'] ?></h5>
                    </div>
                    <div class="card-caontent d-flex">
                        <img src="<?= base_url(); ?>node_modules/bootstrap-icons/icons/envelope.svg" alt="" class="">
                        <h5 class="ms-2"><?= $mahasiswa['nim'] ?></h5>
                    </div>
                    <div class="card-caontent d-flex">
                        <img src="<?= base_url(); ?>node_modules/bootstrap-icons/icons/person.svg" alt="" class="">
                        <h5 class="ms-2"><?= $mahasiswa['jurusan'] ?></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
