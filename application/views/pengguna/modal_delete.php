<!-- Modal Hapus Pengguna-->
<?php foreach ($all_pengguna as $dt_pengguna) { ?>
    <div class="modal fade" id="delete_pengguna<?= $dt_pengguna->id_pengguna ?>" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
            <div class="modal-content">
                <form action="<?= base_url('penggunacontroller/delete') ?>" method="POST">
                    <div class="modal-body">
                        <h5 class="modal-title"><span class="badge badge-center bg-label-danger"><span class="bx bx-error"></span></span>
                            Anda yakin ingin menghapus data Pengguna <strong><?= $dt_pengguna->username ?></strong></strong>?
                        </h5>

                        <input type="hidden" name="id" value="<?= $dt_pengguna->id_pengguna; ?>" /> <!-- parameter id yang disembunyikan -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal" onclick="location.reload()">Batal</button>
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php } ?>
<!-- End Modal -->