<!doctype html>
<html lang="en">


<head>

    <meta charset="utf-8" />
    <title>Register | Hiyou</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="themesdesign" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" id="tabIcon">

    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body>

<div class="auth-bg">
    <div class="container p-0">
        <div class="row justify-content-center g-0">
            <div class="col-xl-9 col-lg-8">
                <div class="authentication-page-content shadow-lg">
                    <div class="d-flex flex-column h-100 px-4 pt-4">
                        <div class="row justify-content-center my-auto">
                            <div class="col-sm-8 col-lg-6 col-xl-6">

                                <div class="py-md-5 py-4">

                                    <div class="text-center mb-5">
                                        <h3>Register Account</h3>
                                        <p class="text-muted">Get your free Hiyou account now.</p>
                                    </div>

                                    <form class="needs-validation" novalidate action="{{route('Register_page')}}" method="POST">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="useremail" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="useremail"
                                                placeholder="Enter email" name="email"  value="{{ old('email') }}" required>
                                            <div class="invalid-feedback">
                                                Please Enter Email
                                            </div>
                                            <p style="color: red; font-size:12px">@error('email') {{ $message }} @enderror</p>

                                        </div>
                                        <div class="mb-3">
                                            <label for="username" class="form-label">Username</label>
                                            <input type="text" class="form-control" id="username"
                                                placeholder="Enter username" name="username"  value="{{ old('username') }}" required>
                                            <div class="invalid-feedback">
                                                Please Enter Username
                                            </div>
                                            <p style="color: red; font-size:12px">@error('username') {{ $message }} @enderror</p>
                                        </div>

                                        <div class="mb-3">
                                            <label for="userpassword" class="form-label">Password</label>
                                            <input type="password" class="form-control" id="userpassword"
                                                placeholder="Enter password" name="password" required>
                                            <div class="invalid-feedback">
                                                Please Enter Password
                                            </div>
                                        </div>

                                        <div class="mb-4">
                                            <p class="mb-0">By registering you agree to the Hiyou <a href="#"
                                                    class="text-primary">Terms of Use</a></p>
                                        </div>

                                        <div class="mb-3">
                                            <button class="btn btn-primary w-100 waves-effect waves-light"
                                                type="submit">Register</button>
                                        </div>
                                        <div class="mt-4 text-center">
                                            <div class="signin-other-title">
                                                <h5 class="fs-14 mb-4 title">Sign up using</h5>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div>
                                                        <button type="button" class="btn btn-soft-danger w-100"><i
                                                                class="mdi mdi-google"></i> Google</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form><!-- end form -->

                                    <div class="mt-5 text-center text-muted">
                                        <p>Already have an account ? <a href="{{route('login_page')}}"
                                                class="fw-medium text-decoration-underline">Login</a></p>
                                    </div>
                                </div>
                            </div><!-- end col -->
                        </div><!-- end row -->

                        <div class="row">
                            <div class="col-xl-12">
                                <div class="text-center text-muted p-4">
                                    <p class="mb-0">&copy;
                                        <script>document.write(new Date().getFullYear())</script> Hiyou. Crafted with <i
                                            class="mdi mdi-heart text-danger"></i> by Brahim Senhaji
                                    </p>
                                </div>
                            </div><!-- end col -->
                        </div><!-- end row -->

                    </div>
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container-fluid -->
</div>
<!-- end auth bg -->

<!-- JAVASCRIPT -->
<script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/libs/simplebar/simplebar.min.js"></script>
<script src="assets/libs/node-waves/waves.min.js"></script>
<!-- validation init -->
<script src="assets/js/pages/validation.init.js"></script>

<!-- theme-style init -->
<script src="assets/js/pages/theme-style.init.js"></script>

<script src="assets/js/app.js"></script>

</body>


</html>