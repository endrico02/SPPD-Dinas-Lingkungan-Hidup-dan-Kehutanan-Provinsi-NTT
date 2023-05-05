<!doctype html>
<html lang="en">
    <head>
  	    <title>SPPD</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <link href="{{ asset('login_template/css/font.css') }}" rel="stylesheet">
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	    <link rel="stylesheet" href="{{ asset('login_template/css/style.css') }}">
	</head>
	<body>
        <section class="ftco-section">
            <div class="container">
                {{-- <div class="row justify-content-center">
                    <div class="col-md-6 text-center mb-5">
                        <h2 class="heading-section">Login SPPD <br> Dinas Lingkungan Hidup Kehutanan</h2>
                    </div>
                </div> --}}
                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-5">
                        <div class="login-wrap p-4 p-md-5">
                    <div class="d-flex align-items-center justify-content-center">
                        <img src="{{ asset('nusa-tenggara-timur-logo-AD1B11F442-seeklogo.com.png') }}" width="90">
                    </div>
                    <br>
                    <h3 class="text-center">SPPD</h3>
                    <h3 class="text-center">Dinas Lingkungan Hidup & Kehutanan</h3>
                    <h3 class="text-center mb-4">Prov NTT</h3>
                    <form action="proses_login" class="login-form" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="nip" class="form-control rounded-left" placeholder="NIP" required>
                        </div>
                        <div class="form-group d-flex">
                            <input type="password" name="password" class="form-control rounded-left" placeholder="Password" required>
                        </div>
                        <div class="form-group d-md-flex">
                            <div class="w-50">
                                {{-- <label class="checkbox-wrap checkbox-primary">Remember Me
                                    <input type="checkbox" checked>
                                    <span class="checkmark"></span>
                                </label> --}}
                            </div>
                            <div class="w-50 text-md-right">
                                {{-- <a href="#">Forgot Password ?</a> --}}
                            </div>
                        </div>
                        <div class="form-group d-md-flex">
                            <button type="submit" class="btn btn-primary rounded submit p-3 px-5">Login</button>
                        </div> 
                        <br> 
                        {{-- <br> 
                        <div class="form-group">
                            <button type="button" class="btn btn-primary rounded submit p-3 px-5">Register</button>
                        </div> --}}
                                      
                    </form>
                </div>
                    </div>
                </div>
            </div>
        </section>

	    <script src="{{ asset('login_template/js/jquery.min.js') }}"></script>
        <script src="{{ asset('login_template/js/popper.js') }}"></script>
        <script src="{{ asset('login_template/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('login_template/js/main.js') }}"></script>
	</body>
</html>