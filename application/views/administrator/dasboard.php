<div class="container-fluid">
  <div class="alert alert-success" role="alert">
    <i class= " fas fa-tachometer-alt"></i>dashboard
  </div>
  <div class="alert alert-success" role="alert">
    <h4 class="alert-heading">Selamat Datang!</h4>
    <p>Selamat Datang di <strong><?php echo $username; ?> </strong> Sistem Informasi Akademik Universitas Trunojoyo Madura, Anda Login Sebagai <strong><?php echo $level;  ?></strong?</p>
    <hr>
    <!-- Button trigger modal -->
<button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#exampleModal">
  <i class="fas fa-cogs"></i>Control Panel
</button>

</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-cogs"></i>Control Panel</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class= "col-md-3 text-info text-center">
            <a href="<?php echo base_url() ?>"><p class="nav-link small text-info"><p>MAHASISWA</p></a>
            <i class="fas fa-3x fa-user-graduate"></i>
          </div>
          <div class= "col-md-3 text-info text-center">
            <a href="<?php echo base_url() ?>"><p class="nav-link small text-info"><p>TAHUN AKADEMIK</p></a>
            <i class="fas fa-3x fa-calendar-alt"></i>
          </div>
          <div class= "col-md-3 text-info text-center">
            <a href="<?php echo base_url() ?>"><p class="nav-link small text-info"><p>KRS</p></a>
            <i class="fas fa-3x fa-edit"></i>
          </div>
          <div class= "col-md-3 text-info text-center">
            <a href="<?php echo base_url() ?>"><p class="nav-link small text-info"><p>KHS</p></a>
            <i class="fas fa-3x fa-file-alt"></i>
          </div>
        </div><hr>
        <div class="row">
        <div class= "col-md-3 text-info text-center">
            <a href="<?php echo base_url() ?>"><p class="nav-link small text-info"><p>INPUT NILAI</p></a>
            <i class="fas fa-3x fa-sort-numeric-down"></i>
          </div>
          <div class= "col-md-3 text-info text-center">
            <a href="<?php echo base_url() ?>"><p class="nav-link small text-info"><p>CETAK TRANSKIP</p></a>
            <i class="fas fa-3x fa-print"></i>
          </div>
          <div class= "col-md-3 text-info text-center">
            <a href="<?php echo base_url() ?>"><p class="nav-link small text-info"><p>KATEGORI</p></a>
            <i class="fas fa-3x fa-list-ul"></i>
          </div>
          <div class= "col-md-3 text-info text-center">
            <a href="<?php echo base_url() ?>"><p class="nav-link small text-info"><p>INFO KAMPUS</p></a>
            <i class="fas fa-3x fa-bullhorn"></i>
          </div>
        </div>
        <div class="row">
        <div class= "col-md-3 text-info text-center">
            <a href="<?php echo base_url() ?>"><p class="nav-link small text-info"><p>IDENTITAS</p></a>
            <i class="fas fa-3x fa-id-card-alt"></i>
          </div>
          <div class= "col-md-3 text-info text-center">
            <a href="<?php echo base_url() ?>"><p class="nav-link small text-info"><p>TENTANG KAMPUS</p></a>
            <i class="fas fa-3x fa-info-circle"></i>
          </div>
          <div class= "col-md-3 text-info text-center">
            <a href="<?php echo base_url() ?>"><p class="nav-link small text-info"><p>FASILITAS</p></a>
            <i class="fas fa-3x fa-laptop"></i>
          </div>
          <div class= "col-md-3 text-info text-center">
            <a href="<?php echo base_url() ?>"><p class="nav-link small text-info"><p>GALERI</p></a>
            <i class="fas fa-3x fa-images"></i>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
  
</div>