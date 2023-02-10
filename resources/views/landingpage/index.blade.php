@extends('landingpage.layouts.app')
@section('content')
    <!-- Home Banner -->
    @include('landingpage.content.home-banner')
    <!-- /Home Banner -->

    @include('landingpage.content.jenis-mobil')

    @include('landingpage.content.tarif-rental')

@endsection
