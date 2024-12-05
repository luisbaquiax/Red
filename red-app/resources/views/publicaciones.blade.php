<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <script src="https://kit.fontawesome.com/6d0db64a1f.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container">
    @include('navegacion')
    @foreach($publicaciones as $p)
        <div class="card p-2 mb-2" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="img/{{ $p->img }}" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{ $p->titulo }}</h5>
                        <p class="card-text">{{ $p->descripcion }}</p>
                    </div>
                    <div class="card-footer">
                        <a class="btn btn-primary w-auto mx-1 mb-2">Comentar</a>

                        <a class="btn btn-warning w-auto mx-1 mb-2" data-bs-toggle="modal"
                           data-bs-target="#modalEditPublicacion{{ $p->id }}" >
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>

                        <!-- Modal -->
                        <div class="modal fade" id="modalEditPublicacion{{ $p->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
                             aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Editar publicación</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form class="p-3" action="{{ route('editarPublicacion') }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" value="{{ $p->id }}" name="id">
                                            <div class="row">
                                                <label for="titulo" class="form-label">Titulo</label>
                                                <input type="text" id="titulo" class="form-control" name="titulo"
                                                       required value="{{ $p->titulo }}">
                                                <label for="descripcion" class="form-label">Descripción</label>
                                                <input type="text" id="descripcion" class="form-control" name="descripcion"
                                                       required value="{{ $p->descripcion }}">
                                                <label for="file" class="form-label">Seleccionar imagen</label>
                                                <input type="text" id="descripcion" class="form-control mb-2"
                                                       required value="{{ $p->img }}">
                                                <input class="form-control" type="file" id="file" name="file" required>
                                            </div>
                                            <button type="submit" class="btn btn-dark w-100 mt-3">
                                                Guardar cambios
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal end -->


                        <a class="btn btn-danger w-auto mx-1 mb-2"
                           href="{{ route('eliminarPublicacion', ['id'=>$p->id]) }}"><i
                                class="fa-solid fa-trash-can"></i></a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
</body>
</html>
