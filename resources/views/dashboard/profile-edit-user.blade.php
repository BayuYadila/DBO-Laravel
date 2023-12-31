@extends("layouts.layout-dashboard")

@section("tittle", "Edit User")

@section ("content")

        <section class="container profile-edit-user mt-4 bg-white rounded p-3">
        <!-- Header Button -->
            <h1 class="container header-tittle pt-4 fw-bold">Edit</h1>
        <!-- Akhir Header Button -->
    
        <!-- Backround Main Admin create user -->
        <div class="container bg-main-content mt-3 p-5">
        
        <!-- user type -->
        <div class="container edit-user-type mt-5">
            <h5 class="fw-bold">User Type:</h5>
            <div class="d-block flex-wrap">
                <div class="form-check">
                    <label class="form-check-label" for="editusertype1">
                        <input class="form-check-input" type="radio" name="editusertype" id="editusertype1" value="option1" checked>
                        User
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label" for="editusertype2">
                        <input class="form-check-input" type="radio" name="editusertype" id="editusertype2" value="option2">
                        Editor
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label" for="editusertype3">
                        <input class="form-check-input" type="radio" name="editusertype" id="editusertype3" value="option3">
                        Repository Administrator
                    </label>
                </div>
            </div>
        </div>       
        <!-- Akhir user type -->

        {{-- username --}}
        <div class="container bg-main-username text-white mt-5 p-3 rounded">
            <h5 class="fw-bold">Username</h5>
            <div class="mt-3 d-flex flex-column align-items-center">
                <div class="col-12 col-md-6 mb-3">
                    <input type="text" class="form-control" id="editusernameinput" placeholder="Edit your username">
                </div>
            </div>
        </div>
        {{-- akhir username --}}

        {{-- account details --}}
        <div class="container bg-main-account-detail mt-5 text-white p-3 rounded">
            <h5 class="fw-bold">Account Detail</h5>
            <div class="mt-3 d-flex flex-column align-items-center">
                <div class="col-12 col-md-6 mb-3">
                    <h5>Email Address :</h5>
                    <input type="text" class="form-control" id="editemailaddressinput" placeholder="Enter your email address">
                </div>
                <div class="col-12 col-md-6 mb-3">
                    <h5>Password :</h5>
                    <input type="password" class="form-control" id="editpasswordinput" placeholder="Edit your password">
                </div>
            </div>
        </div>
        {{-- akhir account details --}}

        {{-- personal details --}}
        <div class="container bg-main-personal-details mt-5 text-white p-3 rounded">
            <h5 class="fw-bold">Personal Details</h5>
            <div class="mt-3 d-flex flex-column align-items-center">
                <div class="col-12 col-md-6 mb-3">
                    <h5>Name :</h5>
                    <div class="row g-3">
                        <div class="col">
                            <input type="text" class="form-control" id="editfirstnameinput" placeholder="First Name">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="editlastnameinput" placeholder="Last Name">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 mb-3">
                    <h5>Department :</h5>
                    <input type="text" class="form-control" id="editdepartmentinput" placeholder="Enter your department">
                </div>
                <div class="col-12 col-md-6 mb-3">
                    <h5>Organization :</h5>
                    <input type="text" class="form-control" id="editorganizationinput" placeholder="Enter your organization">
                </div>
                <div class="col-12 col-md-6 mb-3">
                    <h5>Address :</h5>
                    <input type="text" class="form-control" id="editaddressinput" placeholder="Enter your address">
                </div>
                <div class="col-12 col-md-6 mb-3">
                    <h5>Country :</h5>
                    <input type="text" class="form-control" id="editcountryinput" placeholder="Enter your country">
                </div>
            </div>
        </div>
        {{-- akhir account details --}}

        {{-- action footer button --}}
        <div class="footer-button p-4 d-flex flex-column flex-md-row justify-content-md-center gap-3">
            <a href="/" class="btn btn-primary w-100 mb-2 mb-md-0">Cancel</a>
            <a href="/" class="btn btn-primary w-100">Save</a>
        </div>
        {{-- akhir action footer button --}}

        </div>
    <!-- Akhir background Main admin create user -->
    </section>


@endsection