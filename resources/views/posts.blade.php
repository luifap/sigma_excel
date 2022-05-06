<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>SIGMA EXCEL</title>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h5 class="mt-3">Listado de Posts</h5>
            </div>
            <div class="col">
                <a href=" {{ url('posts/export-excel') }} " class="btn btn-sm btn-primary float-right mt-3">Exportar a Excel</a>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <form action=" {{ url('posts/importar') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="clo-md-6">
                        <input type="file" name="documento">
                    </div>
                    <div class="clo-md-6">
                        <button class="btn primary" type="submit">Importar</button>
                    </div>
                </form>
                {{-- <table class="table table-bordered table-hover mt-3">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Titulo</th>
                        <th scope="col">Contenido del Post</th>
                        <th scope="col">Creado por</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($posts as $post)
                      <tr>
                        <th scope="row">{{ $post->id }}</th>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->detail}}</td>
                        <td>{{ $post->user->name }}</td>
                      </tr>
                      @endforeach
                    </tbody>
                </table> --}}
            </div>
        </div>
        <div class="col-md-2">
            <button class="btn btn-success">Exportar</button>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
