<!doctype html>
<html class="no-js " lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keyword" content="">
    <title>Cignes - Medical Laboratory Application</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="favicon.ico" type="image/x-icon"> <!-- Favicon-->

    <!-- project css file  -->
    
    <!--<link rel="stylesheet" href="assets/css/luno.style.min.css">-->
    <link rel="stylesheet" href="{{ asset('/css/luno.style.min.css')}}">
    
</head>

<body id="layout-1" data-luno="theme-blue">

    <!-- start: body area -->
    <div class="wrapper">
        
        <!-- start: page body -->
        <div class="page-body auth px-xl-4 px-sm-2 px-0 py-lg-2 py-1">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-6 d-none d-lg-flex justify-content-center align-items-center">
                        <div style="max-width: 30rem;">
                            <div class="mb-4">
                                <!--<svg height="40" viewBox="0 0 67 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path class="fill-primary" d="M0.863281 18.9997V1.14968H3.11328V16.9997H10.9133V18.9997H0.863281Z"/>
                                    <path class="fill-primary" d="M27.3045 12.6997C27.3045 13.933 27.0545 15.0497 26.5545 16.0497C26.0545 17.033 25.2878 17.8163 24.2545 18.3997C23.2378 18.9663 21.9378 19.2497 20.3545 19.2497C18.1378 19.2497 16.4462 18.6497 15.2795 17.4497C14.1295 16.233 13.5545 14.633 13.5545 12.6497V1.14968H15.8045V12.7247C15.8045 14.1747 16.1878 15.2997 16.9545 16.0997C17.7378 16.8997 18.9128 17.2997 20.4795 17.2997C21.5628 17.2997 22.4378 17.108 23.1045 16.7247C23.7878 16.3247 24.2878 15.783 24.6045 15.0997C24.9212 14.3997 25.0795 13.5997 25.0795 12.6997V1.14968H27.3045V12.6997Z"/>
                                    <path class="fill-secondary" d="M46.5286 0.765681C46.6246 0.82568 46.6726 0.92168 46.6726 1.05368L46.5466 18.6037C46.5466 18.8677 46.3906 18.9937 46.0786 18.9817H44.4586L33.1546 3.62768L33.1006 13.1677L37.5646 13.1857C37.6726 13.1857 37.7626 13.2217 37.8346 13.2937C37.9186 13.3657 37.9606 13.4617 37.9606 13.5817L37.9426 14.8957C37.9426 15.0157 37.9066 15.1237 37.8346 15.2197C37.7626 15.3037 37.6666 15.3457 37.5466 15.3457L31.3726 15.2917H31.3546C31.1026 15.2917 30.9706 15.1837 30.9586 14.9677L31.0666 0.98168C31.0666 0.849679 31.1026 0.74768 31.1746 0.675681C31.2586 0.59168 31.3666 0.555679 31.4986 0.56768H33.1726C33.3406 0.56768 33.4726 0.63368 33.5686 0.765681L44.4406 15.4177L44.5486 0.94568C44.5966 0.741679 44.7286 0.639679 44.9446 0.639679L46.2046 0.65768C46.3126 0.65768 46.4206 0.69368 46.5286 0.765681ZM39.7786 16.7857C39.8986 16.7977 39.9946 16.8397 40.0666 16.9117C40.1386 16.9717 40.1746 17.0677 40.1746 17.1997L40.1566 18.4957C40.1566 18.6157 40.1206 18.7237 40.0486 18.8197C39.9886 18.9037 39.8926 18.9457 39.7606 18.9457H31.3546C31.2346 18.9457 31.1386 18.9097 31.0666 18.8377C30.9946 18.7657 30.9586 18.6697 30.9586 18.5497V17.2357C30.9586 17.1157 30.9946 17.0137 31.0666 16.9297C31.1386 16.8337 31.2406 16.7857 31.3726 16.7857H35.5666C38.0266 16.7857 39.4306 16.7857 39.7786 16.7857Z"/>
                                    <path class="fill-primary" d="M66.0301 10.0497C66.0301 11.433 65.8551 12.6913 65.5051 13.8247C65.1551 14.9413 64.6301 15.908 63.9301 16.7247C63.2467 17.5413 62.3884 18.1663 61.3551 18.5997C60.3384 19.033 59.1551 19.2497 57.8051 19.2497C56.4051 19.2497 55.1884 19.033 54.1551 18.5997C53.1217 18.1497 52.2634 17.5247 51.5801 16.7247C50.8967 15.908 50.3884 14.933 50.0551 13.7997C49.7217 12.6663 49.5551 11.408 49.5551 10.0247C49.5551 8.19135 49.8551 6.59135 50.4551 5.22468C51.0551 3.85801 51.9634 2.79135 53.1801 2.02468C54.4134 1.25801 55.9634 0.87468 57.8301 0.87468C59.6134 0.87468 61.1134 1.25801 62.3301 2.02468C63.5467 2.77468 64.4634 3.84135 65.0801 5.22468C65.7134 6.59135 66.0301 8.19968 66.0301 10.0497ZM51.9301 10.0497C51.9301 11.5497 52.1384 12.8413 52.5551 13.9247C52.9717 15.008 53.6134 15.8413 54.4801 16.4247C55.3634 17.008 56.4717 17.2997 57.8051 17.2997C59.1551 17.2997 60.2551 17.008 61.1051 16.4247C61.9717 15.8413 62.6134 15.008 63.0301 13.9247C63.4467 12.8413 63.6551 11.5497 63.6551 10.0497C63.6551 7.79968 63.1884 6.04135 62.2551 4.77468C61.3217 3.49135 59.8467 2.84968 57.8301 2.84968C56.4801 2.84968 55.3634 3.14135 54.4801 3.72468C53.6134 4.29135 52.9717 5.11635 52.5551 6.19968C52.1384 7.26635 51.9301 8.54968 51.9301 10.0497Z"/>
                                </svg>-->
                                <h1>CIGNES</h1>
                            </div>
                            <div class="mb-5">
                                <h2 class="color-900">E Lab Application</h2>
                            </div>
                            <!-- List Checked -->
                            <!--<ul class="list-unstyled mb-5">
                                <li class="mb-4">
                                    <span class="d-block mb-1 fs-4 fw-light">All-in-one tool</span>
                                    <span class="color-600">Amazing Features to make your life easier & work efficient</span>
                                </li>
                                <li>
                                    <span class="d-block mb-1 fs-4 fw-light">Easily add &amp; manage your services</span>
                                    <span class="color-600">It brings together your tasks, projects, timelines, files and more</span>
                                </li>
                            </ul>-->
                            
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex justify-content-center align-items-center">
                        <div class="card shadow-sm w-100 p-4 p-md-5" style="max-width: 32rem;">
                            <!-- Form -->
                            
                            <form class="row g-3" id="login" name="login" method="post" action="{{ route('login.post') }}">                            
                            @csrf
                                <div class="col-12 text-center mb-5">
                                    <h1>Sign in</h1>
                                    <span class="text-muted">Free access to your dashboard.</span>
                                </div>

            <?php
            if (isset($_COOKIE["log_user"]) && isset($_COOKIE["log_pass"])) {
                $loguse = $_COOKIE["log_user"];
                $logpass = $_COOKIE["log_pass"];
                $logrem = "checked";
            } else {
                $loguse = '';
                $logpass = '';
                $logrem = '';
            }
            ?>
                                @if(\Session::get('success'))
                                <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                                    {{ \Session::get('success') }}
                                </div>
                                @endif
                                {{ \Session::forget('success') }}
                                @if(\Session::get('error'))
                                <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                                    {{ \Session::get('error') }}
                                </div>
                                @endif  
                                
                                <div class="col-12">
                                    <div class="mb-2">
                                        <label class="form-label">Username</label>
                                        <input type="text" name="username" id="username"  value="{{$loguse}}" class="form-control form-control-lg" placeholder="">
                                        @error('username')
                                        <div class="alert-danger pt-1 pb-1 px-1 py-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-2">
                                        <div class="form-label">
                                            <span class="d-flex justify-content-between align-items-center">
                                                Password
                                                <a class="text-primary" href="{{ url('/forgot-password') }}">Forgot Password?</a>
                                            </span>
                                        </div>
                                        <input type="password" name="password" id="password" value="{{$logpass}}" class="form-control form-control-lg" placeholder="">
                                        @error('password')
                                        <div class="alert-danger  pt-1 pb-1 px-1 py-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="remember_me" {{$logrem}}>
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Remember me
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12 text-center mt-4">
                                    <!--<a class="btn btn-lg btn-block btn-dark lift text-uppercase" href="#" title="">SIGN IN</a>-->
                                    <button type="submit" class="btn btn-lg btn-block btn-dark lift text-uppercase">Sign In</button>
                                </div>
                                
                            </form>
                            <!-- End Form -->
                        </div>
                    </div>
                </div> <!-- End Row -->

            </div>
        </div>

    </div>

  
    

<!-- Jquery Core Js -->
<script src="{{ asset('assets/bundles/libscripts.bundle.js')}}"></script>
</body>
</html>