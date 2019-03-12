@extends('templates.base')
@section('style')
<link rel="stylesheet" type="text/css" href="{{asset('style_sisvent/css/admin.css')}}">
@endsection
@section('body')
<!-- Header -->
	@include("AdminComponent.headerAdmin")

	<!-- Cuerpo -->
	<div class="container pt-5">
		@include('AdminComponent.bodyCategory')
	</div>

	<!-- pie de pagina -->
	@include('AdminComponent.footerAdmin')

@endsection

@section('jsAdmin')
<script type="text/javascript" src="{{ asset('js/categoryAdmin.js') }}" ></script>
@endsection
