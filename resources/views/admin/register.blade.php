<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Exam Portal Register</title>
  <!-- base:css -->
  <link rel="stylesheet" href="{{URL::asset('assets/vendors/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{URL::asset('assets/vendors/base/vendor.bundle.base.css')}}">
  <link rel="stylesheet" href="{{URL::asset('assets/css/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{URL::asset('assets/images/favicon.png')}}" />
</head>

<body>

<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="main-panel">
            <div class="content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-6 mx-auto">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                            <form class="pt-3">
                                <div class="form-group">
                                    <label for="user">Username *</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend bg-transparent">
                                            <span class="input-group-text bg-transparent border-right-0">
                                                <i class="mdi mdi-account-outline text-primary"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control form-control-lg border-left-0"
                                            id="user" placeholder="Username" name="username">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="email">Email *</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend bg-transparent">
                                            <span class="input-group-text bg-transparent border-right-0">
                                                <i class="mdi mdi-email text-primary"></i>
                                            </span>
                                        </div>
                                        <input type="email" class="form-control form-control-lg border-left-0"
                                            id="email" placeholder="Email" name="useremail">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="mobile">Mobile *</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend bg-transparent">
                                            <span class="input-group-text bg-transparent border-right-0">
                                                <i class="mdi mdi-cellphone-iphone text-primary"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control form-control-lg border-left-0"
                                            id="mobile" placeholder="Mobile" name="usermobile">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="userPassword">Password *</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend bg-transparent">
                                            <span class="input-group-text bg-transparent border-right-0">
                                                <i class="mdi mdi-lock-outline text-primary"></i>
                                            </span>
                                        </div>
                                        <input type="password" class="form-control form-control-lg border-left-0"
                                            id="userPassword" placeholder="Password" name="password">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="cpassword">Confirm Password *</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend bg-transparent">
                                            <span class="input-group-text bg-transparent border-right-0">
                                                <i class="mdi mdi-lock-outline text-primary"></i>
                                            </span>
                                        </div>
                                        <input type="password" class="form-control form-control-lg border-left-0"
                                            id="cpassword" placeholder="Confirm Password" name="cpassword">
                                    </div>
                                </div>

                                <div class="my-3">
                                    <a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn"
                                        href="">REGISTER</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
  
  <script src="{{URL::asset('assets/vendors/base/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="{{URL::asset('assets/js/template.js')}}"></script>
  <!-- endinject -->
</body>

</html>