<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with Meyawo landing page.">
    <meta name="author" content="Devcrud">
    <title>Portfolio</title>
    <!-- font icons -->
    <link rel="stylesheet" href="{{ asset('meyawo') }}/assets/vendors/themify-icons/css/themify-icons.css">
    <!-- Bootstrap + Meyawo main styles -->
    <link rel="stylesheet" href="{{ asset('meyawo') }}/assets/css/meyawo.css">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

    <!-- Page Navbar -->
    @include('component.navbar')
    <!-- End of Page Navbar -->

    <!-- page header -->
    @include('component.header')
    <!-- end of page header -->

    <!-- about section -->
    @include('component.about')
    <!-- end of about section -->

    <!-- service section -->
    @include('component.service')
    <!-- end of service section -->

    <!-- portfolio section -->
    @include('component.portfolio')
    <!-- end of portfolio section -->

    <!-- pricing section -->
    @include('component.pricing')
    <!-- end of pricing section -->

    <!-- section -->
    @include('component.section')
     <!-- end of section -->

    <!-- testimonial section -->
    @include('component.testimonial')
    <!-- end of testimonial section -->

    <!-- blog section -->
    @include('component.blog')
    <!-- end of blog section -->

    <!-- contact section -->
    @include('component.contact')
    <!-- end of contact section -->

    <!-- footer -->
    @include('component.footer')
     <!-- end of page footer -->

    <!-- core  -->
    <script src="{{ asset('meyawo') }}/assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="{{ asset('meyawo') }}/assets/vendors/bootstrap/bootstrap.bundle.js"></script>

    <!-- bootstrap 3 affix -->
    <script src="{{ asset('meyawo') }}/assets/vendors/bootstrap/bootstrap.affix.js"></script>

    <!-- Meyawo js -->
    <script src="{{ asset('meyawo') }}/assets/js/meyawo.js"></script>

</body>

</html>
