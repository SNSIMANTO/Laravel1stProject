
<!doctype html>
<html lang="en"> 
  <head>
    <title>Form</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container-fluid bg-dark">
  <div class="container">
    <nav class="navbar navbar-expand-sm">
      <a class="navbar-brand" href="#" style="color: white">SN SIMANTO</a>
      <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse"
        data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="{{url('/')}}" style="color: white">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/register')}}" style="color: white">Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/customer/view')}}" style="color: white">Customer</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</div>
    <div class='items-center'>
    <form action="{{url('/')}}/register", method="post">
      @csrf
      <div class='container'>
          <x-input type="name" name="name" label="Please Enter Your Name"/>
          <x-input type="email" name="email" label="Please Enter Your Email"/>
          <x-input type="password" name="user_password" label="Please Enter Your Password"/>
          <x-input type="password" name="password_confirmation" label="Please Confirm Your password"/>
         <button class='btn btn-primary'>
            Submit
         </button>
      </div>
</form>
</div>
</body>
</html>
