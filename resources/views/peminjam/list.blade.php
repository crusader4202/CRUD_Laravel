<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List Smartphone</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
    <a href="{{route('home')}}"><button class="btn btn-primary">Home</button></a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">NIM</th>
            <th scope="col">Employee</th>
          </tr>
        </thead>
        <tbody>
            @foreach($peminjams as $Book)
                <tr>
                    <th scope="row">{{$Book->id}}</th>
                    <td>{{$Book->name}}</td>
                    <td>{{$Book->NIM}}</td>
                    <td>{{$Book->employee}}</td>              
                </tr>
            @endforeach
        </tbody>
      </table>
</body>
</html>