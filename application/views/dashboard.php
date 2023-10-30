  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
      </h1>
    </section>

    <div class="contianer" style="margin-top: 20px;  margin-bottom: 50px;">
      <div class="row">
         <h4 style="margin-left: 33%; font-size: 2rem;">Selamat Datang <span style="font-weight: bold;"><?php echo $this->session->userdata('fullname'); ?></span></h4>
      </div>
    </div>
    <div class="container mt-5">
      <div class="row" style="margin-left: 10px;">
        <div class="col-lg-4">
          <div class="kotak" style="background-color: rgb(235, 79, 79); height: 120px; width: 240px; margin-top: 10px;">
              <h3 style="text-align: center; padding-top: 20px; color: white; font-weight: bold; font-size: 5rem;"><?= $dataAllObat; ?></h3>
              <p style="position: absolute; bottom: 0; left: 50px; color: white; font-size: 1.75rem;">JUMLAH TOTAL OBAT</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="kotak" style="background-color: rgb(235, 79, 79); height: 120px; width: 240px; margin-top: 10px;">
              <h3 style="text-align: center; padding-top: 20px; color: white; font-weight: bold; font-size: 5rem;"><?= $expired; ?></h3>
              <p style="position: absolute; bottom: 0; left: 50px; color: white; font-size: 1.75rem;">JUMLAH OBAT EXPIRED</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="kotak" style="background-color: rgb(235, 79, 79); height: 120px; width: 240px; margin-top: 10px;">
              <h3 style="text-align: center; padding-top: 20px; color: white; font-weight: bold; font-size: 5rem;"><?= $no_expired; ?></h3>
              <p style="position: absolute; bottom: 0; left: 35px; color: white; font-size: 1.55rem;">JUMLAH OBAT BELUM EXPIRED</p>
          </div>
        </div>
      </div>
      <div class="row" style="margin-left: 10px;">
        <div class="col-lg-4">
          <div class="kotak" style="background-color: rgb(79, 147, 235); height: 120px; width: 240px; margin-top: 10px;">
              <h3 style="text-align: center; padding-top: 20px; color: white; font-weight: bold; font-size: 5rem;"><?= $dataAllUser; ?></h3>
              <p style="position: absolute; bottom: 0; left: 60px; color: white; font-size: 1.75rem;">JUMLAH TOTAL USER</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="kotak" style="background-color: rgb(79, 147, 235); height: 120px; width: 240px; margin-top: 10px;">
              <h3 style="text-align: center; padding-top: 20px; color: white; font-weight: bold; font-size: 5rem;"><?= $aktif; ?></h3>
              <p style="position: absolute; bottom: 0; left: 60px; color: white; font-size: 1.75rem;">JUMLAH USER AKTIF</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="kotak" style="background-color: rgb(79, 147, 235); height: 120px; width: 240px; margin-top: 10px;">
              <h3 style="text-align: center; padding-top: 20px; color: white; font-weight: bold; font-size: 5rem;"><?= $tidak_aktif; ?></h3>
              <p style="position: absolute; bottom: 0; left: 40px; color: white; font-size: 1.55rem;">JUMLAH USER BELUM AKTIF</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="kotak" style="background-color: rgb(255, 172, 19); height: 120px; width: 240px; margin-top: 10px;">
              <h3 style="text-align: center; padding-top: 20px; color: rgb(255, 255, 255); font-weight: bold; font-size: 5rem;"><?= $dataAllJenis; ?></h3>
              <p style="position: absolute; bottom: 0; left: 55px; color: rgb(255, 255, 255); font-size: 1.75rem;">JUMLAH JENIS OBAT</p>
          </div>
        </div>
      </div>     
    </div>
      <section class="content-header" style="margin-top: 40px; margin-left: 37%; margin-bottom: -40px;">
          <h3>
              DATA STOK OBAT
          </h3>
      </section>
      <section class="content">
          <div class="container-fluid" style="margin-top: 20px;">               
              <div class="row" style="margin-top: 10px;">
                  <div class="col-lg-12">
                      <div class="box">
                          <div class="box-body">
                              <table class="table table-bordered">
                                <tr>
                                  <th>NO</th>
                                  <th>NAMA OBAT</th>
                                  <th>SATUAN</th>
                                  <th>HARGA</th>
                                  <th>STOK</th>
                                  <th>TANGGAL EXPIRED</th>  
                                </tr>
                                <?php 
                                $no=1;
                                foreach($Obat as $obt) :
                                ?>
                                <tr>
                                  <td><?php echo $no++ ?></td>
                                  <td><?php echo $obt->nama_obat ?></td>
                                  <td><?php echo $obt->satuan ?></td>
                                  <td><?php echo $obt->harga ?></td>
                                  <td><?php echo $obt->stok ?></td>
                                  <td><?php echo $obt->tanggal_expired ?></td>                               
                                </tr>
                                <?php endforeach; ?>
                              </table>
                            </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>


  </div>
</body>
</html>
