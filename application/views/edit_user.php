<div class="content-wrapper">
    <section class="content">
            <?php foreach($User as $user) { ?>
            <form action="<?php echo base_url()?>User/update" method="POST">
                <div class="form-group">
                    <label>Username</label>
                    <input type="hidden" name="id_user" class="form-control" value="<?= $user->id_user ?>">
                    <input type="text" name="username" class="form-control" value="<?= $user->username ?>">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="text" name="password" class="form-control" value="<?= $user->password ?>">
                </div>
                <div class="form-group">
                    <label>Fullname</label>
                    <input type="text" name="fullname" class="form-control" value="<?= $user->fullname ?>">
                </div>
                <div class="form-group">
                <label>Is Active</label>
                <select name="is_active" class="form-control">
                    <option value="aktif" <?= ($user->is_active == 'aktif') ? 'selected' : '' ?>>Aktif</option>
                    <option value="tidak aktif" <?= ($user->is_active == 'tidak aktif') ? 'selected' : '' ?>>Tidak Aktif</option>
                </select>

             </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
            <?php } ?>
    </section>
</div>