<div class="content-wrapper">
        <section class="content-header">
            <h1>
                DATA OBAT
            </h1>
            <?php if ($this->session->flashdata('success_message')): ?>
              <div class="alert alert-success" role="alert" style="margin-top: 10px;">
              <?php echo $this->session->flashdata('success_message'); ?>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fa fa-close" style="color: black;"></i></span>
                </button>
              </div>
            <?php endif; ?>
            <?php if ($this->session->flashdata('update_message')): ?>
              <div class="alert alert-warning" role="alert" style="margin-top: 10px;">
              <?php echo $this->session->flashdata('update_message'); ?>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fa fa-close" style="color: black;"></i></span>
                </button>
              </div>
            <?php endif; ?>
            <?php if ($this->session->flashdata('delete_message')): ?>
              <div class="alert alert-danger" role="alert" style="margin-top: 10px;">
              <?php echo $this->session->flashdata('delete_message'); ?>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fa fa-close" style="color: black;"></i></span>
                </button>
              </div>
            <?php endif; ?>
            <?php if ($this->session->flashdata('emptytable_message')): ?>
              <div class="alert alert-danger" role="alert" style="margin-top: 10px;">
              <?php echo $this->session->flashdata('emptytable_message'); ?>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fa fa-close" style="color: black;"></i></span>
                </button>
              </div>
            <?php endif; ?>
        </section>
        <section class="content">
            <div class="container-fluid" style="margin-top: 20px;">               
            <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i>&nbsp;&nbsp;Tambah Obat</button>
            <?php echo anchor('Obat/hapus_all/', '<button class="btn btn-danger" onclick="return confirm(\'Apakah Anda yakin ingin menghapus semua data?\');"><i class="fa fa-trash"></i>&nbsp;&nbsp;Hapus Semua Data</button>') ?>
                <div class="row" style="margin-top: 10px;">
                    <div class="col-lg-12">
                        <div class="box">
                            <div class="box-body">
                                <table class="table table-bordered">
                                  <tr>
                                    <th>NO</th>
                                    <th>JENIS OBAT</th>
                                    <th>NAMA OBAT</th>
                                    <th>SATUAN</th>
                                    <th>HARGA</th>
                                    <th>STOK</th>
                                    <th>TANGGAL EXPIRED</th>  
                                    <th colspan="2">AKSI</th>
                                  </tr>
                                  <?php 
                                  $no=1;
                                  foreach($Obat as $obt) :
                                  ?>
                                  <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $obt->nama_jenis_obat ?></td>
                                    <td><?php echo $obt->nama_obat ?></td>
                                    <td><?php echo $obt->satuan ?></td>
                                    <td><?php echo $obt->harga ?></td>
                                    <td><?php echo $obt->stok ?></td>
                                    <td><?php echo $obt->tanggal_expired ?></td>
                                    <td class="text-right" onclick="javascript: return confirm('Apakah Anda yakin ingin menghapus ini?')"><?php echo anchor('Obat/hapus/'. $obt->id_obat, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>Hapus</div>') ?></td>
                                    <td><?php echo anchor('Obat/edit/'. $obt->id_obat,'<div class="btn btn-warning btn-sm"><i class="fa fa-edit"></i>Edit</div>')?></td>                                      
                                  </tr>
                                  <?php endforeach; ?>
                                </table>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<!-- Modal Tambah -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title text-center" id="exampleModalLabel">Form Tambah Obat</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
        </div>
      <div class="modal-body">
        <form action="<?php echo base_url() ?>Obat/tambah_data" method="POST">
        <div class="form-group">
                <label>Jenis Obat</label>
                <select name="id_jenis_obat" class="form-control">
                    <?php foreach($Jenis as $j) : ?>
                    <option value="<?= $j->id_jenis_obat ?>"><?= $j->nama_jenis_obat?></option>
                <?php endforeach; ?>
                </select>
             </div>
             <div class="form-group">
                <label>Nama Obat</label>
                <input type="text" name="nama_obat" class="form-control">
             </div>
             <div class="form-group">
                <label>Satuan</label>
                <input type="text" name="satuan" class="form-control">
             </div>
             <div class="form-group">
                <label>Harga</label>
                <input type="text" name="harga" class="form-control">
             </div>
             <div class="form-group">
                <label>Stok</label>
                <input type="text" name="stok" class="form-control">
             </div>
             <div class="form-group">
                <label>Tanggal Expired</label>
                <input type="date" name="tanggal_expired" class="form-control">
             </div>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Simpan</button>                       
        </form>
      </div>
  </div>
</div>
</div>
</div>
