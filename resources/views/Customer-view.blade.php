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
      <div class="container">
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
                        @endif

                    </td>
                    <td>{{$as->address}}</td>
                    <td>{{$as->state}}</td>
                    <td>{{$as->country}}</td>
                    <td>{{$as->dob}}</td>
                    <td>
                       @if ($as->status=="1")
                       Active
                       @else
                       Not Active
                       @endif
                    </td>
                    <td>{{$as->points}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
      </div>
  </body>
</html>