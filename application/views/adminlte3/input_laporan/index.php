    <!-- Page Header -->
    <div class="page-header row no-gutters py-4">
      <div class="col-12 col-sm-12 text-center text-sm-left mb-0">
        <span class="text-uppercase page-subtitle"> Input Laporan</span>
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


    <!-- form input -->
    <div class="row">
      <div class="col-lg-6">
        <div class="card mb-4">
          <div class="card-body">
            <h5 class="card-title">Form Survey</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <button type="button" data-toggle="modal" data-target="#tambah-data" class="btn btn-primary mb-3" class="glyphicon glyphicon-repeat">Tambah Keterangan Perangkat</button>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="card mb-4">
          <div class="card-body">
            <h5 class="card-title">Upload Geolocation</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <button type="button" data-toggle="modal" data-target="#tambah-data2" class="btn btn-success mb-3" class="glyphicon glyphicon-repeat">Tambah Keterangan Perangkat</button>
          </div>
        </div>
      </div>

      <!-- Modal 1 -->
      <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="tambah-data" class="modal fade">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Form Survey Telecenter</h4>
            </div>
            <form class="form-horizontal" action="<?php echo base_url('admin/input_laporan/tambah_aksi')?>" method="post" enctype="multipart/form-data" role="form">
              <div class="modal-body">
               <div class="form-group">
                <label for="exampleFormControlSelect1">Kecamatan</label>
                <select class="form-control" name="id_kecamatan">
                  <?php foreach($dropdown as $each){ ?>
                    <option value="<?php echo $each->id_kecamatan; ?>"><?php echo $each->kecamatan; ?></option>';
                  <?php } ?>
                </select>
              </div>
              <div class="form-group">
                <label for="exampleFormControlInput1">Nama Telecenter</label>
                <input type="text" class="form-control" name="nama_telecenter" placeholder="Masukan Nama Telecenter" required>
              </div>
              <div class="form-group">
                <label for="exampleFormControlInput1">Alamat Telecenter</label>
                <input type="text" name="alamat_telecenter" class="form-control" id="exampleFormControlInput1" placeholder="Alamat Telecenter">
              </div>
              <div class="form-group">
                <label for="exampleFormControlInput1" class="text-success">Nama Pengelola</label>
                <input type="text" class="form-control" name="nama_pengelola" placeholder="Masukan Nama Pengelola" required>
              </div>
              <div class="form-group">
                <label for="exampleFormControlInput1" class="text-success">Alamat Pengelola</label>
                <input type="text" name="alamat_pengelola" class="form-control" id="exampleFormControlInput1" placeholder="Alamat Pengelola">
              </div>
              <div class="form-group">
                <label for="exampleFormControlInput1">Jumlah PC</label>
                <input type="number" name="pc_jumlah" class="form-control" id="exampleFormControlInput1" placeholder="Jumlah PC">
              </div>
              <div class="form-group">
                <label for="exampleFormControlSelect1">PC Status</label>
                <select class="form-control" name="pc_status">
                  <?php foreach($dropdown2 as $each){ ?>
                    <option value="<?php echo $each->status; ?>"><?php echo $each->status; ?></option>';
                  <?php } ?>
                </select>
              </div>
              <div class="form-group">
                <label for="exampleFormControlInput1">Jumlah Printer</label>
                <input type="number" name="printer_jumlah" class="form-control" id="exampleFormControlInput1" placeholder="Jumlah Printer">
              </div>
              <div class="form-group">
                <label for="exampleFormControlSelect1">Printer Status</label>
                <select class="form-control" name="printer_status">
                  <?php foreach($dropdown2 as $each){ ?>
                    <option value="<?php echo $each->status; ?>"><?php echo $each->status; ?></option>';
                  <?php } ?>
                </select>
              </div>
              <div class="form-group">
                <label for="exampleFormControlInput1">Jumlah Jaringan</label>
                <input type="number" name="jaringan_jumlah" class="form-control" id="exampleFormControlInput1" placeholder="Jumlah jaringan">
              </div>
              <div class="form-group">
                <label for="exampleFormControlSelect1">Jaringan Status</label>
                <select class="form-control" name="jaringan_status">
                  <?php foreach($dropdown2 as $each){ ?>
                    <option value="<?php echo $each->status; ?>"><?php echo $each->status; ?></option>';
                  <?php } ?>
                </select>
              </div>
              <div class="form-group">
                <label for="exampleFormControlInput1">Jenis Jaringan</label>
                <input type="text" name="jaringan_jenis" class="form-control" id="exampleFormControlInput1" placeholder="Jenis jaringan">
              </div>
              <div class="form-group">
                <label for="exampleFormControlInput1">Jumlah Listrik</label>
                <input type="text" name="listrik_jumlah" class="form-control" id="exampleFormControlInput1" placeholder="Listrik jumlah">
              </div>
              <div class="form-group">
                <label for="exampleFormControlSelect1">Status Listrik</label>
                <select class="form-control" name="listrik_status">
                  <?php foreach($dropdown2 as $each){ ?>
                    <option value="<?php echo $each->status; ?>"><?php echo $each->status; ?></option>';
                  <?php } ?>
                </select>
              </div> 
              <div class="form-group">
                <label for="exampleFormControlInput1">Jumlah Pengguna dalam 1 minggu</label>
                <input type="number" name="jumlah_pengguna" class="form-control" id="exampleFormControlInput1" placeholder="Jumlah Pengguna dalam 1 minggu / Orang">
              </div>
              <div class="form-group">
                <label for="exampleFormControlInput1">Posisi Peletakan Perangkat</label>
                <input type="text" name="posisi" class="form-control" id="exampleFormControlInput1" placeholder="Posisi Peletakan Perangkat">
              </div>
              <div class="form-group">
                <label for="exampleFormControlInput1">Lokasi</label>
                <input type="text" name="lokasi" class="form-control" id="exampleFormControlInput1" placeholder="Lokasi">
              </div>
              <div class="form-group">
                <label for="exampleFormControlSelect1">Keterangan</label>
                <select class="form-control" name="ket_1">
                  <?php foreach($dropdown3 as $each){ ?>
                    <option value="<?php echo $each->keterangan; ?>"><?php echo $each->keterangan; ?></option>';
                  <?php } ?>
                </select>
              </div>
              <div class="form-group">
                <label for="exampleFormControlInput1">Keterangan Tambahan</label>
                <textarea name="ket_2" class="form-control" id="exampleFormControlInput1" placeholder="Posisi Peletakan Perangkat"></textarea>
              </div>
              <div class="col-sm">
               <form>
                <div class="form-group">
                  <label for="exampleFormControlFile1">Foto PC</label>
                  <input type="file" name="foto" class="form-control-file" id="foto">
                </div>
              </form>
            </div>
            <br>
            <div>
              <div id="googleMap" style="width:100%;height:380px;"></div>
            </div>
            <br>
            <div class="form-group">
              <label for="exampleFormControlInput1">GPS</label>
              <!-- <input type="text" name="gps" class="form-control" id="exampleFormControlInput1" placeholder="Lokasi"> -->
              <div class="row">
                <div class="col">
                  <input type="number" name="latitude" class="form-control" placeholder="Latitude">
                </div>
              <div class="col">
                  <input type="number" name="longitude" class="form-control" placeholder="Longitude">
                </div>
              </div>
              <br>
              <!-- <?php echo $map['html'];?> -->
              <!-- <?php echo $map['js'];?> -->
            </div>

          <!--   <form>
              <div class="row">
                <div class="col">
                  <input type="number" name="gps" class="form-control" placeholder="Latitude">
                </div>
                <div class="col">
                  <input type="number" name="gps" class="form-control" placeholder="Longitude">
                </div>
              </div>
            </form> -->
            <br>
            <div class="modal-footer">
              <button class="btn btn-info" type="submit"> Simpan&nbsp;</button>
              <button type="button" class="btn btn-danger" data-dismiss="modal"> Batal</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- END Modal Tambah -->

