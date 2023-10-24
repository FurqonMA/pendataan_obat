<div class="content-wrapper">
    <section class="content">
        <?php foreach($Jenis_obat as $jobt) { ?>
            <form action="<?= base_url().'Jenis_obat/update'?>" method="POST">
                <div class="form-group">
                    <label>Nama Jenis Obat</label>
                    <input type="hidden" name="id_jenis_obat" class="form-control" value="<?= $jobt->id_jenis_obat ?>">
                    <input type="text" name="nama_jenis_obat" class="form-control" value="<?= $jobt->nama_jenis_obat ?>">
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        <?php } ?>
    </section>
</div>