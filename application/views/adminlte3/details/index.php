
<!-- Page Header -->
<div class="page-header row no-gutters py-4">
  <div class="col-12 col-sm-12 text-center text-sm-left mb-0">


    <span class="text-uppercase page-subtitle"> DETAILS DATA</span>
    <h1 class="page-title">DETAILS DATA TELECENTER KOTA PEKALONGAN</h1>
  </div>
</div>
<!-- End Page Header -->


 <?php 
      foreach ($tb_telecenter as $data)
        : ?>

<div class="row">
  <div class="col-sm-12">
    <div class="card mb-12">
     <div class="card-body mb-12">
 <div class="row">
    <div class="col-sm-12">
     
      <label class="col-sm-3">ID Telecenter</label>
      <label class="col-sm-8">: <?php echo $data->id_telecenter ?> </label><br>
       <label class="col-sm-3">Kecamatan</label>
      <label class="col-sm-8">: <?php echo $data->id_kecamatan ?> </label><br>
      <label class="col-sm-3">Username</label>
      <label class="col-sm-8">: <?php echo $data->nama_telecenter ?> </label><br>
      <label class="col-sm-3">Alamat Telecenter</label>
      <label class="col-sm-8">: <?php echo $data->alamat_telecenter ?> </label><br>
      <label class="col-sm-3">Nama Pengelola</label>
      <label class="col-sm-8">: <?php echo $data->nama_pengelola ?> </label><br>
      <label class="col-sm-3">Alamat Pengelola</label>
      <label class="col-sm-8">: <?php echo $data->alamat_pengelola ?> </label><br>
      <label class="col-sm-3">Jumlah Komputer</label>
      <label class="col-sm-8">: <?php echo $data->pc_jumlah ?> </label><br>
      <label class="col-sm-3">Status Komputer</label>
      <label class="col-sm-8">: <?php echo $data->pc_status ?> </label><br>
      <label class="col-sm-3">Jumlah Printer</label>
      <label class="col-sm-8">: <?php echo $data->printer_jumlah ?> </label><br>
      <label class="col-sm-3">Status Printer</label>
      <label class="col-sm-8">: <?php echo $data->printer_status ?> </label><br>
      <label class="col-sm-3">Jumlah Jaringan</label>
      <label class="col-sm-8">: <?php echo $data->jaringan_jumlah ?> </label><br>
      <label class="col-sm-3">Status Jaringan</label>
      <label class="col-sm-8">: <?php echo $data->jaringan_status ?> </label><br>
      <label class="col-sm-3">Jenis Jaringan</label>
      <label class="col-sm-8">: <?php echo $data->jaringan_jenis ?> </label><br>
      <label class="col-sm-3">Jumlah Listrik</label>
      <label class="col-sm-8">: <?php echo $data->listrik_jumlah ?> </label><br>
      <label class="col-sm-3">Listrik Status</label>
      <label class="col-sm-8">: <?php echo $data->listrik_status ?> </label><br>
      <label class="col-sm-3">Jumlah Pengguna</label>
      <label class="col-sm-8">: <?php echo $data->jumlah_pengguna ?> </label><br>
      <label class="col-sm-3">Posisi</label>
      <label class="col-sm-8">: <?php echo $data->posisi ?> </label><br>
      <label class="col-sm-3">Lokasi</label>
      <label class="col-sm-8">: <?php echo $data->lokasi ?> </label><br>
      <label class="col-sm-3">Keterangan</label>
      <label class="col-sm-8">: <?php echo $data->ket_1 ?> </label><br>
      <label class="col-sm-3"></label>
      <label class="col-sm-8">: <?php echo $data->ket_2 ?> </label><br>
      <label class="col-sm-8"></label><br>
       <center><div id="googleMap" style="width:90%;height:380px;"></div></center>

    </div>
  </div>

      <!--   <div class="card-body mb-12">
          <div class="col-sm-7">
            <label class="col-sm-3">ID Telecenter</label>
            <label class="col-sm-5">: <?php echo $data->id_telecenter ?> </label><br>
            <label class="col-sm-3">Username</label>
            <label class="col-sm-5">: <?php echo $data->nama_telecenter ?> </label><br>
            <label class="col-sm-3">Jumlah PC</label>
            <label class="col-sm-5">: <?php echo $data->pc_jumlah ?> </label><br>
          </div>
          <div class="col-sm-7">
            <label class="col-sm-3">ID Telecenter</label>
            <label class="col-sm-5">: <?php echo $data->id_telecenter ?> </label><br>
        </div> -->
         
       <?php endforeach ?>
       <div class="float-right">
         <br>
         <a class="btn btn-danger" href="<?php echo base_url() ?>admin/all">Kembali</a>
       </div>
       </div>
     </div>
     <br>
     </div>
     </div>

       <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
      <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

          var data = google.visualization.arrayToDataTable([
            ['Task', 'Hours per Day'],
            ['Barat',     <?php echo $get_barat_count[0]->count; ?>],
            ['Utara',      <?php echo $get_utara_count[0]->count; ?>],
            ['Timur',  <?php echo $get_timur_count[0]->count; ?>],
            ['Selatan',    <?php echo $get_selatan_count[0]->count; ?>]
            ]);

          var options = {
            title: 'Data Graph'
          };

          var chart = new google.visualization.PieChart(document.getElementById('piechart'));

          chart.draw(data, options);
        }
      </script>

      <script src="http://maps.googleapis.com/maps/api/js"></script>

      <script>
        function initialize() {
          var propertiPeta = {
            center:new google.maps.LatLng(-6.895863, 109.662573),
            zoom:17,
            mapTypeId:google.maps.MapTypeId.ROADMAP
          };
          
          var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);
          
          var marker=new google.maps.Marker({
            position: new google.maps.LatLng(-6.895863, 109.662573),
            map: peta,
            animation: google.maps.Animation.BOUNCE
          });

          

        }

      // event jendela di-load  
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>



