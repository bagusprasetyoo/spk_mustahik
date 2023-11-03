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
<!-- Script Datatable -->
<script>
    $(document).ready(function() {
        $('.dtTable').DataTable({
            "lengthChange": true,
            "autoWidth": true,
            "initComplete": function(settings, json) {
                $("#dtTable").wrap("<div style='overflow:auto; width:100%;position:relative;'></div>");
            },
        });
    })
</script>

<script>
    $(function() {
        // custom rules
        jQuery.validator.addMethod("letter", function(value, element) {
            return this.optional(element) || /^[A-Za-z.',\s]+$/.test(value);
        }, "Inputan harus berupa huruf!");

        // variable untuk rule yg sama
        var req = "Data harus diisi!"
        var element = {
            errorElement: 'span',
            errorPlacement: function(error, element) {
                error.addClass('invalid-feedback');
                element.closest('.col-md-9').append(error);
            },
            highlight: function(element, errorClass, validClass) {
                $(element).addClass('is-invalid');
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).removeClass('is-invalid');
            }
        };

        $('.add_kec').validate({
            rules: {
                kec: {
                    required: true,
                    letter: true
                }
            },
            messages: {
                kec: {
                    required: req
                }
            },
            ...element
        });

        $('.add_ds').validate({
            rules: {
                id_kec: required,
                ds: {
                    required: true,
                    letter: true
                }
            },
            messages: {
                id_kec: req,
                ds: {
                    required: req
                }
            },
            ...element
        });
    });
</script>


</body>

</html>