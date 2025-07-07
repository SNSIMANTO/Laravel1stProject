
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
    <div class='items-center'>
    <form action="{{url('/')}}/register", method="post">
      @csrf
      <div class='container'>
          <x-input type="name" name="name" label="Please Enter Your Name"/>
          <x-input type="email" name="email" label="Please Enter Your Email"/>
          <x-input type="password" name="user_password" label="Please Enter Your Password"/>
          <x-input type="password" name="password_confirmation" label="Please Confirm Your password"/>
         <button class='btn btn-primary'>
            submit
         </button>
      </div>
</form>
</div>
</body>
</html>
