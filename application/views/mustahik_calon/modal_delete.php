<!-- Modal Hapus Calon Mustahik-->
<?php foreach ($all_mustahik as $dt_mustahik) { ?>
    <div class="modal fade" id="delete_calon_mustahik<?= $dt_mustahik->id ?>" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
            <div class="modal-content">
                <form action="<?= base_url('mustahikcaloncontroller/delete') ?>" method="POST">
                    <div class="modal-body">
                        <h5 class="modal-title"><span class="badge badge-center bg-label-danger"><span class="bx bx-error"></span></span>
                            Anda yakin ingin menghapus data Mustahik <strong><?= $dt_mustahik->nik ?> - <?= $dt_mustahik->nama ?></strong></strong>?
                        </h5>

                        <input type="hidden" name="id" value="<?= $dt_mustahik->id; ?>" /> <!-- parameter id yang disembunyikan -->
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