@extends('layouts.main')
@section('content')
    <div class="container-xxl">
        <header class="service-header" id="header">
            <h1><span>LAYANAN</span> KAMI</h1>
        </header>
    </div>

    <div class="container-xxl">
        <section class="service-desc desc1">
            <h2>Apa yang <span>Kami</span> Sediakan?</h2>
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row justify-content-center gy-5">
                            <img src="/asset/image/pexels-tara-winstead-7722685.jpg" class="col-12 col-md-6 rounded"
                                alt="maurindo service carousel-1">
                            <div class="col-12 col-md-6">
                                <h3 class="text-start"><i class="bx bx-first-aid"></i> ALAT KESEHATAN</h3>
                                <p>Berbagai alat kesehatan dengan kualitas yang terbaik dan
                                    juga brand yang ternama.</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row justify-content-center gy-5">
                            <img src="/asset/image/mockup-graphics-i1iqQRLULlg-unsplash.jpg" class="col-12 col-md-6 rounded"
                                alt="maurindo service carousel-1">
                            <div class="col-12 col-md-6">
                                <h3 class="text-start"><i class="bx bx-first-aid"></i> ALAT MONITOR KESEHATAN</h3>
                                <p>Berbagai alat yang memiliki fungsi untuk memberikan informasi mengenai kesehatan
                                    seseorang.</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row justify-content-center gy-5">
                            <img src="/asset/image/chair-89156_1920.jpg" class="col-12 col-md-6 rounded"
                                alt="maurindo service carousel-1">
                            <div class="col-12 col-md-6">
                                <h3 class="text-start"><i class="bx bx-first-aid"></i> ALAT BANTU</h3>
                                <p>Berbagai alat bantu yang digunakan untuk mencegah, mendiagnosis, menyembuhkan, dan
                                    meringankan penyakit, merawat orang sakit, memulihkan kesehatan, dan/atau
                                    membentuk struktur dan memperbaiki fungsi tubuh.</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row justify-content-center gy-5">
                            <img src="/asset/image/mat-napo-MaKsx8JNbiI-unsplash.jpg" class="col-12 col-md-6 rounded"
                                alt="maurindo service carousel-1">
                            <div class="col-12 col-md-6">
                                <h3 class="text-start"><i class="bx bx-first-aid"></i> ALAT PERTOLONGAN PERTAMA</h3>
                                <p>Berbagai alat pertolongan pertama untuk perawatan sementara agar luka tidak menjadi
                                    semakin parah sebelum dibawa ke dokter.</p>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="carousel-item">
                        <div class="row justify-content-center align-items-center gy-5">
                            <img src="/asset/image/leo-roza-P_z_xlMGuEk-unsplash.jpg" class="col-12 col-md-6 rounded"
                                alt="maurindo service carousel-2">
                            <div class="col-12 col-md-6">
                                <h3 class="text-start"><i class="bx bx-restaurant"></i>FOOD/MAKANAN</h3>
                                <p>Gerai penjualan online dan offline untuk produk makanan jadi yaitu AYAM TABOK M2.</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row justify-content-center align-items-center gy-5">
                            <img src="/asset/image/etienne-girardet-sgYamIzhAhg-unsplash.jpg"
                                class="col-12 col-md-6 rounded" alt="maurindo service carousel-3">
                            <div class="col-12 col-md-6">
                                <h3 class="text-start"><i class="bx bx-building"></i>KONSTRUKSI</h3>
                                <p>Jasa konstruksi terbaik dengan harga yang sangat cocok untuk memenuhi ekspektasi anda.
                                </p>
                            </div>
                        </div>
                    </div> --}}
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
                            <h2 class="text-start"><i class="bx bx-first-aid"></i> Alat Kesehatan</h2>
                            <p>Kami menyediakan berbagai alat kesehatan dengan kualitas yang terbaik dan juga brand yang
                                ternama. Dengan lebih dari 600 jenis produk yang tersedia. Dijual di marketplace dan sudah
                                menjadi
                                toko dengan standar diamond yang menjamin bahwa kami adalah penyedia alat kesehatan yang
                                terpercaya.
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
                        <h2>Produk Alat Kesehatan</h2>
                        <p>Berikut produk-produk unggulan kami dengan brand yang terpercaya dengan kualitas yang terbaik,
                        </p>
                        <div class="position-absolute service-product-item">
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
                                    class="card-img-top shadow" alt="product">
                                <div class="card-body bg-custom">
                                    <h5 class="card-title">Stetoskop Deluxe</h5>
                                    <a target="_blank"
                                        href="https://www.tokopedia.com/mauin/onemed-stetoskop-deluxe-non-transparan"><button
                                            class="card-text">Rp. 45.899</button></a>
                                </div>
                            </div>
                            <div class="card mx-3">
                                <img src="/asset/image/product/nesco transport swab 1pcs nesco cotton swab sterile lidi steril Rp. 1.999.jpg"
                                    class="card-img-top shadow" alt="product">
                                <div class="card-body bg-custom">
                                    <h5 class="card-title">Nesco Cotton Sterile Swabstick</h5>
                                    <a target="_blank"
                                        href="https://www.tokopedia.com/mauin/nesco-transport-swab-1-pcs-nesco-cotton-swab-sterile-lidi-steril"><button
                                            class="card-text">Rp. 1.999</button></a>
                                </div>
                            </div>
                            <div class="card mx-3">
                                <img src="/asset/image/product/Nurse Kit Rp.183.899.jpg" class="card-img-top shadow"
                                    alt="product">
                                <div class="card-body bg-custom">
                                    <h5 class="card-title">Nurse Kit</h5>
                                    <a target="_blank"
                                        href="https://www.tokopedia.com/mauin/onemed-nurse-kit-set-standard-lengkap-paket-alat-pemeriksaan-suster"><button
                                            class="card-text">Rp. 183.899</button></a>
                                </div>
                            </div>
                            <div class="card mx-3">
                                <img src="/asset/image/product/Tensi aneroid onemed tensimeter kompas Rp. 79.999.jpg"
                                    class="card-img-top shadow" alt="product">
                                <div class="card-body bg-custom">
                                    <h5 class="card-title">Tensi Aneroid Onemed Tensimeter Kompas</h5>
                                    <a target="_blank"
                                        href="https://www.tokopedia.com/mauin/tensi-aneroid-onemed-tensimeter-kompas-one-med-abu-abu"><button
                                            class="card-text">Rp. 79.999</button></a>
                                </div>
                            </div>
                            <div class="card mx-3">
                                <img src="/asset/image/product/Tabung oksigen 6m3 Rp. 1.494.999.jpg"
                                    class="card-img-top shadow" alt="tabung oksigen img">
                                <div class="card-body bg-custom">
                                    <h5 class="card-title">Tabung Oksigen 6m³</h5>
                                    <a target="_blank"
                                        href="https://www.tokopedia.com/mauin/tabung-oksigen-6m3-tabung-6-m3-saja-isi-full-tanpa-regulator-dan-troly"><button
                                            class="card-text">Rp. 1.494.999</button></a>
                                </div>
                            </div>
                            <div class="card mx-3">
                                <img src="/asset/image/product/Tensimeter pergelangan tangan tensione Rp. 299.899.jpg"
                                    class="card-img-top shadow" alt="product">
                                <div class="card-body bg-custom">
                                    <h5 class="card-title">Tensimeter Pergelangan Tangan TensiOne</h5>
                                    <a target="_blank"
                                        href="https://www.tokopedia.com/mauin/onemed-alat-ukur-tensimeter-pergelangan-tangan-tensi-digital-tensione"><button
                                            class="card-text">Rp. 299.899</button></a>
                                </div>
                            </div>
                            <div class="card mx-3">
                                <img src="/asset/image/product/softies duckshape masker 3ply isi 30 Rp. 52.499.jpg"
                                    class="card-img-top shadow" alt="softies duckshape masker img">
                                <div class="card-body bg-custom">
                                    <h5 class="card-title">Softies Duckshape Masker 3ply isi 30</h5>
                                    <a target="_blank"
                                        href="https://www.tokopedia.com/mauin/masker-softies-duckshape-box-surgical-3-ply-duck-shape-duckbill-isi-30"><button
                                            class="card-text">Rp. 52.499</button></a>
                                </div>
                            </div>
                            <div class="card mx-3">
                                <img src="/asset/image/product/3 in 1 easytouch alat test gula kolesterol asam urat Rp. 206.999.jpg"
                                    class="card-img-top shadow" alt="product">
                                <div class="card-body bg-custom">
                                    <h5 class="card-title">3 in 1 Easytouch Alat Test Gula Kolesterol Asam Urat</h5>
                                    <a target="_blank"
                                        href="https://www.tokopedia.com/mauin/easy-touch-gcu-3-in-1-easytouch-alat-test-gula-kolesterol-asam-urat"><button
                                            class="card-text">Rp. 206.999</button></a>
                                </div>
                            </div>
                            <div class="card mx-3">
                                <img src="/asset/image/product/Alat Cek Tes Gula Darah Auto AGM 4000 dan 25 strip gluco dr Rp. 199.899.jpg"
                                    class="card-img-top shadow" alt="product">
                                <div class="card-body bg-custom">
                                    <h5 class="card-title">Alat Cek Tes Gula Darah Auto AGM 4000 + 25 strip Gluco Dr</h5>
                                    <a target="_blank"
                                        href="https://www.tokopedia.com/mauin/alat-cek-tes-gula-darah-glucodr-auto-agm-4000-25-strip-gluco-dr"><button
                                            class="card-text">Rp. 199.899</button></a>
                                </div>
                            </div>
                            <div class="card mx-3">
                                <img src="/asset/image/product/Ekaplast soft jumbo box isi 30 strip Rp. 8.199.jpg"
                                    class="card-img-top shadow" alt="product">
                                <div class="card-body bg-custom">
                                    <h5 class="card-title">Ekaplast Soft Jumbo Box isi 30 strip</h5>
                                    <a target="_blank"
                                        href="https://www.tokopedia.com/mauin/onemed-plester-luka-non-woven-ekaplast-soft-jumbo-box-isi-30-strip"><button
                                            class="card-text">Rp. 8.199</button></a>
                                </div>
                            </div>
                            <div class="card mx-3">
                                <img src="/asset/image/product/Jarum lancet Easytouch nesco 28G Rp. 10.899.jpg"
                                    class="card-img-top shadow" alt="product">
                                <div class="card-body bg-custom">
                                    <h5 class="card-title">Jarum lancet Easytouch Nesco 28G</h5>
                                    <a target="_blank"
                                        href="https://www.tokopedia.com/mauin/avico-jarum-lancet-easy-touch-nesco-glucodr-easytouch-gluco-dr-28g"><button
                                            class="card-text">Rp. 10.899</button></a>
                                </div>
                            </div>
                            <div class="card mx-3">
                                <img src="/asset/image/product/Kasa Steril 10x10cm 8ply 1pouch isi 2 lembar 108225 Rp. 2.499.jpg"
                                    class="card-img-top shadow" alt="product">
                                <div class="card-body bg-custom">
                                    <h5 class="card-title">Kasa Steril 10x10cm 8ply 1pouch isi 2 lembar</h5>
                                    <a target="_blank"
                                        href="https://www.tokopedia.com/mauin/onemed-kasa-steril-10-x-10-cm-8-ply-1-pouch-isi-2-lembar-108225"><button
                                            class="card-text">Rp. 2.499</button></a>
                                </div>
                            </div>
                            <div class="card mx-3">
                                <img src="/asset/image/product/softies surgical 3d mask 4ply kf94 1 box 20pcs Rp. 52.499.jpg"
                                    class="card-img-top shadow" alt="product">
                                <div class="card-body bg-custom">
                                    <h5 class="card-title">Softies Surgical 3D Mask 4ply kf94 1 box 20pcs</h5>
                                    <a target="_blank"
                                        href="https://www.tokopedia.com/mauin/masker-bedah-softies-surgical-3d-mask-4-ply-kf94-1-box-20pcs-ramadhan"><button
                                            class="card-text">Rp. 199.999</button></a>
                                </div>
                            </div>
                            <div class="card mx-3">
                                <img src="/asset/image/product/Pulse oximeter fingertip alat ukur saturasi kadar O2 Rp.199.999.jpg"
                                    class="card-img-top shadow" alt="product">
                                <div class="card-body bg-custom">
                                    <h5 class="card-title">Pulse Oximeter Fingertip</h5>
                                    <a target="_blank"
                                        href="https://www.tokopedia.com/mauin/pulse-oximeter-fingertip-luna-life-alat-ukur-saturasi-kadar-o2"><button
                                            class="card-text">Rp. 199.999</button></a>
                                </div>
                            </div>
                            <div class="card mx-3">
                                <img src="/asset/image/product/Nebulizer Onemed 405 A Compressor Rp. 306.499.jpg"
                                    class="card-img-top shadow" alt="product">
                                <div class="card-body bg-custom">
                                    <h5 class="card-title">Nebulizer Onemed 405 A Compressor</h5>
                                    <a target="_blank"
                                        href="https://www.tokopedia.com/mauin/nebulizer-onemed-405-a-compressor-nebulizer-405a-alat-uap-inhaler-nebu-405a"><button
                                            class="card-text">Rp. 306.499</button></a>
                                </div>
                            </div>
                            <div class="card mx-3 opacity-75">
                                <img src="https://www.iconninja.com/files/591/301/131/more-icon.svg"
                                    class="card-img-top shadow" alt="product">
                                <div class="card-body bg-custom">
                                    <h5 class="card-title">Lihat Lebih Banyak di Marketplace</h5>
                                    <a href="/shop"><button class="card-text">Ke Marketplace</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="container">
                        <h2>Partner <span>Produk</span></h2>
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
                        <h2><span>Belanja</span> Sekarang!</h2>
                        <div class="d-flex flex-wrap justify-content-center align-items-center gap-5">
                            <a target="_blank" href="https://shopee.co.id/maurindotekniksolusi">
                                <img src="https://www.pngmart.com/files/12/Shopee-Logo-PNG-File.png" class="img-fluid"
                                    alt="shopee link">
                            </a>
                            {{-- <a target="_blank" href="https://shopee.co.id/maureenintegrastore">
                                <img src="https://www.pngmart.com/files/12/Shopee-Logo-PNG-File.png" class="img-fluid"
                                    alt="">
                            </a> --}}
                            <a target="_blank" href="https://www.tokopedia.com/mauin?source=universe&st=product">
                                <img src="https://assets.tokopedia.net/assets-tokopedia-lite/v2/arael/kratos/36c1015e.png"
                                    class="img-fluid" alt="tokopedia link">
                            </a>
                            {{-- <a target="_blank" href="https://www.tokopedia.com/maureenintegrast?source=universe&st=product">
                                <img src="https://assets.tokopedia.net/assets-tokopedia-lite/v2/arael/kratos/36c1015e.png"
                                    class="img-fluid" alt="">
                            </a> --}}
                            <a target="_blank" href="https://www.blibli.com/merchant/mauritz-integra/MAI-60046">
                                <img src="https://d2k52l910ymyzx.cloudfront.net/home/wp-content/uploads/2022/01/24112756/1_Mn1__te_k3ALl0qySqLy1A.png"
                                    class="img-fluid" alt="blibli link">
                            </a>
                            {{-- <a target="_blank" href="https://www.blibli.com/merchant/maureen-integra-official-store/MAI-60126">
                                <img src="https://d2k52l910ymyzx.cloudfront.net/home/wp-content/uploads/2022/01/24112756/1_Mn1__te_k3ALl0qySqLy1A.png"
                                    class="img-fluid" alt="">
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
                            <a target="_blank" href="https://www.tiktok.com/@mauritzintegra">
                                <img src="https://pngimg.com/uploads/tiktok/tiktok_PNG8.png" class="img-fluid"
                                    alt="tiktok link">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- <div class="service-2">
                <div class="container">
                    <div class="row align-items-center py-5">
                        <div class="col-12 col-md-7">
                            <h2 class="text-start"><i class="bx bx-restaurant"></i> Food / Makanan</h2>
                            <p>Kami memiliki gerai penjualan offline dan online untuk produk makanan jadi yaitu AYAM TABOK
                                M2
                                Dengan pengolahan ayam yang higienis lalu dicampur dengan berbagai rempah yang menambah
                                cipta rasa,
                                kami
                                mampu menyajikan makanan yang higienis dan kaya rasa.
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
                        <h2>Produk Makanan</h2>
                        <p>Berikut menu unggulan kami dari AYAM TABOK M2,</p>
                        <div class="position-absolute service-product-item">
                            <div class="card mx-3">
                                <img src="/asset/image/product/tabok dada 1.jpeg" class="card-img-top shadow"
                                    alt="tabok1">
                                <div class="card-body bg-custom">
                                    <h5 class="card-title">Paket Ayam Tabok Dada 1</h5>
                                    <a target="_blank"
                                        href="https://gofood.co.id/jakarta/restaurant/ayam-gebuk-penyet-m2-a803964f-4f80-4fa7-8c11-3f524f38829d"><button
                                            class="card-text">Rp. 25.999</button></a>
                                </div>
                            </div>
                            <div class="card mx-3">
                                <img src="/asset/image/product/tabok paha.jpeg" class="card-img-top shadow"
                                    alt="tabok1">
                                <div class="card-body bg-custom">
                                    <h5 class="card-title">Paket Ayam Tabok Paha 1</h5>
                                    <a target="_blank"
                                        href="https://gofood.co.id/jakarta/restaurant/ayam-gebuk-penyet-m2-a803964f-4f80-4fa7-8c11-3f524f38829d"><button
                                            class="card-text">Rp. 25.999</button></a>
                                </div>
                            </div>
                            <div class="card mx-3">
                                <img src="/asset/image/product/tabok dada 2.jpeg" class="card-img-top shadow"
                                    alt="tabok2">
                                <div class="card-body bg-custom">
                                    <h5 class="card-title">Paket Ayam Tabok Dada 2</h5>
                                    <a target="_blank"
                                        href="https://gofood.co.id/jakarta/restaurant/ayam-gebuk-penyet-m2-a803964f-4f80-4fa7-8c11-3f524f38829d"><button
                                            class="card-text">Rp. 31.000</button></a>
                                </div>
                            </div>
                            <div class="card mx-3">
                                <img src="/asset/image/product/tabok paha 2.jpeg" class="card-img-top shadow"
                                    alt="tabok2">
                                <div class="card-body bg-custom">
                                    <h5 class="card-title">Paket Ayam Tabok Paha 2</h5>
                                    <a target="_blank"
                                        href="https://gofood.co.id/jakarta/restaurant/ayam-gebuk-penyet-m2-a803964f-4f80-4fa7-8c11-3f524f38829d"><button
                                            class="card-text">Rp. 31.000</button></a>
                                </div>
                            </div>
                            <div class="card mx-3">
                                <img src="/asset/image/product/tabok dada 3.jpeg" class="card-img-top shadow"
                                    alt="tabok3">
                                <div class="card-body bg-custom">
                                    <h5 class="card-title">Paket Ayam Tabok Dada 3</h5>
                                    <a target="_blank"
                                        href="https://gofood.co.id/jakarta/restaurant/ayam-gebuk-penyet-m2-a803964f-4f80-4fa7-8c11-3f524f38829d"><button
                                            class="card-text">Rp. 31.000</button></a>
                                </div>
                            </div>
                            <div class="card mx-3">
                                <img src="/asset/image/product/tabok paha 3.jpeg" class="card-img-top shadow"
                                    alt="tabok3">
                                <div class="card-body bg-custom">
                                    <h5 class="card-title">Paket Ayam Tabok Paha 3</h5>
                                    <a target="_blank"
                                        href="https://gofood.co.id/jakarta/restaurant/ayam-gebuk-penyet-m2-a803964f-4f80-4fa7-8c11-3f524f38829d"><button
                                            class="card-text">Rp. 31.000</button></a>
                                </div>
                            </div>
                            <div class="card mx-3">
                                <img src="/asset/image/product/tabok dada 4.jpeg" class="card-img-top shadow"
                                    alt="tabok4">
                                <div class="card-body bg-custom">
                                    <h5 class="card-title">Paket Ayam Tabok Dada 4</h5>
                                    <a
                                        href="https://gofood.co.id/jakarta/restaurant/ayam-gebuk-penyet-m2-a803964f-4f80-4fa7-8c11-3f524f38829d"><button
                                            class="card-text">Rp. 33.000</button></a>
                                </div>
                            </div>
                            <div class="card mx-3">
                                <img src="/asset/image/product/tabok paha 4.jpeg" class="card-img-top shadow"
                                    alt="tabok4">
                                <div class="card-body bg-custom">
                                    <h5 class="card-title">Paket Ayam Tabok Paha 4</h5>
                                    <a
                                        href="https://gofood.co.id/jakarta/restaurant/ayam-gebuk-penyet-m2-a803964f-4f80-4fa7-8c11-3f524f38829d"><button
                                            class="card-text">Rp. 33.000</button></a>
                                </div>
                            </div>
                            <div class="card mx-3">
                                <img src="/asset/image/product/tabok dada 5.jpeg" class="card-img-top shadow"
                                    alt="tabok5">
                                <div class="card-body bg-custom">
                                    <h5 class="card-title">Paket Ayam Tabok Dada 5</h5>
                                    <a
                                        href="https://gofood.co.id/jakarta/restaurant/ayam-gebuk-penyet-m2-a803964f-4f80-4fa7-8c11-3f524f38829d"><button
                                            class="card-text">Rp. 38.000</button></a>
                                </div>
                            </div>
                            <div class="card mx-3">
                                <img src="/asset/image/product/tabok paha 5.jpeg" class="card-img-top shadow"
                                    alt="tabok5">
                                <div class="card-body bg-custom">
                                    <h5 class="card-title">Paket Ayam Tabok Paha 5</h5>
                                    <a
                                        href="https://gofood.co.id/jakarta/restaurant/ayam-gebuk-penyet-m2-a803964f-4f80-4fa7-8c11-3f524f38829d"><button
                                            class="card-text">Rp. 38.000</button></a>
                                </div>
                            </div>
                            <div class="card mx-3">
                                <img src="/asset/image/product/tabok dada.jpeg" class="card-img-top shadow"
                                    alt="tabok">
                                <div class="card-body bg-custom">
                                    <h5 class="card-title">Ayam Tabok Dada</h5>
                                    <a
                                        href="https://gofood.co.id/jakarta/restaurant/ayam-gebuk-penyet-m2-a803964f-4f80-4fa7-8c11-3f524f38829d"><button
                                            class="card-text">Rp. 23.000</button></a>
                                </div>
                            </div>
                            <div class="card mx-3">
                                <img src="/asset/image/product/tabok paha.jpeg" class="card-img-top shadow"
                                    alt="tabok">
                                <div class="card-body bg-custom">
                                    <h5 class="card-title">Ayam Tabok Paha</h5>
                                    <a
                                        href="https://gofood.co.id/jakarta/restaurant/ayam-gebuk-penyet-m2-a803964f-4f80-4fa7-8c11-3f524f38829d"><button
                                            class="card-text">Rp. 23.000</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="container">
                        <h2><span>Beli</span> Sekarang!</h2>
                        <div class="d-flex flex-wrap justify-content-center align-items-center gap-3">
                            <a target="_blank"
                                href="https://gofood.co.id/jakarta/restaurant/ayam-gebuk-penyet-m2-a803964f-4f80-4fa7-8c11-3f524f38829d">
                                <img src="https://seeklogo.com/images/G/gofood-logo-0581DE183D-seeklogo.com.png"
                                    class="img-fluid" alt="gofood link">
                            </a>
                            <a target="_blank"
                                href="https://food.grab.com/id/en/restaurant/ayam-tabok-penyet-m2-meruya-selatan-delivery/6-C223LLDGFENZUE">
                                <img src="https://cdn.kibrispdr.org/data/605/grab-png-logo-31.png" class="img-fluid"
                                    alt="grabfood link">
                            </a>
                            <a target="_blank"
                                href="https://shopee.co.id/Nasi-Ayam-TABOK1-Geprek-Enak-Ayam-Gebuk-Penyet-Halal-Pedes-Brand-M2-i.96289486.10437724654">
                                <img src="https://seeklogo.com/images/S/shopee-food-logo-F37D8AD493-seeklogo.com.png"
                                    class="img-fluid" alt="shopee link">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="service-3">
                <div class="container">
                    <div class="row align-items-center py-5">
                        <div class="col-12 col-md-7">
                            <h2 class="text-start"><i class="bx bx-building"></i> Konstruksi</h2>
                            <p>Kami juga menawarkan jasa konstruksi telekomunikasi dan property. Dengan harga yang sangat
                                cocok kami
                                dapat memenuhi ekspektasi anda. Kami bersedia untuk memberikan yang terbaik untuk anda.
                            </p>
                        </div>
                        <div class="col-12 col-md-5">
                            <img src="/asset/image/kisspng-hard-hat-cap-yellow-safety-hat-5a6cd84b853be6.3053923015170826995457.png"
                                class="img-fluid" alt="construction helmet">
                        </div>
                    </div>
                </div>
                <div class="position-relative blank-red">
                    {{-- <div class="container mb-0">
                        <h2>Portfolio Konstruksi</h2>
                        <p>Kami berperan penting dalam pembangunan bangunan berikut,</p>
                        <div class="position-absolute service-product-item">
                            <div class="card mx-3">
                                <img src="/asset/image/kisspng-building-building-5a6a4fde7aedd5.0993594815169167025035.png"
                                    class="card-img-top shadow" alt="product">
                                <div class="card-body bg-custom">
                                    <h5 class="card-title">Product 1</h5>
                                </div>
                            </div>
                            <div class="card mx-3">
                                <img src="/asset/image/kisspng-building-building-5a6a4fde7aedd5.0993594815169167025035.png"
                                    class="card-img-top shadow" alt="product">
                                <div class="card-body bg-custom">
                                    <h5 class="card-title">Product 1</h5>
                                </div>
                            </div>
                            <div class="card mx-3">
                                <img src="/asset/image/kisspng-building-building-5a6a4fde7aedd5.0993594815169167025035.png"
                                    class="card-img-top shadow" alt="product">
                                <div class="card-body bg-custom">
                                    <h5 class="card-title">Product 1</h5>
                                </div>
                            </div>
                            <div class="card mx-3">
                                <img src="/asset/image/kisspng-building-building-5a6a4fde7aedd5.0993594815169167025035.png"
                                    class="card-img-top shadow" alt="product">
                                <div class="card-body bg-custom">
                                    <h5 class="card-title">Product 1</h5>
                                </div>
                            </div>
                            <div class="card mx-3">
                                <img src="/asset/image/kisspng-building-building-5a6a4fde7aedd5.0993594815169167025035.png"
                                    class="card-img-top shadow" alt="product">
                                <div class="card-body bg-custom">
                                    <h5 class="card-title">Product 1</h5>
                                </div>
                            </div>
                            <div class="card mx-3">
                                <img src="/asset/image/kisspng-building-building-5a6a4fde7aedd5.0993594815169167025035.png"
                                    class="card-img-top shadow" alt="product">
                                <div class="card-body bg-custom">
                                    <h5 class="card-title">Product 1</h5>
                                </div>
                            </div>
                            <div class="card mx-3">
                                <img src="/asset/image/kisspng-building-building-5a6a4fde7aedd5.0993594815169167025035.png"
                                    class="card-img-top shadow" alt="product">
                                <div class="card-body bg-custom">
                                    <h5 class="card-title">Product 1</h5>
                                </div>
                            </div>
                            <div class="card mx-3">
                                <img src="/asset/image/kisspng-building-building-5a6a4fde7aedd5.0993594815169167025035.png"
                                    class="card-img-top shadow" alt="product">
                                <div class="card-body bg-custom">
                                    <h5 class="card-title">Product 1</h5>
                                </div>
                            </div>
                        </div>
                    </div> --}}
            {{-- </div> 
                <div>
                    <div class="container">
                        <h2>Hubungi <span>Kami</span> Sekarang!</h2>
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
            </div> --}}
        </section>
    </div>
@endsection
