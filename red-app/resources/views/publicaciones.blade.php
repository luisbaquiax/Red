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
                        @include('modal-editar-publicacion')
                        <a class="btn btn-danger w-auto mx-1 mb-2"
                           href="{{ route('eliminarPublicacion', ['id'=>$p->id]) }}"><i
                                class="fa-solid fa-trash-can"></i></a>
                        @include('comentarios')
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
