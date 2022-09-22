<!DOCTYPE html>
<html lang="id">

@include('layouts.header')

<body>
    <div class="preloader" id="preloader">
        <div class="loader"></div>
        <h3>
            <img src="/asset/image/logo/logo maurindo group only.png" width="90" alt="logo maurindo">
            MAURINDO <span>GROUP</span>
        </h3>
    </div>

    @include('layouts.navbar')

    @yield('content')

    @include('layouts.footer')

</body>

</html>
