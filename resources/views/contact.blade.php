@extends('layouts.main')
@section('content')
    <div class="container-xxl">
        <header class="contact-header" id="header">
            <h1 class="text-center">HUBUNGI <span>KAMI</span></h1>
        </header>
    </div>

    <div class="container">
        <h2 class="text-title mt-5 pt-3">KONTAK <span>KAMI</span></h2>
    </div>

    <section class="contact-us" id="contact">
        <div class="container">
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
@endsection
