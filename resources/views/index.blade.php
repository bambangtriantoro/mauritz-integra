@extends('layouts.main')

@section('content')
    {{-- Navbar --}}
    <div class="navbar-header bg-custom text-light">
        <div class="container">
            <div class="datetime">
                <small><i class='bx bx-calendar me-1'></i></small> <span id="datetime" class="datetime"></span>
            </div>
            <div class="social">
                <a href="https://www.facebook.com" target="_blank"><i class='bx bxl-facebook-circle'></i></a>
                <a href="https://www.instagram.com" target="_blank"><i class='bx bxl-instagram'></i></a>
                <a href="https://www.tiktok.com" target="_blank"><i class='bx bxl-tiktok'></i></i></a>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Company <span>Name</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Services</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Shop
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- Carousel --}}
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/asset/image/pexels-tara-winstead-7722685.jpg" class="d-block" alt="mauritz carousel 1">
                <div class="carousel-caption d-none d-md-block">
                    <h2>First slide label</h2>
                    <p>Some representative placeholder content for the first slide.</p>
                    <button class="btn btn-danger">Learn More</button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/asset/image/leo-roza-P_z_xlMGuEk-unsplash.jpg" class="d-block" alt="mauritz carousel 2">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Second slide label</h2>
                    <p>Some representative placeholder content for the first slide.</p>
                    <button class="btn btn-danger">Learn More</button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/asset/image/etienne-girardet-sgYamIzhAhg-unsplash.jpg" class="d-block" alt="mauritz carousel 3">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Third slide label</h2>
                    <p>Some representative placeholder content for the first slide.</p>
                    <button class="btn btn-danger">Learn More</button>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bg-custom" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon bg-custom" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container">

        {{-- Services --}}
        <section class="service">
            <h2 class="mb-5">Our <span> Services </span></h2>

            <div class="row row-cols-1 row-cols-sm-3 g-3">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <i class='bx bx-pulse'></i>
                            <h3 class="card-title">Service 1</h3>
                            <h5 class="card-subtitle mb-2 text-muted">Card subtitle</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of
                                the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <i class='bx bx-restaurant'></i>
                            <h3 class="card-title">Service 2</h3>
                            <h5 class="card-subtitle mb-2 text-muted">Card subtitle</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of
                                the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <i class='bx bx-building'></i>
                            <h3 class="card-title">Service 3</h3>
                            <h5 class="card-subtitle mb-2 text-muted">Card subtitle</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of
                                the card's content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

    {{-- About --}}
    <section class="about">
        <div class="row row-cols-1 row-cols-sm-2 align-items-center">
            <div class="col">
                <img src="/asset/image/clayton-cardinalli-mMnU-UMmXok-unsplash.jpg" alt="mauritz team">
            </div>
            <div class="col">
                <div class="d-flex flex-column justify-content-center m-auto">
                    <h2>About Us</h2>
                    <div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                        <p>Dicta ratione quae tenetur deleniti quas quod natus iusto molestias quibusdam, numquam
                            delectus, fugiat ipsam consectetur reprehenderit cupiditate modi architecto eveniet labore optio
                            animi odio commodi itaque mollitia quo? Maiores, dolorem! Illum aliquam libero nemo corporis eum
                            cumque obcaecati odio facilis porro. Sapiente provident cupiditate iure aperiam dolor cumque
                            dicta perferendis numquam rem nobis quia consequuntur impedit, expedita minima. Reiciendis dicta
                            inventore tempore optio.</p>
                        <button>Read More</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
