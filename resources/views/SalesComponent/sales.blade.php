@extends('templates.base')
@section('style')
<link rel="stylesheet" type="text/css" href="{{ asset('style_sisvent/css/admin.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('style_sisvent/css/sales.css') }}">
@endsection

@section('body')
	<!-- Header -->
	@include("SalesComponent.headerSales")
	<!-- Cuerpo -->
	<div class="container pt-5">
	@include('SalesComponent.bodySalesHome')
	</div>
	<!-- pie de pagina -->
	@include('SalesComponent.footerSales')

@endsection

@section('jsAdmin')

@endsection

