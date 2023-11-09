<!-- Modal Edit Pengguna-->
<?php foreach ($all_pengguna as $dt_pengguna) { ?>
    <div class="modal fade" id="edit_pengguna<?= $dt_pengguna->id_pengguna ?>" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Data Pengguna</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form class="add_edit_peng" action="<?= base_url('penggunacontroller/edit') ?>" method="POST">
                    <div class="modal-body">

                        <input type="hidden" name="id" value="<?= $dt_pengguna->id_pengguna; ?>" />

                        <div class="mb-3 row">
                            <label for="username" class="col-md-3 col-form-label">Username</label>
                            <div class="col-md-9">
                                <input class="form-control" type="text" placeholder="Masukan username" value="<?= $dt_pengguna->username; ?>" readonly />
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="level" class="col-md-3 col-form-label">level</label>
                            <div class="col-md-9">
                                <select id="level" name="level" class="form-select">
                                    <option value="" <?= $dt_pengguna->level == "" ? "selected" : null; ?>>-Pilih level-</option>
                                    <option value="Admin" <?= $dt_pengguna->level == "Admin" ? "selected" : null; ?>>Admin</option>
                                    <option value="Petugas" <?= $dt_pengguna->level == "Petugas" ? "selected" : null; ?>>Petugas</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="nama_pengguna" class="col-md-3 col-form-label">Nama</label>
                            <div class="col-md-9">
                                <input class="form-control" type="text" id="nama_pengguna" name="nama_pengguna" placeholder="Nama lengkap" value="<?= $dt_pengguna->nama_pengguna; ?>" />
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal" onclick="location.reload()">Batal</button>
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php } ?>
<!-- End Modal -->