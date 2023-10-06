<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Laravel Crud Opertion</title>
  </head>
  <body>

  <form action="upload" method="POST" enctype="multipart/form-data">
    @csrf
  <div class="mb-3">
    <label class="form-label">Name</label>
    <input type="text" class="form-control"  aria-describedby="emailHelp" name="name" autocomplete="off">
  </div>
  <div class="mb-3">
    <label class="form-label">City</label>
    <input type="text" class="form-control"  aria-describedby="emailHelp" name="city" autocomplete="off">
  </div>
  <div class="mb-3">
    <label class="form-label">File Upload:</label>
    <input type="file" class="form-control"  aria-describedby="emailHelp" name="file" autocomplete="off">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>





