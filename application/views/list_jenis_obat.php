<div class="content-wrapper">
        <section class="content-header">
            <h1>
                DATA JENIS OBAT
            </h1>
        </section>
        <section class="content">
            <div class="container-fluid" style="margin-top: 20px;">               
            <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i>&nbsp;&nbsp;Tambah Jenis Obat</button>
                <div class="row" style="margin-top: 10px;">
                    <div class="col-lg-12">
                        <div class="box">
                            <div class="box-body">
                                <table class="table table-bordered">
                                  <tr>
                                    <th>NO</th>
                                    <th>NAMA JENIS OBAT</th>
                                    <th colspan="2">AKSI</th>
                                  </tr>
                                <?php 
                                $no=1;
                                foreach ($Jenis_obat as $jobt) : ?>
                                  <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $jobt->nama_jenis_obat ?></td>
                                    <td class="text-right" onclick="javascript: return confirm('Apakah Anda yakin ingin menghapus ini?')"><?php echo anchor('Jenis_obat/hapus/'.$jobt->id_jenis_obat, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>Hapus</div>') ?></td>
                                    <td><?php echo anchor('Jenis_obat/edit/'.$jobt->id_jenis_obat,'<div class="btn btn-warning btn-sm"><i class="fa fa-edit"></i>Edit</div>')?></td>                                      
                                  </tr>

                                  <?php endforeach; ?>
                                </table>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title text-center" id="exampleModalLabel">Form Tambah Jenis Obat</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
        </div>
      <div class="modal-body">
        <form action="<?php echo base_url().'Jenis_obat/tambah_data'; ?>" method="POST">
             <div class="form-group">
                <label>Nama Jenis Obat</label>
                <input type="text" name="nama_jenis_obat" class="form-control">
             </div>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan</button>                       
        </form>
      </div>
  </div>
</div>
</div>
</div>
