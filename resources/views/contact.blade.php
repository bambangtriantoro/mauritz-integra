@extends('layouts.main')

@section('content')
    <div class="container-xxl">
        <header class="contact-header" id="header">
            <h2 class="text-center">CONTACT <span>US</span></h2>
        </header>
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
                                <p><a target="_blank" href="https://goo.gl/maps/c3voP2ucqSJ1PpAs5">Perumahan Walikota Blok
                                        E9 No 1A Meruya
                                        Selatan Jakarta Barat,
                                        10150</a></p>
                            </div>
                        </div>
                        <div
                            class="col-auto d-flex justify-content-start justify-content-lg-center align-items-center gap-3">
                            <i class='bx bxs-envelope'></i>
                            <p><a target="_blank"
                                    href="mailto: maurindotekniksolusi@gmail.com">maurindotekniksolusi@gmail.com</a></p>
                        </div>
                        <div
                            class="col-auto d-flex justify-content-start justify-content-lg-center align-items-center gap-3">
                            <i class='bx bxs-phone'></i>
                            <div class="d-flex flex-wrap">
                                <p class="me-3"><a target='_blank' href=" https://wa.me/+62811858977">+62811858977</a>
                                </p>
                                <p class="me-3"><a target='_blank' href=" https://wa.me/+62817858977">+62817858977</a>
                                </p>
                                <p class="me-3"><a target='_blank' href=" https://wa.me/+62816858977">+62816858977</a>
                                </p>
                                <p class="me-3"><a target='_blank' href=" https://wa.me/+6281281686057">+6281281686057</a>
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
                                    <label for="email" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="Your Email" required>
                                </div>
                                <div class="mb-3">
                                    <label for="nama" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="nama" name="nama"
                                        placeholder="Your Name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="pesan" class="form-label">Message</label>
                                    <textarea class="form-control" id="pesan" name="pesan" rows="3" placeholder="Your Message" required></textarea>
                                </div>
                                <button type="button" id="kirimpesan" class="btn btn-primary">SUBMIT</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-5">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.382616312338!2d106.72184381423685!3d-6.213164962586354!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f93a56c0330f%3A0x10b27ba260ca597a!2sMauritz%20Integra!5e0!3m2!1sen!2sid!4v1658303236342!5m2!1sen!2sid"
                        allowfullscreen="true" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
@endsection
