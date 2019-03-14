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
      foreach ($tb_status_perangkat as $data)
        : ?>
      <div class="card-body mb-4">
        <h5 class="card-title">Edit Status Perangkat</h5>

        <form class="form-horizontal" action="<?php echo site_url(). '/admin/status_perangkat/update_status'; ?>" role="form" method="post"> 
          <div class="row">
           <a class="navbar-brand" href="#pablo" style="color: #1d1124"><b>ID Status</b></a>
           <input type="text" class="form-control" name="id_stats" placeholder="ID Keterangan" value="<?php echo $data->id_stats ?>" readonly>
           <br>
           <a class="navbar-brand mb-6" href="#pablo" style="color: #1d1124"><b>Status</b></a>
           <input type="text" class="form-control mb-6" name="status" placeholder="Keterangan" value="<?php echo $data->status ?>">
           <br>
         </form>
         
       <?php endforeach ?>
       <div class="float-right">
         <br>
         <button class="btn btn-info mb-6 " type="submit"> Simpan&nbsp;</button>
         <a class="btn btn-danger" href="<?php echo base_url() ?>admin/status_perangkat">Batal</a>
       </div>
     </div>
   </div>
 </div>
</div>
</div>


