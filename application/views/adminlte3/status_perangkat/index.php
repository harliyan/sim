<!-- Page Header -->
    <div class="page-header row no-gutters py-4">
      <div class="col-12 col-sm-12 text-center text-sm-left mb-0">
        <span class="text-uppercase page-subtitle"> Status Perangkat</span>
        <h1 class="page-title">INPUT DATA TELECENTER KOTA PEKALONGAN</h1>
      </div>
    </div>
    <!-- End Page Header -->

    <div class="row">
      <div class="col-lg col-md-6 col-sm-6 mb-4">
        <div class="stats-small stats-small--1 card card-small">
          <div class="card-body p-0 d-flex">
            <div class="d-flex flex-column m-auto">
              <div class="stats-small__data text-center">
                <span class="stats-small__label text-uppercase">Pekalongan Barat</span>
                <h6 class="stats-small__value count my-3"><?php echo $get_barat_count[0]->count; ?></h6>
              </div>
              <div class="stats-small__data">
                <span class="stats-small__percentage stats-small__percentage--increase">DATA</span>
              </div>
            </div>
            <canvas height="120" class="blog-overview-stats-small-1"></canvas>
          </div>
        </div>
      </div>
      <div class="col-lg col-md-4 col-sm-6 mb-4">
        <div class="stats-small stats-small--1 card card-small">
          <div class="card-body p-0 d-flex">
            <div class="d-flex flex-column m-auto">
              <div class="stats-small__data text-center">
                <span class="stats-small__label text-uppercase">Pekalongan Utara</span>
                <h6 class="stats-small__value count my-3"><?php echo $get_utara_count[0]->count; ?></h6>
              </div>
              <div class="stats-small__data">
                <span class="stats-small__percentage stats-small__percentage--increase">DATA</span>
              </div>
            </div>
            <canvas height="120" class="blog-overview-stats-small-3"></canvas>
          </div>
        </div>
      </div>
      <div class="col-lg col-md-4 col-sm-6 mb-4">
        <div class="stats-small stats-small--1 card card-small">
          <div class="card-body p-0 d-flex">
            <div class="d-flex flex-column m-auto">
              <div class="stats-small__data text-center">
                <span class="stats-small__label text-uppercase">Pekalongan Selatan</span>
                <h6 class="stats-small__value count my-3"><?php echo $get_selatan_count[0]->count; ?></h6>
              </div>
              <div class="stats-small__data">
                <span class="stats-small__percentage stats-small__percentage--increase">DATA</span>
              </div>
            </div>
            <canvas height="120" class="blog-overview-stats-small-4"></canvas>
          </div>
        </div>
      </div>
      <div class="col-lg col-md-4 col-sm-12 mb-4">
        <div class="stats-small stats-small--1 card card-small">
          <div class="card-body p-0 d-flex">
            <div class="d-flex flex-column m-auto">
              <div class="stats-small__data text-center">
                <span class="stats-small__label text-uppercase">Pekalongan Timur</span>
                <h6 class="stats-small__value count my-3"><?php echo $get_timur_count[0]->count; ?></h6>
              </div>
              <div class="stats-small__data">
                <span class="stats-small__percentage stats-small__percentage--increase">DATA</span>
              </div>
            </div>
            <canvas height="120" class="blog-overview-stats-small-5"></canvas>
          </div>
        </div>
      </div>
      </div>
      <div class="row">
        <div class="col-lg col-md-4 col-sm-12 mb-4">
          <div class="card">
            <div class="card-body">
              <button type="button" data-toggle="modal" data-target="#tambah-data" class="btn btn-info mb-3" class="glyphicon glyphicon-repeat">Tambah Status</button>
              <h5 class="card-title">Tambah Status Perangkat</h5>
              <p class="card-text">Hanya untuk privilege Admin</p>
            </div>
          </div>
        </div>
        <div class="col-sm-8">
          <div class="card mb-4">
            <div class="card-body">
              <h5 class="card-title">Status Perangkat</h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                   <table id="example5" class="table table-bordered table-striped">
              <thead>
                <tr class="text-black">
                  <th style="text-align: center;">No</th>
                  <th style="text-align: center;">ID Status</th>
                  <th style="text-align: center;">Status Perangkat</th>
                  <th style="text-align: center;">Aksi</th>
                </tr>
              </thead>

              <tbody>
                <?php 
                $no=1;
                foreach ($dataStatus as $dataStatus)
                  : ?>
                <tr>
                  <td style="text-align: center;"><?php echo $no++; ?></td>
                  <td style="text-align: center;"><?php echo $dataStatus -> id_stats; ?></td>
                  <td style="text-align: center;"><?php echo $dataStatus -> status; ?></td>
                   <td style="text-align: center;">
                        <a class="btn btn-warning btn-sm" href="<?php echo base_url() ?>admin/status_perangkat/edit_status/<?php echo $dataStatus->id_stats ?>">Edit</a>
                          <a class="btn btn-danger btn-sm" href="<?php echo base_url(); ?>admin/status_perangkat/hapus_status/<?php echo $dataStatus->id_stats ?>" onclick="return confirm('Yakin ingin menghapus?')" >Delete</a>
                        </td>
                    <?php endforeach ?>
                  </tbody>
                </table>
            </div>
          </div>
        </div>


        <!-- Modal Tambah -->
    <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="tambah-data" class="modal fade">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Tambah Status Perangkat</h4>
          </div>
          <form class="form-horizontal" action="<?php echo base_url('admin/status_perangkat/tambah_aksi')?>" method="post" enctype="multipart/form-data" role="form">
            <div class="modal-body">
              <div class="form-group">
                <label class="col-lg-8 col-sm-8 control-label" for="username" style="color: #0f3975">Status Perangkat</label>
                <div class="col-lg-12">
                  <input type="text" class="form-control" name="status" placeholder="Masukan Status Perangkat" required>
                </div>
              </div>

  </div>
  <div class="modal-footer">
    <button class="btn btn-info" type="submit"> Simpan&nbsp;</button>
    <button type="button" class="btn btn-danger" data-dismiss="modal"> Batal</button>
  </div>
  </form>
  </div>
  </div>
  </div>
  </div>
  <!-- END Modal Tambah -->