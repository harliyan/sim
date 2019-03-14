  <!-- Page Header -->
  <div class="page-header row no-gutters py-4">
    <div class="col-12 col-sm-12 text-center text-sm-left mb-0">
      <span class="text-uppercase page-subtitle"> Report</span>
      <h1 class="page-title">REPORT KECAMATAN PEKALONGAN UTARA</h1>
    </div>
  </div>
  <!-- End Page Header -->


  <div class="row">
 
    <div class="col-lg-12" style="overflow-x: auto">
      <form>

        <!-- TABLE -->
        <table id="example2" class="table table-bordered table-striped" style="width:auto">
          <thead class="thead-dark">
            <tr class="text-black">
             <th style="text-align: center;">No</th>
                  <th style="text-align: center;">Nama Telecenter</th>
                  <th style="text-align: center;">Alamat Telecenter</th>
                  <th style="text-align: center;">Nama Pengelola</th>
                  <th style="text-align: center;">Alamat Tinggal</th>
                  <th style="text-align: center;">Jumlah PC</th>
                  <th style="text-align: center;">PC Status</th>
                  <th style="text-align: center;">Jumlah Printer</th>
                  <th style="text-align: center;">Status Printer</th>
                  <th style="text-align: center;">Jaringan Online Langganan</th>
                  <th style="text-align: center;">Jumlah Jaringan</th>
                  <th style="text-align: center;">Status Jaringan</th>
                  <th style="text-align: center;">Listrik</th>
                  <th style="text-align: center;">Jumlah pengguna/minggu</th>
                  <th style="text-align: center;">Posisi</th>
                  <th style="text-align: center;">Lokasi</th>
                  <th style="text-align: center;">Status Alat</th>
                  <th style="text-align: center;">Keterangan</th>

                </tr>
              </thead>

            <tbody>
                <?php 
                $no=1;
                foreach ($datakpu as $datakpu)
                  : ?>
                <tr>
                  <td style="text-align: center;"><?php echo $no++; ?></td>
                  <td style="text-align: center;"><?php echo $datakpu -> nama_telecenter; ?></td>
                  <td style="text-align: center;"><?php echo $datakpu -> alamat_telecenter; ?></td>
                  <td style="text-align: center;"><?php echo $datakpu -> nama_pengelola; ?></td>
                  <td style="text-align: center;"><?php echo $datakpu -> alamat_pengelola; ?></td>
                  <td style="text-align: center;"><?php echo $datakpu -> pc_jumlah; ?></td>
                  <td style="text-align: center;"><?php echo $datakpu -> pc_status; ?></td>
                  <td style="text-align: center;"><?php echo $datakpu -> printer_jumlah; ?></td>
                  <td style="text-align: center;"><?php echo $datakpu -> printer_status ; ?></td>
                  <td style="text-align: center;"><?php echo $datakpu -> jaringan_status; ?></td>
                  <td style="text-align: center;"><?php echo $datakpu -> jaringan_jumlah; ?></td>
                  <td style="text-align: center;"><?php echo $datakpu -> jaringan_jenis; ?></td>
                  <td style="text-align: center;"><?php echo $datakpu -> listrik_status; ?></td>
                  <td style="text-align: center;"><?php echo $datakpu -> jumlah_pengguna; ?></td>
                  <td style="text-align: center;"><?php echo $datakpu -> posisi; ?></td>
                  <td style="text-align: center;"><?php echo $datakpu -> lokasi; ?></td>
                   <td style="text-align: center;">
                     <?php if($datakpu->ket_1 == 'Baik')
                        {
                          echo '<div class="table-success">Baik</div>';
                        } 
                          if($datakpu->ket_1 == 'Kurang Baik')
                        {
                          echo '<div class="table-warning">Kurang Baik</div>';
                        }
                        else if ($datakpu->ket_1 == 'Tidak Baik'){
                          echo '<div class="table-danger">Tidak Baik</div>';
                        }
                        ?>

                  </td>
                  <td style="text-align: center;"><?php echo $datakpu -> ket_2; ?></td>
            <?php endforeach ?>
          </tbody>
        </table>
        <!-- END TABLE -->

      </form>
    </div>
  </div>

