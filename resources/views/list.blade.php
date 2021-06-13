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
            <th scope="col">Author</th>
            <th scope="col">Year</th>
            <th scope="col">Buttons</th>
          </tr>
        </thead>
        <tbody>
            @foreach($books as $Book)
                <tr>
                    <th scope="row">{{$Book->id}}</th>
                    <td>{{$Book->name}}</td>
                    <td>{{$Book->author}}</td>
                    <td>{{$Book->year}}</td>   
                    <td>
                        <a href="{{route('modify', $Book->id)}}" class="btn btn-success">edit</a>
                        <form action="{{route('erase', $Book->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>                
                </tr>
            @endforeach
        </tbody>
      </table>
</body>
</html>