<!-- Modal Tambah Pengguna-->
<div class="modal fade" id="add_pengguna" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Data Pengguna</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form class="add_edit_peng" action="<?= base_url('penggunacontroller/add') ?>" method="POST">
                <div class="modal-body">
                    <div class="mb-3 row">
                        <label for="username" class="col-md-3 col-form-label">Username</label>
                        <div class="col-md-9">
                            <input class="form-control" type="text" id="username" name="username" placeholder="Masukan username" />
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="password" class="col-md-3 col-form-label">Password</label>
                        <div class="col-md-9">
                            <input class="form-control" type="password" id="password" name="password" placeholder="Masukan password" />
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="passconf" class="col-md-3 col-form-label">Ulangi Password</label>
                        <div class="col-md-9">
                            <input class="form-control" type="password" id="passconf" name="passconf" placeholder="Ulangi password" />
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="level" class="col-md-3 col-form-label">level</label>
                        <div class="col-md-9">
                            <select id="level" name="level" class="form-select">
                                <option value="">-Pilih level-</option>
                                <option value="Admin">Admin</option>
                                <option value="Petugas">Petugas</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nama_pengguna" class="col-md-3 col-form-label">Nama</label>
                        <div class="col-md-9">
                            <input class="form-control" type="text" id="nama_pengguna" name="nama_pengguna" placeholder="Nama lengkap" />
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
<!-- End Modal -->