<section class="ubah mt-5 pt-5">
  <div class="container">
<form action="" method="post">
  <input type="hidden" name="id" value="<?= $mahasiswa['id'];?>">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama</label>
    <input id="nama" name="nama" type="text" class="form-control" value="<?= $mahasiswa['nama']?>">    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">NIM</label>
    <input id="nim" name="nim" type="text" class="form-control" value="<?= $mahasiswa['nim']?>" >    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input id="email" name="email" type="text" class="form-control" value="<?= $mahasiswa['email']?>" >    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Jurusan</label>
    <input id="jurusan" name="jurusan" type="text" class="form-control" value="<?= $mahasiswa['jurusan']?>" >        
  </div>
  <button type="submit" class="btn btn-primary" name="ubah">Submit</button>
</form>
</div>
</section>