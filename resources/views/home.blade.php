@extends('layout')

@section('title')
    FastQuiz - Test your knowledge speed
@stop

@section('content')

<section id="home">
    <div id="main-carousel" class="carousel slide" data-ride="carousel"> 
        <div class="carousel-inner">
            <div class="item active"> 
                <div class="carousel-caption"> 
                    <div> 
                        <h2 class="heading animated bounceInDown home-text">FastQuiz - Test your knowledge speed</h2> 
                        <p class="animated bounceInUp home-text">Are you fast enough?</p> 
                        @if (Auth::guest())
                        <a class="btn btn-social btn-block btn-facebook" href="{{ route('redirect') }}">
                            <span class="fa fa-facebook"></span> Sign in and start playing
                        </a>
                        @else
                        <a class="btn btn-default slider-btn animated fadeIn" href="{{ route('login') }}">
                            <i class="fa fa-play-circle" aria-hidden="true"></i>&nbsp;Play Now
                        </a>
                        @endif 
                    </div> 
                </div> 
            </div>
        </div>
    </div> 
</section>

<section id="services" class="parallax-section">
    <div class="container">
        <div class="row text-center">
            <div class="col-sm-8 col-sm-offset-2">
                <h2 class="title-one">How it works</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="our-service">
                    <div class="services row">
                        <div class="col-sm-4">
                            <div class="single-service">
                                <i class="fa fa-th"></i>
                                <h2>Modern Design</h2>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore.</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="single-service">
                                <i class="fa fa-html5"></i>
                                <h2>Web Development</h2>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy </p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="single-service">
                                <i class="fa fa-users"></i>
                                <h2>Online Marketing</h2>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="blog"> 
    <div class="container">
        <div class="row text-center clearfix">
            <div class="col-sm-8 col-sm-offset-2">
                <h2 class="title-one">Brain Food</h2>
            </div>
        </div> 
        <div class="row">
            <div class="col-sm-4">
                <div class="single-blog">
                    <img src="images/blog/1.jpg" alt="" />
                    <h2>Lorem ipsum dolor sit amet</h2>
                    <ul class="post-meta">
                        <li><i class="fa fa-pencil-square-o"></i><strong> Posted By:</strong> John</li>
                        <li><i class="fa fa-clock-o"></i><strong> Posted On:</strong> Apr 15 2014</li>
                    </ul>
                    <div class="blog-content">
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                    </div>
                    <a href="" class="btn btn-primary" data-toggle="modal" data-target="#blog-detail">Read More</a>
                </div>
                <div class="modal fade" id="blog-detail" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <img src="images/blog/3.jpg" alt="" />
                                <h2>Lorem ipsum dolor sit amet</h2>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="single-blog">
                    <img src="images/blog/2.jpg" alt="" />
                    <h2>Lorem ipsum dolor sit amet</h2>
                    <ul class="post-meta">
                        <li><i class="fa fa-pencil-square-o"></i><strong> Posted By:</strong> John</li>
                        <li><i class="fa fa-clock-o"></i><strong> Posted On:</strong> Apr 15 2014</li>
                    </ul>
                    <div class="blog-content">
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                    </div>
                    <a href="" class="btn btn-primary" data-toggle="modal" data-target="#blog-two">Read More</a>
                </div>
                <div class="modal fade" id="blog-two" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <img src="images/blog/2.jpg" alt="" />
                                <h2>Lorem ipsum dolor sit amet</h2>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="single-blog">
                    <img src="images/blog/3.jpg" alt="" />
                    <h2>Lorem ipsum dolor sit amet</h2>
                    <ul class="post-meta">
                        <li><i class="fa fa-pencil-square-o"></i><strong> Posted By:</strong> John</li>
                        <li><i class="fa fa-clock-o"></i><strong> Posted On:</strong> Apr 15 2014</li>
                    </ul>
                    <div class="blog-content">
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                    </div>
                    <a href="" class="btn btn-primary" data-toggle="modal" data-target="#blog-three">Read More</a>
                </div>
                <div class="modal fade" id="blog-three" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <img src="images/blog/3.jpg" alt="" />
                                <h2>Lorem ipsum dolor sit amet</h2>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="single-blog">
                    <img src="images/blog/3.jpg" alt="" />
                    <h2>Lorem ipsum dolor sit amet</h2>
                    <ul class="post-meta">
                        <li><i class="fa fa-pencil-square-o"></i><strong> Posted By:</strong> John</li>
                        <li><i class="fa fa-clock-o"></i><strong> Posted On:</strong> Apr 15 2014</li>
                    </ul>
                    <div class="blog-content">
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                    </div>
                    <a href="" class="btn btn-primary" data-toggle="modal" data-target="#blog-four">Read More</a>
                </div>
                <div class="modal fade" id="blog-four" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <img src="images/blog/3.jpg" alt="" />
                                <h2>Lorem ipsum dolor sit amet</h2>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="single-blog">
                    <img src="images/blog/2.jpg" alt="" />
                    <h2>Lorem ipsum dolor sit amet</h2>
                    <ul class="post-meta">
                        <li><i class="fa fa-pencil-square-o"></i><strong> Posted By:</strong> John</li>
                        <li><i class="fa fa-clock-o"></i><strong> Posted On:</strong> Apr 15 2014</li>
                    </ul>
                    <div class="blog-content">
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                    </div>
                    <a href="" class="btn btn-primary" data-toggle="modal" data-target="#blog-six">Read More</a>
                </div>
                <div class="modal fade" id="blog-six" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <img src="images/blog/2.jpg" alt="" />
                                <h2>Lorem ipsum dolor sit amet</h2>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="single-blog">
                    <img src="images/blog/1.jpg" alt="" />
                    <h2>Lorem ipsum dolor sit amet</h2>
                    <ul class="post-meta">
                        <li><i class="fa fa-pencil-square-o"></i><strong> Posted By:</strong> John</li>
                        <li><i class="fa fa-clock-o"></i><strong> Posted On:</strong> Apr 15 2014</li>
                    </ul>
                    <div class="blog-content">
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                    </div>
                    <a href="" class="btn btn-primary" data-toggle="modal" data-target="#blog-seven">Read More</a>
                </div>
                <div class="modal fade" id="blog-seven" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <img src="images/blog/1.jpg" alt="" />
                                <h2>Lorem ipsum dolor sit amet</h2>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div> 
</section>

@stop
