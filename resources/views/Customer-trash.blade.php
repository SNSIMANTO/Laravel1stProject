<!doctype html>
<html lang="en">
  <head>
    <title>Trash Customers</title>
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
      <a class="navbar-brand" href="#" style="color: white">
        @if(session()->has('user_name'))
                    {{session()->get('user_name')}}
                    @else
                    Guest
                    @endif
      </a>
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
            <a class="nav-link" href="{{route('customer.view')}}" style="color: white">Customer</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</div>
      <div class="container">
        <a href="{{route('customer.create')}}">
            <button class="btn btn-primary d-inline-block m-2 float-right">Add</button>
        </a>
        <a href="{{url('customer/view')}}">
            <button class="btn btn-primary d-inline-block m-2 float-right">GO TO CUSTOMERS</button>
        </a>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Address</th>
                    <th>State</th>
                    <th>Country</th>
                    <th>DOB</th>
                    <th>Status</th>
                    <th>Points</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($customers as $as )
                <tr>
                    <td>{{$as->name}}</td>
                    <td>{{$as->email}}</td>
                    <td>
                        @if($as->gender=="M")
                        Male
                        @elseif($as->gender=="F")
                        Female
                        @else
                        Other
                        @endif</td>
                    <td>{{$as->address}}</td>
                    <td>{{$as->state}}</td>
                    <td>{{$as->country}}</td>
                    {{-- <td>{{$as->dob}}</td> if we use this the date will not be formatted ,use helper functon to make the date formatted --}}
                    {{-- <td>{{get_formatted_date($as->dob,"d-M-Y")}}</td> while i am using helper to change the data format in the database --}}
                    <td>{{$as->dob}}</td>
                    <td>
                       @if ($as->status=="1")
                      <a href="">
                       <button class="btn">
                        <span class="badge badge-success"> Active </span>
                      </button>
                      </a>
                       @else
                       <a href="">
                       <button class="btn">
                        <span class="badge badge-danger">Inactive </span>
                      </button>
                      </a>
                       @endif
                    </td>
                    <td>{{$as->points}}</td>
                    <td>
                      <a href="{{route('customer.force-delete',['id'=> $as->customer_id])}}"><button class="btn btn-danger">Delete</button></a>
                    </td>
                    <td>
                      <a href="{{route('customer.restore',['id'=> $as->customer_id])}}"><button class="btn btn-primary">Restore</button></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
      </div>
  </body>
</html>
