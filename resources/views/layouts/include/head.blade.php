<meta charset="utf-8" />
<meta name="viewport"
    content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

<title>
    @if (trim($__env->yieldContent('title')))
        @yield('title') |
    @endif {{ config('app.name', 'Laravel') }}
</title>
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- Favicon -->
<link rel="icon" type="image/x-icon" href="public/app_logo" />
<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet" />

<!-- Icons -->
<link rel="stylesheet" href="{{ asset('theme/vendor/fonts/materialdesignicons.css') }}" />
<link rel="stylesheet" href="{{ asset('theme/vendor/fonts/fontawesome.css') }}" />

<!-- Core CSS -->
<link rel="stylesheet" href="{{ asset('theme/vendor/css/rtl/core.css') }}" class="template-customizer-core-css" />
<link rel="stylesheet" href="{{ asset('theme/vendor/css/rtl/theme-default.css') }}"
    class="template-customizer-theme-css" />
<link rel="stylesheet" href="{{ asset('theme/css/demo.css') }}" />

<!-- Vendors CSS -->
<link rel="stylesheet" href="{{ asset('theme/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
<link rel="stylesheet" href="{{ asset('theme/vendor/libs/node-waves/node-waves.css') }}" />
<link rel="stylesheet" href="{{ asset('theme/vendor/libs/typeahead-js/typeahead.css') }}" />
<link rel="stylesheet" href="{{ asset('theme/vendor/libs/apex-charts/apex-charts.css') }}" />
<link rel="stylesheet" href="{{ asset('theme/vendor/libs/swiper/swiper.css') }}" />
<link rel="stylesheet" href="{{ asset('theme/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}" />
<link rel="stylesheet" href="{{ asset('theme/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}" />
<link rel="stylesheet"
    href="{{ asset('theme/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css') }}" />
<link rel="stylesheet" href="{{ asset('theme/vendor/libs/formvalidation/dist/css/formValidation.min.css') }}" />
<link rel="stylesheet" href="{{ asset('theme/vendor/libs/select2/select2.css') }}" />
<link rel="stylesheet" href="{{ asset('theme/vendor/libs/toastr/toastr.css') }}" />
<link rel="stylesheet" href="{{ asset('theme/vendor/libs/animate-css/animate.css') }}" />
<link rel="stylesheet" href="{{ asset('theme/vendor/libs/sweetalert2/sweetalert2.css') }}" />
<!-- Page CSS -->
<link rel="stylesheet" href="{{ asset('theme/vendor/css/pages/cards-statistics.css') }}" />
<link rel="stylesheet" href="{{ asset('theme/vendor/css/pages/cards-analytics.css') }}" />
@yield('page-head')
<!-- Helpers -->
<script src="{{ asset('theme/vendor/js/helpers.js') }}"></script>

<!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
<!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
<script src="{{ asset('theme/vendor/js/template-customizer.js') }}"></script>
<!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
<script src="{{ asset('theme/js/config.js') }}"></script>
