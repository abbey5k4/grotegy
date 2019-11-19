@extends('layouts.master')
@section('title')
    Home
@endsection

@section('content')
    @include('layouts.header')
    @include('layouts.banner')
    @include('layouts.about')
    @include('layouts.services')
    @include('layouts.contact')
    @include('layouts.footerr')
@endsection