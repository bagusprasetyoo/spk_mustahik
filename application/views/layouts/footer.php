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
<!-- Script Datatable -->
<script>
    $(document).ready(function() {
        $('.dtTable').DataTable({
            "lengthChange": true,
            "autoWidth": true,
            "initComplete": function(settings, json) {
                $(".dtTable").wrap("<div style='overflow:auto; width:100%;position:relative;'></div>");
            },
        });
    })
</script>

<script>
    $(function() {
        // custom rules
        jQuery.validator.addMethod("letter", function(value, element) {
            return this.optional(element) || /^[A-Za-z.',-\s]+$/.test(value);
        }, "Inputan harus berupa huruf!");

        jQuery.validator.addMethod("alphanum", function(value, element) {
            return this.optional(element) || /^[a-z][a-z0-9\._]*$/.test(value);
        }, "Inputan harus berupa dan diawali huruf kecil, angka, underscore (_), atau titik (.) ");
        /*  ^ beginning of line
            [a-z] character class for lower values, to match the first letter
            [-a-z0-9\._] character class for the rest of the required value
            * zero or more for the last class
            $ end of String 
            https://stackoverflow.com/questions/1744377/regex-for-a-z-0-9-and*/

        // variable untuk rule yg sama
        var req = "Data harus diisi!"
        var chose = "Data harus dipilih!"
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

        // VALIDASI UNTUK DATA WILAYAH
        // sintaks form add & edit dipisah
        $('.add_kec').validate({
            rules: {
                nama_kec: {
                    required: true,
                    letter: true
                }
            },
            messages: {
                nama_kec: {
                    required: req
                }
            },
            ...element
        });
        $('.edit_kec').each(function() {
            var form = $(this);
            form.validate({
                rules: {
                    nama_kec: {
                        required: true,
                        letter: true
                    }
                },
                messages: {
                    nama_kec: {
                        required: req
                    }
                },
                ...element
            })
        });

        // contoh sintaks yg digunakan untuk 2 form sekaligus
        $('.add_edit_ds').each(function() {
            var form = $(this);
            form.validate({
                rules: {
                    id_kec: {
                        required: true,
                    },
                    nama_ds: {
                        required: true,
                        letter: true
                    }
                },
                messages: {
                    id_kec: req,
                    nama_ds: {
                        required: req
                    }
                },
                ...element
            })
        });

        // VALIDASI UNTUK DATA PENGGUNA
        $('.add_edit_peng').each(function() {
            var form = $(this);
            form.validate({
                rules: {
                    username: {
                        required: true,
                        alphanum: true,
                        minlength: 3,
                        remote: {
                            url: "<?= base_url() ?>/penggunacontroller/check_username",
                            type: "post",
                            data: {
                                username: function() {
                                    return $("#username").val();
                                }
                            }
                        }
                    },
                    password: {
                        required: true,
                        minlength: 5
                    },
                    passconf: {
                        required: true,
                        equalTo: "#password"
                    },
                    level: {
                        required: true,
                    },
                    nama_pengguna: {
                        required: true,
                        letter: true
                    }
                },
                messages: {
                    username: {
                        required: req,
                        minlength: "username minimal memiliki 3 karakter",
                        remote: "Username sudah digunakan, gunakan username lainnya"
                    },
                    password: {
                        required: req,
                        minlength: "Password minimal 5 karakter"
                    },
                    passconf: {
                        required: req,
                        equalTo: "Password tidak cocok"
                    },
                    level: {
                        required: chose,
                    },
                    nama_pengguna: {
                        required: req,
                    }
                },
                ...element
            })
        });
    });
</script>


</body>

</html>