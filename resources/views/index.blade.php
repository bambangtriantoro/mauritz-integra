@extends('layouts.main')

@section('content')
    {{-- Carousel --}}
    <div class="container-xxl">
        <div class="header" id="header">
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
                        <img src="/asset/image/etienne-girardet-sgYamIzhAhg-unsplash.jpg" class="d-block"
                            alt="mauritz carousel 3">
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
        </div>
    </div>

    <div class="container">

        {{-- Services --}}
        <section class="service">
            <h2 class="mb-5">Our <span> Services </span></h2>

            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-3 justify-content-center g-3">
                <div class="col">
                    <div class="card h-100">
                        <div class="card-body">
                            <i class='bx bx-first-aid'></i>
                            <h3 class="card-title">Alat Kesehatan</h3>
                            <h5 class="card-subtitle mb-2 text-muted">HEALTH CARE PRODUCT DIVISION</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                tempor incididunt
                                ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <div class="card-body">
                            <i class='bx bx-restaurant'></i>
                            <h3 class="card-title">Food/Makanan</h3>
                            <h5 class="card-subtitle mb-2 text-muted">AYAM TABOK M2</h5>
                            <p class="card-text">gerai penjualan online dan offline untuk produk makanan jadi.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <div class="card-body">
                            <i class='bx bx-building'></i>
                            <h3 class="card-title">Konstruksi</h3>
                            <h5 class="card-subtitle mb-2 text-muted">JASA KONSTRUKSI TELEKOMUNIKASI DAN PROPERTY</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                tempor incididunt
                                ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

    {{-- About --}}
    <div class="container-xxl">
        <section class="about">
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-lg-2 align-items-center">
                <div class="col">
                    <img src="/asset/image/clayton-cardinalli-mMnU-UMmXok-unsplash.jpg" alt="mauritz team">
                </div>
                <div class="col">
                    <div class="d-flex flex-column justify-content-center m-auto">
                        <h2>About Us</h2>
                        <div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                            <p>Dicta ratione quae tenetur deleniti quas quod natus iusto molestias quibusdam, numquam
                                delectus, fugiat ipsam consectetur reprehenderit cupiditate modi architecto eveniet labore
                                optio
                                animi odio commodi itaque mollitia quo? Maiores, dolorem! Illum aliquam libero nemo corporis
                                eum
                                cumque obcaecati odio facilis porro. Sapiente provident cupiditate iure aperiam dolor cumque
                                dicta perferendis numquam rem nobis quia consequuntur impedit, expedita minima. Reiciendis
                                dicta
                                inventore tempore optio.</p>
                            <button>Read More</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    {{-- Service Detail --}}
    <div class="container">
        <section class="service-detail">
            <div
                class="d-flex flex-wrap flex-sm-wrap flex-md-wrap flex-lg-nowrap justify-content-center align-items-center gap-3">
                <img src="/asset/image/kisspng-drug-first-aid-kits-first-aid-supplies-snakebite-c-medical-supplies-5b34a570ed4209.2108325015301768809718.png"
                    alt="medical kit" class="w-75 me-3">
                <div>
                    <h2>Alat Kesehatan</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, assumenda obcaecati, provident
                        beatae, consectetur ipsam doloremque architecto aperiam et velit eveniet exercitationem nostrum
                        repudiandae rerum consequatur fuga quibusdam recusandae possimus.</p>
                    <button class="hvr-sweep-to-right-type2">Read More</button>
                </div>
                <i class='bx bx-first-aid'></i>
            </div>

            <div
                class="d-flex flex-wrap flex-sm-wrap flex-md-wrap flex-lg-nowrap justify-content-center align-items-center gap-3">
                <img src="/asset/image/kisspng-chilli-chicken-chicken-nugget-chili-pepper-free-spicy-shredded-chicken-pull-png-image-5a694f269b66d3.9032029715168509826365.png"
                    alt="chicken" class="w-75 me-3">
                <div>
                    <h2>Food / Makanan</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, assumenda obcaecati, provident
                        beatae, consectetur ipsam doloremque architecto aperiam et velit eveniet exercitationem nostrum
                        repudiandae rerum consequatur fuga quibusdam recusandae possimus.</p>
                    <button class="hvr-sweep-to-right-type1">Read More</button>
                </div>
                <i class='bx bx-restaurant'></i>
            </div>

            <div class="d-flex flex-wrap flex-md-wrap flex-lg-nowrap gap-3 justify-content-center align-items-center">
                <img src="/asset/image/kisspng-hard-hat-cap-yellow-safety-hat-5a6cd84b853be6.3053923015170826995457.png"
                    alt="construction helmet" class="w-75 me-3">
                <div>
                    <h2>Konstruksi</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, assumenda obcaecati, provident
                        beatae, consectetur ipsam doloremque architecto aperiam et velit eveniet exercitationem nostrum
                        repudiandae rerum consequatur fuga quibusdam recusandae possimus.</p>
                    <button class="hvr-sweep-to-right-type2">Read More</button>
                </div>
                <i class='bx bx-building'></i>
            </div>
        </section>

        {{-- Vision & Mission --}}
        <section class="visionmission" id="visionmission">
            <div class="d-flex justify-content-evenly">
                <h2 class="text-end">Vision</h2>
                <h2>&</h2>
                <h2 class="text-start">Mission</h2>
            </div>
            <ol>
                <li class="animate" data-animate="animate__bounceInLeft">
                    <h5>CUSTOMER SATISFICATION</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, ea.</p>
                </li>
                <li class="animate" data-animate="animate__bounceInLeft">
                    <h5>INTEGRITY</h5>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quasi debitis ratione optio consequuntur
                        tempore similique?</p>
                </li>
                <li class="animate" data-animate="animate__bounceInLeft">
                    <h5>DISCIPLINE & COMMITMENT</h5>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic.</p>
                </li>
                <li class="animate" data-animate="animate__bounceInLeft">
                    <h5>OWNERSHIP</h5>
                    <p>Lorem ipsum dolor sit amet.</p>
                </li>
                <li class="animate" data-animate="animate__bounceInLeft">
                    <h5>TEAMWORK</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, fugiat ipsa repellat sequi sunt maiores
                        harum laboriosam quaerat voluptate magni.</p>
                </li>
            </ol>
        </section>

        {{-- Product --}}
        <section class="product">
            <h2>Our <span>Products</span></h2>
            <div class="card">
                <div>
                    <h3><i class='bx bx-first-aid'></i>Best Sales Products</h3>
                </div>
                <div class="card-body position-relative">
                    <div class="d-flex justify-content-between mb-2">
                        <h3>Medical Kit Products</h3>
                        <button class="hvr-sweep-to-right-type2">See more products</button>
                    </div>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis iste incidunt numquam.
                    Reprehenderit
                    rem velit totam eos sequi numquam maxime nulla eum consectetur, voluptate incidunt temporibus odio
                    corporis asperiores aut.

                    <div class="position-absolute product-item">
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

            <h3>Our <span>Products</span> Brand</h3>
            <div class="product-brand d-flex justify-content-center align-items-center">
                <div>
                    <img src="/asset/image/brand/brand1.jpeg" alt="brand1">
                </div>
                <div>
                    <img src="/asset/image/brand/brand2.jpeg" alt="brand2">
                </div>
                <div>
                    <img src="/asset/image/brand/brand3.jpeg" alt="brand3">
                </div>
                <div>
                    <img src="/asset/image/brand/brand4.jpeg" alt="brand4">
                </div>
                <div>
                    <img src="/asset/image/brand/brand5.jpeg" alt="brand5">
                </div>
                <div>
                    <img src="/asset/image/brand/brand6.jpeg" alt="brand6">
                </div>
                <div>
                    <img src="/asset/image/brand/brand7.jpeg" alt="brand7">
                </div>
                <div>
                    <img src="/asset/image/brand/brand8.jpeg" alt="brand8">
                </div>
                <div>
                    <img src="/asset/image/brand/brand9.jpeg" alt="brand9">
                </div>
                <div>
                    <img src="/asset/image/brand/brand10.jpeg" alt="brand10">
                </div>
                <div>
                    <img src="/asset/image/brand/brand11.jpeg" alt="brand11">
                </div>
                <div>
                    <img src="/asset/image/brand/brand12.jpeg" alt="brand12">
                </div>
            </div>
        </section>
    </div>

    {{-- Contact Us --}}
    <section class="contact-us">
        <div class="container">
            <h2>Contact <span>Us</span></h2>
            <div class="card mb-3 px-5 w-100">
                <div class="card-body">
                    <div class="row row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-lg-3 justify-content-center g-3">
                        <div
                            class="col d-flex justify-content-start justify-content-sm-start justify-content-md-start justify-content-lg-center align-items-center gap-3">
                            <div
                                class="d-flex justify-content-start justify-content-sm-start justify-content-md-start justify-content-lg-center align-items-center gap-3">
                                <i class='bx bxs-home'></i>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Nulla,
                                    maiores!</p>
                            </div>
                        </div>
                        <div
                            class="col d-flex justify-content-start justify-content-sm-start justify-content-md-start justify-content-lg-center align-items-center gap-3">
                            <i class='bx bxs-envelope'></i>
                            <p>email@email.com</p>
                        </div>
                        <div
                            class="col d-flex justify-content-start justify-content-sm-start justify-content-md-start justify-content-lg-center align-items-center gap-3">
                            <i class='bx bxs-phone'></i>
                            <div class="d-flex flex-wrap">
                                <p class="me-3">+62811858977</p>
                                <p class="me-3">+62817858977</p>
                                <p class="me-3">+62816858977</p>
                                <p class="me-3">+6281281686057</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-3">
                <div class="col-12 col-sm-12 col-md-12 col-lg-7">
                    <div class="card">
                        <div class="card-body">
                            <form>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Your Email">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Name</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1"
                                        placeholder="Your Name">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Your Message"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">SUBMIT</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-5">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126754.21663738543!2d107.52250835654745!3d-6.882305507007598!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e73745a3daf5%3A0xf6fd5ac9115ff3a3!2sOSHA%20Technology!5e0!3m2!1sen!2sid!4v1658156807567!5m2!1sen!2sid"
                        allowfullscreen="true" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
@endsection
