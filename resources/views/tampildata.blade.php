<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center mb-4">Edit Data Flower</h1>
   <div class="container">

    <div class="row justify-content-center">
      <div class="col-8">
        <div class="card-body">
            <form action="/updatedata/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Nama</label>
                  <input type="text" name="nama" class="form-control" id="exampleInputEmail1"aria-describedby="emailHelp" value="{{ $data->nama }}">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Jenis Tanaman</label>
                    <select class="form-select" name="jenistanaman" aria-label="Default select example">
                        <option selected>{{ $data->jenistanaman }}</option>
                        <option value="indoor">Indoor</option>
                        <option value="outdoor">Outdoor</option>
                      </select>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Warna</label>
                    <input type="text" name="warna" class="form-control" id="exampleInputEmail1"aria-describedby="emailHelp" value="{{ $data->warna }}">
                  </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>

      </div>

    </div>
   </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
