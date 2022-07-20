@extends('layouts.main')
@section('content')
    <div class="container-xxl">
        <header class="service-header" id="header">
            <h2>OUR <span>SERVICES</span></h2>
        </header>
    </div>

    <div class="container-xxl">
        <section class="service-desc desc1">
            <h2>What <span>We</span> Provide</h2>
            <div id="carouselExampleControls" class="carousel slide mt-5" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row justify-content-center align-items-center gy-5">
                            <img src="/asset/image/pexels-tara-winstead-7722685.jpg" class="col-12 col-md-6" alt="">
                            <div class="col-12 col-md-6">
                                <h3 class="text-start"><i class="bx bx-first-aid"></i> SERVICE 1</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis nobis deserunt quisquam
                                    fuga
                                    facere dolorum placeat aliquid impedit, distinctio asperiores blanditiis. Ut culpa
                                    explicabo
                                    magni dolore, beatae blanditiis eum unde necessitatibus ipsam, quia, iure neque magnam
                                    non
                                    suscipit ipsum laborum corrupti optio tempora molestias aspernatur facilis
                                    exercitationem
                                    deleniti dicta? Voluptatum?</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row justify-content-center align-items-center gy-5">
                            <img src="/asset/image/leo-roza-P_z_xlMGuEk-unsplash.jpg" class="col-12 col-md-6"
                                alt="">
                            <div class="col-12 col-md-6">
                                <h3 class="text-start"><i class="bx bx-restaurant"></i>SERVICE 2</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis nobis deserunt quisquam
                                    fuga
                                    facere dolorum placeat aliquid impedit, distinctio asperiores blanditiis. Ut culpa
                                    explicabo
                                    magni dolore, beatae blanditiis eum unde necessitatibus ipsam, quia, iure neque magnam
                                    non
                                    suscipit ipsum laborum corrupti optio tempora molestias aspernatur facilis
                                    exercitationem
                                    deleniti dicta? Voluptatum?</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row justify-content-center align-items-center gy-5">
                            <img src="/asset/image/etienne-girardet-sgYamIzhAhg-unsplash.jpg" class="col-12 col-md-6"
                                alt="">
                            <div class="col-12 col-md-6">
                                <h3 class="text-start"><i class="bx bx-building"></i>SERVICE 3</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis nobis deserunt quisquam
                                    fuga
                                    facere dolorum placeat aliquid impedit, distinctio asperiores blanditiis. Ut culpa
                                    explicabo
                                    magni dolore, beatae blanditiis eum unde necessitatibus ipsam, quia, iure neque magnam
                                    non
                                    suscipit ipsum laborum corrupti optio tempora molestias aspernatur facilis
                                    exercitationem
                                    deleniti dicta? Voluptatum?</p>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
        <section class="service-desc desc2">
            <div class="container">
                <div class="row align-items-center py-5">
                    <div class="col-7">
                        <h2 class="text-start">Service 1</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo eligendi libero debitis
                            excepturi
                            laudantium in. Rerum aliquid ea placeat sint. Doloribus laboriosam nesciunt eum natus voluptates
                            libero! Et repellendus esse incidunt animi repudiandae nulla eaque, cum necessitatibus
                            architecto
                            quos, illum aliquam ducimus eius. Similique omnis nihil temporibus tempore, cupiditate quis!</p>
                    </div>
                    <div class="col-5">
                        <img src="/asset/image/kisspng-drug-first-aid-kits-first-aid-supplies-snakebite-c-medical-supplies-5b34a570ed4209.2108325015301768809718.png"
                            class="img-fluid" alt="">
                    </div>
                </div>
            </div>
            <div class="position-relative">
                <div class="container">
                    <h2>Service 1 Products</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed minus provident facilis consectetur
                        possimus quos doloremque illum deserunt hic in quaerat reiciendis, distinctio, mollitia rerum
                        corporis. Quis labore similique iure?</p>
                    <div class="position-absolute service-product-item">
                        <div class="card mx-3">
                            <img src="/asset/image/kisspng-drug-first-aid-kits-first-aid-supplies-snakebite-c-medical-supplies-5b34a570ed4209.2108325015301768809718.png"
                                class="card-img-top shadow" alt="product1">
                            <div class="card-body bg-custom">
                                <h5 class="card-title">Product 1</h5>
                                <button class="card-text">Rp. 250.000</button>
                            </div>
                        </div>
                        <div class="card mx-3">
                            <img src="/asset/image/kisspng-drug-first-aid-kits-first-aid-supplies-snakebite-c-medical-supplies-5b34a570ed4209.2108325015301768809718.png"
                                class="card-img-top shadow" alt="product1">
                            <div class="card-body bg-custom">
                                <h5 class="card-title">Product 1</h5>
                                <button class="card-text">Rp. 250.000</button>
                            </div>
                        </div>
                        <div class="card mx-3">
                            <img src="/asset/image/kisspng-drug-first-aid-kits-first-aid-supplies-snakebite-c-medical-supplies-5b34a570ed4209.2108325015301768809718.png"
                                class="card-img-top shadow" alt="product1">
                            <div class="card-body bg-custom">
                                <h5 class="card-title">Product 1</h5>
                                <button class="card-text">Rp. 250.000</button>
                            </div>
                        </div>
                        <div class="card mx-3">
                            <img src="/asset/image/kisspng-drug-first-aid-kits-first-aid-supplies-snakebite-c-medical-supplies-5b34a570ed4209.2108325015301768809718.png"
                                class="card-img-top shadow" alt="product1">
                            <div class="card-body bg-custom">
                                <h5 class="card-title">Product 1</h5>
                                <button class="card-text">Rp. 250.000</button>
                            </div>
                        </div>
                        <div class="card mx-3">
                            <img src="/asset/image/kisspng-drug-first-aid-kits-first-aid-supplies-snakebite-c-medical-supplies-5b34a570ed4209.2108325015301768809718.png"
                                class="card-img-top shadow" alt="product1">
                            <div class="card-body bg-custom">
                                <h5 class="card-title">Product 1</h5>
                                <button class="card-text">Rp. 250.000</button>
                            </div>
                        </div>
                        <div class="card mx-3">
                            <img src="/asset/image/kisspng-drug-first-aid-kits-first-aid-supplies-snakebite-c-medical-supplies-5b34a570ed4209.2108325015301768809718.png"
                                class="card-img-top shadow" alt="product1">
                            <div class="card-body bg-custom">
                                <h5 class="card-title">Product 1</h5>
                                <button class="card-text">Rp. 250.000</button>
                            </div>
                        </div>
                        <div class="card mx-3">
                            <img src="/asset/image/kisspng-drug-first-aid-kits-first-aid-supplies-snakebite-c-medical-supplies-5b34a570ed4209.2108325015301768809718.png"
                                class="card-img-top shadow" alt="product1">
                            <div class="card-body bg-custom">
                                <h5 class="card-title">Product 1</h5>
                                <button class="card-text">Rp. 250.000</button>
                            </div>
                        </div>
                        <div class="card mx-3">
                            <img src="/asset/image/kisspng-drug-first-aid-kits-first-aid-supplies-snakebite-c-medical-supplies-5b34a570ed4209.2108325015301768809718.png"
                                class="card-img-top shadow" alt="product1">
                            <div class="card-body bg-custom">
                                <h5 class="card-title">Product 1</h5>
                                <button class="card-text">Rp. 250.000</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    </div>
@endsection
