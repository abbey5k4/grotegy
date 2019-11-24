
@section('extra-stylesheet')
    <link rel="stylesheet" type="text/css" href="/css/nav.css">
@endsection
<!--Main Navigation-->
<nav class="navbar fixed-top navbar-expand-lg navbar-dark " style="background-color: #fff;">
    <a class="navbar-brand" href="#" style="color: #000;"><strong>Navbar</strong></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="background-color: green; color: blue;">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto" style="margin-right: 30px;">
            <li class="nav-item active">
                <a class="nav-link" href="#" style="color: #000;">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" style="color: #000;">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" style="color: #000;">Profile</a>
            </li>
        </ul>
    </div>
</nav>