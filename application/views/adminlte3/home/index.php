        <!-- Page Header -->
        <div class="page-header row no-gutters py-4">
          <div class="col-12 col-sm-12 text-center text-sm-left mb-0">
            <span class="text-uppercase page-subtitle"> Home</span>
            <h1 class="page-title">DATA TELECENTER KOTA PEKALONGAN TAHUN 2019</h1>
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
          <div class="col-lg col-md-4 col-sm-12 mb-4">
            <div class="stats-small stats-small--1 card card-small">
              <div class="card-body p-0 d-flex">
                <div class="d-flex flex-column m-auto">
                  <div class="stats-small__data text-center">
                    <span class="stats-small__label text-uppercase">Data Pekalongan</span>
                    <h6 class="stats-small__value count my-3"><?php echo $get_all_count[0]->count; ?></h6>
                  </div>
                  <div class="stats-small__data">
                    <span class="stats-small__percentage stats-small__percentage--increase">DATA</span>
                  </div>
                </div>
                <canvas height="100" class="blog-overview-stats-small-5"></canvas>
              </div>
            </div>
          </div>
        </div> 
        <!-- graph -->


        <div class="row">
         <div class="col-lg-4">
          <div class="card mb-4">
            <div class="card-body">
              <h5 class="card-title">Data Graph</h5>
              <p class="card-text">Grafik Data yang telah masuk pada sistem.</p>
              <body>
                <div id="piechart" style="width: 300px; height: 230px;" class="d-flex justify-content-center"></div>
              </body>
            </div>
          </div>

          

        </div>
        <div class="col-lg-8">
          <div class="card mb-4">
            <div class="card-body">
              <h5 class="card-title">Maps</h5>
              <p class="card-text">Lokasi Telecenter Kota Pekalongan</p>
              
              <!-- <?php echo $map['js'];?> -->
              <body>
                <!-- <?php echo $map['html'];?> -->
                <div id="googleMap" style="width:100%;height:380px;"></div>
              </body>
            </div>
          </div>
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
