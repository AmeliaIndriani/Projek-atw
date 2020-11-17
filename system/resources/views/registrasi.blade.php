<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{url('public')}}/vendor/bootstrap/css/bootstrap.min.css">
    <link href="{{url('public')}}/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="{{url('public')}}/libs/css/style.css">
    <link rel="stylesheet" href="{{url('public')}}/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <style>
    html,
    body {
        height: 100%;
    }

    body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
    }
    </style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- login page  -->
    <!-- ============================================================== -->
    <div class="splash-container">
        <div class="card ">
            <div class="card-header text-center"></a><span class="splash-description">Registrasi</span></div>
            <div class="card-body">
                @include('template.utils.notif')
                <form action="{{url('registrasi')}}" method="post">
                    @csrf
                    <div class="form-group">
						<input class="form-control form-control-lg" type="text" placeholder="Nama" title="Please enter you nama" required="" value="" name="nama" id="nama" class="form-control">
					</div>
					<div class="form-group">
                        <input class="form-control form-control-lg" type="text" placeholder="Username" title="Please enter you email" required="" value="" name="username" id="email" class="form-control">
					</div>
					<div class="form-group">
                        <input class="form-control form-control-lg" type="text" placeholder="Email" title="Please enter you email" required="" value="" name="email" id="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" type="password" title="Please enter your password" placeholder="**" required="" value="" name="password" id="password" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="custom-control custom-checkbox">
                            {{-- <input class="custom-control-input" type="checkbox"><span class="custom-control-label">Remember Me</span> --}}
                        </label>
                    </div>
                    <div class="btn btn-primary btn-lg btn-block"> 
                    <button class="btn btn-primary btn-lg btn-block">Submit</button>
                    </div>
                </form>
            </div>

         


            <div class="card-footer bg-white p-0 row ">
                <div class="card-footer-item card-footer-item-bordered col-md-6">
                    <a href="#" class="footer-link">Kembali</a></div>
                <div class="card-footer-item card-footer-item-bordered col-md-6">
                    <a href="#" class="footer-link">Login</a>
                </div>
            </div>
        </div>
    </div>
  
    <!-- ============================================================== -->
    <!-- end login page  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="{{url('public')}}/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="{{url('public')}}/vendor/bootstrap/js/bootstrap.bundle.js"></script>
</body>
 
</html>