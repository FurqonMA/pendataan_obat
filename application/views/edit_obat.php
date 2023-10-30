<div class="content-wrapper">
    <section class="content">
            <?php foreach($Obat as $obt) { ?>
            <form action="<?php echo base_url()?>Obat/update" method="POST">
            <div class="form-group">
                <label>Jenis Obat</label>
                <select name="id_jenis_obat" class="form-control">
                    <?php foreach($Jenis as $jns) { ?>
                        <option value="<?= $jns->id_jenis_obat ?>" <?= ($jns->id_jenis_obat == $obt->id_jenis_obat) ? 'selected' : '' ?>>
                <?= $jns->nama_jenis_obat ?>
            </option>
                    <?php } ?>
                </select>
             </div>
                <div class="form-group">
                    <label>Nama Obat</label>
                    <input type="hidden" name="id_obat" class="form-control" value="<?= $obt->id_obat ?>">
                    <input type="text" name="nama_obat" class="form-control" value="<?= $obt->nama_obat ?>">
                </div>
                <div class="form-group">
                    <label>Satuan</label>
                    <input type="text" name="satuan" class="form-control" value="<?= $obt->satuan ?>">
                </div>
                <div class="form-group">
                    <label>Harga</label>
                    <input type="text" name="harga" class="form-control" value="<?= $obt->harga ?>">
                </div>
                <div class="form-group">
                    <label>Stok</label>
                    <input type="text" name="stok" class="form-control" value="<?= $obt->stok ?>">
                </div>
                <div class="form-group">
                    <label>Tanggal Expired</label>
                    <input type="date" name="tanggal_expired" class="form-control" value="<?= $obt->tanggal_expired ?>">
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
            <?php } ?>
    </section>
</div>