<!DOCTYPE html>
<html>
<head>
    <title>New Customer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet">
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
<div class="container mt-5">
    <h2 class="mb-4">@if(isset($customer))Update @else Add New @endif Customer</h2>
    <form action="@if(isset($customer)){{route('customer.upadte',['id'=> $customer->customer_id])}}@else{{url('/customer')}}@endif" method="POST">
        @csrf
        <div class="form-group">
            <label>Name:</label>
            <input type="text" name="name" class="form-control" value="@if(isset($customer)){{$customer->name}}@else{{old('name')}}@endif">
            <span class="text-danger">
                @error('name')
                {{$message}}
                @enderror
            </span>
        </div>

        <div class="form-group">
            <label>Email:</label>
            <input type="text" name="email" class="form-control" value="{{old('email')}}">
            <span class="text-danger">
                @error('email')
                {{$message}}
                @enderror
            </span>
        </div>

        <div class="form-group">
            <label>Gender:</label><br>
            <select name="gender" class="form-control">
                <option value="M">Male</option>
                <option value="F">Female</option>
                <option value="O">Other</option>
            </select>
            <span class="text-danger">
                @error('gender')
                {{$message}}
                @enderror
            </span>
        </div>

        <div class="form-group">
            <label>Address:</label>
            <input name="address" class="form-control" value="{{old('address')}}">
        <span class="text-danger">
                @error('address')
                {{$message}}
                @enderror
            </span>
        </div>

        <div class="form-group">
            <label>State:</label>
            <input type="text" name="state" class="form-control" value="{{old('state')}}">
            <span class="text-danger">
                @error('state')
                {{$message}}
                @enderror
            </span>
        </div>

        <div class="form-group">
            <label>Country:</label>
            <input type="text" name="country" class="form-control" value="{{old('country')}}">
            <span class="text-danger">
                @error('country')
                {{$message}}
                @enderror
            </span>
        </div>

        <div class="form-group">
            <label>Date of Birth:</label>
            <input type="date" name="dob" class="form-control" value="{{old('dob')}}">
            <span class="text-danger">
                @error('dob')
                {{$message}}
                @enderror
            </span>
        </div>

        <div class="form-group">
            <label>Password:</label>
            <input type="password" name="password" class="form-control" >
            <span class="text-danger">
                @error('password')
                {{$message}}
                @enderror
            </span>
        </div>

        <div class="form-group">
            <label>Confirm Password:</label>
            <input type="password" name="password_confirmation" class="form-control">
            <span class="text-danger">
                @error('password_confirmation')
                {{$message}}
                @enderror
            </span>
        </div>

        <div class="form-group">
            <label>Status:</label>
            <input type="text" name="status" class="form-control" value="{{old('status')}}">
            <span class="text-danger">
                @error('status')
                {{$message}}
                @enderror
            </span>
        </div>

        <div class="form-group">
            <label>Points:</label>
            <input type="number" name="points" class="form-control" value="{{old('points')}}">
            <span class="text-danger">
                @error('points')
                {{$message}}
                @enderror
            </span>
        </div>

        <button type="submit" class="btn btn-primary">Add Customer</button>
    </form>

    <hr>

    
</div>
</body>
</html>


3.38.22