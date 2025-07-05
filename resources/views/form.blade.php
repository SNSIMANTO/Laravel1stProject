<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
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
          
          <div class="form-group">
            <label for="">Name</label>
            <input type="text" name="user_name" id="" class="form-control"  value="{{old('user_name')}}">
          <span class="text-danger">
            @error("user_name")
            {{$message}}
            @enderror
          </span>
          </div>
      </div>
      <div class='container'>
          
          <div class="form-group">
            <label for="">Email</label>
            <input type="email" name="user_email" id="" class="form-control" value="{{old('user_email')}}">
            <span class="text-danger">
            @error("user_email")
            {{$message}}
            @enderror
            </span>
        
          </div>
      </div>
      <div class='container'>
          
          <div class="form-group">
            <label for="">Password</label>
            <input type="password" name="user_password" id="" class="form-control">
            <span class="text-danger">
            @error("user_password")
            {{$message}}
            @enderror
            </span>
          </div>
      </div>
      <div class='container'>
          
          <div class="form-group">
            <label for="">Confirm Password</label>
            <input type="password" name="password_confirmation" id="" class="form-control" >
            <span class="text-danger">
            @error("password_confirmation")
            {{$message}}
            @enderror
            </span>
          </div>
      </div>
      <div class='container'>
         <button class='btn btn-primary'>
            submit
         </button>
      </div>
</form>
</div>
</body>
</html>