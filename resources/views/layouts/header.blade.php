@extends('layouts.master')
@section('extra-stylesheet')
    <link rel="stylesheet" type="text/css" href="/css/nav.css">
@endsection
<nav>
    <div class="logo">
        <a href=""><h4>Grotegy</h4></a>
    </div>
    <ul class="nav-link">
        <li>
            <a href="#">Portfolio</a>
        </li>
        <li>
            <a href="#">Blog</a>
        </li>
    </ul>
    <div class="burger">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
    </div>
</nav>