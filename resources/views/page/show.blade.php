@extends('layouts.main')


@section('title', 'Page')

@section('content')
    <main role="main">
        <section class="text-center">
            <div class="container bg-img">
                <h1><b>
                    We do our best when we do it together<br>
                    Share Food, Share Life</b>
                </h1>
                <p>
                    <a href="{{ route('page.about') }}" class="btn btn-primary my-2">Learn More</a>
                </p>
            </div>
        </section>

        <hr class="hr-light">


        <section class="text-center">

            <div class="container">
                <h class="display-4 font-weight-bold white-text pt-5 mb-2">Find Food</h>
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="https://kitchengirls.de/uploads/media/620x/03/823-acai-bowl-das-neue-trendfruehstueck.jpg?v=1-0" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="https://image.essen-und-trinken.de/11952552/t/aV/v10/w1440/r1.7778/-/eut-mit-thermomix-201802016-chicken-caesar-salad-jpg--65187-.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="https://cdn.pixabay.com/photo/2017/06/21/17/57/christmas-dinner-2428029__340.jpg" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <p>
                    <a href="#" class="btn btn-primary my-2">Browse Near You</a>
                </p>
            </div>

        </section>

        <hr class="hr-light">

        <section class="text-center">
            <div class="container">
                <h2 class="display-4 font-weight-bold white-text pt-5 mb-2">Have Extra?</h2>
                <p class="lead text-muted">
                    We do our best when we do it together<br>
                    Share Food, Share Life
                </p>
                <p>
                    <a href="{{ route('offer.create') }}" class="btn btn-primary my-2">Create an offer</a>
                </p>
            </div>
        </section>

        <hr class="hr-light">

        <section class="text-center">
            <div class="container">
                <h2 class="display-4 font-weight-bold white-text pt-5 mb-2">Still curious?</h2>
                <p class="lead text-muted">
                    We do our best when we do it together<br>
                    Share Food, Share Life
                </p>
                <p>
                    <a href="{{ route('page.about') }}" class="btn btn-primary my-2">Meet Our Team</a>
                </p>
            </div>
        </section>

        <hr class="hr-light">


        <!--Main layout-->
        <!--Main layout-->
        <main class="mt-5 jumbotron" style="background-color: #90C6A9;">
            <div class="container">

                <!--Section: Best Features-->
                <section id="best-features">
                    <!--Section: Best Features-->
                    <section id="best-features" class="text-center">

                        <!-- Heading -->
                        <h2 class="mb-5">Best Features</h2>

                        <!--Grid row-->
                        <div class="row d-flex justify-content-center mb-4">

                            <!--Grid column-->
                            <div class="col-md-8">

                                <!-- Description -->
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi voluptate hic provident nulla repellat
                                    facere esse molestiae ipsa labore porro minima quam quaerat rem, natus repudiandae debitis est
                                    sit pariatur.</p>

                            </div>
                            <!--Grid column-->

                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-md-4 mb-1">
                                <i class="fa fa-camera-retro fa-3x blue-text"></i>
                                <h4 class="my-4">Experience</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam minima
                                    assumenda deleniti hic.</p>
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-md-4 mb-1">
                                <i class="fa fa-heart fa-3x blue-text" ></i>
                                <h4 class="my-4">Happiness</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam minima
                                    assumenda deleniti hic.</p>
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-md-4 mb-1">
                                <i class="fa fa-bicycle fa-3x blue-text"></i>
                                <h4 class="my-4">Adventure</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam minima
                                    assumenda deleniti hic.</p>
                            </div>
                            <!--Grid column-->

                        </div>
                        <!--Grid row-->

                    </section>
                    <!--Section: Best Features-->


                </section>
                <!--Section: Best Features-->

                <hr class="my-5">

            </div>
        </main>
        <!--Main layout-->
        <!--Main layout-->

        <!--Footer-->
        <!--Footer-->
        <footer class="page-footer font-small blue pt-4 mt-4" style="background-color: #9EBFFF;">

            <!--Footer Links-->
            <!--Footer Links-->
            <div class="container mt-5 mb-4 text-center text-md-left">
                <div class="row mt-3">

                    <!--First column-->
                    <div class="col-md-3 col-lg-4 col-xl-3 mb-4">
                        <h6 class="text-uppercase font-weight-bold">
                            <strong>Company name</strong>
                        </h6>
                        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                    <!--/.First column-->

                    <!--Second column-->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <h6 class="text-uppercase font-weight-bold">
                            <strong>Products</strong>
                        </h6>
                        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                        <p>
                            <a href="#!">Ecommerce</a>
                        </p>
                        <p>
                            <a href="#!">Blog</a>
                        </p>
                        <p>
                            <a href="#!">Portfolio</a>
                        </p>
                        <p>
                            <a href="#!">Forum</a>
                        </p>
                    </div>
                    <!--/.Second column-->

                    <!--Third column-->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <h6 class="text-uppercase font-weight-bold">
                            <strong>Useful links</strong>
                        </h6>
                        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                        <p>
                            <a href="#!">Your Account</a>
                        </p>
                        <p>
                            <a href="#!">Become an Affiliate</a>
                        </p>
                        <p>
                            <a href="#!">Shipping Rates</a>
                        </p>
                        <p>
                            <a href="#!">Help</a>
                        </p>
                    </div>
                    <!--/.Third column-->

                    <!--Fourth column-->
                    <div class="col-md-4 col-lg-3 col-xl-3">
                        <h6 class="text-uppercase font-weight-bold">
                            <strong>Contact</strong>
                        </h6>
                        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                        <p>
                            <i class="fa fa-home mr-3"></i> Hamburg 20146, HH</p>
                        <p>
                            <i class="fa fa-envelope mr-3"></i> example@example.com</p>
                        <p>
                            <i class="fa fa-phone mr-3"></i> + 21626538845</p>
                        <p>
                            <i class="fa fa-print mr-3"></i> + 21626538845</p>
                    </div>
                    <!--/.Fourth column-->

                </div>
            </div>
            <!--/.Footer Links-->
            <!--Footer-->
            <footer class="page-footer font-small blue" style="background-color: #9EBFFF;">

                <!-- Social buttons -->
                <div class="primary-color">
                    <div class="container">
                        <!--Grid row-->
                        <div class="row py-4 d-flex align-items-center">


                            <!--Grid column-->
                            <div class="col-md-6 col-lg-7 text-center text-md-right">
                                <!--Facebook-->
                                <a class="fb-ic ml-0">
                                    <i class="fa fa-facebook white-text mr-4"> </i>
                                </a>
                                <!--Twitter-->
                                <a class="tw-ic">
                                    <i class="fa fa-twitter white-text mr-4"> </i>
                                </a>
                                <!--Google +-->
                                <a class="gplus-ic">
                                    <i class="fa fa-google-plus white-text mr-4"> </i>
                                </a>
                                <!--Linkedin-->
                                <a class="li-ic">
                                    <i class="fa fa-linkedin white-text mr-4"> </i>
                                </a>
                                <!--Instagram-->
                                <a class="ins-ic">
                                    <i class="fa fa-instagram white-text mr-lg-4"> </i>
                                </a>
                            </div>
                            <!--Grid column-->

                        </div>
                        <!--Grid row-->
                    </div>
                </div>


    </main>



@endsection
