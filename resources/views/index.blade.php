@extends('layouts.main')

@section('content')
    {{-- Carousel --}}
    <div id="carousel" class="carousel slide" data-bs-ride="carousel">
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
        <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bg-custom" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
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
                            <i class='bx bx-first-aid'></i>
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
                                bulk of the card's content.</p>
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
    <div class="container">
        <section class="service-detail">
            <div class="d-flex flex-wrap flex-sm-nowrap justify-content-center align-items-center gap-3">
                <img src="/asset/image/kisspng-drug-first-aid-kits-first-aid-supplies-snakebite-c-medical-supplies-5b34a570ed4209.2108325015301768809718.png"
                    alt="medical kit" class="w-75 me-3">
                <div>
                    <h2>Service 1</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, assumenda obcaecati, provident
                        beatae, consectetur ipsam doloremque architecto aperiam et velit eveniet exercitationem nostrum
                        repudiandae rerum consequatur fuga quibusdam recusandae possimus.</p>
                    <button class="hvr-sweep-to-right-type2">Read More</button>
                </div>
                <i class='bx bx-first-aid'></i>
            </div>

            <div class="d-flex flex-wrap flex-sm-nowrap gap-3 justify-content-center align-items-center">
                <img src="/asset/image/kisspng-chilli-chicken-chicken-nugget-chili-pepper-free-spicy-shredded-chicken-pull-png-image-5a694f269b66d3.9032029715168509826365.png"
                    alt="chicken" class="w-75 me-3">
                <div>
                    <h2>Service 2</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, assumenda obcaecati, provident
                        beatae, consectetur ipsam doloremque architecto aperiam et velit eveniet exercitationem nostrum
                        repudiandae rerum consequatur fuga quibusdam recusandae possimus.</p>
                    <button class="hvr-sweep-to-right-type1">Read More</button>
                </div>
                <i class='bx bx-restaurant'></i>
            </div>

            <div class="d-flex flex-wrap flex-sm-nowrap gap-3 justify-content-center align-items-center">
                <img src="/asset/image/kisspng-hard-hat-cap-yellow-safety-hat-5a6cd84b853be6.3053923015170826995457.png"
                    alt="construction helmet" class="w-75 me-3">
                <div>
                    <h2>Service 3</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, assumenda obcaecati, provident
                        beatae, consectetur ipsam doloremque architecto aperiam et velit eveniet exercitationem nostrum
                        repudiandae rerum consequatur fuga quibusdam recusandae possimus.</p>
                    <button class="hvr-sweep-to-right-type2">Read More</button>
                </div>
                <i class='bx bx-building'></i>
            </div>
        </section>
    </div>
@endsection
