@extends('layouts.master')
@section('title')
    Home
@endsection
@section('extra-stylesheet')
    <link rel="stylesheet" type="text/css" href="/css/main.css">
@endsection
@section('content')
    @include('layouts.header')
    @include('layouts.banner')
    @include('layouts.about')
    @include('layouts.services')
    @include('layouts.contact')
    @include('layouts.footerr')
  
     
@endsection