<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Crovex - Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="../assets/images/favicon.ico">

        <!-- App css -->
        <link href="{{ asset('public/admin/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('public/admin/assets/css/jquery-ui.min.css')}}" rel="stylesheet">
        <link href="{{ asset('public/admin/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('public/admin/assets/css/metisMenu.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('public/admin/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />

    </head>

    <body class="account-body accountbg">

        <!-- Log In page -->
        <div class="container">
            <div class="row vh-100 ">
                <div class="col-12 align-self-center">
                    <div class="auth-page">
                        <div class="card auth-card shadow-lg">
                            <div class="card-body">
                                <div class="px-3">
                                    <div class="auth-logo-box">
                                        <a href="../dashboard/analytics-index.html" class="logo logo-admin">
                                            <img src="{{ asset('public/admin/assets/images/logo-sm.png')}}" height="55" alt="logo" class="auth-logo"></a>
                                    </div><!--end auth-logo-box-->
                                    
                                    <div class="text-center auth-logo-text">
                                        <h4 class="mt-0 mb-3 mt-5">Move Klang Admin Panel</h4>
                                        <p class="text-muted mb-0">Sign in to Move Klang with your Credentials</p>  
                                    </div> <!--end auth-logo-text-->  
    
                                    @if(!empty(session('errormsg'))) {{session('errormsg')}} @endif
                                    <form class="form-horizontal auth-form my-4" action="{{url('/admin/dologin')}}" method="post">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <label for="username">Email</label>
                                            <div class="input-group mb-3">
                                                <span class="auth-form-icon">
                                                    <i class="dripicons-user"></i> 
                                                </span>                                                                                                              
                                            <input type="email" value="{{old('email')}}" class="form-control" name="email" id="username" placeholder="Enter email">
                                            <small>@if(!empty($errors->first('email'))) {{ $errors->first('email')}} @endif</small>   
                                        </div>                                    
                                        </div><!--end form-group--> 
            
                                        <div class="form-group">
                                            <label for="userpassword">Password</label>                                            
                                            <div class="input-group mb-3"> 
                                                <span class="auth-form-icon">
                                                    <i class="dripicons-lock"></i> 
                                                </span>                                                       
                                                <input type="password" class="form-control" name="password" id="userpassword" placeholder="Enter password">
                                                <small>@if(!empty($errors->first('password'))) {{ $errors->first('password')}} @endif</small> 
                                            </div>                               
                                        </div><!--end form-group--> 
            
                                        <div class="form-group row mt-4">
                                            <div class="col-sm-6">
                                                <div class="custom-control custom-switch switch-success">
                                                    <input type="checkbox" class="custom-control-input" id="customSwitchSuccess">
                                                    <label class="custom-control-label text-muted" for="customSwitchSuccess">Remember me</label>
                                                </div>
                                            </div><!--end col--> 
                                            <div class="col-sm-6 text-right">
                                                <a href="auth-recover-pw.html" class="text-muted font-13"><i class="dripicons-lock"></i> Forgot password?</a>                                    
                                            </div><!--end col--> 
                                        </div><!--end form-group--> 
            
                                        <div class="form-group mb-0 row">
                                            <div class="col-12 mt-2">
                                                <button type="submit" class="btn btn-gradient-primary btn-round btn-block waves-effect waves-light" type="button">Log In <i class="fas fa-sign-in-alt ml-1"></i></button>
                                            </div><!--end col--> 
                                        </div> <!--end form-group-->                           
                                    </form><!--end form-->
                                </div><!--end /div-->
                                
                                <div class="m-3 text-center text-muted">
                                    <p class="">Don't have an account ?  Contact with your Administrator</p>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card
                        <div class="account-social text-center mt-4">
                            <h6 class="my-4">Or Login With</h6>
                            <ul class="list-inline mb-4">
                                <li class="list-inline-item">
                                    <a href="" class="">
                                        <i class="fab fa-facebook-f facebook"></i>
                                    </a>                                    
                                </li>
                                <li class="list-inline-item">
                                    <a href="" class="">
                                        <i class="fab fa-twitter twitter"></i>
                                    </a>                                    
                                </li>
                                <li class="list-inline-item">
                                    <a href="" class="">
                                        <i class="fab fa-google google"></i>
                                    </a>                                    
                                </li>
                            </ul>
                        </div><!--end account-social-->
                    </div><!--end auth-page-->
                </div><!--end col-->           
            </div><!--end row-->
        </div><!--end container-->
        <!-- End Log In page -->

        


        <!-- jQuery  -->
        <script src="{{ asset('public/admin/assets/js/jquery.min.js')}}"></script>
        <script src="{{ asset('public/admin/assets/js/jquery-ui.min.js')}}"></script>
        <script src="{{ asset('public/admin/assets/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{ asset('public/admin/assets/js/metismenu.min.js')}}"></script>
        <script src="{{ asset('public/admin/assets/js/waves.js')}}"></script>
        <script src="{{ asset('public/admin/assets/js/feather.min.js')}}"></script>
        <script src="{{ asset('public/admin/assets/js/jquery.slimscroll.min.js')}}"></script>        

        <!-- App js -->
        <script src="{{ asset('public/admin/assets/js/app.js')}}"></script>
        
    </body>

</html>