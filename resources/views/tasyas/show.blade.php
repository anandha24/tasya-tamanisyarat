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
  <title>Biodata {{$tasyas->nama_user}}</title>
</head>
<body>

<div class="container mt-3">
  <div class="row">
    <div class="col-12">

    <div class="pt-3">
    <h1 class="h2 mr-auto">Biodata {{$tasyas->nama_user}}</h1>
    <div class="pt-3 d-flex justify-content-end align-items-center">
    <!-- <a href="{{ route('tasyas.edit', ['tasya' => $tasyas->id]) }}" class="btn btn-primary">Edit</a> -->
      <!-- <form action="{{ route('tasyas.destroy', ['tasya' => $tasyas ->id]) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Hapus</button>
      </form> -->
    </div>

    <ul>
      <li>Email: {{$tasyas->email_user}} </li>
      <li>Nama: {{$tasyas->nama_user}} </li>
      <li>Password: {{$tasyas->pass_user}} </li>
    </ul>

    </div>
  </div>
</div>

</body>
</html>
