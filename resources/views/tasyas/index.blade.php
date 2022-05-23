<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="/css/bootstrap.min.css" rel="stylesheet">
  <title>Data Pengguna</title>
</head>
<body>

<div class="container mt-3">
  <div class="row">
    <div class="col-12">

    <div class="py-4">
      <h2>Tabel Pengguna</h2>
    </div>

    <table class="table table-striped">
      <thead>
        <tr>
          <th>#</th>
          <th>Email</th>
          <th>Nama</th>
          <th>Password</th>
          <th>Create_At</th>
          <th>Updated_At</th>
        </tr>
      </thead>
      <tbody>
        @forelse ($tasyas as $tasya)
        <tr>
          <th>{{$loop->iteration}}</th>
          <td>{{$tasya->email_user}}</td>
          <td><a href="{{url('/tasyas/'.$tasya->id)}}">{{$tasya->nama_user}}</a></td>
          <td>{{$tasya->pass_user}}</td>
          <td>{{$tasya->created_at}}</td>
          <td>{{$tasya->updated_at}}</td>
        </tr>
        @empty
          <td colspan="6" class="text-center">Tidak ada data...</td>
        @endforelse
      </tbody>
    </table>
    </div>
  </div>
</div>

</body>
</html>
