<!DOCTYPE html>
<html
	lang 			= "{{ str_replace('_', '-', app()->getLocale()) }}"
	class 			= "light-style customizer-hide"
	dir 			= "ltr"
	data-theme 		= "theme-default"
	data-assets-path= "{{asset('theme')}}"
	data-template 	= "vertical-menu-template">
	<head>
		<meta charset="utf-8" />
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<title>@yield('page_title')</title>
		<meta name="description" content="" />
		<!-- Favicon -->
		<link rel="icon" type="image/x-icon" href="{{asset('theme/img/favicon/favicon.svg')}}" />
		<!-- Fonts -->
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
		<!-- Icons -->
		<link rel="stylesheet" href="{{asset('theme/vendor/fonts/materialdesignicons.css')}}" />
		<link rel="stylesheet" href="{{asset('theme/vendor/fonts/fontawesome.css')}}" />
		<!-- Core CSS -->
		<link rel="stylesheet" href="{{asset('theme/vendor/css/rtl/core.css')}}" class="template-customizer-core-css" />
		<link rel="stylesheet" href="{{asset('theme/vendor/css/rtl/theme-default.css')}}" class="template-customizer-theme-css" />
		<link rel="stylesheet" href="{{asset('theme/css/demo.css')}}" />
		<!-- Vendors CSS -->
		<link rel="stylesheet" href="{{asset('theme/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />
		<link rel="stylesheet" href="{{asset('theme/vendor/libs/node-waves/node-waves.css')}}" />
		<link rel="stylesheet" href="{{asset('theme/vendor/libs/typeahead-js/typeahead.css')}}" />
		<!-- Vendor -->
		<link rel="stylesheet" href="{{asset('theme/vendor/libs/formvalidation/dist/css/formValidation.min.css')}}" />
		<!-- Page CSS -->
		<link rel="stylesheet" href="{{asset('theme/vendor/css/pages/page-auth.css')}}" />
		<!-- Helpers -->
		<script src="{{asset('theme/vendor/js/helpers.js')}}"></script>
	</head>
	<body>
		@yield('content')

		<!-- build:js assets/vendor/js/core.js -->
		<script src="{{asset('theme/vendor/libs/jquery/jquery.js')}}"></script>
		<script src="{{asset('theme/vendor/libs/popper/popper.js')}}"></script>
		<script src="{{asset('theme/vendor/js/bootstrap.js')}}"></script>
		<script src="{{asset('theme/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
		<script src="{{asset('theme/vendor/libs/node-waves/node-waves.js')}}"></script>

		<script src="{{asset('theme/vendor/libs/hammer/hammer.js')}}"></script>
		<script src="{{asset('theme/vendor/libs/i18n/i18n.js')}}"></script>
		<script src="{{asset('theme/vendor/libs/typeahead-js/typeahead.js')}}"></script>

		<script src="{{asset('theme/vendor/js/menu.js')}}"></script>
		<!-- endbuild -->

		<!-- Vendors JS -->
		<script src="{{asset('theme/vendor/libs/formvalidation/dist/js/FormValidation.min.js')}}"></script>
		<script src="{{asset('theme/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js')}}"></script>
		<script src="{{asset('theme/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js')}}"></script>
		<!-- Page JS -->
		<script src="{{asset('theme/js/pages-auth.js')}}"></script>
	</body>
</html>
