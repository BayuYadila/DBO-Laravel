@extends("layouts.layout-dashboard")

@section("tittle", "Edit Item:")

@section ("content")

    <section class="container edit-item mt-4 bg-white rounded">
        <h1 class="container header-tittle pt-4 fw-bold">Edit Item</h1>
        <div class="container header-button d-flex justify-content-center gap-5">
            <button type="submit" class="btn btn-warning text-white mt-4 col">Submission Center</button>
            <button type="submit" class="btn btn-warning text-white mt-4 col">Subjects</button>
            <button type="submit" class="btn btn-warning text-white mt-4 col">Deposits</button>
        </div>

        <div class="container bg-main-content mt-3 p-5">
            <div class="d-flex">
                <h2 class="me-3">Item Type:</h2>
                <div class="btn-group">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        Choose Item Type
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="javascript:void(0);" onclick="changeText('Article')">Article</a></li>
                        <li><a class="dropdown-item" href="javascript:void(0);" onclick="changeText('Book Section')">Book Section</a></li>
                        <li><a class="dropdown-item" href="javascript:void(0);" onclick="changeText('Book')">Book</a></li>
                        <li><a class="dropdown-item" href="javascript:void(0);" onclick="changeText('Thesis')">Thesis</a></li>
                        <li><a class="dropdown-item" href="javascript:void(0);" onclick="changeText('Conference of Workshop Item')">Conference of Workshop Item</a></li>
                        <li><a class="dropdown-item" href="javascript:void(0);" onclick="changeText('Other')">Other</a></li>
                    </ul>
                </div>
            </div>
        </div>
        
        <script>
            function changeText(text) {
                document.querySelector('.btn.btn-primary.dropdown-toggle').innerText = text;
            }
        </script>        

        <div class="container footer-button">
            <button type="submit" class="btn btn-warning text-white mt-4">Previous</button>
            <button type="submit" class="btn btn-warning text-white mt-4">Save and Return</button>
            <button type="submit" class="btn btn-warning text-white mt-4">Next</button>
        </div>
    </section>


@endsection