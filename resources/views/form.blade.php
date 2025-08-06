<!doctype html>
<html lang="en">
<head>
    <title>Register Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap 4 CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <style>
      body {
          background: #f8f9fa;
          font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      }
      .card {
          margin-top: 50px;
          box-shadow: 0 0 15px rgba(0,0,0,0.1);
      }
    </style>
</head>
<body>

<!-- Navbar -->
<div class="container-fluid bg-dark">
    <div class="container">
        <nav class="navbar navbar-expand-sm">
            <p class="navbar-brand text-white">SN SIMANTO</p>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a class="nav-link text-white" href="{{url('/')}}">Home</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="{{url('/register')}}">Register</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="{{url('/customer/view')}}">Customer</a></li>
                </ul>
            </div>
        </nav>
    </div>
</div>

<!-- Form Section -->
<div class="container d-flex justify-content-center">
    <div class="card w-50 h-70">
        <div class="card-header bg-primary text-white text-center">
            <h3>User Registration</h3>
        </div>
        <div class="card-body">
            <form action="{{ url('/') }}/register" method="POST">
                @csrf
                <div>
                  <div>
                      <x-input type="name" name="name" label="Please Enter Your Name"/>
                      <x-input type="email" name="email" label="Please Enter Your Email"/>
                      <x-input type="password" name="user_password" label="Please Enter Your Password"/>
                      <x-input type="password" name="password_confirmation" label="re Enter Your Password"/>
                  </div>
                  <div class="text-center mt-4">
                      <button class="btn btn-primary">Register</button>
                  </div>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>
