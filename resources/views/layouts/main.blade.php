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

    @include('layouts.footer')

</body>

</html>
