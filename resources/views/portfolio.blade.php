@extends('layouts.master')
@section('title')
    Portfolio
@endsection

@section('content')
<section class="services pt-100 pb-50" id='services'>
    <div class="container">
    <div class="row">
        <div class="col-xl-6 mx-auto text-center">
            <div class="section-title mb-100">
                <h4>my services</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <ul class='filters text-center'>
                <li class='active pb-5' data-filter='*'><a href="">All</a></li>
                <li data-filter='.html'><a href="">HTML</a></li>
                <li data-filter='.css'><a href="">CSS</a></li>
                <li data-filter='.javascript'><a href="">Javascript</a></li>
                <div class="projects">
                    <div class="row">
                        <div class='col-lg-4 item html pb-5'>
                            <div class="card">
                                <div class="card-head">
                                    <img src="Home.png" class='img-fluid card-img'>
                                    <div class="card-overlay"><h2>HTML</h2></div>
                                    <div class="card-hover">
                                        <h2>Lorem, ipsum</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                </div>
                                <div class="card-body text-center">
                                    <h4 class='title'>HTML</h4>
                                    <a href="" class='btn btn-lg card-btn'>See More</a>
                                </div>
                            </div>
                        </div>
                        <div class='col-lg-4 item css pb-5'>
                            <div class="card">
                                <div class="card-head">
                                    <img src="Home.png" class='img-fluid card-img'>
                                    <div class="card-overlay"><h2>HTML</h2></div>
                                    <div class="card-hover">
                                        <h2>Lorem, ipsum</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                </div>
                                <div class="card-body text-center">
                                    <h4 class='title'>HTML</h4>
                                    <a href="" class='btn btn-lg card-btn'>See More</a>
                                </div>
                            </div>
                        </div>
                        <div class='col-lg-4 item javascript pb-5'>
                            <div class="card">
                                <div class="card-head">
                                    <img src="Home.png" class='img-fluid card-img'>
                                    <div class="card-overlay"><h2>HTML</h2></div>
                                    <div class="card-hover">
                                        <h2>Lorem, ipsum</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                </div>
                                <div class="card-body text-center">
                                    <h4 class='title'>HTML</h4>
                                    <a href="" class='btn btn-lg card-btn'>See More</a>
                                </div>
                            </div>
                        </div>
                        <div class='col-lg-4 item html pb-5'>
                            <div class="card">
                                <div class="card-head">
                                    <img src="Home.png" class='img-fluid card-img'>
                                    <div class="card-overlay"><h2>HTML</h2></div>
                                    <div class="card-hover">
                                        <h2>Lorem, ipsum</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                </div>
                                <div class="card-body text-center">
                                    <h4 class='title'>HTML</h4>
                                    <a href="" class='btn btn-lg card-btn'>See More</a>
                                </div>
                            </div>
                        </div>
                        <div class='col-lg-4 item css pb-5'>
                            <div class="card">
                                <div class="card-head">
                                    <img src="Home.png" class='img-fluid card-img'>
                                    <div class="card-overlay"><h2>HTML</h2></div>
                                    <div class="card-hover">
                                        <h2>Lorem, ipsum</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                </div>
                                <div class="card-body text-center">
                                    <h4 class='title'>HTML</h4>
                                    <a href="" class='btn btn-lg card-btn'>See More</a>
                                </div>
                            </div>
                        </div>
                        <div class='col-lg-4 item javascript pb-5'>
                            <div class="card">
                                <div class="card-head">
                                    <img src="Home.png" class='img-fluid card-img'>
                                    <div class="card-overlay"><h2>HTML</h2></div>
                                    <div class="card-hover">
                                        <h2>Lorem, ipsum</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                </div>
                                <div class="card-body text-center">
                                    <h4 class='title'>HTML</h4>
                                    <a href="" class='btn btn-lg card-btn'>See More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </ul>
        </div>
    </div>
</section>

<script type="text/javascript">
    (function(){
        'use strict';
        var $projects = $('.projects');
        $projects.isotope({
            itemSelector: '.item',
            layoutMode: 'fitRows'
        });

        $('ul.filters > li').on('click', function(e){
            e.preventDefault();
            var filter = $(this).attr('data-filter');
            $('ul.filters > li').removeClass('active');
            $(this).addClass('active');

            $projects.isotope({filter:filter});
        });
        $('.card').mouseenter(function(){
            $(this).find('.card-overlay').css({'top':'-100%'});
            $(this).find('.card-hover').css({'top':'0'});
        }).mouseleave(function(){
            $(this).find('.card-overlay').css({'top':'0'});
            $(this).find('.card-hover').css({'top':'100%'});
        });
    })(jQuery);

</script>
@endsection