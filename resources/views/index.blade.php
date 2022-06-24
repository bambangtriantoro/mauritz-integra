@extends('layouts.main')

@section('content')
    {{-- Navbar --}}
    <div class="navbar-header bg-custom text-light">
        <div class="container">
            <div class="datetime">
                <small><i class="bi bi-clock me-1"></i></small> <span id="datetime" class="datetime"></span>
            </div>
            <div class="social">
                <a href="https://www.facebook.com"><i class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com"><i class="bi bi-instagram"></i></a>
                <a href="https://www.tiktok.com"><i class="bi bi-tiktok"></i></a>
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
                <img src="/asset/image/katie-harp-qmB-5TJ8IiM-unsplash.jpg" class="d-block" alt="mauritz carousel 1">
                <div class="carousel-caption d-none d-md-block">
                    <h2>First slide label</h2>
                    <p>Some representative placeholder content for the first slide.</p>
                    <button class="btn btn-danger">Learn More</button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/asset/image/edgar-soto-iaHZUC69YHA-unsplash.jpg" class="d-block" alt="mauritz carousel 2">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Second slide label</h2>
                    <p>Some representative placeholder content for the first slide.</p>
                    <button class="btn btn-danger">Learn More</button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/asset/image/anton-Sr7YIVy99pA-unsplash.jpg" class="d-block" alt="mauritz carousel 3">
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

    {{-- Services --}}
    <section class="services">
        <div class="container">
            <h2 class="mb-3">Our <span> Services </span></h2>

            <div class="row row-cols-3 g-3">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <i class="bi bi-heart-pulse"></i>
                            <h5 class="card-title">Service 1</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of
                                the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <i class="bi bi-thermometer-half"></i>
                            <h5 class="card-title">Service 2</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of
                                the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <i class="bi bi-bandaid"></i>
                            <h5 class="card-title">Service 3</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of
                                the card's content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
