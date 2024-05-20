<script src="{{ asset('theme/vendor/libs/jquery/jquery.js') }}"></script>
<script src="{{ asset('theme/vendor/libs/popper/popper.js') }}"></script>
<script src="{{ asset('theme/vendor/js/bootstrap.js') }}"></script>
<script src="{{ asset('theme/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('theme/vendor/libs/node-waves/node-waves.js') }}"></script>

<script src="{{ asset('theme/vendor/libs/hammer/hammer.js') }}"></script>
<script src="{{ asset('theme/vendor/libs/i18n/i18n.js') }}"></script>
<script src="{{ asset('theme/vendor/libs/typeahead-js/typeahead.js') }}"></script>

<script src="{{ asset('theme/vendor/js/menu.js') }}"></script>
<!-- endbuild -->

<!-- Vendors JS -->
<script src="{{ asset('theme/vendor/libs/apex-charts/apexcharts.js') }}"></script>
<script src="{{ asset('theme/vendor/libs/chartjs/chartjs.js') }}"></script>
<script src="{{ asset('theme/vendor/libs/swiper/swiper.js') }}"></script>
<script src="{{ asset('theme/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>
<script src="{{ asset('theme/vendor/libs/select2/select2.js') }}"></script>
<script src="{{ asset('theme/vendor/libs/formvalidation/dist/js/FormValidation.min.js') }}"></script>
<script src="{{ asset('theme/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js') }}"></script>
<script src="{{ asset('theme/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js') }}"></script>
<script src="{{ asset('theme/vendor/libs/cleavejs/cleave.js') }}"></script>
<script src="{{ asset('theme/vendor/libs/cleavejs/cleave-phone.js') }}"></script>
<script src="{{ asset('theme/vendor/libs/toastr/toastr.js') }}"></script>
<script src="{{ asset('theme/vendor/libs/sweetalert2/sweetalert2.js') }}"></script>

<!-- Main JS -->
<script src="{{ asset('theme/js/main.js') }}"></script>
<!-- Page JS -->

<script>
    $(function() {
        $(".sa-confirm").click(function(event) {
            event.preventDefault();
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.value === true) $(this).closest("form").submit();
            });
        });
    });
</script>

@yield('page-script')
<script>
    $(function() {
        toastr.options = {
            maxOpened: 1,
            autoDismiss: true,
            closeButton: true,
            newestOnTop: true,
            progressBar: true,
            positionClass: 'toast-top-right',
            preventDuplicates: true,
            onclick: null,
            closeDuration: 300,
            closeMethod: 'fadeOut',
            closeEasing: 'swing',
            timeOut: 2000,
        };
        @if (session('success'))
            toastr.success('{{ session('success') }}', 'Success');
        @endif
        @if ($errors->any())
            toastr.error("{{ $errors->first() }}", 'Error');
        @endif
    });
</script>
