<!-- Page Header -->
<div class="page-header row no-gutters py-4">
  <div class="col-12 col-sm-12 text-center text-sm-left mb-0">


    <span class="text-uppercase page-subtitle"> Keterangan Perangkat</span>
    <h1 class="page-title">EDIT DATA TELECENTER KOTA PEKALONGAN</h1>
  </div>
</div>
<!-- End Page Header -->

<div class="row">
  <div class="col-sm-6">
    <div class="card mb-4">
      <?php 
      foreach ($tb_ket_perangkat as $data)
        : ?>
      <div class="card-body mb-4">
        <h5 class="card-title">Edit Keterangan Perangkat</h5>

        <form class="form-horizontal" action="<?php echo site_url(). '/admin/ket_perangkat/update_ket'; ?>" role="form" method="post"> 
          <div class="row">
           <a class="navbar-brand" href="#pablo" style="color: #1d1124"><b>ID Keterangan</b></a>
           <input type="text" class="form-control" name="id_ket" placeholder="ID Keterangan" value="<?php echo $data->id_ket ?>" readonly>
           <br>
           <a class="navbar-brand mb-6" href="#pablo" style="color: #1d1124"><b>Keterangan</b></a>
           <input type="text" class="form-control mb-6" name="keterangan" placeholder="Keterangan" value="<?php echo $data->keterangan ?>">
           <br>
         </form>
         
       <?php endforeach ?>
       <div class="float-right">
         <br>
         <button class="btn btn-info mb-6 " type="submit"> Simpan&nbsp;</button>
         <a class="btn btn-danger" href="<?php echo base_url() ?>admin/ket_perangkat">Batal</a>
       </div>
     </div>
   </div>
 </div>
</div>
</div>


