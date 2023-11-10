<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <!-- css connect -->
        <link href="{{ asset('style.css') }}" rel="stylesheet">

        <!-- font family -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Roboto&display=swap" rel="stylesheet">

        <!-- Logo Tittle -->
        <link rel="icon" href="{{ asset('assets/logo_DBOTulisanBawah.svg') }}" type="image/svg+xml">

        <title>Home | Digital Blue Ocean</title>
    </head>
    <body>
    
    <div class="container-bg1">

    @include("navbar")

    <!-- home page -->
            <section class="home-page mb-4">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6 text-white content1">
                            <div class="header">
                                <h1 class="fw-bold">Welcome <span class="regular fw-normal">In</span></h1>
                                <h1 class="fw-bold">Digital Blue Ocean</h1>
                            </div>
                            <div class="d-flex justify-content-center">
                            <a href="/about-us" aria-current="page" class="button left-button me-4 pt-2 text-decoration-none text-center">More</a>
                            <a href="/signup" aria-current="page" class="button right-button pt-2 text-decoration-none text-center">Sign Up Now</a>
                            </div>
                        </div>

                        <div class="col-md-6 content2 mt-5">
                            <img src="{{ asset('assets/img_landingPage.svg') }}" alt="Logo DBO" class="img-fluid">
                        </div>
                    </div>
                </div>
            </section>
    <!-- akhir landing page -->

    @include("landing_page.search-books")

    @include("landing_page.statistics")

    @include("landing_page.about-us")

    @include("landing_page.contact-us")

    @include("landing_page.related-links")

    @include("footer")
    
    </div>
    
    

    

    

        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        -->
    </body>
</html>