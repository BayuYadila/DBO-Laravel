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

        <title>@yield("tittle") | Digital Blue Ocean</title>
    </head>
    <body>

    <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light sticky-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">
                    <img src="{{ asset('assets/logo_DBOTulisanKanan.svg') }}" class="ms-5" alt="Logo DBO" width="150">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav ms-auto mb-2 mt-2">
                    <li class="nav-item mx-2">
                        <a class="nav-link active text-white fw-bold" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link active text-white fw-bold" aria-current="page" href="/search-books">Search Books</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link active text-white fw-bold" aria-current="page" href="/statistics">Statistics</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link active text-white fw-bold" aria-current="page" href="/related-links">Related Links</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link active text-white fw-bold" aria-current="page" href="/about-us">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-white fw-bold mx-2" aria-current="page" href="/contact-us">Contact</a>
                    </li>
                    </ul>
                    <a class="btn btn-outline-info d-flex mx-2 me-5" aria-current="page" href="/login">Log in</a>
            </div>
            </div>
        </nav>

        <div class="container-bg2">
    <!-- Search Collections -->        
    <div class="container bg-white search-collections text-center p-3 rounded">
        <div class="header mt-2">
            <h1 class="fw-bold">Search for collections on Digital Blue Ocean</h1>
            <form action="#" method="get" class="mb-3">
                <div class="d-flex gap-2">
                    <input type="text" class="form-control" name="title" id="title" aria-describedby="title" placeholder="Title">
                    <input type="text" class="form-control" name="author" id="author" aria-describedby="author" placeholder="Author">
                    <input type="text" class="form-control" name="year" id="year" aria-describedby="year" placeholder="Year">
                    <input type="text" class="form-control" name="keyword" id="keyword" aria-describedby="keyword" placeholder="Keyword">
                    <button type="submit" class="btn btn-primary">Search</button>
                </div>
                <div class="advanced-search mt-2" style="display: none;">
                    <div class="d-flex gap-2 justify-content-center">
                        <input type="text" class="form-control w-25" name="status" id="status" aria-describedby="status" placeholder="Status">
                        <input type="text" class="form-control w-25" name="publication" id="publication" aria-describedby="publication" placeholder="Publication">
                    </div>
                </div>
            </form>
            <button type="button" class="btn btn-primary text-white" onclick="toggleAdvancedSearch()">+ Advanced Search</button>
        </div>
    </div>
    
    <script>
        function toggleAdvancedSearch() {
            const advancedSearch = document.querySelector('.advanced-search');
            advancedSearch.style.display = (advancedSearch.style.display === 'none') ? 'block' : 'none';
        }
    </script>
        
    <!-- Akhir Search Collections -->
            
    <!-- Admin Panel -->
    <div class="container bg-white admin-panel mt-lg-4 p-lg-3 rounded">
        <div class="container-fluid d-lg-flex justify-content-lg-center gap-lg-4 mt-lg-2 d-sm-block d-md-none">
            <p>Logged in <span class="text-primary">as Admin Digital Blue Ocean</span></p>
            <span class="divider">|</span>
            <a href="/manage-deposits" class="text-primary">Manage Deposits</a>
            <span class="divider">|</span>
            <a href="/profile" class="text-primary">Profile</a>
            <span class="divider">|</span>
            <a href="/review" class="text-primary">Review</a>
            <span class="divider">|</span>
            <a href="/admin-status" class="text-primary">Admin</a>
            <span class="divider">|</span>
            <a href="/logout" class="text-primary">Logout</a>
        </div>
    </div>
    
    <!-- Akhir Admin Panel -->

    <!-- Main Content -->
        @yield("content")

        

    
        </div>
    <!-- Akhir Main Content -->
        
    <!-- Footer -->
        <div class="container-fluid footer d-flex justify-content-center align-items-center text-white">
            <p class="footer-content">Everything Made With ❤️ by Alphabet Incubator.</p>
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