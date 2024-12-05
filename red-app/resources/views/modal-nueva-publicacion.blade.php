<!-- Modal start -->
<div class="modal fade" id="modalAddPublicacion{{ $u->id }}"
     tabindex="-1" aria-labelledby="addUserLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="text-center">Registrar publicacion</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="p-3" action="{{ route('nuevaPublicacion') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{ $u->id }}">
                    <div class="row">
                        <label for="titulo" class="form-label">Titulo</label>
                        <input type="text" id="titulo" class="form-control" name="titulo"
                               required>
                        <label for="descripcion" class="form-label">Descripción</label>
                        <input type="text" id="descripcion" class="form-control" name="descripcion"
                               required>
                        <label for="file" class="form-label">Seleccionar imagen</label>
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
