<!DOCTYPE html>
<html lang="en">

@include('theme.partials.head')

<body>
    @include('theme.partials.spinner')


    <!-- Topbar Start -->
    @include('theme.partials.topbar')
    <!-- Topbar End -->


    <!-- Navbar & Hero Start -->
    @include('theme.partials.navbar')
    <!-- Navbar & Hero End -->

<!--------------------------------------------------------------------------->
   @yield('content')

<!--------------------------------------------------------------------------->
    <!-- Footer Start -->
    @include('theme.partials.footer')
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


   @include('theme.partials.scripts')
</body>

</html>

{{-- <nav aria-label="breadcrumb">
    <ol class="breadcrumb justify-content-center">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Pages</a></li>
        <li class="breadcrumb-item text-white active" aria-current="page">About</li>
    </ol>
</nav> --}}