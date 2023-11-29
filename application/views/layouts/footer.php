<!-- Footer -->
<footer class="content-footer footer bg-footer-theme">
    <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
        <div class="mb-2 mb-md-0">
            ©
            <script>
                document.write(new Date().getFullYear());
            </script>
            , made with ❤️
        </div>
        <div class="d-none d-lg-inline-block">
            <a href="https://baznas.go.id/" class="footer-link me-4" target="_blank">baznas.go.id</a>
        </div>
    </div>
</footer>
<!-- / Footer -->

<div class="content-backdrop fade"></div>
</div>
<!-- Content wrapper -->
</div>
<!-- / Layout page -->
</div>

<!-- Overlay -->
<div class="layout-overlay layout-menu-toggle"></div>
</div>
<!-- / Layout wrapper -->

<div class="buy-now">
    <a href="#uptotop" class="btn btn-icon btn-outline-success btn-buy-now"><span class="bx bx-chevron-up"></span></a>
</div>

<?php $this->load->view('layouts/modal_logout'); ?>

<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="<?= base_url(); ?>/assets/vendor/libs/jquery/jquery.js"></script>
<script src="<?= base_url(); ?>/assets/vendor/libs/popper/popper.js"></script>
<script src="<?= base_url(); ?>/assets/vendor/js/bootstrap.js"></script>
<script src="<?= base_url(); ?>/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="<?= base_url(); ?>/assets/vendor/js/menu.js"></script>
<!-- endbuild -->

<!-- Vendors JS -->
<script src="<?= base_url(); ?>/assets/vendor/libs/apex-charts/apexcharts.js"></script>
<!-- Main JS -->
<script src="<?= base_url(); ?>/assets/js/main.js"></script>
<!-- DataTables JS -->
<script src="<?= base_url(); ?>/assets/vendor/libs/datatables/datatables.min.js"></script>
<!-- Page JS -->
<script src="<?= base_url(); ?>/assets/js/dashboards-analytics.js"></script>
<!-- JQuery Validation JS -->
<script src="<?= base_url(); ?>/assets/vendor/libs/jquery-validation/jquery.validate.min.js"></script>
<script src="<?= base_url(); ?>/assets/vendor/libs/jquery-validation/additional-methods.min.js"></script>
<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>

<!-- Custom Script -->

<!-- Script untuk memilih desa otomatis berdasarkan kecamatan -->
<script>
    $(document).ready(function() {
        $('#id_kecamatan').change(function() {
            var id_kecamatan = $(this).val();

            // Mengirimkan permintaan AJAX ke server untuk mendapatkan data desa berdasarkan kecamatan
            $.ajax({
                url: '<?= base_url('wilayahcontroller/get_desa_by_kecamatan'); ?>',
                type: 'post',
                data: {
                    id_kecamatan: id_kecamatan
                },
                dataType: 'json',
                success: function(response) {
                    // Mengosongkan dan menambahkan opsi desa berdasarkan respons dari server
                    $('#id_desa').empty().append('<option value="">- Pilih Desa -</option>');
                    $.each(response, function(index, data) {
                        $('#id_desa').append('<option value="' + data.id_desa + '">' + data.nama_desa + '</option>');
                    });

                    // Mengaktifkan dropdown desa setelah mendapatkan data
                    $('#id_desa').prop('disabled', false);
                }
            });
        });
    });
</script>

<script>
    $(document).ready(function() {
        // Menggunakan kelas CSS untuk mengaitkan perubahan pada setiap dropdown kecamatan
        $('.id_kecamatan').change(function() {
            var id_kecamatan = $(this).val();
            var id_desa_element = $(this).closest('.add_edit_calonmustahik').find('.id_desa');

            $.ajax({
                url: '<?= base_url('wilayahcontroller/get_desa_by_kecamatan'); ?>',
                type: 'post',
                data: {
                    id_kecamatan: id_kecamatan
                },
                dataType: 'json',
                success: function(response) {
                    id_desa_element.empty().append('<option value="">- Pilih Desa -</option>');
                    $.each(response, function(index, data) {
                        id_desa_element.append('<option value="' + data.id_desa + '">' + data.nama_desa + '</option>');
                    });
                    id_desa_element.prop('disabled', false);
                }
            });
        });
    });
</script>

<!-- Script Datatable -->
<script>
    $(document).ready(function() {
        $('.dtTable').DataTable({
            "lengthChange": true,
            "autoWidth": true,
            "initComplete": function(settings, json) {
                $(".dtTable").wrap("<div style='overflow:auto; width:100%;position:relative;'></div>");
            },
            "fixedColumns": {
                rightColumns: 1,
            },
        });
    })
</script>

<?php $this->load->view('layouts/script'); ?>

</body>

</html>