<!-- Modal 2 -->
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="tambah-data2" class="modal fade">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Upload Foto</h4>
      </div>
      <form class="form-horizontal" action="<?php echo base_url('admin/input_laporan/update')?>" method="post" enctype="multipart/form-data" role="form">
        <div class="modal-body">
          <!-- foto -->
          <div class="container">
            <div class="row">
              <div class="col-sm">
               <form>
                <div class="form-group">
                  <label for="exampleFormControlFile1">Foto PC</label>
                  <input type="file" name="foto" class="form-control-file" id="foto">
                </div>
              </form>
            </div>
            <div class="col-sm">
              <form>
                <div class="form-group">
                  <label for="exampleFormControlFile1">Foto Printer</label>
                  <input type="file" name="foto2" class="form-control-file" id="foto2">
                </div>
              </form>
            </div>
            <div class="col-sm">
              <form>
                <div class="form-group">
                  <label for="exampleFormControlFile1">Foto Jaringan</label>
                  <input type="file" name="foto3" class="form-control-file" id="foto3">
                </div>
              </form>
            </div>
          </div>
        </div>
        <hr> 
        <!-- end foto -->

        <div class="form-group">
          <label for="exampleFormControlInput1">Geotaging</label>
          <input type="text" name="gps" class="form-control" id="exampleFormControlInput1" placeholder="Lokasi">
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
<!-- End Modal -->


<script src="http://maps.googleapis.com/maps/api/js"></script>
<script>

  function taruhMarker(peta, posisiTitik){
    // membuat Marker
    var marker = new google.maps.Marker({
      position: posisiTitik,
      map: peta
    });
  }
  
  function initialize() {
    var propertiPeta = {
      center:new google.maps.LatLng(-6.895863, 109.662573),
      zoom:14,
      mapTypeId:google.maps.MapTypeId.ROADMAP
    };

    var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);

  // even listner ketika peta diklik
  google.maps.event.addListener(peta, 'click', function(event) {
    taruhMarker(this, event.latLng);
  });

}


// event jendela di-load  
google.maps.event.addDomListener(window, 'load', initialize);


</script>

<script>
  var x = document.getElementById("demo");

  function getLocation() {
    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(showPosition);
    } else { 
      x.innerHTML = "Geolocation is not supported by this browser.";
    }
  }

  function showPosition(position) {
    x.innerHTML = "Latitude: " + position.coords.latitude + 
    "<br>Longitude: " + position.coords.longitude;
  }
</script>