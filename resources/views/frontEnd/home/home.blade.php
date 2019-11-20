
@extends('frontEnd.master')


@section('body1')

<div class="about py-5">
    <div class="container py-xl-5 py-lg-3">
        <h3 class="title text-capitalize font-weight-light text-dark text-center mb-5">Welcome to
            <span class="font-weight-bold">Edulearn</span>
        </h3>
        <div class="row pt-md-4">
            <div class="col-lg-6 about_right">
                <h3 class="text-capitalize text-right font-weight-light font-italic">interface friendly learning at
                    <span class="font-weight-bold">Edulearn</span>
                </h3>
                <p class="text-right my-4 pr-4 border-right">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,
                    eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                <div class="about_left-list">
                    <h6 class="mb-lg-3 mb-2 font-weight-bold text-dark">Our Benefits</h6>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <i class="fas fa-check mr-3"></i>Duis aute irure dolor in reprehe</li>
                        <li class="mb-2">
                            <i class="fas fa-check mr-3"></i>unt in culpa qui officia deserunt</li>
                        <li class="mb-2">
                            <i class="fas fa-check mr-3"></i>Nemo enim ipsam voluptatem quia</li>
                        <li class="mb-2">
                            <i class="fas fa-check mr-3"></i>quis nostrum exercitationem ullam</li>
                        <li class="mb-2">
                            <i class="fas fa-check mr-3"></i>corporis suscipit laboriosam</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 left-img-agikes mt-lg-0 mt-sm-4 mt-3 text-right">
                <img src="{{asset('/')}}/frontEnd/images/ab.jpg" alt="" class="img-fluid" />

                <div class="about-bottom text-center p-sm-5 p-4">
                    <ul>
                        <li>
                            <h5>60+</h5>
                            <p class="text-dark font-weight-bold">Teachers</p>
                        </li>
                        <li>
                            <h5>2000+</h5>
                            <p class="text-dark font-weight-bold">Students</p>
                        </li>
                        <li>
                            <h5>80+</h5>
                            <p class="text-dark font-weight-bold">Courses</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('body2')



    <div class="why-choose-agile py-5">
        <div class="container py-xl-5 py-lg-3">
            <h3 class="title text-capitalize font-weight-light text-white text-center mb-5">what we
                <span class="font-weight-bold">do</span>
            </h3>
            <div class="row agileits-w3layouts-grid pt-md-4">
                <div class="col-lg-4 services-agile-1">
                    <div class="row wthree_agile_us">
                        <div class="col-lg-3 col-md-2 col-3  agile-why-text">
                            <div class="wthree_features_grid text-center p-3 border rounded">
                                <i class="fab fa-accusoft"></i>
                            </div>
                        </div>
                        <div class="col-9 agile-why-text-2">
                            <h4 class="text-capitalize text-white font-weight-bold mb-3">special education</h4>
                            <p>Lorem ipsum magna, vehicula ut scelerisque ornare porta ete celerisque ornare.</p>
                            <a class="btn mt-3 service-button p-0" href="about.html" role="button">Read More
                                <i class="fas fa-long-arrow-alt-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 services-agile-1 my-lg-0 my-5">
                    <div class="row wthree_agile_us">
                        <div class="col-lg-3 col-md-2 col-3  agile-why-text">
                            <div class="wthree_features_grid text-center p-3 border rounded">
                                <i class="fas fa-book"></i>
                            </div>
                        </div>
                        <div class="col-9 agile-why-text-2">
                            <h4 class="text-capitalize text-white font-weight-bold mb-3">full day session</h4>
                            <p>Lorem ipsum magna, vehicula ut scelerisque ornare porta ete celerisque ornare.</p>
                            <a class="btn mt-3 service-button p-0" href="about.html" role="button">Read More
                                <i class="fas fa-long-arrow-alt-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 services-agile-1">
                    <div class="row wthree_agile_us">
                        <div class="col-lg-3 col-md-2 col-3  agile-why-text">
                            <div class="wthree_features_grid text-center p-3 border rounded">
                                <i class="fas fa-users"></i>
                            </div>
                        </div>
                        <div class="col-9 agile-why-text-2">
                            <h4 class="text-capitalize text-white font-weight-bold mb-3">qualified teachers</h4>
                            <p>Lorem ipsum magna, vehicula ut scelerisque ornare porta ete celerisque ornare.</p>
                            <a class="btn mt-3 service-button p-0" href="about.html" role="button">Read More
                                <i class="fas fa-long-arrow-alt-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row agileits-w3layouts-grid mt-5">
                <div class="col-lg-4 services-agile-1">
                    <div class="row wthree_agile_us">
                        <div class="col-lg-3 col-md-2 col-3  agile-why-text">
                            <div class="wthree_features_grid text-center p-3 border rounded">
                                <i class="far fa-calendar-alt"></i>
                            </div>
                        </div>
                        <div class="col-9 agile-why-text-2">
                            <h4 class="text-capitalize text-white font-weight-bold mb-3">events</h4>
                            <p>Lorem ipsum magna, vehicula ut scelerisque ornare porta ete celerisque ornare.</p>
                            <a class="btn mt-3 service-button p-0" href="about.html" role="button">Read More
                                <i class="fas fa-long-arrow-alt-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 services-agile-1  my-lg-0 my-5">
                    <div class="row wthree_agile_us">
                        <div class="col-lg-3 col-md-2 col-3  agile-why-text">
                            <div class="wthree_features_grid text-center p-3 border rounded">
                                <i class="fas fa-graduation-cap"></i>
                            </div>
                        </div>
                        <div class="col-9 agile-why-text-2">
                            <h4 class="text-capitalize text-white font-weight-bold mb-3">pre classes</h4>
                            <p>Lorem ipsum magna, vehicula ut scelerisque ornare porta ete celerisque ornare.</p>
                            <a class="btn mt-3 service-button p-0" href="about.html" role="button">Read More
                                <i class="fas fa-long-arrow-alt-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 services-agile-1">
                    <div class="row wthree_agile_us">
                        <div class="col-lg-3 col-md-2 col-3  agile-why-text">
                            <div class="wthree_features_grid text-center p-3 border rounded">
                                <i class="far fa-clock"></i>
                            </div>
                        </div>
                        <div class="col-9 agile-why-text-2">
                            <h4 class="text-capitalize text-white font-weight-bold mb-3">24/7 supports</h4>
                            <p>Lorem ipsum magna, vehicula ut scelerisque ornare porta ete celerisque ornare.</p>
                            <a class="btn mt-3 service-button p-0" href="about.html" role="button">Read More
                                <i class="fas fa-long-arrow-alt-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //what we do -->

    <!-- video and events -->
    <div class="video-choose-agile py-5">
        <div class="container py-xl-5 py-lg-3">
            <div class="row">
                <div class="col-lg-7 video">
                    <h3 class="title text-capitalize font-weight-light text-dark text-center mb-5">our
                        <span class="font-weight-bold">video</span>
                    </h3>
                    <iframe src="https://player.vimeo.com/video/58123228"></iframe>
                </div>
                <div class="col-lg-5 events">
                    <h3 class="title text-capitalize font-weight-light text-dark text-center mb-5">upcoming
                        <span class="font-weight-bold">events</span>
                    </h3>
                    <div class="events-w3ls">
                        <div class="d-flex">
                            <div class="col-sm-2 col-3 events-up p-3 text-center">
                                <h5 class="text-white font-weight-bold">28
                                    <span class="border-top font-weight-light pt-2 mt-2">May</span>
                                </h5>
                            </div>
                            <div class="col-sm-10 col-9 events-right">
                                <h4 class="text-dark">Admission Fair Spring </h4>
                                <ul class="list-unstyled">
                                    <li class="my-2">
                                        <i class="far fa-clock mr-2"></i>5.00 pm - 7.30 pm</li>
                                    <li>
                                        <i class="fas fa-map-marker mr-2"></i>25 Newyork City.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex my-4">
                        <div class="col-sm-2 col-3 events-up p-3 text-center">
                            <h5 class="text-white font-weight-bold">28
                                <span class="border-top font-weight-light pt-2 mt-2">May</span>
                            </h5>
                        </div>
                        <div class="col-sm-10 col-9 events-right">
                            <h4 class="text-dark">Admission Fair Spring </h4>
                            <ul class="list-unstyled">
                                <li class="my-2">
                                    <i class="far fa-clock mr-2"></i>5.00 pm - 7.30 pm</li>
                                <li>
                                    <i class="fas fa-map-marker mr-2"></i>25 Newyork City.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="col-sm-2 col-3 events-up p-3 text-center">
                            <h5 class="text-white font-weight-bold">28
                                <span class="border-top font-weight-light pt-2 mt-2">May</span>
                            </h5>
                        </div>
                        <div class="col-sm-10 col-9 events-right">
                            <h4 class="text-dark">Admission Fair Spring </h4>
                            <ul class="list-unstyled">
                                <li class="my-2">
                                    <i class="far fa-clock mr-2"></i>5.00 pm - 7.30 pm</li>
                                <li>
                                    <i class="fas fa-map-marker mr-2"></i>25 Newyork City.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //video and events -->

    <!-- testimonials -->
    <div class="testimonials py-5">
        <div class="container py-xl-5 py-lg-3">
            <h3 class="title text-capitalize font-weight-light text-white text-center mb-5">what our
                <span class="font-weight-bold">people says</span>
            </h3>
            <div class="mis-stage">
                <!-- The element to select and apply miSlider to - the class is optional -->
                <ol class="mis-slider">
                    <!-- The slider element - the class is optional -->
                    <li class="mis-slide">
                        <!-- A slide element - the class is optional -->
                        <a href="#" class="mis-container">
                            <!-- A slide container - this element is optional, if absent the plugin adds it automatically -->
                            <figure>
                                <!-- Slide content - whatever you want -->
                                <img src="{{asset('/')}}/frontEnd/images/t1.jpg" alt=" " class="img-fluid" />
                                <figcaption>Carl Lii
                                    <span>Sed maximus eros quis leo.</span>
                                </figcaption>
                            </figure>
                        </a>
                    </li>
                    <li class="mis-slide">
                        <a href="#" class="mis-container">
                            <figure>
                                <img src="{{asset('/')}}/frontEnd/images/t2.jpg" alt=" " class="img-fluid" />
                                <figcaption>Michael Paul
                                    <span>Sed maximus eros quis leo.</span>
                                </figcaption>
                            </figure>
                        </a>
                    </li>
                    <li class="mis-slide">
                        <a href="link" class="mis-container">
                            <figure>
                                <img src="{{asset('/')}}/frontEnd/images/t3.jpg" alt=" " class="img-fluid" />
                                <figcaption>Henry Doe
                                    <span>Sed maximus eros quis leo.</span>
                                </figcaption>
                            </figure>
                        </a>
                    </li>
                    <li class="mis-slide">
                        <a href="#" class="mis-container">
                            <figure>
                                <img src="{{asset('/')}}/frontEnd/images/t4.jpg" alt=" " class="img-fluid" />
                                <figcaption>Laura James
                                    <span>Sed maximus eros quis leo.</span>
                                </figcaption>
                            </figure>
                        </a>
                    </li>
                    <li class="mis-slide">
                        <a href="#" class="mis-container">
                            <figure>
                                <img src="{{asset('/')}}/frontEnd/images/t5.jpg" alt=" " class="img-fluid" />
                                <figcaption>Thomas Carl
                                    <span>Sed maximus eros quis leo.</span>
                                </figcaption>
                            </figure>
                        </a>
                    </li>
                    <li class="mis-slide">
                        <a href="#" class="mis-container">
                            <figure>
                                <img src="{{asset('/')}}/frontEnd/images/t6.jpg" alt=" " class="img-fluid" />
                                <figcaption>Rosy Crisp
                                    <span>Sed maximus eros quis leo.</span>
                                </figcaption>
                            </figure>
                        </a>
                    </li>
                    <li class="mis-slide">
                        <a href="#" class="mis-container">
                            <figure>
                                <img src="{{asset('/')}}/frontEnd/images/t4.jpg" alt=" " class="img-fluid" />
                                <figcaption>Michael Paul
                                    <span>Sed maximus eros quis leo.</span>
                                </figcaption>
                            </figure>
                        </a>
                    </li>
                </ol>
            </div>
        </div>
    </div>
    <!-- //testimonials -->

    <!-- news -->
    <div class="news-section py-5">
        <div class="container py-xl-5 py-lg-3">
            <h3 class="title text-capitalize font-weight-light text-dark text-center mb-5">our lastest
                <span class="font-weight-bold">news</span>
            </h3>
            <div class="row news-grids-w3l pt-md-4">
                <div class="col-md-4 news-grid">
                    <a href="blog.html">
                        <img src="{{asset('/')}}/frontEnd/images/n1.jpg" class="img-fluid" alt="" />
                    </a>
                    <div class="news-text">
                        <div class="news-events-agile event-colo1 py-2 px-3">
                            <h5 class="float-left">
                                <a href="blog.html" class="text-white">07 May</a>
                            </h5>
                            <div class="post-img float-right">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="far fa-comments text-white"></i>
                                        </a>
                                    </li>
                                    <li class="mx-3">
                                        <a href="#">
                                            <i class="far fa-heart text-white"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fas fa-share text-white"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="detail-bottom">
                            <h6 class="my-3">
                                <a href="blog.html" class="text-dark">
                                    Eiusmod tempor incididunt ut labore sed do eiusmod
                                </a>
                            </h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore sed do eiusmod
                                tempor incididunt ut labore</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 news-grid my-md-0 my-sm-5 my-4">
                    <a href="blog.html">
                        <img src="{{asset('/')}}/frontEnd/images/n2.jpg" class="img-fluid" alt="" />
                    </a>
                    <div class="news-text">
                        <div class="news-events-agile py-2 px-3">
                            <h5 class="float-left">
                                <a href="blog.html" class="text-white">07 May</a>
                            </h5>
                            <div class="post-img float-right">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="far fa-comments text-white"></i>
                                        </a>
                                    </li>
                                    <li class="mx-3">
                                        <a href="#">
                                            <i class="far fa-heart text-white"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fas fa-share text-white"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="detail-bottom">
                            <h6 class="my-3">
                                <a href="blog.html" class="text-dark">
                                    Eiusmod tempor incididunt ut labore sed do eiusmod
                                </a>
                            </h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore sed do eiusmod
                                tempor incididunt ut labore</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 news-grid">
                    <a href="blog.html">
                        <img src="{{asset('/')}}/frontEnd/images/n3.jpg" class="img-fluid" alt="" />
                    </a>
                    <div class="news-text">
                        <div class="news-events-agile event-colo3 py-2 px-3">
                            <h5 class="float-left">
                                <a href="blog.html" class="text-white">07 May</a>
                            </h5>
                            <div class="post-img float-right">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="far fa-comments text-white"></i>
                                        </a>
                                    </li>
                                    <li class="mx-3">
                                        <a href="#">
                                            <i class="far fa-heart text-white"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fas fa-share text-white"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="detail-bottom">
                            <h6 class="my-3">
                                <a href="blog.html" class="text-dark">
                                    Eiusmod tempor incididunt ut labore sed do eiusmod
                                </a>
                            </h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore sed do eiusmod
                                tempor incididunt ut labore</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
