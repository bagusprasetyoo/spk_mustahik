<!-- Modal Hapus Pengguna-->
<div class="modal fade" id="logout" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content">
            <form action="<?= base_url('auth/logout') ?>" method="POST">
                <div class="modal-body">
                    <h5 class="modal-title"><span class="badge badge-center bg-label-danger"><span class="bx bx-error"></span></span>
                        Apakah anda yakin ingin melakukan logout?
                    </h5>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Tidak</button>
                    <button type="submit" class="btn btn-danger">Iya</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End Modal -->