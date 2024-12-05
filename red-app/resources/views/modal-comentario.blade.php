<a class="btn btn-primary w-auto mx-1 mb-2" data-bs-toggle="modal"
   data-bs-target="#modalComentario{{ $p->id }}" >
    Comentar
</a>
<!-- Modal -->
<div class="modal fade" id="modalComentario{{ $p->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="p-3" action="{{ route('editarPublicacion') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{ $p->id }}" name="id">
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        <label for="floatingTextarea">Comments</label>
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

