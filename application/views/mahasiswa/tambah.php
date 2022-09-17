<section class="tambah mt-5 pt-5">
<div class="container">
<form action="" method="post" style="width: 50rem;">
  <input type="hidden" name="id">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama</label>
    <input id="nama" name="nama" type="text" class="form-control">    
    <div class="form-text text-danger"><?= form_error('nama');?> </div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">NIM</label>
    <input id="nim" name="nim" type="text" class="form-control">    
    <div class="form-text text-danger"><?= form_error('nim');?> </div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input id="email" name="email" type="text" class="form-control">    
    <div class="form-text text-danger"><?= form_error('email');?> </div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Jurusan</label>
    <input id="jurusan" name="jurusan" type="text" class="form-control">        
    <div class="form-text text-danger"><?= form_error('jurusan');?> </div>
  </div>
  <button type="submit" class="btn btn-primary" name="tambah">Submit</button>
</form>
</div>
</section>