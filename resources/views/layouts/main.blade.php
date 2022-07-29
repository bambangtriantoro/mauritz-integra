<!DOCTYPE html>
<html lang="id">

@include('layouts.header')

<body>
    <div class="preloader" id="preloader">
        <div class="loader"></div>
        <h3><img src="/asset/image/logo/logo2.jpeg" width="40" alt="logo maurindo"> Maurindo
            <span>Teknik</span> Solusi
        </h3>
    </div>

    @include('layouts.navbar')

    @yield('content')

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>


    @include('layouts.footer')

</body>

</html>
