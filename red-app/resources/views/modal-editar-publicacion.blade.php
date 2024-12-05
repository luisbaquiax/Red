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
