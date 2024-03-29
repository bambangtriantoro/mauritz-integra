@extends('layouts.main')
@section('content')
    {{-- Carousel --}}
    <div class="container-xxl">
        <div class="header" id="header">
            <div id="carousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="/asset/image/pexels-tara-winstead-7722685.jpg" class="d-block" alt="mauritz carousel 1">
                        <div class="carousel-caption">
                            <h1 class="gap-md-1 gap-lg-3">
                                <img src="/asset/image/logo/logo maurindo alkes only.png" />
                                MAURINDO
                                ALKES <br>
                            </h1>
                            <h2><span>Penyedia Alat Kesehatan</span></h2>
                            <p class="mt-lg-3">Kami menyediakan berbagai alat kesehatan dengan kualitas yang terbaik dan
                                juga
                                brand yang
                                ternama.</p>
                            <a href="#service" class="btn btn-danger mt-1">Pelajari lebih lanjut</a>
                        </div>
                    </div>
                    {{-- <div class="carousel-item">
                        <img src="/asset/image/leo-roza-P_z_xlMGuEk-unsplash.jpg" class="d-block" alt="mauritz carousel 2">
                        <div class="carousel-caption d-none d-md-block">
                            <h2><i class="bx bx-restaurant"></i> Ayam Tabok M2</h2>
                            <p>Kami juga memiliki gerai penjualan untuk produk makanan jadi, ayam tabok m2.</p>
                            <button class="btn btn-danger">Pelajari lebih lanjut</button>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="/asset/image/etienne-girardet-sgYamIzhAhg-unsplash.jpg" class="d-block"
                            alt="mauritz carousel 3">
                        <div class="carousel-caption d-none d-md-block">
                            <h2><i class="bx bx-building"></i> Konstruksi</h2>
                            <p>Kami juga menawarkan jasa konstruksi telekomunikasi dan property.</p>
                            <button class="btn btn-danger">Pelajari lebih lanjut</button>
                        </div>
                    </div> --}}
                </div>
                {{-- <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bg-custom" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon bg-custom" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button> --}}
            </div>
        </div>
    </div>

    <div class="container">

        {{-- Services --}}
        <section class="service" id="service">
            <h2 class="mb-5 animate" data-animate="animate__fadeInUp">Belanja <span>di</span> Kami</h2>

            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 justify-content-center g-3">
                <div class="col animate" data-animate="animate__slideInUp">
                    <div class="card h-100">
                        <div class="card-body">
                            <i class='bx bx-money'></i>
                            <h3 class="card-title">Harga Cocok</h3>
                            <h5 class="card-subtitle mb-2 text-muted">barang sebanding dengan harga</h5>
                            <p class="card-text">Alat kesehatan yang kami jual sudah dipasangkan harga yang sesuai dengan
                                kualitasnya.</p>
                        </div>
                    </div>
                </div>
                <div class="col animate" data-animate="animate__slideInUp">
                    <div class="card h-100">
                        <div class="card-body">
                            <i class='bx bx-like'></i>
                            <h3 class="card-title">Kualitas Terjamin</h3>
                            <h5 class="card-subtitle mb-2 text-muted">kualitas terbaik untuk anda</h5>
                            <p class="card-text">Alat kesehatan yang kami jual tentunya memiliki kualitas terbaik dengan
                                brand yang terpercaya.</p>
                        </div>
                    </div>
                </div>
                <div class="col animate" data-animate="animate__slideInUp">
                    <div class="card h-100">
                        <div class="card-body">
                            <i class='bx bx-box'></i>
                            <h3 class="card-title">Stok Banyak</h3>
                            <h5 class="card-subtitle mb-2 text-muted">stok selalu tersedia</h5>
                            <p class="card-text">Stok persediaan kami sangat rutin di diperbaharui</p>
                        </div>
                    </div>
                </div>
                {{-- <div class="col animate" data-animate="animate__slideInUp">
                    <div class="card h-100">
                        <div class="card-body">
                            <i class='bx bx-restaurant'></i>
                            <h3 class="card-title">Food/Makanan</h3>
                            <h5 class="card-subtitle mb-2 text-muted">AYAM TABOK M2</h5>
                            <p class="card-text">Gerai penjualan online dan offline untuk produk makanan jadi.</p>
                        </div>
                    </div>
                </div>
                <div class="col animate" data-animate="animate__slideInUp">
                    <div class="card h-100">
                        <div class="card-body">
                            <i class='bx bx-building'></i>
                            <h3 class="card-title">Konstruksi</h3>
                            <h5 class="card-subtitle mb-2 text-muted">JASA KONSTRUKSI TELEKOMUNIKASI DAN PROPERTY</h5>
                            <p class="card-text">Jasa konstruksi terbaik dengan harga terjangkau untuk anda.</p>
                        </div>
                    </div>
                </div> --}}
            </div>
        </section>

    </div>

    {{-- About --}}
    <div class="container-xxl">
        <section class="about">
            <div class="row row-cols-1 row-cols-lg-2 align-items-center">
                <div class="col animate" data-animate="animate__slideInLeft">
                    <img src="/asset/image/logo/logo2-1.jpeg" alt="mauritz team">
                </div>
                <div class="col animate" data-animate="animate__slideInRight">
                    <div class="d-flex flex-column justify-content-center m-auto">
                        <h2>Tentang Kami</h2>
                        <div>
                            <p>Maurindo Group</p>
                            <p>Kami adalah perusahaan professional bidang Penjualan dan Pemasaran yang telah meraup segudang
                                pengalaman dalam bidang Farmasi dan Obat Obatan, Telekomunikasi dan IT serta di bidang
                                peralatan Teknologi Digital yang telah berdiri sejak tahun 2015.</p>
                            <a href="/about"><button>Selengkapnya</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    {{-- Service Detail --}}
    <div class="container">
        <section class="service-detail">
            <div class="animate d-flex flex-wrap flex-lg-nowrap justify-content-center align-items-center gap-3"
                data-animate="animate__bounceInLeft">
                <img src="/asset/image/kisspng-drug-first-aid-kits-first-aid-supplies-snakebite-c-medical-supplies-5b34a570ed4209.2108325015301768809718.png"
                    alt="medical kit" class="w-50 me-3">
                <div class="w-100">
                    <h2>Alat Kesehatan</h2>
                    <p>Kami menyediakan berbagai alat kesehatan dengan kualitas yang terbaik dan juga brand yang
                        ternama. Dengan lebih dari 600 jenis produk yang tersedia. Dijual di marketplace dan sudah menjadi
                        toko dengan standar diamond yang menjamin bahwa kami adalah penyedia alat kesehatan yang terpercaya.
                    </p>
                    <a href="/service"><button class="hvr-sweep-to-right-type2">Selengkapnya</button></a>
                </div>
                <div class="logo-by-maurindo"><img src="/asset/image/logo/logo maurindo alkes only.png" /></div>
            </div>

            {{-- <div class="animate d-flex flex-wrap flex-lg-nowrap justify-content-center align-items-center gap-3"
                data-animate="animate__bounceInRight">
                <img src="/asset/image/kisspng-chilli-chicken-chicken-nugget-chili-pepper-free-spicy-shredded-chicken-pull-png-image-5a694f269b66d3.9032029715168509826365.png"
                    alt="chicken" class="w-50 me-3">
                <div class="w-100">
                    <h2>Food / Makanan</h2>
                    <p>Kami memiliki gerai penjualan offline dan online untuk produk makanan jadi yaitu AYAM TABOK M2.
                        Dengan pengolahan ayam yang higienis lalu dicampur dengan berbagai rempah yang menambah cipta rasa,
                        kami
                        mampu menyajikan makanan yang higienis dan kaya rasa. </p>
                    <a href="/service"><button class="hvr-sweep-to-right-type1">Selengkapnya</button></a>
                </div>
                <i class='bx bx-restaurant'></i>
            </div>

            <div class="animate d-flex flex-wrap flex-lg-nowrap justify-content-center align-items-center gap-3"
                data-animate="animate__bounceInLeft">
                <img src="/asset/image/kisspng-hard-hat-cap-yellow-safety-hat-5a6cd84b853be6.3053923015170826995457.png"
                    alt="construction helmet" class="w-50 me-3">
                <div class="w-100">
                    <h2>Konstruksi</h2>
                    <p>Kami juga menawarkan jasa konstruksi telekomunikasi dan property. Dengan harga yang sangat cocok kami
                        dapat memenuhi ekspektasi anda. Kami bersedia untuk memberikan yang terbaik.</p>
                    <a href="/service"><button class="hvr-sweep-to-right-type2">Selengkapnya</button></a>
                </div>
                <i class='bx bx-building'></i>
            </div> --}}
        </section>

        {{-- Vision & Mission --}}
        <section class="visionmission" id="visionmission">
            <div class="d-flex justify-content-evenly animate" data-animate="animate__fadeInUp">
                <h2 class="text-end">Visi</h2>
                <h2>&</h2>
                <h2 class="text-start">Misi</h2>
            </div>
            <ol>
                <li class="animate" data-animate="animate__bounceInLeft">
                    <h5>CUSTOMER SATISFICATION</h5>
                    <p>Kami sangat mengutamakan kepuasan customer dalam menjalankan bisnis kami.</p>
                </li>
                <li class="animate" data-animate="animate__bounceInRight">
                    <h5>INTEGRITY</h5>
                    <p>Kami sangat menjunjung tinggi kejujuran.</p>
                </li>
                <li class="animate" data-animate="animate__bounceInLeft">
                    <h5>DISCIPLINE & COMMITMENT</h5>
                    <p>Kami selalu berusaha yang terbaik untuk menjaga kedisiplinan dan terus berkomitmen.</p>
                </li>
                <li class="animate" data-animate="animate__bounceInRight">
                    <h5>OWNERSHIP</h5>
                    <p>Rasa memiliki yang kuat membuahkan rasa peduli yang kuat juga.</p>
                </li>
                <li class="animate" data-animate="animate__bounceInLeft">
                    <h5>TEAMWORK</h5>
                    <p>Bekerja sama sangatlah penting bagi kami untuk menjadi yang terbaik.</p>
                </li>
            </ol>
        </section>

        {{-- Product --}}
        <section class="product">
            <h2 class="animate" data-animate="animate__fadeInUp"><span>Produk</span> Kami</h2>
            <div class="card animate" data-animate="animate__slideInUp">
                <div>
                    <h3>
                        <img src="/asset/image/logo/logo maurindo alkes only.png" class="logo-maurindo-alkes" />
                        Penjualan Terbaik
                    </h3>
                </div>
                <div class="card-body">
                    <div class="d-flex flex-wrap-reverse justify-content-between mx-2 mx-lg-0 mb-2 gap-3">
                        <h3>Produk Alat Kesehatan Unggulan</h3>
                        <a href="/shop"><button class="hvr-sweep-to-right-type2"><i class='bx bx-basket'></i> Ke
                                Marketplaces</button></a>
                    </div>
                    Berikut produk-produk unggulan kami dengan brand terpercaya dengan kualitas terbaik,
                    <div class="position-relative">
                        <div class="product-item position-absolute" data-animate="animate__zoomIn">
                            <div class="card mx-3">
                                <img src="/asset/image/product/tabung 1m3 Rp. 434.899.jpg" class="card-img-top shadow"
                                    alt="tabung oksigen img">
                                <div class="card-body bg-custom">
                                    <h5 class="card-title">Tabung Oksigen 1m³</h5>
                                    <a target="_blank"
                                        href="https://www.tokopedia.com/mauin/tabung-oksigen-1m3-tabung-o2-1-m3-isi-full-tabung-only-tabung-1m3"><button
                                            class="card-text">Rp. 434.899</button></a>
                                </div>
                            </div>
                            <div class="card mx-3">
                                <img src="/asset/image/product/pouch dompet kotak outdoor first aid kit Rp. 13.899.jpg"
                                    class="card-img-top shadow" alt="first aid kit pouch img">
                                <div class="card-body bg-custom">
                                    <h5 class="card-title">Dompet First Aid Kit</h5>
                                    <a target="_blank"
                                        href="https://www.tokopedia.com/mauin/onemed-p3k-warna-merah-model-pouch-dompet-kotak-outdoor-first-aid-kit"><button
                                            class="card-text">Rp. 13.899</button></a>
                                </div>
                            </div>
                            <div class="card mx-3">
                                <img src="/asset/image/product/tongkat bantu jalan Rp. 96.499.jpg"
                                    class="card-img-top shadow" alt="tongkat bantu jalan img">
                                <div class="card-body bg-custom">
                                    <h5 class="card-title">Tongkat Bantu Jalan kaki 4</h5>
                                    <a target="_blank"
                                        href="https://www.tokopedia.com/mauin/tongkat-kaki-4-tongkat-bantu-jalan-tongkat-orang-tua-tongkat"><button
                                            class="card-text">Rp. 96.499</button></a>
                                </div>
                            </div>
                            <div class="card mx-3">
                                <img src="/asset/image/product/Handscoon Gloves Nitrile.jpg" class="card-img-top shadow"
                                    alt="tongkat bantu jalan img">
                                <div class="card-body bg-custom">
                                    <h5 class="card-title">Hansdscoon Gloves Nitrile</h5>
                                    <a target="_blank"
                                        href="https://www.tokopedia.com/mauin/handscoon-gloves-nitrile-sarung-tangan-tanpa-powder-safegloves-reguler-blue-xs"><button
                                            class="card-text">Rp. 51.899</button></a>
                                </div>
                            </div>
                            <div class="card mx-3">
                                <img src="/asset/image/product/Stetoskop deluxe Rp. 45.899.jpg"
                                    class="card-img-top shadow" alt="product1">
                                <div class="card-body bg-custom">
                                    <h5 class="card-title">Stetoskop Deluxe</h5>
                                    <a target="_blank"
                                        href="https://www.tokopedia.com/mauin/onemed-stetoskop-deluxe-non-transparan"><button
                                            class="card-text">Rp. 45.899</button></a>
                                </div>
                            </div>
                            <div class="card mx-3">
                                <img src="/asset/image/product/nesco transport swab 1pcs nesco cotton swab sterile lidi steril Rp. 1.999.jpg"
                                    class="card-img-top shadow" alt="product1">
                                <div class="card-body bg-custom">
                                    <h5 class="card-title">Nesco Cotton Sterile Swabstick</h5>
                                    <a target="_blank"
                                        href="https://www.tokopedia.com/mauin/nesco-transport-swab-1-pcs-nesco-cotton-swab-sterile-lidi-steril"><button
                                            class="card-text">Rp. 1.999</button></a>
                                </div>
                            </div>
                            <div class="card mx-3">
                                <img src="/asset/image/product/Nurse Kit Rp.183.899.jpg" class="card-img-top shadow"
                                    alt="product1">
                                <div class="card-body bg-custom">
                                    <h5 class="card-title">Nurse Kit</h5>
                                    <a target="_blank"
                                        href="https://www.tokopedia.com/mauin/onemed-nurse-kit-set-standard-lengkap-paket-alat-pemeriksaan-suster"><button
                                            class="card-text">Rp. 183.899</button></a>
                                </div>
                            </div>
                            <div class="card mx-3">
                                <img src="/asset/image/product/Tensi aneroid onemed tensimeter kompas Rp. 79.999.jpg"
                                    class="card-img-top shadow" alt="product1">
                                <div class="card-body bg-custom">
                                    <h5 class="card-title">Tensi Aneroid Onemed Tensimeter Kompas</h5>
                                    <a target="_blank"
                                        href="https://www.tokopedia.com/mauin/tensi-aneroid-onemed-tensimeter-kompas-one-med-abu-abu"><button
                                            class="card-text">Rp. 79.999</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <h3 class="animate" data-animate="animate__fadeInUp">Partner <span>Produk</span></h3>
            <div class="position-relative">
                <div class="product-brand d-flex justify-content-center align-items-center animate"
                    data-animate="animate__zoomIn">
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

            <h3 class="animate" data-animate="animate__fadeInUp"><span>Belanja</span> Sekarang!</h3>
            <div class="d-flex flex-wrap justify-content-center align-items-center gap-5 animate"
                data-animate="animate__zoomIn">
                <a type="button" data-bs-toggle="modal" data-bs-target="#modalShopee">
                    <img src="https://www.pngmart.com/files/12/Shopee-Logo-PNG-File.png" class="img-fluid"
                        alt="shopee link">
                </a>
                {{-- <a target="_blank" href="https://shopee.co.id/maureenintegrastore">
                    <img src="https://www.pngmart.com/files/12/Shopee-Logo-PNG-File.png" class="img-fluid"
                        alt="shopee link">
                </a> --}}
                <a type="button" data-bs-toggle="modal" data-bs-target="#modalTokopedia">
                    <img src="https://assets.tokopedia.net/assets-tokopedia-lite/v2/arael/kratos/36c1015e.png"
                        class="img-fluid" alt="tokopedia link">
                </a>
                {{-- <a target="_blank" href="https://www.tokopedia.com/maureenintegrast?source=universe&st=product">
                    <img src="https://assets.tokopedia.net/assets-tokopedia-lite/v2/arael/kratos/36c1015e.png"
                        class="img-fluid" alt="tokopedia link">
                </a> --}}
                <a type="button" data-bs-toggle="modal" data-bs-target="#modalBlibli">
                    <img src="https://d2k52l910ymyzx.cloudfront.net/home/wp-content/uploads/2022/01/24112756/1_Mn1__te_k3ALl0qySqLy1A.png"
                        class="img-fluid" alt="blibli link">
                </a>
                {{-- <a target="_blank" href="https://www.blibli.com/merchant/maureen-integra-official-store/MAI-60126">
                    <img src="https://d2k52l910ymyzx.cloudfront.net/home/wp-content/uploads/2022/01/24112756/1_Mn1__te_k3ALl0qySqLy1A.png"
                        class="img-fluid" alt="blibli link">
                </a> --}}
                <a target="_blank"
                    href="https://www.lazada.co.id/shop/mauritz-integra-store/?spm=a2o4j.pdp_revamp.seller.1.69b95d25fIgTle&itemId=6705648581&channelSource=pdp">
                    <img src="https://www.alfaizcapital.com/wp-content/uploads/2020/06/App-icon-500x500-o9l0q6jktlpu5pobvp3w90cnhrmsi8mvvw6931f91k.png"
                        class="img-fluid" alt="lazada link">
                </a>
                <a target="_blank"
                    href="https://www.bukalapak.com/u/maucengmartinus?from=omnisearch&from_keyword_history=false&search_source=omnisearch_user&source=navbar">
                    <img src="https://res.cloudinary.com/crunchbase-production/image/upload/c_lpad,h_256,w_256,f_auto,q_auto:eco,dpr_1/wgwdrf8fsk9fnc2wngdf"
                        class="img-fluid" alt="bukalapak link">
                </a>
                <a type="button" data-bs-toggle="modal" data-bs-target="#modalTiktok">
                    <img src="https://pngimg.com/uploads/tiktok/tiktok_PNG8.png" class="img-fluid" alt="tiktok link">
                </a>
            </div>
        </section>
    </div>

    {{-- Shopee Modal --}}
    <div class="modal fade shop-now-modal" id="modalShopee" tabindex="-1" aria-labelledby="modalShopeeLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-orange text-white">
                    <h5 class="modal-title " id="modalShopeeLabel">
                        <img src="https://www.pngmart.com/files/12/Shopee-Logo-PNG-File.png" width="40"
                            class="img-fluid" alt="">
                        Belanja di Shopee
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row justify-content-center g-3">
                        <a target="_blank" href="https://shopee.co.id/maurindotekniksolusi"
                            class="col w-100 text-center bg-orange mx-3">
                            Mauritz Integra
                        </a>
                        <a target="_blank" href="https://shopee.co.id/maureenintegrastore"
                            class="col w-100 text-center bg-orange mx-3">Maureen Integra</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Tokopedia Modal --}}
    <div class="modal fade shop-now-modal" id="modalTokopedia" tabindex="-1" aria-labelledby="tokopediaLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-green text-white">
                    <h5 class="modal-title " id="tokopediaLabel">
                        <img src="https://assets.tokopedia.net/assets-tokopedia-lite/v2/arael/kratos/36c1015e.png"
                            class="img-fluid" alt="tokopedia link" width="50">
                        Belanja di Tokopedia
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row justify-content-center g-3">
                        <a target="_blank" href="https://www.tokopedia.com/mauin?source=universe&st=product"
                            class="col w-100 text-center bg-green mx-3">
                            Mauritz Integra
                        </a>
                        <a target="_blank" href="https://www.tokopedia.com/maureenintegrast?source=universe&st=product"
                            class="col w-100 text-center bg-green mx-3">Maureen Integra</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Blibli Modal --}}
    <div class="modal fade shop-now-modal" id="modalBlibli" tabindex="-1" aria-labelledby="blibliLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-light-blue text-white">
                    <h5 class="modal-title " id="blibliLabel">
                        <img src="https://d2k52l910ymyzx.cloudfront.net/home/wp-content/uploads/2022/01/24112756/1_Mn1__te_k3ALl0qySqLy1A.png"
                            class="img-fluid" alt="Blibli link" width="50">
                        Belanja di Blibli
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row justify-content-center g-3">
                        <a target="_blank" href="https://www.blibli.com/merchant/mauritz-integra/MAI-60046"
                            class="col w-100 text-center bg-light-blue mx-3">
                            Mauritz Integra
                        </a>
                        <a target="_blank" href="https://www.blibli.com/merchant/maureen-integra-official-store/MAI-60126"
                            class="col w-100 text-center bg-light-blue mx-3">Maureen Integra</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Lazada Modal
    <div class="modal fade shop-now-modal" id="modalLazada" tabindex="-1" aria-labelledby="lazadaLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-dark-blue text-white">
                    <h5 class="modal-title " id="lazadaLabel">
                        <img src="https://assets.Lazada.net/assets-Lazada-lite/v2/arael/kratos/36c1015e.png"
                            class="img-fluid" alt="Lazada link" width="50">
                        Belanja di Lazada
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row justify-content-center g-3">
                        <a target="_blank" href="https://www.tokopedia.com/mauin?source=universe&st=product"
                            class="col w-100 text-center bg-dark-blue mx-3">
                            Mauritz Integra
                        </a>
                        <a target="_blank" href="https://www.tokopedia.com/maureenintegrast?source=universe&st=product"
                            class="col w-100 text-center bg-dark-blue mx-3">Maureen Integra</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Bukalapak Modal
    <div class="modal fade shop-now-modal" id="modalBukalapak" tabindex="-1" aria-labelledby="bukalapakLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-red text-white">
                    <h5 class="modal-title " id="bukalapakLabel">
                        <img src="https://assets.Bukalapak.net/assets-Bukalapak-lite/v2/arael/kratos/36c1015e.png"
                            class="img-fluid" alt="Bukalapak link" width="50">
                        Belanja di Bukalapak
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row justify-content-center g-3">
                        <a target="_blank" href="https://www.tokopedia.com/mauin?source=universe'&st=product"
                            class="col w-100 text-center bg-red mx-3">
                            Mauritz Integra
                        </a>
                        <a target="_blank" href="https://www.tokopedia.com/maureenintegrast'?source=universe&st=product"
                            class="col w-100 text-center bg-red mx-3">Maureen Integra</a>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    {{-- Tiktok Modal --}}
    <div class="modal fade shop-now-modal" id="modalTiktok" tabindex="-1" aria-labelledby="tiktokLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-black text-white">
                    <h5 class="modal-title " id="tiktokLabel">
                        <img src="https://pngimg.com/uploads/tiktok/tiktok_PNG8.png" class="img-fluid" alt="Tiktok link"
                            width="50">
                        Belanja di Tiktok
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row justify-content-center g-3">
                        <a target="_blank" href="https://www.tiktok.com/@mauritzintegra"
                            class="col w-100 text-center bg-black mx-3">
                            Mauritz Integra
                        </a>
                        <a target="_blank" href="https://www.tiktok.com/@maureenintegra"
                            class="col w-100 text-center bg-black mx-3">Maureen Integra</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Contact Us --}}
    <section class="contact-us" id="contact">
        <div class="container">
            <h2>Hubungi <span>Kami</span></h2>
            <div class="card mb-3 px-5 w-100 overflow-auto">
                <div class="card-body">
                    <div class="row row-cols-auto row-cols-lg-3 justify-content-start justify-content-lg-center g-3">
                        <div
                            class="col-auto d-flex justify-content-start justify-content-lg-center align-items-center gap-3">
                            <div class="d-flex justify-content-start justify-content-lg-center align-items-center gap-3">
                                <i class='bx bxs-home'></i>
                                <p><a target="_blank" href="https://goo.gl/maps/ZCTC9pG6NaYLXVBF9">Ruko Crown, Jl. Green
                                        Lake City Blok H no 18, RT.001/RW.010, Petir, Kec. Cipondoh, Kota Tangerang, Banten
                                        15147</a></p>
                            </div>
                        </div>
                        <div
                            class="col-auto d-flex justify-content-start justify-content-lg-center align-items-center gap-3">
                            <i class='bx bxs-envelope yellow'></i>
                            <div>
                                <p><a target="_blank" href="mailto: info@maurindo.co.id">info@maurindo.co.id</a>
                                </p>
                                <p><a target="_blank" href="mailto: sales@maurindo.co.id">sales@maurindo.co.id</a>
                                </p>
                            </div>
                        </div>
                        <div
                            class="col-auto d-flex justify-content-start justify-content-lg-center align-items-center gap-3">
                            <i class='bx bxl-whatsapp green'></i>
                            <div class="d-flex flex-wrap">
                                <p class="me-3"><a target='_blank' href=" https://wa.me/+62811858977">+62811858977</a>
                                </p>
                                <p class="me-3"><a target='_blank' href=" https://wa.me/+62817858977">+62817858977</a>
                                </p>
                                <p class="me-3"><a target='_blank' href=" https://wa.me/+62816858977">+62816858977</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-3">
                <div class="col-12 col-sm-12 col-md-12 col-lg-7">
                    <div class="card">
                        <div class="card-body">
                            <form method="POST" class="php-email-form">
                                @csrf
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="Email Anda" required>
                                </div>
                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama</label>
                                    <input type="text" class="form-control" id="nama" name="nama"
                                        placeholder="Nama Anda" required>
                                </div>
                                <div class="mb-3">
                                    <label for="pesan" class="form-label">Pesan</label>
                                    <textarea class="form-control" id="pesan" name="pesan" rows="3" placeholder="Pesan Anda" required></textarea>
                                </div>
                                <button type="button" id="kirimpesan" class="btn btn-primary">KIRIM</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-5">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.5420876323033!2d106.70104681391916!3d-6.191969062386258!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f1fea5733acf%3A0x86832cbbd8e455d9!2sMAURITZ%20%26%20MAUREEN%20ALKES%20(maurindo%20group)!5e0!3m2!1sen!2sid!4v1662703441587!5m2!1sen!2sid"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
@section('script')
    <script type="text/javascript" src="{{ asset('eksternal_js/contact_form.js') }}"></script>
@endsection
@endsection
