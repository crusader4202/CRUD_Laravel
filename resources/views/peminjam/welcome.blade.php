<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
        <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    </head>
    <body class="antialiased">
        <div class="container">
            <form action="{{route('peminjam.add')}}" method="POST">
            @csrf
                <div class="mb-3">
                  <label class="form-label">Peminjam Name</label>
                  <input name="name" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">NIM</label>
                    <input name="NIM" class="form-control">
                  </div>
                <div class="mb-3">
                    <label class="form-label">Employee Name</label>
                    <input name="employee" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
              <a href="{{route('table')}}"><button class="btn btn-primary">Table</button></a>
        </div>
    </body>
</html>