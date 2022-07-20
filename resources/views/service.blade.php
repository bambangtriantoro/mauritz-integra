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
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
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
            <div class="service-1">
                <div class="container">
                    <div class="row align-items-center py-5">
                        <div class="col-12 col-md-7">
                            <h2 class="text-start"><i class="bx bx-first-aid"></i> Service 1</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo eligendi libero debitis
                                excepturi
                                laudantium in. Rerum aliquid ea placeat sint. Doloribus laboriosam nesciunt eum natus
                                voluptates
                                libero! Et repellendus esse incidunt animi repudiandae nulla eaque, cum necessitatibus
                                architecto
                                quos, illum aliquam ducimus eius. Similique omnis nihil temporibus tempore, cupiditate quis!
                            </p>
                        </div>
                        <div class="col-12 col-md-5">
                            <img src="/asset/image/kisspng-drug-first-aid-kits-first-aid-supplies-snakebite-c-medical-supplies-5b34a570ed4209.2108325015301768809718.png"
                                class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
                <div class="position-relative">
                    <div class="container mb-0">
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
                                    <a href="/shop"><button class="card-text">Rp. 250.000</button></a>
                                </div>
                            </div>
                            <div class="card mx-3">
                                <img src="/asset/image/kisspng-drug-first-aid-kits-first-aid-supplies-snakebite-c-medical-supplies-5b34a570ed4209.2108325015301768809718.png"
                                    class="card-img-top shadow" alt="product1">
                                <div class="card-body bg-custom">
                                    <h5 class="card-title">Product 1</h5>
                                    <a href="/shop"><button class="card-text">Rp. 250.000</button></a>
                                </div>
                            </div>
                            <div class="card mx-3">
                                <img src="/asset/image/kisspng-drug-first-aid-kits-first-aid-supplies-snakebite-c-medical-supplies-5b34a570ed4209.2108325015301768809718.png"
                                    class="card-img-top shadow" alt="product1">
                                <div class="card-body bg-custom">
                                    <h5 class="card-title">Product 1</h5>
                                    <a href="/shop"><button class="card-text">Rp. 250.000</button></a>
                                </div>
                            </div>
                            <div class="card mx-3">
                                <img src="/asset/image/kisspng-drug-first-aid-kits-first-aid-supplies-snakebite-c-medical-supplies-5b34a570ed4209.2108325015301768809718.png"
                                    class="card-img-top shadow" alt="product1">
                                <div class="card-body bg-custom">
                                    <h5 class="card-title">Product 1</h5>
                                    <a href="/shop"><button class="card-text">Rp. 250.000</button></a>
                                </div>
                            </div>
                            <div class="card mx-3">
                                <img src="/asset/image/kisspng-drug-first-aid-kits-first-aid-supplies-snakebite-c-medical-supplies-5b34a570ed4209.2108325015301768809718.png"
                                    class="card-img-top shadow" alt="product1">
                                <div class="card-body bg-custom">
                                    <h5 class="card-title">Product 1</h5>
                                    <a href="/shop"><button class="card-text">Rp. 250.000</button></a>
                                </div>
                            </div>
                            <div class="card mx-3">
                                <img src="/asset/image/kisspng-drug-first-aid-kits-first-aid-supplies-snakebite-c-medical-supplies-5b34a570ed4209.2108325015301768809718.png"
                                    class="card-img-top shadow" alt="product1">
                                <div class="card-body bg-custom">
                                    <h5 class="card-title">Product 1</h5>
                                    <a href="/shop"><button class="card-text">Rp. 250.000</button></a>
                                </div>
                            </div>
                            <div class="card mx-3">
                                <img src="/asset/image/kisspng-drug-first-aid-kits-first-aid-supplies-snakebite-c-medical-supplies-5b34a570ed4209.2108325015301768809718.png"
                                    class="card-img-top shadow" alt="product1">
                                <div class="card-body bg-custom">
                                    <h5 class="card-title">Product 1</h5>
                                    <a href="/shop"><button class="card-text">Rp. 250.000</button></a>
                                </div>
                            </div>
                            <div class="card mx-3">
                                <img src="/asset/image/kisspng-drug-first-aid-kits-first-aid-supplies-snakebite-c-medical-supplies-5b34a570ed4209.2108325015301768809718.png"
                                    class="card-img-top shadow" alt="product1">
                                <div class="card-body bg-custom">
                                    <h5 class="card-title">Product 1</h5>
                                    <a href="/shop"><button class="card-text">Rp. 250.000</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="container">
                        <h2>Service 1 <span>Products</span> Brand</h2>
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
                    </div>
                </div>

                <div>
                    <div class="container">
                        <h2><span>Shop</span> Now!</h2>
                        <div class="d-flex flex-wrap justify-content-center align-items-center gap-3">
                            <a target="_blank" href="https://shopee.co.id/maurindotekniksolusi">
                                <img src="https://www.pngmart.com/files/12/Shopee-Logo-PNG-File.png" class="img-fluid"
                                    alt="">
                            </a>
                            {{-- <a target="_blank" href="https://shopee.co.id/maureenintegrastore">
                                <img src="https://www.pngmart.com/files/12/Shopee-Logo-PNG-File.png" class="img-fluid"
                                    alt="">
                            </a> --}}
                            <a target="_blank" href="https://www.tokopedia.com/mauin?source=universe&st=product">
                                <img src="https://assets.tokopedia.net/assets-tokopedia-lite/v2/arael/kratos/36c1015e.png"
                                    class="img-fluid" alt="">
                            </a>
                            {{-- <a target="_blank" href="https://www.tokopedia.com/maureenintegrast?source=universe&st=product">
                                <img src="https://assets.tokopedia.net/assets-tokopedia-lite/v2/arael/kratos/36c1015e.png"
                                    class="img-fluid" alt="">
                            </a> --}}
                            <a target="_blank" href="https://www.blibli.com/merchant/mauritz-integra/MAI-60046">
                                <img src="https://d2k52l910ymyzx.cloudfront.net/home/wp-content/uploads/2022/01/24112756/1_Mn1__te_k3ALl0qySqLy1A.png"
                                    class="img-fluid" alt="">
                            </a>
                            {{-- <a target="_blank" href="https://www.blibli.com/merchant/maureen-integra-official-store/MAI-60126">
                                <img src="https://d2k52l910ymyzx.cloudfront.net/home/wp-content/uploads/2022/01/24112756/1_Mn1__te_k3ALl0qySqLy1A.png"
                                    class="img-fluid" alt="">
                            </a> --}}
                            <a target="_blank"
                                href="https://www.lazada.co.id/shop/mauritz-integra-store/?spm=a2o4j.pdp_revamp.seller.1.69b95d25fIgTle&itemId=6705648581&channelSource=pdp">
                                <img src="https://www.alfaizcapital.com/wp-content/uploads/2020/06/App-icon-500x500-o9l0q6jktlpu5pobvp3w90cnhrmsi8mvvw6931f91k.png"
                                    class="img-fluid" alt="">
                            </a>
                            <a target="_blank"
                                href="https://www.bukalapak.com/u/maucengmartinus?from=omnisearch&from_keyword_history=false&search_source=omnisearch_user&source=navbar">
                                <img src="https://res.cloudinary.com/crunchbase-production/image/upload/c_lpad,h_256,w_256,f_auto,q_auto:eco,dpr_1/wgwdrf8fsk9fnc2wngdf"
                                    class="img-fluid" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="service-2">
                <div class="container">
                    <div class="row align-items-center py-5">
                        <div class="col-12 col-md-7">
                            <h2 class="text-start"><i class="bx bx-restaurant"></i> Service 2</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo eligendi libero debitis
                                excepturi
                                laudantium in. Rerum aliquid ea placeat sint. Doloribus laboriosam nesciunt eum natus
                                voluptates
                                libero! Et repellendus esse incidunt animi repudiandae nulla eaque, cum necessitatibus
                                architecto
                                quos, illum aliquam ducimus eius. Similique omnis nihil temporibus tempore, cupiditate quis!
                            </p>
                        </div>
                        <div class="col-12 col-md-5">
                            <img src="/asset/image/kisspng-chilli-chicken-chicken-nugget-chili-pepper-free-spicy-shredded-chicken-pull-png-image-5a694f269b66d3.9032029715168509826365.png"
                                class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
                <div class="position-relative">
                    <div class="container mb-0">
                        <h2>Service 2 Products</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed minus provident facilis consectetur
                            possimus quos doloremque illum deserunt hic in quaerat reiciendis, distinctio, mollitia rerum
                            corporis. Quis labore similique iure?</p>
                        <div class="position-absolute service-product-item">
                            <div class="card mx-3">
                                <img src="/asset/image/kisspng-chilli-chicken-chicken-nugget-chili-pepper-free-spicy-shredded-chicken-pull-png-image-5a694f269b66d3.9032029715168509826365.png"
                                    class="card-img-top shadow" alt="product1">
                                <div class="card-body bg-custom">
                                    <h5 class="card-title">Product 1</h5>
                                    <a href="/shop"><button class="card-text">Rp. 25.000</button></a>
                                </div>
                            </div>
                            <div class="card mx-3">
                                <img src="/asset/image/kisspng-chilli-chicken-chicken-nugget-chili-pepper-free-spicy-shredded-chicken-pull-png-image-5a694f269b66d3.9032029715168509826365.png"
                                    class="card-img-top shadow" alt="product1">
                                <div class="card-body bg-custom">
                                    <h5 class="card-title">Product 1</h5>
                                    <a href="/shop"><button class="card-text">Rp. 25.000</button></a>
                                </div>
                            </div>
                            <div class="card mx-3">
                                <img src="/asset/image/kisspng-chilli-chicken-chicken-nugget-chili-pepper-free-spicy-shredded-chicken-pull-png-image-5a694f269b66d3.9032029715168509826365.png"
                                    class="card-img-top shadow" alt="product1">
                                <div class="card-body bg-custom">
                                    <h5 class="card-title">Product 1</h5>
                                    <a href="/shop"><button class="card-text">Rp. 25.000</button></a>
                                </div>
                            </div>
                            <div class="card mx-3">
                                <img src="/asset/image/kisspng-chilli-chicken-chicken-nugget-chili-pepper-free-spicy-shredded-chicken-pull-png-image-5a694f269b66d3.9032029715168509826365.png"
                                    class="card-img-top shadow" alt="product1">
                                <div class="card-body bg-custom">
                                    <h5 class="card-title">Product 1</h5>
                                    <a href="/shop"><button class="card-text">Rp. 25.000</button></a>
                                </div>
                            </div>
                            <div class="card mx-3">
                                <img src="/asset/image/kisspng-chilli-chicken-chicken-nugget-chili-pepper-free-spicy-shredded-chicken-pull-png-image-5a694f269b66d3.9032029715168509826365.png"
                                    class="card-img-top shadow" alt="product1">
                                <div class="card-body bg-custom">
                                    <h5 class="card-title">Product 1</h5>
                                    <a href="/shop"><button class="card-text">Rp. 25.000</button></a>
                                </div>
                            </div>
                            <div class="card mx-3">
                                <img src="/asset/image/kisspng-chilli-chicken-chicken-nugget-chili-pepper-free-spicy-shredded-chicken-pull-png-image-5a694f269b66d3.9032029715168509826365.png"
                                    class="card-img-top shadow" alt="product1">
                                <div class="card-body bg-custom">
                                    <h5 class="card-title">Product 1</h5>
                                    <a href="/shop"><button class="card-text">Rp. 25.000</button></a>
                                </div>
                            </div>
                            <div class="card mx-3">
                                <img src="/asset/image/kisspng-chilli-chicken-chicken-nugget-chili-pepper-free-spicy-shredded-chicken-pull-png-image-5a694f269b66d3.9032029715168509826365.png"
                                    class="card-img-top shadow" alt="product1">
                                <div class="card-body bg-custom">
                                    <h5 class="card-title">Product 1</h5>
                                    <a href="/shop"><button class="card-text">Rp. 25.000</button></a>
                                </div>
                            </div>
                            <div class="card mx-3">
                                <img src="/asset/image/kisspng-chilli-chicken-chicken-nugget-chili-pepper-free-spicy-shredded-chicken-pull-png-image-5a694f269b66d3.9032029715168509826365.png"
                                    class="card-img-top shadow" alt="product1">
                                <div class="card-body bg-custom">
                                    <h5 class="card-title">Product 1</h5>
                                    <a href="/shop"><button class="card-text">Rp. 25.000</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="container">
                        <h2><span>Shop</span> Now!</h2>
                        <div class="d-flex flex-wrap justify-content-center align-items-center gap-3">
                            <a target="_blank" href="https://www.gojek.com/gofood/">
                                <img src="https://seeklogo.com/images/G/gofood-logo-0581DE183D-seeklogo.com.png"
                                    class="img-fluid" alt="">
                            </a>
                            <a target="_blank" href="https://food.grab.com/id/en/">
                                <img src="https://cdn.kibrispdr.org/data/605/grab-png-logo-31.png" class="img-fluid"
                                    alt="">
                            </a>
                            <a target="_blank" href="https://shopee.co.id/m/shopeefood">
                                <img src="https://seeklogo.com/images/S/shopee-food-logo-F37D8AD493-seeklogo.com.png"
                                    class="img-fluid" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="service-3">
                <div class="container">
                    <div class="row align-items-center py-5">
                        <div class="col-12 col-md-7">
                            <h2 class="text-start"><i class="bx bx-building"></i> Service 3</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo eligendi libero debitis
                                excepturi
                                laudantium in. Rerum aliquid ea placeat sint. Doloribus laboriosam nesciunt eum natus
                                voluptates
                                libero! Et repellendus esse incidunt animi repudiandae nulla eaque, cum necessitatibus
                                architecto
                                quos, illum aliquam ducimus eius. Similique omnis nihil temporibus tempore, cupiditate quis!
                            </p>
                        </div>
                        <div class="col-12 col-md-5">
                            <img src="/asset/image/kisspng-hard-hat-cap-yellow-safety-hat-5a6cd84b853be6.3053923015170826995457.png"
                                class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
                <div class="position-relative">
                    <div class="container mb-0">
                        <h2>Service 3 Products</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed minus provident facilis consectetur
                            possimus quos doloremque illum deserunt hic in quaerat reiciendis, distinctio, mollitia rerum
                            corporis. Quis labore similique iure?</p>
                        <div class="position-absolute service-product-item">
                            <div class="card mx-3">
                                <img src="/asset/image/kisspng-building-building-5a6a4fde7aedd5.0993594815169167025035.png"
                                    class="card-img-top shadow" alt="product1">
                                <div class="card-body bg-custom">
                                    <h5 class="card-title">Product 1</h5>
                                </div>
                            </div>
                            <div class="card mx-3">
                                <img src="/asset/image/kisspng-building-building-5a6a4fde7aedd5.0993594815169167025035.png"
                                    class="card-img-top shadow" alt="product1">
                                <div class="card-body bg-custom">
                                    <h5 class="card-title">Product 1</h5>
                                </div>
                            </div>
                            <div class="card mx-3">
                                <img src="/asset/image/kisspng-building-building-5a6a4fde7aedd5.0993594815169167025035.png"
                                    class="card-img-top shadow" alt="product1">
                                <div class="card-body bg-custom">
                                    <h5 class="card-title">Product 1</h5>
                                </div>
                            </div>
                            <div class="card mx-3">
                                <img src="/asset/image/kisspng-building-building-5a6a4fde7aedd5.0993594815169167025035.png"
                                    class="card-img-top shadow" alt="product1">
                                <div class="card-body bg-custom">
                                    <h5 class="card-title">Product 1</h5>
                                </div>
                            </div>
                            <div class="card mx-3">
                                <img src="/asset/image/kisspng-building-building-5a6a4fde7aedd5.0993594815169167025035.png"
                                    class="card-img-top shadow" alt="product1">
                                <div class="card-body bg-custom">
                                    <h5 class="card-title">Product 1</h5>
                                </div>
                            </div>
                            <div class="card mx-3">
                                <img src="/asset/image/kisspng-building-building-5a6a4fde7aedd5.0993594815169167025035.png"
                                    class="card-img-top shadow" alt="product1">
                                <div class="card-body bg-custom">
                                    <h5 class="card-title">Product 1</h5>
                                </div>
                            </div>
                            <div class="card mx-3">
                                <img src="/asset/image/kisspng-building-building-5a6a4fde7aedd5.0993594815169167025035.png"
                                    class="card-img-top shadow" alt="product1">
                                <div class="card-body bg-custom">
                                    <h5 class="card-title">Product 1</h5>
                                </div>
                            </div>
                            <div class="card mx-3">
                                <img src="/asset/image/kisspng-building-building-5a6a4fde7aedd5.0993594815169167025035.png"
                                    class="card-img-top shadow" alt="product1">
                                <div class="card-body bg-custom">
                                    <h5 class="card-title">Product 1</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="container">
                        <h2>Contact <span>Us</span> Now!</h2>
                        <div class="d-flex flex-wrap justify-content-center align-items-center gap-3">
                            <a target="_blank" href="https://goo.gl/maps/c3voP2ucqSJ1PpAs5">
                                <i class="bx bx-map"></i>
                            </a>
                            <a target="_blank" href="mailto:maurindotekniksolusi@gmail.com">
                                <i class="bx bx-envelope"></i>
                            </a>
                            <a target="_blank" href="https://wa.me/+6281281686057">
                                <i class="bx bx-phone"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
