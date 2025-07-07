<!DOCTYPE html>
<html>
<head>
    <title>Customer List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4">Add New Customer</h2>
    <form action="{{ url('/customer') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Name:</label>
            <input type="text" name="name" class="form-control" value="{{old('name')}}">
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

    <h2 class="mt-5">Customer List</h2>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered mt-3">
        <thead>
        <tr>
            <th>ID</th><th>Name</th><th>Email</th><th>Gender</th>
            <th>Address</th><th>State</th><th>Country</th><th>DOB</th>
            <th>Status</th><th>Points</th>
        </tr>
        </thead>
        
    </table>
</div>
</body>
</html>
