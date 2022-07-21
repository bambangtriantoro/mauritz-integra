<!DOCTYPE html>
<html lang="id">

@include('layouts.header')

<body>
    <div class="preloader" id="preloader">
        <div class="loader"></div>
        <h3>Company <span>Name</span></h3>
    </div>

    @include('layouts.navbar')

    @yield('content')

    @include('layouts.footer')
    
</body>

</html>
