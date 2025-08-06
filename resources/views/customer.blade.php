<!DOCTYPE html>
<html>
<head>
    <title>Customer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

    <!-- Navbar -->
    <div class="container-fluid bg-dark">
        <div class="container">
            <nav class="navbar navbar-expand-sm">
                <a class="navbar-brand" href="{{url('/')}}" style="color: white">SN SIMANTO</a>
                <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse"
                    data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item"><a class="nav-link" href="{{url('/')}}" style="color: white">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{url('/register')}}" style="color: white">Register</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{url('/customer/view')}}" style="color: white">Customer</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>

    <!-- Centered Card Form -->
    <div class="container mt-5 d-flex justify-content-center">
        <div class="card w-100 shadow" style="max-width: 800px;">
            <div class="card-header bg-primary text-white text-center">
                <h4>@if(isset($customer)) Update Customer @else Add New Customer @endif</h4>
            </div>
            <div class="card-body">
                <form action="@if(isset($customer)){{route('customer.upadte',['id'=> $customer->customer_id])}}@else{{route('customer.create')}}@endif" method="POST">
                    @csrf

                    <!-- All your form fields start here (UNCHANGED) -->
                    <div class="form-group">
                        <label>Name:</label>
                        <input type="text" name="name" class="form-control" value="@if(isset($customer)){{$customer->name}}@else{{old('name')}}@endif">
                        <span class="text-danger">@error('name') {{$message}} @enderror</span>
                    </div>

                    <div class="form-group">
                        <label>Email:</label>
                        <input type="text" name="email" class="form-control" value="@if(isset($customer)){{$customer->email}}@else{{old('email')}}@endif">
                        <span class="text-danger">@error('email') {{$message}} @enderror</span>
                    </div>

                    <div class="form-group">
                        <label>Gender:</label><br>
                        <select name="gender" class="form-control">
                            <option value="M" @if(isset($customer)){{$customer->gender == 'M' ? 'selected' : ''}}@endif>Male</option>
                            <option value="F" @if(isset($customer)){{$customer->gender == 'F' ? 'selected' : ''}}@endif>Female</option>
                            <option value="O" @if(isset($customer)){{$customer->gender == 'O' ? 'selected' : ''}}@endif>Other</option>
                        </select>
                        <span class="text-danger">@error('gender') {{$message}} @enderror</span>
                    </div>

                    <div class="form-group">
                        <label>Address:</label>
                        <input name="address" class="form-control" value="@if(isset($customer)){{$customer->address}}@else{{old('address')}}@endif">
                        <span class="text-danger">@error('address') {{$message}} @enderror</span>
                    </div>

                    <div class="form-group">
                        <label>State:</label>
                        <input type="text" name="state" class="form-control" value="@if(isset($customer)){{$customer->state}}@else{{old('state')}}@endif">
                        <span class="text-danger">@error('state') {{$message}} @enderror</span>
                    </div>

                    <div class="form-group">
                        <label>Country:</label>
                        <input type="text" name="country" class="form-control" value="@if(isset($customer)){{$customer->country}}@else{{old('country')}}@endif">
                        <span class="text-danger">@error('country') {{$message}} @enderror</span>
                    </div>

                    <div class="form-group">
                        <label>Date of Birth:</label>
                        <input type="date" name="dob" class="form-control" value="@if(isset($customer)){{$customer->dob}}@else{{old('dob')}}@endif">
                        <span class="text-danger">@error('dob') {{$message}} @enderror</span>
                    </div>

                    <div class="form-group">
                        <label>Password:</label>
                        <input type="password" name="password" class="form-control">
                        <span class="text-danger">@error('password') {{$message}} @enderror</span>
                    </div>

                    <div class="form-group">
                        <label>Confirm Password:</label>
                        <input type="password" name="password_confirmation" class="form-control">
                        <span class="text-danger">@error('password_confirmation') {{$message}} @enderror</span>
                    </div>

                    <div class="form-group">
                        <label>Status:</label>
                        <input type="text" name="status" class="form-control" value="@if(isset($customer)){{$customer->status}}@else{{old('status')}}@endif">
                        <span class="text-danger">@error('status') {{$message}} @enderror</span>
                    </div>

                    <div class="form-group">
                        <label>Points:</label>
                        <input type="number" name="points" class="form-control" value="@if(isset($customer)){{$customer->points}}@else{{old('points')}}@endif">
                        <span class="text-danger">@error('points') {{$message}} @enderror</span>
                    </div>

                    <button type="submit" class="btn btn-primary w-100 mt-3">
                        @if(isset($customer)) Update Customer @else Add Customer @endif
                    </button>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
