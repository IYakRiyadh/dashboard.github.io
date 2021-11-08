                <!-- Begin Page Content -->
<div class="container-fluid">

<div class="card">
  <div class="card-header text-lg-center"><?= $title;?></div>
  <div class="card-body">
      <img class="rounded-circle img-thumbnail rounded mx-auto d-block attachment-img" width="150px" srcset="<?= base_url('assets/img/profil/profil.jpg')?>" height="150px">
      
      <hr>

<form class="row g-3 rounded">
  <div class="col-md-5 mx-auto">
    <label for="inputEmail4" class="form-label">Nama Lengkap</label>
    <input type="text" class="form-control" id="inputEmail4" value="<?= $data=$user['nama'];?>">
  </div>
  <div class="col-md-5 mx-auto">
    <label for="inputPassword4" class="form-label">Email</label>
    <input type="text" class="form-control" id="inputPassword4" value="<?= $data=$user['email'];?>">
  </div>
  <div class="col-11 p-2 mx-auto">
    <label for="inputAddress" class="form-label">Alamat</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="<?= $data=$user['alamat']?>">
  </div>
  <!-- <div class="col-2 p-lg-5">
      <button type="submit" class="btn btn-primary position-relative">Simpan</button>
  </div>
  <div class="col-1 p-lg-5">
      <button type="submit" class="btn btn-warning position-relative ">Edit</button>
  </div> -->
</form>

  </div>
  <div class="card-footer text-muted text-lg-center">
    Akun Dibuat Pada <?= date('d M Y')?>
  </div>
</div>



<!-- Page Heading -->
<!-- <h1 class="h3 mb-4 text-gray-800 text-primary"> Selamat Datang di </h1>-->
    </div> 
    <!-- /.container-fluid -->

</div>
            <!-- End of Main Content -->


