<section class="mahasiswa">
    <div class="container mt-5 pt-5">
        <!-- Sweet alert -->
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
        <?php if ($this->session->flashdata('flash')) : ?> 
        <?php endif; ?>

        <div class="row text-white">
            <h1>Data Data Mahasiswa</h1>
        </div>
        <div class="row">
            <div class="col-md-6">
                <a href="<?= base_url(); ?>mahasiswa/tambah" class="btn btn-danger mt-3">Tambah Data Mahasiswa</a>
            </div>
        </div>

        <div class="row mt-2">
            <table class="table table-bordered ms-3">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">NIM</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($mahasiswa as $mhs) : ?>
                        <tr class="text-white">
                            <th scope="row"><?= ++$start; ?></th>
                            <td><?= $mhs['nama'] ?></td>
                            <td><?= $mhs['email'] ?></td>
                            <td><?= $mhs['nim'] ?></td>
                            <td><?= $mhs['jurusan'] ?></td>
                            <td>
                                <a href="<?= base_url(); ?>mahasiswa/detail/<?= $mhs["id"]; ?>" class="btn btn-success">Detail</a>
                                <a href="<?= base_url(); ?>mahasiswa/ubah/<?= $mhs["id"]; ?>" class="btn btn-primary">Ubah</a>
                                <a href="<?= base_url(); ?>mahasiswa/hapus/<?= $mhs["id"]; ?>" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            
        </div>
        <?php echo $this->pagination->create_links(); ?>
        
    </div>
</section>