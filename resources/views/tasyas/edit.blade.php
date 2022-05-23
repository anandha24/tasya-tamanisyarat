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
  <title>Edit Biodata</title>
</head>
<body>

<div class="container pt-4 bg-white">
  <div class="row">
    <div class="col-md-8 col-xl-6">
      <h1>Edit Biodata</h1>
      <hr>

      <form action="{{ route('tasyas.update',
      ['tasya' => $tasyas->id]) }}" method="POST">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label for="email_user">Email</label>
          <input type="text"
          class="form-control @error('email_user') is-invalid @enderror"
          id="email_user" name="email_user" value="{{ old('email_user') ?? $tasyas->email_user }}">
          @error('email_user')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>

        <div class="form-group">
          <label for="pass_user">Nama Lengkap</label>
          <input type="text"
          class="form-control @error('pass_user') is-invalid @enderror"
          id="pass_user" name="nama_user" value="{{ old('nama_user') ?? $tasyas->nama_user }}">
          @error('nama_user')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>

        <div class="form-group">
            <label for="pass_user">Password</label>
            <input type="text"
            class="form-control @error('pass_user') is-invalid @enderror"
            id="pass_user" name="pass_user" value="{{ old('pass_user') ?? $tasyas->pass_user }}">
            @error('pass_user')
              <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>

          <br>
        <button type="submit" class="btn btn-primary mb-2">Update</button>
      </form>

    </div>
  </div>
</div>

</body>
</html>
