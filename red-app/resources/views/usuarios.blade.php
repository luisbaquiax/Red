<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Usuarios</title>
    <script src="https://kit.fontawesome.com/6d0db64a1f.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container">
    @include('navegacion')
    <a class="btn btn-dark mx-1 mb-2" data-bs-toggle="modal" data-bs-target="#addUserModal">Agregar
        usuario</a>
    @include('modal-nuevo-usuario')

    <div class="card p-3" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
        <h2 class="text-center">Usuarios</h2>
        <hr>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Nombres</th>
                <th scope="col">Apellidos</th>
                <th scope="col">Correo</th>
                <th scope="col">Telefono</th>
                <th scope="col">Acciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach($usuarios as $u)
                <tr>
                    <th>{{ $u->nombre1 }} {{ $u->nombre2 }}</th>
                    <th>{{ $u->apellido1 }} {{ $u->apellido2 }}</th>
                    <th>{{ $u->correo }}</th>
                    <th>{{ $u->telefono }}</th>
                    <th>
                        <a class="btn btn-info" data-bs-toggle="modal" data-bs-target="#modalAddPublicacion{{ $u->id }}">
                            Agregar publicación
                        </a>
                        @include('modal-nueva-publicacion')

                        <a class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalEditUser{{ $u->id }}">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                        @include('modal-editar-usuario')
                        <a class="btn btn-danger" href="{{ route('user.delete', ['id' => $u->id]) }}"><i
                                class="fa-solid fa-trash-can"></i></a>
                    </th>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
</body>
</html>
